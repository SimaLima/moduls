/*
 * STRING PROPERTIES AND METHODS
 * List of string properties and methods.
 */

// returns the length of a string (number of characters)
// 'Hello World!'.length => 12
// length

// returns the character at the specified index in a string
// 'HELLO WORLD!'.charAt(4) => O
// charAt();

// used to join two or more strings
// var str1 = 'hello' var str2 ='world' str1.concat(str2) => hello world
// concat();

// determines whether a string ends with the characters of a specified string
// var str = 'Hello world, welcome to the universe.' str.endsWith('universe.') => true
// endsWith();

// determines whether a string contains the characters of a specified string
// var str = 'hello world'  str.includes('world') => true
// includes();

// returns the position of the first occurrence of a specified value in a string
// var str = 'hello world'  str.indexOf('world') => 6
// indexOf();

// returns the position of the last occurrence of a specified value in a string
// var str = 'hello world, text'  str.lastIndexOf('world') => 13
// lastIndexOf();

// searches a string for a match against a regular expression, and returns the matches, as an Array object
// var str = 'The rain in SPAIN stays mainly in the plain';  str.match(/ain/g) => ain,ain,ain
// match();

// returns a new string with a specified number of copies of the string it was called on
// var str = 'Hello world!'  str.repeat(2) => Hello world!Hello world!
// repeat();

// searches a string for a specified value, or a regular expression, and returns a new string where the specified values are replaced
// var str = 'Visit Microsoft!' str.replace('Microsoft', 'W3Schools') => Visit W3Schools
// replace();

// searches a string for a specified value, and returns the position of the match
// var str = 'Visit W3Schools!' str.search('W3Schools') => 6
// search();

// extracts parts of a string and returns the extracted parts in a new string
// var str = 'Hello world!'  str.slice(0, 5) => Hello
// slice();

// splits a string into an array of substrings, and returns the new array
// var str = 'Hello world!'  str.split(' ') => Helloworld!
// split();

// determines whether a string begins with the characters of a specified string
// var str = 'Hello world!'  str.startsWith('Hello') => true
// startsWith();

// extracts parts of a string, beginning at the character at the specified position, and returns the specified number of characters
// var str = 'Hello world!'  str.substr(1,4) => ello
// substr();

// extracts the characters from a string, between two specified indices, and returns the new sub string
// var str = 'Hello world!'  str.substring(1,4) => ell
// substring();

// converts a string to lowercase letters
// var str = 'Hello world!'  str.toLowerCase() => hello world!
// toLowerCase();

// returns the value of a String object
// var str = 'Hello world!'  str.toString() => Hello world!
// toString();

// converts a string to uppercase letters
// var str = 'Hello world!'  str.toUpperCase() => HELLO WORLD!
// toUpperCase();

// removes whitespace from both sides of a string
// var str = '  Hello world!  '  str.trim() => Hello world!
// trim();
