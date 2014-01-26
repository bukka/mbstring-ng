--TEST--
Test mb2_strtoupper() function : error conditions - pass incorrect number of args
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_strtoupper') or die("skip mb2_strtoupper() is not available in this build");
?>
--FILE--
<?php
/* Prototype  : string mb2_strtoupper(string $sourcestring [, string $encoding]
 * Description: Returns a uppercased version of $sourcestring
 * Source code: ext/mbstring/mbstring.c
 */

/*
 * Pass an incorrect number of arguments to mb2_strtoupper() to test behaviour
 */

echo "*** Testing mb2_strtoupper() : error conditions ***\n";

//Test mb2_strtoupper with one more than the expected number of arguments
echo "\n-- Testing mb2_strtoupper() function with more than expected no. of arguments --\n";
$sourcestring = 'string_value';
$encoding = 'UTF-8';
$extra_arg = 10;
var_dump( mb2_strtoupper($sourcestring, $encoding, $extra_arg) );

//Test mb2_strtoupper with zero arguments
echo "\n-- Testing mb2_strtoupper() function with zero arguments --\n";
var_dump( mb2_strtoupper() );

echo "Done";
?>

--EXPECTF--
*** Testing mb2_strtoupper() : error conditions ***

-- Testing mb2_strtoupper() function with more than expected no. of arguments --

Warning: mb2_strtoupper() expects at most 2 parameters, 3 given in %s on line %d
NULL

-- Testing mb2_strtoupper() function with zero arguments --

Warning: mb2_strtoupper() expects at least 1 parameter, 0 given in %s on line %d
NULL
Done
