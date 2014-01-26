--TEST--
Test mb2_stristr() function : error conditions 
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_stristr') or die("skip mb2_stristr() is not available in this build");
?>
--FILE--
<?php
/* Prototype  : string mb2_stristr(string haystack, string needle[, bool part[, string encoding]])
 * Description: Finds first occurrence of a string within another, case insensitive 
 * Source code: ext/mbstring/mbstring.c
 * Alias to functions: 
 */

echo "*** Testing mb2_stristr() : error conditions ***\n";


//Test mb2_stristr with one more than the expected number of arguments
echo "\n-- Testing mb2_stristr() function with more than expected no. of arguments --\n";
$haystack = b'string_val';
$needle = b'string_val';
$part = true;
$encoding = 'string_val';
$extra_arg = 10;
var_dump( mb2_stristr($haystack, $needle, $part, $encoding, $extra_arg) );

// Testing mb2_stristr with one less than the expected number of arguments
echo "\n-- Testing mb2_stristr() function with less than expected no. of arguments --\n";
$haystack = b'string_val';
var_dump( mb2_stristr($haystack) );

?>
===DONE===
--EXPECTF--
*** Testing mb2_stristr() : error conditions ***

-- Testing mb2_stristr() function with more than expected no. of arguments --

Warning: mb2_stristr() expects at most 4 parameters, 5 given in %s on line %d
bool(false)

-- Testing mb2_stristr() function with less than expected no. of arguments --

Warning: mb2_stristr() expects at least 2 parameters, 1 given in %s on line %d
bool(false)
===DONE===
