<?php
/**
 * STRIP CODE FROM TEXT
 * Use regex to remove all from from text.
 *
 * @param string $text = text to filter
 * @return string = cleaned text from all code
 */
function cleanInput($text) {
    $search = array(
        '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
        '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
        '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
        '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
    );

    $cleaned_text = preg_replace($search, '', $text);
    return $cleaned_text;
}
