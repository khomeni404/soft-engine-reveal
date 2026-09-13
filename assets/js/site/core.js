/*!
 * Soft Engine Ltd. - core interactions + Bangla/English switch.
 * Everything degrades gracefully: without GSAP/Lenis the page still scrolls,
 * dialogs open, filters and the lightbox work - only the motion goes away.
 */
(function () {
  'use strict';

  var doc = document;
  var root = doc.documentElement;
  var win = window;
  var gsap = win.gsap;
  var reduced = root.classList.contains('reduced');
  var finePointer = !!(win.matchMedia && win.matchMedia('(hover: hover) and (pointer: fine)').matches);
  var SE = (win.SE = win.SE || {});

  var header = doc.querySelector('.site-header');
  var navbar = header && header.querySelector('.navbar');

  function $(sel, ctx) { return (ctx || doc).querySelector(sel); }
  function $$(sel, ctx) { return Array.prototype.slice.call((ctx || doc).querySelectorAll(sel)); }

  /* ---------- language ---------- */
  var I18N = {
    en: { attention: 'Attention !!', outOfStock: 'Sorry, this product is currently out of stock.', close: 'Close', ok: 'OK' },
    bn: { attention: 'মনোযোগ দিন !!', outOfStock: 'দুঃখিত, এই পণ্যটি বর্তমানে স্টকে নেই।', close: 'বন্ধ করুন', ok: 'ঠিক আছে' }
  };
  var I18N_ATTRS = ['aria-label', 'placeholder', 'title', 'alt'];

  function lang() { return root.getAttribute('data-lang') === 'en' ? 'en' : 'bn'; }
  function tr(key) { return I18N[lang()][key]; }
  SE.lang = lang;

  function applyAttrs(l) {
    I18N_ATTRS.forEach(function (a) {
      $$('[data-' + l + '-' + a + ']').forEach(function (el) { el.setAttribute(a, el.getAttribute('data-' + l + '-' + a)); });
    });
  }

  function setLang(l, initial) {
    root.setAttribute('data-lang', l);
    root.setAttribute('lang', l);
    try { localStorage.setItem('se-lang', l); } catch (e) {}
    $$('[data-set-lang]').forEach(function (b) {
      b.setAttribute('aria-pressed', b.getAttribute('data-set-lang') === l ? 'true' : 'false');
    });
    applyAttrs(l);
    if (initial) return;
    restartRotator();
    relayout();
    if (win.ScrollTrigger) win.ScrollTrigger.refresh();
    if (gsap && !reduced) gsap.fromTo('main, .site-footer', { opacity: 0.35 }, { opacity: 1, duration: 0.5, ease: 'power2.out', clearProps: 'opacity' });
    doc.dispatchEvent(new CustomEvent('se:lang', { detail: l }));
  }
  SE.setLang = setLang;

  doc.addEventListener('click', function (e) {
    var b = e.target.closest && e.target.closest('[data-set-lang]');
    if (b) setLang(b.getAttribute('data-set-lang'));
  });

  /* ---------- smooth scrolling ---------- */
  var lenis = null;
  if (!reduced && typeof win.Lenis === 'function') {
    lenis = new win.Lenis({ lerp: 0.1, smoothWheel: true });
    if (gsap && win.ScrollTrigger) {
      lenis.on('scroll', win.ScrollTrigger.update);
      gsap.ticker.add(function (t) { lenis.raf(t * 1000); });
      gsap.ticker.lagSmoothing(0);
    } else {
      var raf = function (t) { lenis.raf(t); requestAnimationFrame(raf); };
      requestAnimationFrame(raf);
    }
  }
  SE.lenis = lenis;

  function scrollToTarget(target, immediate) {
    var offset = -((navbar ? navbar.offsetHeight : 0) - 1);
    if (lenis) {
      lenis.scrollTo(target, { offset: target === 0 ? 0 : offset, immediate: !!immediate, duration: 1.4 });
      return;
    }
    var y = target === 0 ? 0 : target.getBoundingClientRect().top + win.pageYOffset + offset;
    win.scrollTo({ top: y, behavior: immediate || reduced ? 'auto' : 'smooth' });
  }
  SE.scrollTo = scrollToTarget;

  doc.addEventListener('click', function (e) {
    var a = e.target.closest && e.target.closest('a[href^="#"]');
    if (!a || a.hasAttribute('data-dialog')) return;
    var hash = a.getAttribute('href');
    if (hash.length < 2) return;
    var el = doc.getElementById(hash.slice(1));
    if (!el) return;
    e.preventDefault();
    closeMenu();
    scrollToTarget(el.id === 'home' ? 0 : el);
  });

  win.addEventListener('load', function () {
    if (!win.location.hash || win.location.hash.length < 2) return;
    var el = doc.getElementById(win.location.hash.slice(1));
    if (el) setTimeout(function () { scrollToTarget(el, true); }, 60);
  });

  /* ---------- header, progress, back-to-top, active section ---------- */
  var progress = $('.progress');
  var toTop = $('.to-top');
  var ring = toTop && toTop.querySelector('circle');
  var navLinks = $$('.nav__link');
  var indicator = $('.nav__indicator');
  var sections = navLinks.map(function (a) { return doc.getElementById(a.getAttribute('href').slice(1)); });
  var lastY = win.pageYOffset;
  var activeId = null;

  function moveIndicator() {
    if (!indicator) return;
    var link = navLinks.filter(function (a) { return a.classList.contains('is-active'); })[0];
    if (!link) { indicator.style.opacity = '0'; return; }
    indicator.style.width = link.offsetWidth + 'px';
    indicator.style.transform = 'translateX(' + link.offsetLeft + 'px)';
    indicator.style.opacity = '1';
  }

  function setActive(id) {
    if (id === activeId) return;
    activeId = id;
    navLinks.forEach(function (a) {
      var on = a.getAttribute('href') === '#' + id;
      a.classList.toggle('is-active', on);
      if (on) a.setAttribute('aria-current', 'true'); else a.removeAttribute('aria-current');
    });
    moveIndicator();
  }

  function onScroll() {
    var y = win.pageYOffset;
    var max = Math.max(1, root.scrollHeight - win.innerHeight);
    var p = Math.min(1, Math.max(0, y / max));

    if (progress) progress.style.transform = 'scaleX(' + p.toFixed(4) + ')';
    if (ring) ring.style.strokeDashoffset = (163.4 * (1 - p)).toFixed(1);
    if (toTop) toTop.classList.toggle('is-visible', y > 600);

    if (header) {
      header.classList.toggle('is-scrolled', y > 30);
      if (Math.abs(y - lastY) > 4) {
        var hide = y > lastY && y > win.innerHeight * 0.85 && !root.classList.contains('menu-open');
        header.classList.toggle('is-hidden', hide);
        lastY = y;
      }
    }

    var line = win.innerHeight * 0.35;
    var current = sections[0] ? sections[0].id : null;
    sections.forEach(function (s) {
      if (s && s.getBoundingClientRect().top <= line) current = s.id;
    });
    setActive(current);
  }

  var ticking = false;
  win.addEventListener('scroll', function () {
    if (ticking) return;
    ticking = true;
    requestAnimationFrame(function () { ticking = false; onScroll(); });
  }, { passive: true });

  /* ---------- mobile menu ---------- */
  var toggle = $('.nav-toggle');
  var menu = $('#mobile-menu');

  function openMenu() {
    root.classList.add('menu-open');
    if (toggle) toggle.setAttribute('aria-expanded', 'true');
    if (menu) menu.setAttribute('aria-hidden', 'false');
    if (header) header.classList.remove('is-hidden');
    doc.body.style.overflow = 'hidden';
    if (lenis) lenis.stop();
  }
  function closeMenu() {
    if (!root.classList.contains('menu-open')) return;
    root.classList.remove('menu-open');
    if (toggle) toggle.setAttribute('aria-expanded', 'false');
    if (menu) menu.setAttribute('aria-hidden', 'true');
    doc.body.style.overflow = '';
    if (lenis) lenis.start();
  }
  if (toggle) {
    toggle.addEventListener('click', function () {
      if (root.classList.contains('menu-open')) closeMenu(); else openMenu();
    });
  }
  doc.addEventListener('keydown', function (e) { if (e.key === 'Escape') closeMenu(); });
  win.addEventListener('resize', function () { if (win.innerWidth > 1060) closeMenu(); });

  /* ---------- dialogs ---------- */
  function openDialog(d) {
    if (!d || d.open) return;
    if (typeof d.showModal === 'function') d.showModal(); else d.setAttribute('open', '');
    if (lenis) lenis.stop();
  }
  function closeDialog(d) {
    if (!d) return;
    if (typeof d.close === 'function') { if (d.open) d.close(); }
    else { d.removeAttribute('open'); d.dispatchEvent(new Event('close')); }
  }
  SE.openDialog = openDialog;

  $$('dialog').forEach(function (d) {
    d.addEventListener('close', function () {
      if (!doc.querySelector('dialog[open]') && lenis && !root.classList.contains('menu-open')) lenis.start();
    });
    d.addEventListener('click', function (e) {
      // a click on the backdrop lands on the <dialog> itself
      if (e.target === d || e.target.classList.contains('lightbox__figure')) closeDialog(d);
    });
  });

  doc.addEventListener('click', function (e) {
    var opener = e.target.closest && e.target.closest('[data-dialog]');
    if (opener) {
      e.preventDefault();
      openDialog(doc.getElementById(opener.getAttribute('data-dialog')));
      return;
    }
    var closer = e.target.closest && e.target.closest('[data-close]');
    if (closer) closeDialog(closer.closest('dialog'));
  });

  /* ---------- alerts: out of stock + payment result ---------- */
  SE.alert = function (title, body, okText) {
    var d = $('#alertDialog');
    if (!d) { win.alert(title + (body ? '\n\n' + body : '')); return; }
    $('#alertTitle').textContent = title || '';
    var bodyEl = $('#alertBody');
    bodyEl.textContent = body || '';
    bodyEl.hidden = !body;
    $('#alertOk').textContent = okText || tr('ok');
    openDialog(d);
  };

  doc.addEventListener('click', function (e) {
    if (e.target.closest && e.target.closest('[data-out-of-stock]')) {
      SE.alert(tr('attention'), tr('outOfStock'), tr('close'));
    }
  });

  // P2P.php sends fixed English strings; show them in Bangla when Bangla is active.
  function paymentText(title, content) {
    if (lang() !== 'bn') return [title, content];
    var titles = {
      'Successfully Completed': 'সফলভাবে সম্পন্ন হয়েছে',
      'Failed to Purchase': 'ক্রয় ব্যর্থ হয়েছে',
      'Purchase Cancelled': 'ক্রয় বাতিল করা হয়েছে'
    };
    var m, t = title, c = content || '';
    if ((m = /^(.*?)\. Transaction ID: (.+)$/.exec(t))) t = (titles[m[1]] || m[1]) + '। ট্রানজেকশন আইডি: ' + m[2];
    else if (titles[t]) t = titles[t];
    if ((m = /^Your transaction id is (.+?)\. Please write it down for further reference\.$/.exec(c))) {
      c = 'আপনার ট্রানজেকশন আইডি ' + m[1] + '। পরবর্তী প্রয়োজনে এটি লিখে রাখুন।';
    } else if (c === 'The purchase has failed. Please try again or contact us directly.') {
      c = 'ক্রয়টি সম্পন্ন হয়নি। আবার চেষ্টা করুন অথবা সরাসরি আমাদের সাথে যোগাযোগ করুন।';
    } else if (c === 'The purchase has been cancelled.') {
      c = 'ক্রয়টি বাতিল করা হয়েছে।';
    }
    return [t, c];
  }

  if (win.SE_ALERT && win.SE_ALERT.title) {
    win.addEventListener('load', function () {
      setTimeout(function () {
        var msg = paymentText(win.SE_ALERT.title, win.SE_ALERT.content);
        SE.alert(msg[0], msg[1], tr('ok'));
      }, reduced ? 0 : 1200);
    });
  }

  /* ---------- portfolio: filter + lightbox ---------- */
  var works = $$('.work');
  var filterBtns = $$('.filters__btn');
  var pill = $('.filters__pill');

  function movePill() {
    var btn = filterBtns.filter(function (b) { return b.classList.contains('is-active'); })[0];
    if (!pill || !btn) return;
    pill.style.width = btn.offsetWidth + 'px';
    pill.style.transform = 'translateX(' + btn.offsetLeft + 'px)';
  }

  filterBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var f = btn.getAttribute('data-filter');
      filterBtns.forEach(function (b) {
        var on = b === btn;
        b.classList.toggle('is-active', on);
        b.setAttribute('aria-pressed', on ? 'true' : 'false');
      });
      movePill();

      var Flip = win.Flip;
      var state = Flip && gsap && !reduced ? Flip.getState(works) : null;
      works.forEach(function (w) {
        w.classList.toggle('is-hidden', f !== '*' && w.getAttribute('data-cat') !== f);
      });
      if (state) {
        Flip.from(state, {
          duration: 0.7,
          ease: 'power3.inOut',
          scale: true,
          absolute: true,
          onEnter: function (els) { return gsap.fromTo(els, { opacity: 0, scale: 0.9 }, { opacity: 1, scale: 1, duration: 0.6 }); },
          onLeave: function (els) { return gsap.to(els, { opacity: 0, scale: 0.9, duration: 0.4 }); },
          onComplete: function () { if (win.ScrollTrigger) win.ScrollTrigger.refresh(); }
        });
      } else if (win.ScrollTrigger) {
        win.ScrollTrigger.refresh();
      }
    });
  });

  var lightbox = $('#lightbox');
  var lbImg = $('#lightboxImg');
  var lbCap = $('#lightboxCap');
  var lbIndex = 0;

  function lightboxItems() {
    return works
      .filter(function (w) { return !w.classList.contains('is-hidden'); })
      .map(function (w) { return w.querySelector('[data-lightbox]'); });
  }
  function showLightbox(i) {
    var items = lightboxItems();
    if (!items.length || !lbImg) return;
    lbIndex = (i + items.length) % items.length;
    var b = items[lbIndex];
    lbImg.src = b.getAttribute('data-lightbox');
    lbImg.alt = b.getAttribute('data-title') || '';
    lbCap.textContent = b.getAttribute('data-title') || '';
    var sub = doc.createElement('small');
    sub.textContent = b.getAttribute('data-sub-' + lang()) || '';
    lbCap.appendChild(sub);
    if (gsap && !reduced) gsap.fromTo(lbImg, { opacity: 0, scale: 0.96 }, { opacity: 1, scale: 1, duration: 0.5, ease: 'power3.out' });
  }

  doc.addEventListener('click', function (e) {
    var b = e.target.closest && e.target.closest('[data-lightbox]');
    if (!b || !lightbox) return;
    showLightbox(lightboxItems().indexOf(b));
    openDialog(lightbox);
  });
  if (lightbox) {
    lightbox.querySelector('[data-lb-prev]').addEventListener('click', function () { showLightbox(lbIndex - 1); });
    lightbox.querySelector('[data-lb-next]').addEventListener('click', function () { showLightbox(lbIndex + 1); });
    lightbox.addEventListener('keydown', function (e) {
      if (e.key === 'ArrowLeft') showLightbox(lbIndex - 1);
      if (e.key === 'ArrowRight') showLightbox(lbIndex + 1);
    });
  }

  /* ---------- typewriter: "A free Software Provider." in both languages ---------- */
  var typeEls = $$('[data-type]');
  if (typeEls.length && !reduced && 'IntersectionObserver' in win) {
    var texts = typeEls.map(function (el) {
      var full = el.textContent;
      var sr = doc.createElement('span');
      sr.className = 'sr-only';
      sr.textContent = full;
      if (el.hasAttribute('data-l')) sr.setAttribute('data-l', el.getAttribute('data-l'));
      if (el.hasAttribute('lang')) sr.setAttribute('lang', el.getAttribute('lang'));
      el.parentNode.insertBefore(sr, el);
      el.setAttribute('aria-hidden', 'true');
      el.textContent = '';
      return full;
    });
    var io = new IntersectionObserver(function (entries) {
      if (!entries.some(function (en) { return en.isIntersecting; })) return;
      io.disconnect();
      typeEls.forEach(function (el, k) {
        var full = texts[k];
        var chars = Array.from ? Array.from(full) : full.split('');
        var i = 0;
        (function step() {
          el.textContent = chars.slice(0, ++i).join('');
          if (i < chars.length) setTimeout(step, 45 + Math.random() * 70);
        })();
      });
    }, { threshold: 0.6 });
    io.observe(typeEls[0].parentNode);
  }

  /* ---------- hero product rotator (words of the active language) ---------- */
  var rotTimer = null;
  function restartRotator() {
    if (rotTimer) { clearInterval(rotTimer); rotTimer = null; }
    var all = $$('.rotator__words > span');
    if (all.length < 2 || !gsap || reduced) return;
    var words = $$('.rotator__words > [data-l="' + lang() + '"]');
    var wi = 0;
    gsap.killTweensOf(all);
    gsap.set(all, { yPercent: 110, opacity: 0, filter: 'blur(0px)' });
    gsap.set(words[0], { yPercent: 0, opacity: 1 });
    rotTimer = setInterval(function () {
      if (doc.hidden) return;
      var cur = words[wi];
      wi = (wi + 1) % words.length;
      var next = words[wi];
      gsap.to(cur, { yPercent: -110, opacity: 0, filter: 'blur(6px)', duration: 0.6, ease: 'power3.in' });
      gsap.fromTo(next,
        { yPercent: 110, opacity: 0, filter: 'blur(6px)' },
        { yPercent: 0, opacity: 1, filter: 'blur(0px)', duration: 0.8, ease: 'power3.out', delay: 0.35 });
    }, 2800);
  }

  /* ---------- pointer toys: spotlight, magnetic, tilt, cursor ---------- */
  $$('.spot').forEach(function (el) {
    el.addEventListener('pointermove', function (e) {
      var r = el.getBoundingClientRect();
      el.style.setProperty('--mx', (e.clientX - r.left) + 'px');
      el.style.setProperty('--my', (e.clientY - r.top) + 'px');
    });
  });

  if (finePointer && !reduced && gsap) {
    $$('[data-magnetic]').forEach(function (el) {
      var xTo = gsap.quickTo(el, 'x', { duration: 0.6, ease: 'elastic.out(1, 0.4)' });
      var yTo = gsap.quickTo(el, 'y', { duration: 0.6, ease: 'elastic.out(1, 0.4)' });
      el.addEventListener('pointermove', function (e) {
        var r = el.getBoundingClientRect();
        xTo((e.clientX - r.left - r.width / 2) * 0.3);
        yTo((e.clientY - r.top - r.height / 2) * 0.4);
      });
      el.addEventListener('pointerleave', function () { xTo(0); yTo(0); });
    });

    $$('[data-tilt]').forEach(function (el) {
      gsap.set(el, { transformPerspective: 900 });
      var rx = gsap.quickTo(el, 'rotationX', { duration: 0.5, ease: 'power3' });
      var ry = gsap.quickTo(el, 'rotationY', { duration: 0.5, ease: 'power3' });
      el.addEventListener('pointermove', function (e) {
        var r = el.getBoundingClientRect();
        ry(((e.clientX - r.left) / r.width - 0.5) * 12);
        rx(-((e.clientY - r.top) / r.height - 0.5) * 12);
      });
      el.addEventListener('pointerleave', function () { rx(0); ry(0); });
    });

    var dot = $('.cursor');
    var ringEl = $('.cursor-ring');
    if (dot && ringEl) {
      var dx = gsap.quickTo(dot, 'x', { duration: 0.08 });
      var dy = gsap.quickTo(dot, 'y', { duration: 0.08 });
      var rx2 = gsap.quickTo(ringEl, 'x', { duration: 0.45, ease: 'power3' });
      var ry2 = gsap.quickTo(ringEl, 'y', { duration: 0.45, ease: 'power3' });
      win.addEventListener('pointermove', function (e) {
        root.classList.add('has-cursor');
        dx(e.clientX); dy(e.clientY); rx2(e.clientX); ry2(e.clientY);
      }, { passive: true });
      doc.addEventListener('pointerover', function (e) {
        ringEl.classList.toggle('is-hover', !!(e.target.closest && e.target.closest('a, button, input, textarea, label, [data-lightbox]')));
      });
      doc.documentElement.addEventListener('mouseleave', function () { root.classList.remove('has-cursor'); });
    }
  }

  /* ---------- layout-dependent bits ---------- */
  function relayout() { moveIndicator(); movePill(); }
  win.addEventListener('resize', relayout);
  if (doc.fonts && doc.fonts.ready) doc.fonts.ready.then(relayout);
  win.addEventListener('load', relayout);

  setLang(lang(), true);
  restartRotator();
  onScroll();
  relayout();
})();
