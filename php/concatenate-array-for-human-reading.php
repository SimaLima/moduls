<?php
/**
 * MAKE ARRAY HUMAN READABLE
 * Get array values and display them in readable way.
 *
 * @param array $elements = array values
 * @param string $delimiter = character between elements
 * @param string $final_delimiter = characters before last element
 * @return string = text in readable mode
 */

function concatenate($elements, $delimiter = ', ', $final_delimiter = ' and ') {
   $lastElement = array_pop($elements);
   return join($delimiter, $elements) . $final_delimiter . $lastElement;
}

$array = array('John', 'Mary', 'Ishmal');
echo concatenate($array);  // outputs "John, Mary and Ishmal"
