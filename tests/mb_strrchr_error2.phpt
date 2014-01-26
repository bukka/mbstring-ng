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


echo "\n-- Testing mb2_strrchr() with unknown encoding --\n";
$haystack = b'Hello, world';
$needle = b'world';
$encoding = 'unknown-encoding';
$part = true;
var_dump( mb2_strrchr($haystack, $needle, $part, $encoding) );

?>
===DONE===
--EXPECTF--
*** Testing mb2_strrchr() : error conditions ***

-- Testing mb2_strrchr() with unknown encoding --

Warning: mb2_strrchr(): Unknown encoding "unknown-encoding" in %s on line %d
bool(false)
===DONE===
