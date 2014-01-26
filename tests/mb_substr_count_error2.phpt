--TEST--
Test mb2_substr_count() function : error conditions - pass unknown encoding
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_substr_count') or die("skip mb2_substr_count() is not available in this build");
?>
--FILE--
<?php
/* Prototype  : int mb2_substr_count(string $haystack, string $needle [, string $encoding])
 * Description: Count the number of substring occurrences 
 * Source code: ext/mbstring/mbstring.c
 */

/*
 * Test behaviour of mb2_substr_count() function when passed an unknown encoding
 */

echo "*** Testing mb2_substr_count() : error conditions ***\n";

$haystack = 'Hello, World!';
$needle = 'Hello';
$encoding = 'unknown-encoding';

echo "\n-- Testing mb2_substr_count() function with an unknown encoding --\n";
var_dump(mb2_substr_count($haystack, $needle, $encoding));

echo "Done";
?>
--EXPECTF--
*** Testing mb2_substr_count() : error conditions ***

-- Testing mb2_substr_count() function with an unknown encoding --

Warning: mb2_substr_count(): Unknown encoding "unknown-encoding" in %s on line %d
bool(false)
Done
