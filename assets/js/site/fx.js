/*!
 * Soft Engine Ltd. - motion: preloader, hero "engine" canvas, scroll choreography.
 * Needs GSAP + ScrollTrigger (SplitText optional). If they fail to load, the page
 * simply shows everything statically - no content is ever hidden by CSS alone.
 */
(function () {
  'use strict';

  var win = window;
  var doc = document;
  var root = doc.documentElement;
  var gsap = win.gsap;
  var ScrollTrigger = win.ScrollTrigger;
  var SplitText = win.SplitText;
  var reduced = root.classList.contains('reduced');
  var preloader = doc.querySelector('.preloader');

  function hidePreloader() { if (preloader) preloader.style.display = 'none'; }

  if (!gsap || !ScrollTrigger) { hidePreloader(); return; }
  gsap.registerPlugin(ScrollTrigger);
  if (SplitText) gsap.registerPlugin(SplitText);
  if (win.Flip) gsap.registerPlugin(win.Flip);

  /* =====================================================================
     Hero canvas - a breathing sphere of brand-coloured particles with
     orbit rings, drawn for the light hero. The "S" mark sits at its centre.
     ===================================================================== */
  function createEngine() {
    var canvas = doc.querySelector('.hero__canvas');
    var ctx = canvas && canvas.getContext && canvas.getContext('2d');
    if (!ctx) return null;

    var DPR = Math.min(win.devicePixelRatio || 1, 1.75);
    var small = win.matchMedia('(max-width: 767px)').matches;
    var N = small ? 420 : 860;
    var LEVELS = 6;
    // brand blue, sky, green, orange
    var COLORS = ['0,112,192', '16,141,196', '82,175,71', '227,108,10'];

    var px = new Float32Array(N), py = new Float32Array(N), pz = new Float32Array(N);
    var pr = new Float32Array(N), ph = new Float32Array(N), pc = new Uint8Array(N);
    var golden = Math.PI * (3 - Math.sqrt(5));
    for (var i = 0; i < N; i++) {
      var y = 1 - (i / (N - 1)) * 2;
      var r = Math.sqrt(1 - y * y);
      var th = golden * i;
      px[i] = Math.cos(th) * r;
      py[i] = y;
      pz[i] = Math.sin(th) * r;
      pr[i] = Math.random();
      ph[i] = Math.random() * Math.PI * 2;
      var c = Math.random();
      pc[i] = c < 0.45 ? 0 : (c < 0.75 ? 1 : (c < 0.93 ? 2 : 3));
    }

    var rings = [
      { k: 1.45, ax: 1.15, az: 0.35, speed: 0.35, sats: 2, color: '227,108,10' },
      { k: 1.74, ax: 1.35, az: -0.55, speed: -0.22, sats: 1, color: '16,141,196' },
      { k: 1.24, ax: 0.35, az: 0.95, speed: 0.5, sats: 1, color: '82,175,71' }
    ];

    var bx = [], by = [], bs = [], bn = [];
    for (var b = 0; b < COLORS.length * LEVELS; b++) {
      bx.push(new Float32Array(N));
      by.push(new Float32Array(N));
      bs.push(new Float32Array(N));
      bn.push(0);
    }

    var W = 0, H = 0, cx = 0, cy = 0, R = 0, alphaScale = 1;
    var st = { intro: 0, scatter: 0, mx: 0, my: 0, tx: 0, ty: 0 };
    var sY = 0, cY = 1, sX = 0, cX = 1, Rr = 0;
    var oX = 0, oY = 0, oZ = 0, oP = 1;
    var running = false;
    var visible = true;
    var t0 = performance.now();

    function resize() {
      var rect = canvas.getBoundingClientRect();
      W = rect.width;
      H = rect.height;
      canvas.width = Math.max(1, Math.round(W * DPR));
      canvas.height = Math.max(1, Math.round(H * DPR));
      ctx.setTransform(DPR, 0, 0, DPR, 0, 0);
      var wide = W >= 992;
      cx = wide ? W * 0.765 : W * 0.5;
      cy = wide ? H * 0.5 : H * 0.3;
      R = wide ? Math.min(W * 0.185, H * 0.3) : Math.min(W * 0.4, H * 0.22);
      alphaScale = wide ? 1 : 0.45;
    }

    function proj(x, y, z) {
      var x1 = x * cY + z * sY;
      var z1 = -x * sY + z * cY;
      var y1 = y * cX - z1 * sX;
      var z2 = y * sX + z1 * cX;
      // scattered particles can pass the camera; those collapse to nothing instead of inverting
      var d = 2.6 + z2;
      var p = d > 0.45 ? 2.6 / d : 0;
      oX = cx + x1 * Rr * p;
      oY = cy + y1 * Rr * p;
      oZ = z2;
      oP = p;
    }

    function ringPoint(rg, a) {
      var x0 = Math.cos(a) * rg.k, z0 = Math.sin(a) * rg.k;
      var sa = Math.sin(rg.ax), ca = Math.cos(rg.ax), sz = Math.sin(rg.az), cz = Math.cos(rg.az);
      var y1 = -z0 * sa, z1 = z0 * ca;
      proj(x0 * cz - y1 * sz, x0 * sz + y1 * cz, z1);
    }

    function draw(now) {
      var t = (now - t0) / 1000;
      st.tx += (st.mx - st.tx) * 0.04;
      st.ty += (st.my - st.ty) * 0.04;
      var ry = t * 0.1 + st.tx * 0.8;
      var rx = -0.3 + st.ty * 0.5;
      sY = Math.sin(ry); cY = Math.cos(ry); sX = Math.sin(rx); cX = Math.cos(rx);

      var sc = st.scatter;
      var fade = st.intro * (1 - sc * 0.9) * alphaScale;
      Rr = R * (0.55 + 0.45 * st.intro) * (1 + sc * 0.6);

      ctx.clearRect(0, 0, W, H);
      if (fade <= 0.002) return;

      var glow = ctx.createRadialGradient(cx, cy, 0, cx, cy, Rr * 1.6);
      glow.addColorStop(0, 'rgba(16,141,196,' + (0.16 * fade).toFixed(3) + ')');
      glow.addColorStop(0.5, 'rgba(109,191,89,' + (0.05 * fade).toFixed(3) + ')');
      glow.addColorStop(1, 'rgba(244,247,252,0)');
      ctx.fillStyle = glow;
      ctx.fillRect(cx - Rr * 1.6, cy - Rr * 1.6, Rr * 3.2, Rr * 3.2);

      // orbit rings + satellites
      ctx.lineWidth = 1.2;
      for (var k = 0; k < rings.length; k++) {
        var rg = rings[k];
        ctx.beginPath();
        for (var s = 0; s <= 96; s++) {
          ringPoint(rg, (s / 96) * Math.PI * 2);
          if (s === 0) ctx.moveTo(oX, oY); else ctx.lineTo(oX, oY);
        }
        ctx.strokeStyle = 'rgba(' + rg.color + ',' + (0.3 * fade).toFixed(3) + ')';
        ctx.stroke();
        for (var j = 0; j < rg.sats; j++) {
          ringPoint(rg, t * rg.speed + j * Math.PI);
          var sr = 3.2 * oP;
          ctx.fillStyle = 'rgba(' + rg.color + ',' + (0.16 * fade).toFixed(3) + ')';
          ctx.beginPath();
          ctx.arc(oX, oY, sr * 3.4, 0, 6.2832);
          ctx.fill();
          ctx.fillStyle = 'rgba(' + rg.color + ',' + (0.95 * fade).toFixed(3) + ')';
          ctx.beginPath();
          ctx.arc(oX, oY, sr, 0, 6.2832);
          ctx.fill();
        }
      }

      // particles into colour/depth buckets
      for (var q = 0; q < bn.length; q++) bn[q] = 0;
      var bt = t * 1.3;
      for (var n = 0; n < N; n++) {
        var br = 1 + Math.sin(bt + ph[n]) * 0.035 + sc * (0.4 + pr[n] * 2.2);
        proj(px[n] * br, py[n] * br, pz[n] * br);
        var front = (1 - oZ) * 0.5;
        if (front < 0) front = 0; else if (front > 1) front = 1;
        var lvl = Math.min(LEVELS - 1, (front * LEVELS) | 0);
        var bi = pc[n] * LEVELS + lvl;
        var idx = bn[bi]++;
        bx[bi][idx] = oX;
        by[bi][idx] = oY;
        bs[bi][idx] = (0.7 + front * 1.7) * oP * (pc[n] === 3 ? 1.3 : 1);
      }
      for (var cc = 0; cc < COLORS.length; cc++) {
        for (var l = 0; l < LEVELS; l++) {
          var bj = cc * LEVELS + l, cnt = bn[bj];
          if (!cnt) continue;
          var alpha = (0.14 + (l / (LEVELS - 1)) * 0.76) * fade;
          ctx.fillStyle = 'rgba(' + COLORS[cc] + ',' + alpha.toFixed(3) + ')';
          ctx.beginPath();
          var X = bx[bj], Y = by[bj], S = bs[bj];
          for (var m = 0; m < cnt; m++) {
            ctx.moveTo(X[m] + S[m], Y[m]);
            ctx.arc(X[m], Y[m], S[m], 0, 6.2832);
          }
          ctx.fill();
        }
      }
    }

    function loop(now) {
      requestAnimationFrame(loop);
      if (visible && !doc.hidden) draw(now);
    }

    if ('IntersectionObserver' in win) {
      new IntersectionObserver(function (entries) { visible = entries[0].isIntersecting; }).observe(canvas);
    }
    win.addEventListener('resize', function () { resize(); if (!running) draw(t0 + 4000); });
    win.addEventListener('pointermove', function (e) {
      st.mx = e.clientX / win.innerWidth - 0.5;
      st.my = e.clientY / win.innerHeight - 0.5;
    }, { passive: true });

    resize();

    return {
      start: function () {
        if (running) return;
        running = true;
        resize();
        gsap.to(st, { intro: 1, duration: 2.6, ease: 'expo.out' });
        requestAnimationFrame(loop);
      },
      still: function () { st.intro = 1; draw(t0 + 4000); },
      setScatter: function (v) { st.scatter = v; },
      pointer: st
    };
  }

  var engine = createEngine();

  if (reduced) {
    hidePreloader();
    if (engine) engine.still();
    return;
  }

  var heroMark = doc.querySelector('.hero__mark');
  if (heroMark) gsap.set(heroMark, { xPercent: -50, yPercent: -50, x: 0, y: 0 });

  /* =====================================================================
     Intro: preloader out, hero in
     ===================================================================== */
  function playIntro() {
    var cs = preloader ? win.getComputedStyle(preloader) : null;
    var shown = !!(cs && cs.display !== 'none' && cs.visibility !== 'hidden');
    var tl = gsap.timeline({ defaults: { ease: 'expo.out' } });

    if (shown) {
      tl.to('.preloader__bar i', { scaleX: 1, duration: 0.8, ease: 'power2.inOut' })
        .to('.preloader__inner', { y: -24, opacity: 0, duration: 0.45, ease: 'power2.in' })
        .fromTo(preloader,
          { clipPath: 'inset(0% 0% 0% 0%)' },
          { clipPath: 'inset(0% 0% 100% 0%)', duration: 0.9, ease: 'expo.inOut' }, '-=0.1')
        .add(hidePreloader);
    } else {
      hidePreloader();
    }

    if (engine) tl.add(engine.start, shown ? '-=0.95' : 0);

    tl.from('.hero__title .line__inner', { yPercent: 118, rotate: 3, duration: 1.4 }, shown ? '-=0.55' : 0)
      .from('.hero__title .logo-lockup__tag', { opacity: 0, x: 40, duration: 1.2 }, '<0.35')
      .from('.rotator', { y: 22, opacity: 0, duration: 1 }, '<-0.1')
      .from('.hero__desc', { y: 22, opacity: 0, duration: 1 }, '<0.1')
      .from('.hero__cta > *', { y: 22, opacity: 0, duration: 1, stagger: 0.08 }, '<0.1')
      .from('.hero__scroll', { opacity: 0, duration: 1.2 }, '<0.2')
      .from('.navbar__inner .brand, .navbar__end > *', { y: -18, opacity: 0, duration: 1, stagger: 0.07, clearProps: 'transform' }, '<-0.8');
    if (heroMark) tl.from(heroMark, { scale: 0.3, rotate: -40, opacity: 0, duration: 1.6 }, shown ? '-=1.6' : 0.2);
  }

  /* =====================================================================
     Scroll choreography
     ===================================================================== */
  function setupScroll() {
    // hero drifts up; the engine scatters and the "S" recedes as you leave it
    gsap.to('.hero__content', {
      yPercent: -16,
      opacity: 0.15,
      ease: 'none',
      scrollTrigger: { trigger: '.hero', start: 'top top', end: 'bottom top', scrub: true }
    });
    if (engine) {
      ScrollTrigger.create({
        trigger: '.hero',
        start: 'top top',
        end: 'bottom top',
        scrub: true,
        onUpdate: function (self) { engine.setScatter(self.progress); }
      });
    }
    if (heroMark) {
      // explicit start values: the intro tween is still hiding the mark when this is created,
      // and scrubbing back to the top must restore the visible state, not that hidden one
      gsap.fromTo(heroMark, { scale: 1, rotate: 0, opacity: 1 }, {
        scale: 0.55,
        rotate: 25,
        opacity: 0,
        ease: 'none',
        immediateRender: false,
        scrollTrigger: { trigger: '.hero', start: 'top top', end: 'bottom top', scrub: true }
      });
      var hx = gsap.quickTo(heroMark, 'x', { duration: 1, ease: 'power3' });
      var hy = gsap.quickTo(heroMark, 'y', { duration: 1, ease: 'power3' });
      win.addEventListener('pointermove', function (e) {
        hx((e.clientX / win.innerWidth - 0.5) * 24);
        hy((e.clientY / win.innerHeight - 0.5) * 24);
      }, { passive: true });
    }

    // section titles rise out of a mask - works for whichever language is showing
    gsap.utils.toArray('[data-split]').forEach(function (el) {
      var mask = doc.createElement('span');
      mask.className = 'mask';
      var inner = doc.createElement('span');
      inner.className = 'mask__inner';
      while (el.firstChild) inner.appendChild(el.firstChild);
      mask.appendChild(inner);
      el.appendChild(mask);
      gsap.from(inner, {
        yPercent: 110,
        duration: 1.15,
        ease: 'expo.out',
        scrollTrigger: { trigger: el, start: 'top 88%', once: true }
      });
    });

    // the products paragraph brightens word by word as you read down (each language)
    var scrub = doc.querySelector('[data-scrub]');
    if (scrub && SplitText) {
      gsap.utils.toArray(scrub.querySelectorAll('[data-l]')).forEach(function (group) {
        var split = SplitText.create(group.querySelectorAll('p'), { type: 'words' });
        gsap.fromTo(split.words, { opacity: 0.18 }, {
          opacity: 1,
          stagger: 0.05,
          ease: 'none',
          scrollTrigger: { trigger: scrub, start: 'top 82%', end: 'bottom 55%', scrub: true }
        });
      });
    }

    // everything else fades up in small batches as it enters
    gsap.set('[data-reveal]', { y: 48, opacity: 0 });
    ScrollTrigger.batch('[data-reveal]', {
      start: 'top 90%',
      once: true,
      onEnter: function (els) {
        gsap.to(els, { y: 0, opacity: 1, duration: 1.1, ease: 'expo.out', stagger: 0.09, overwrite: true });
      }
    });

    // the about rings turn slowly with the page
    gsap.to('.engine-art', {
      rotate: 24,
      y: -50,
      ease: 'none',
      scrollTrigger: { trigger: '.about', start: 'top bottom', end: 'bottom top', scrub: true }
    });

    // footer wordmark fills in the brand blue as you reach the end
    var fill = doc.querySelector('.footer__fill');
    if (fill) {
      gsap.fromTo(fill, { clipPath: 'inset(0% 100% 0% 0%)' }, {
        clipPath: 'inset(0% 0% 0% 0%)',
        ease: 'none',
        scrollTrigger: { trigger: '.site-footer', start: 'top 92%', end: 'bottom bottom', scrub: true }
      });
    }
  }

  /* start once fonts are ready (so text measures right), but never wait long */
  var started = false;
  function go() {
    if (started) return;
    started = true;
    playIntro();
    setupScroll();
  }
  if (doc.fonts && doc.fonts.ready) {
    doc.fonts.ready.then(go);
    setTimeout(go, 1500);
  } else {
    go();
  }
  win.addEventListener('load', function () { ScrollTrigger.refresh(); });
})();
