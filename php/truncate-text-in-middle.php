<?php
/**
 * TRUNCATE TEXT IN MIDDLE
 * Find text middle and replace it with separator.
 *
 * @param string $text = text in which to replace the middle
 * @param int $max_length = maximum length of string ($separator included)
 * @param string $separator = characters to replace middle of string
 * @return string = minified string
 */
function truncateTextInMiddle($text, $max_length = 25, $separator = '/.../') {
    if (empty(trim($text))) return '';
    $text = trim($text);

    $max_length -= strlen($separator);
    $start = $max_length / 2 ;
    $trunc =  strlen($text) - $max_length;

    return substr_replace($text, $separator, $start, $trunc);  // "abcdefghij/.../56789z.jpg"
}
