--TEST--
Test mb2_strrpos() function : error conditions - pass incorrect number of args
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_strrpos') or die("skip mb2_strrpos() is not available in this build");
?>
--FILE--
<?php
/* Prototype  : int mb2_strrpos(string $haystack, string $needle [, int $offset [, string $encoding]])
 * Description: Find position of last occurrence of a string within another 
 * Source code: ext/mbstring/mbstring.c
 */

/*
 * Pass mb2_strrpos() an incorrect number of arguments
 */

echo "*** Testing mb2_strrpos() : error conditions ***\n";


//Test mb2_strrpos with one more than the expected number of arguments
echo "\n-- Testing mb2_strrpos() function with more than expected no. of arguments --\n";
$haystack = 'string_val';
$needle = 'string_val';
$offset = 10;
$encoding = 'string_val';
$extra_arg = 10;
var_dump( mb2_strrpos($haystack, $needle, $offset, $encoding, $extra_arg) );

// Testing mb2_strrpos with one less than the expected number of arguments
echo "\n-- Testing mb2_strrpos() function with less than expected no. of arguments --\n";
$haystack = 'string_val';
var_dump( mb2_strrpos($haystack) );

echo "Done";
?>
--EXPECTF--
*** Testing mb2_strrpos() : error conditions ***

-- Testing mb2_strrpos() function with more than expected no. of arguments --

Warning: mb2_strrpos() expects at most 4 parameters, 5 given in %s on line %d
bool(false)

-- Testing mb2_strrpos() function with less than expected no. of arguments --

Warning: mb2_strrpos() expects at least 2 parameters, 1 given in %s on line %d
bool(false)
Done
