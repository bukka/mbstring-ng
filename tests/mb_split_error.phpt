--TEST--
Test mb2_split() function : error conditions 
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_split') or die("skip mb2_split() is not available in this build");
?>
--FILE--
<?php
/* Prototype  : proto array mb2_split(string pattern, string string [, int limit])
 * Description: split multibyte string into array by regular expression 
 * Source code: ext/mbstring/php_mbregex.c
 * Alias to functions: 
 */

/*
 * test too few and too many parameters
 */

echo "*** Testing mb2_split() : error conditions ***\n";


//Test mb2_split with one more than the expected number of arguments
echo "\n-- Testing mb2_split() function with more than expected no. of arguments --\n";
$pattern = ' ';
$string = 'a b c d e f g';
$limit = 0;
$extra_arg = 10;
var_dump( mb2_split($pattern, $string, $limit, $extra_arg) );

// Testing mb2_split with one less than the expected number of arguments
echo "\n-- Testing mb2_split() function with less than expected no. of arguments --\n";
$pattern = 'string_val';
var_dump( mb2_split($pattern) );

echo "Done";
?>
--EXPECTF--
*** Testing mb2_split() : error conditions ***

-- Testing mb2_split() function with more than expected no. of arguments --

Warning: mb2_split() expects at most 3 parameters, 4 given in %s on line %d
bool(false)

-- Testing mb2_split() function with less than expected no. of arguments --

Warning: mb2_split() expects at least 2 parameters, 1 given in %s on line %d
bool(false)
Done
