<?php
/**
 * Check if variable is set & not empty.
 */
if (isset($var) && !empty(trim($var))) {
    // code
}


/**
 * Check if variable is number.
 */
if (isset($var) && !empty(trim($var))) {
    if (is_numeric($var) && $var != 0) {
        $var = (int) $var;
    }
}


/**
 * Check if variable is array.
 */
if (isset($var) && !empty(trim($var))) {
    if (is_array($var)) {
        // code
    }
}
