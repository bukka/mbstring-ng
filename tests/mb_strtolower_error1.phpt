--TEST--
Test mb2_strtolower() function : error conditions - pass incorrect number of arguments
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_strtolower') or die("skip mb2_strtolower() is not available in this build");
?>
--FILE--
<?php
/* Prototype  : string mb2_strtolower(string $sourcestring [, string $encoding])
 * Description: Returns a lowercased version of $sourcestring
 * Source code: ext/mbstring/mbstring.c
 */

/*
 * Pass an incorrect number of arguments to mb2_strtolower() to test behaviour
 */

echo "*** Testing mb2_strtolower() : error conditions***\n";

//Test mb2_strtolower with one more than the expected number of arguments
echo "\n-- Testing mb2_strtolower() function with more than expected no. of arguments --\n";
$sourcestring = 'string_value';
$encoding = 'UTF-8';
$extra_arg = 10;
var_dump( mb2_strtolower($sourcestring, $encoding, $extra_arg) );

//Test mb2_strtolower with zero arguments
echo "\n-- Testing mb2_strtolower() function with zero arguments --\n";
var_dump( mb2_strtolower() );

echo "Done";
?>
--EXPECTF--
*** Testing mb2_strtolower() : error conditions***

-- Testing mb2_strtolower() function with more than expected no. of arguments --

Warning: mb2_strtolower() expects at most 2 parameters, 3 given in %s on line %d
NULL

-- Testing mb2_strtolower() function with zero arguments --

Warning: mb2_strtolower() expects at least 1 parameter, 0 given in %s on line %d
NULL
Done
