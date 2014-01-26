--TEST--
Test mb2_substr() function : error conditions - Pass incorrect number of args
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_substr') or die("skip mb2_substr() is not available in this build");
?>
--FILE--
<?php
/* Prototype  : string mb2_substr(string $str, int $start [, int $length [, string $encoding]])
 * Description: Returns part of a string 
 * Source code: ext/mbstring/mbstring.c
 */

/*
 * Pass incorrect number of arguments to mb2_substr() to test behaviour
 */

echo "*** Testing mb2_substr() : error conditions ***\n";

//Test mb2_substr with one more than the expected number of arguments
echo "\n-- Testing mb2_substr() function with more than expected no. of arguments --\n";
$str = 'string_val';
$start = 10;
$length = 10;
$encoding = 'string_val';
$extra_arg = 10;
var_dump( mb2_substr($str, $start, $length, $encoding, $extra_arg) );

// Testing mb2_substr with one less than the expected number of arguments
echo "\n-- Testing mb2_substr() function with less than expected no. of arguments --\n";
$str = 'string_val';
var_dump( mb2_substr($str) );

echo "Done";
?>
--EXPECTF--
*** Testing mb2_substr() : error conditions ***

-- Testing mb2_substr() function with more than expected no. of arguments --

Warning: mb2_substr() expects at most 4 parameters, 5 given in %s on line %d
NULL

-- Testing mb2_substr() function with less than expected no. of arguments --

Warning: mb2_substr() expects at least 2 parameters, 1 given in %s on line %d
NULL
Done
