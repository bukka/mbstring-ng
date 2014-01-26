--TEST--
Test mb2_strstr() function : error conditions 
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_strstr') or die("skip mb2_strstr() is not available in this build");
?>
--FILE--
<?php
/* Prototype  : string mb2_strstr(string haystack, string needle[, bool part[, string encoding]])
 * Description: Finds first occurrence of a string within another 
 * Source code: ext/mbstring/mbstring.c
 * Alias to functions: 
 */

echo "*** Testing mb2_strstr() : error conditions ***\n";


echo "\n-- Testing mb2_strstr() with unknown encoding --\n";
$haystack = b'Hello, world';
$needle = b'world';
$encoding = 'unknown-encoding';
$part = true;
var_dump( mb2_strstr($haystack, $needle, $part, $encoding) );

?>
===DONE===
--EXPECTF--
*** Testing mb2_strstr() : error conditions ***

-- Testing mb2_strstr() with unknown encoding --

Warning: mb2_strstr(): Unknown encoding "unknown-encoding" in %s on line %d
bool(false)
===DONE===
