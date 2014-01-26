--TEST--
Test mb2_strrichr() function : error conditions 
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_strrichr') or die("skip mb2_strrichr() is not available in this build");
?>
--FILE--
<?php
/* Prototype  : string mb2_strrichr(string haystack, string needle[, bool part[, string encoding]])
 * Description: Finds the last occurrence of a character in a string within another, case insensitive 
 * Source code: ext/mbstring/mbstring.c
 * Alias to functions: 
 */

echo "*** Testing mb2_strrichr() : error conditions ***\n";


echo "\n-- Testing mb2_strrichr() with unknown encoding --\n";
$haystack = b'Hello, world';
$needle = b'world';
$encoding = 'unknown-encoding';
$part = true;
var_dump( mb2_strrichr($haystack, $needle, $part, $encoding) );

?>
===DONE===
--EXPECTF--
*** Testing mb2_strrichr() : error conditions ***

-- Testing mb2_strrichr() with unknown encoding --

Warning: mb2_strrichr(): Unknown encoding "unknown-encoding" in %s on line %d
bool(false)
===DONE===
