--TEST--
Test mb2_ereg_match() function : error conditions - pass function incorrect number of arguments
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_ereg_match') or die("skip mb2_ereg_match() is not available in this build");
?>
--FILE--
<?php
/* Prototype  : bool mb2_ereg_match(string $pattern, string $string [,string $option])
 * Description: Regular expression match for multibyte string 
 * Source code: ext/mbstring/php_mbregex.c
 */

/*
 * Test mb2_ereg_match by passing an incorrect number of arguments
 */

echo "*** Testing mb2_ereg_match() : error conditions ***\n";


//Test mb2_ereg_match with one more than the expected number of arguments
echo "\n-- Testing mb2_ereg_match() function with more than expected no. of arguments --\n";
$pattern = b'string_val';
$string = b'string_val';
$option = 'string_val';
$extra_arg = 10;
var_dump( mb2_ereg_match($pattern, $string, $option, $extra_arg) );

// Testing mb2_ereg_match with one less than the expected number of arguments
echo "\n-- Testing mb2_ereg_match() function with less than expected no. of arguments --\n";
$pattern = b'string_val';
var_dump( mb2_ereg_match($pattern) );

// Testing mb2_ereg_match with zero arguments
echo "\n-- Testing mb2_ereg_match() function with zero arguments --\n";
var_dump( mb2_ereg_match() );

echo "Done";
?>
--EXPECTF--
*** Testing mb2_ereg_match() : error conditions ***

-- Testing mb2_ereg_match() function with more than expected no. of arguments --

Warning: mb2_ereg_match() expects at most 3 parameters, 4 given in %s on line %d
bool(false)

-- Testing mb2_ereg_match() function with less than expected no. of arguments --

Warning: mb2_ereg_match() expects at least 2 parameters, 1 given in %s on line %d
bool(false)

-- Testing mb2_ereg_match() function with zero arguments --

Warning: mb2_ereg_match() expects at least 2 parameters, 0 given in %s on line %d
bool(false)
Done