<?php
/**
 * CUSTOMIZE EVERY ITEM IN ARRAY
 * Use array_map method to change every item in array.
 */
$original = array('<p>Paragraph</p>', '<strong>Bold</strong>');
$new = array_map('strip_tags', $original);  // array('Paragraph', 'Bold');
