<?php
/**
 * Check if string starts with defined characters.
 *
 * Receives string and characters which are used to check if string
 * starts with defined characters.
 *
 * @param string $string = text in which search characters
 * @param string $start_chars = characters used to check in string
 * @return bool = determines whether string starts with characters
 */
function startsWith($string, $start_chars) {
    $len = strlen($start_chars);
    return (substr($string, 0, $len) === $start_chars);
}
// startsWith('cat', 'c'); // true
// startsWith('dog', 'x'); // false
