<?php
// Bangla + English: every text is printed in both languages and CSS shows the
// active one (html[data-lang]). Bangla is the default; the choice is remembered in
// localStorage by assets/js/site/core.js.
if (!function_exists('t')) {
    /** Inline text in both languages. */
    function t($en, $bn)
    {
        return '<span data-l="en">' . $en . '</span><span data-l="bn" lang="bn">' . $bn . '</span>';
    }

    /** A block element in both languages, e.g. tb('p', 'lead', 'Hello', 'হ্যালো'). */
    function tb($tag, $class, $en, $bn)
    {
        $c = $class !== '' ? ' class="' . $class . '"' : '';
        return '<' . $tag . $c . ' data-l="en">' . $en . '</' . $tag . '>'
            . '<' . $tag . $c . ' data-l="bn" lang="bn">' . $bn . '</' . $tag . '>';
    }

    /** An attribute in both languages; rendered in Bangla (the default) and swapped by JS. */
    function ta($attr, $en, $bn)
    {
        return $attr . '="' . htmlspecialchars($bn) . '" data-en-' . $attr . '="' . htmlspecialchars($en)
            . '" data-bn-' . $attr . '="' . htmlspecialchars($bn) . '"';
    }
}
