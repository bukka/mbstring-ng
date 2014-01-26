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


echo "\n-- Testing mb2_stristr() with unknown encoding --\n";
$haystack = b'Hello, world';
$needle = b'world';
$encoding = 'unknown-encoding';
$part = true;
var_dump( mb2_stristr($haystack, $needle, $part, $encoding) );

?>
===DONE===
--EXPECTF--
*** Testing mb2_stristr() : error conditions ***

-- Testing mb2_stristr() with unknown encoding --

Warning: mb2_stristr(): Unknown encoding "unknown-encoding" in %s on line %d
bool(false)
===DONE===
