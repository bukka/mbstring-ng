--TEST--
Test mb2_ereg() function : error conditions - pass incorrect number of arguments
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_ereg') or die("skip mb2_ereg() is not available in this build");
?>
--FILE--
<?php
/* Prototype  : int mb2_ereg(string $pattern, string $string [, array $registers])
 * Description: Regular expression match for multibyte string 
 * Source code: ext/mbstring/php_mbregex.c
 */

/*
 * Test behaviour of mb2_ereg() when passed an incorrcect number of arguments
 */

echo "*** Testing mb2_ereg() : error conditions ***\n";


//Test mb2_ereg with one more than the expected number of arguments
echo "\n-- Testing mb2_ereg() function with more than expected no. of arguments --\n";
$pattern = b'string_val';
$string = b'string_val';
$registers = array(1, 2);
$extra_arg = 10;
var_dump( mb2_ereg($pattern, $string, $registers, $extra_arg) );

// Testing mb2_ereg with one less than the expected number of arguments
echo "\n-- Testing mb2_ereg() function with less than expected no. of arguments --\n";
$pattern = b'string_val';
var_dump( mb2_ereg($pattern) );

echo "Done";
?>
--EXPECTF--
*** Testing mb2_ereg() : error conditions ***

-- Testing mb2_ereg() function with more than expected no. of arguments --

Warning: mb2_ereg() expects at most 3 parameters, 4 given in %s on line %d
bool(false)

-- Testing mb2_ereg() function with less than expected no. of arguments --

Warning: mb2_ereg() expects at least 2 parameters, 1 given in %s on line %d
bool(false)
Done
