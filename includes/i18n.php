<?php
// Bangla + English: every text is printed in both languages and CSS shows the
// active one (html[data-lang]). English is the default; the choice is remembered in
// localStorage key `se-lang-v2` by assets/js/site/core.js (renamed from `se-lang`
// so visitors who had Bangla saved under the old Bangla default start in English).
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

    /** An attribute in both languages; rendered in English (the default) and swapped by JS. */
    function ta($attr, $en, $bn)
    {
        return $attr . '="' . htmlspecialchars($en) . '" data-en-' . $attr . '="' . htmlspecialchars($en)
            . '" data-bn-' . $attr . '="' . htmlspecialchars($bn) . '"';
    }
}
