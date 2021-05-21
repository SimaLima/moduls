<?php
/**
 * UNIQUE VALUE
 * Create unique value from all alphanumeric characters.
 *
 * @param integer $lenth = length or unique value
 * @return string = unique value
 */
function makeUnique($length = 16) {
    $salt = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $lenth = strlen($salt);
    $unique = '';
    mt_srand(10000000 * (double) microtime());

    for ($i = 0; $i < $length; $i++) {
        $unique .= $salt[mt_rand(0, $len-1)];
    }

    return $unique;
}
