--TEST--
Test mb2_internal_encoding() function : error conditions - pass incorrect number of args
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_internal_encoding') or die("skip mb2_internal_encoding() is not available in this build");
?> 
--FILE--
<?php
/* Prototype  : string mb2_internal_encoding([string $encoding])
 * Description: Sets the current internal encoding or 
 * Returns the current internal encoding as a string 
 * Source code: ext/mbstring/mbstring.c
 */

/*
 * Test mb2_internal_encoding with one more than the expected number of arguments
 */

echo "*** Testing mb2_internal_encoding() : error conditions ***\n";

echo "\n-- Testing mb2_internal_encoding() function with more than expected no. of arguments --\n";
$encoding = 'string_val';
$extra_arg = 10;
var_dump( mb2_internal_encoding($encoding, $extra_arg) );

echo "Done";
?>
--EXPECTF--
*** Testing mb2_internal_encoding() : error conditions ***

-- Testing mb2_internal_encoding() function with more than expected no. of arguments --

Warning: mb2_internal_encoding() expects at most 1 parameter, 2 given in %s on line %d
bool(false)
Done
