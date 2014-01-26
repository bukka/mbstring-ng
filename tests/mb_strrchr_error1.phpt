--TEST--
Test mb2_strrchr() function : error conditions
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_strrchr') or die("skip mb2_strrchr() is not available in this build");
?> 
--FILE--
<?php
/* Prototype  : string mb2_strrchr(string haystack, string needle[, bool part[, string encoding]])
 * Description: Finds the last occurrence of a character in a string within another 
 * Source code: ext/mbstring/mbstring.c
 * Alias to functions: 
 */

echo "*** Testing mb2_strrchr() : error conditions ***\n";


//Test mb2_strrchr with one more than the expected number of arguments
echo "\n-- Testing mb2_strrchr() function with more than expected no. of arguments --\n";
$haystack = b'string_val';
$needle = b'string_val';
$part = true;
$encoding = 'string_val';
$extra_arg = 10;
var_dump( mb2_strrchr($haystack, $needle, $part, $encoding, $extra_arg) );

// Testing mb2_strrchr with one less than the expected number of arguments
echo "\n-- Testing mb2_strrchr() function with less than expected no. of arguments --\n";
$haystack = b'string_val';
var_dump( mb2_strrchr($haystack) );

?>
===DONE===
--EXPECTF--
*** Testing mb2_strrchr() : error conditions ***

-- Testing mb2_strrchr() function with more than expected no. of arguments --

Warning: mb2_strrchr() expects at most 4 parameters, 5 given in %s on line %d
bool(false)

-- Testing mb2_strrchr() function with less than expected no. of arguments --

Warning: mb2_strrchr() expects at least 2 parameters, 1 given in %s on line %d
bool(false)
===DONE===
