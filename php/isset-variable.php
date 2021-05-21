<?php
/**
 * CHECK IF VARIABLE IS SET & NOT EMPTY
 * Check variable definition.
 */
if (isset($var) && !empty(trim($var))) {
    // code
}


/**
 * CHECK IF VARIABLE IS NUMBER
 * Check variable definition as number.
 */
if (isset($var) && !empty(trim($var))) {
    if (is_numeric($var) && $var != 0) {
        $var = (int) $var;
    }
}


/**
 * CHECK IF VARIABLE IS ARRAY
 * Check variable definition as array.
 */
if (isset($var) && !empty(trim($var))) {
    if (is_array($var)) {
        // code
    }
}
