--TEST--
Test mb2_stripos() function : error conditions - Pass incorrect number of args
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_stripos') or die("skip mb2_stripos() is not available in this build");
?>
--FILE--
<?php
/* Prototype  : int mb2_stripos(string haystack, string needle [, int offset [, string encoding]])
 * Description: Finds position of first occurrence of a string within another, case insensitive 
 * Source code: ext/mbstring/mbstring.c
 * Alias to functions: 
 */

/*
 * Test how mb2_stripos behaves when passed an incorrect number of arguments
 */

echo "*** Testing mb2_stripos() : error conditions ***\n";


//Test mb2_stripos with one more than the expected number of arguments
echo "\n-- Testing mb2_stripos() function with more than expected no. of arguments --\n";
$haystack = b'string_val';
$needle = b'string_val';
$offset = 10;
$encoding = 'string_val';
$extra_arg = 10;
var_dump( mb2_stripos($haystack, $needle, $offset, $encoding, $extra_arg) );

// Testing mb2_stripos with one less than the expected number of arguments
echo "\n-- Testing mb2_stripos() function with less than expected no. of arguments --\n";
$haystack = b'string_val';
var_dump( mb2_stripos($haystack) );

echo "Done";
?>
--EXPECTF--
*** Testing mb2_stripos() : error conditions ***

-- Testing mb2_stripos() function with more than expected no. of arguments --

Warning: mb2_stripos() expects at most 4 parameters, 5 given in %s on line %d
bool(false)

-- Testing mb2_stripos() function with less than expected no. of arguments --

Warning: mb2_stripos() expects at least 2 parameters, 1 given in %s on line %d
bool(false)
Done
