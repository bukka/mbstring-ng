--TEST--
Test mb2_strlen() function : error conditions - pass incorrect number of args
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_strlen') or die("skip mb2_strlen() is not available in this build");
?>
--FILE--
<?php
/* Prototype  : int mb2_strlen(string $str [, string $encoding])
 * Description: Get character numbers of a string 
 * Source code: ext/mbstring/mbstring.c
 */

/*
 * Pass mb2_strlen an incorrect number of arguments to test behaviour
 */

echo "*** Testing mb2_strlen() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing mb2_strlen() function with Zero arguments --\n";
var_dump( mb2_strlen() );

//Test mb2_strlen with one more than the expected number of arguments
echo "\n-- Testing mb2_strlen() function with more than expected no. of arguments --\n";
$str = 'string_val';
$encoding = 'string_val';
$extra_arg = 10;
var_dump( mb2_strlen($str, $encoding, $extra_arg) );

echo "Done";
?>
--EXPECTF--
*** Testing mb2_strlen() : error conditions ***

-- Testing mb2_strlen() function with Zero arguments --

Warning: mb2_strlen() expects at least 1 parameter, 0 given in %s on line %d
bool(false)

-- Testing mb2_strlen() function with more than expected no. of arguments --

Warning: mb2_strlen() expects at most 2 parameters, 3 given in %s on line %d
bool(false)
Done
