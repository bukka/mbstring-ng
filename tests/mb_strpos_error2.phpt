--TEST--
Test mb2_strpos() function : error conditions - Pass unknown encoding
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_strpos') or die("skip mb2_strpos() is not available in this build");
?>
--FILE--
<?php
/* Prototype  : int mb2_strpos(string $haystack, string $needle [, int $offset [, string $encoding]])
 * Description: Find position of first occurrence of a string within another 
 * Source code: ext/mbstring/mbstring.c
 */

/*
 * Pass an unknown encoding to mb2_strpos() to test behaviour
 */

echo "*** Testing mb2_strpos() : error conditions ***\n";
$haystack = 'Hello, world';
$needle = 'world';
$offset = 2;
$encoding = 'unknown-encoding';

var_dump( mb2_strpos($haystack, $needle, $offset, $encoding) );

echo "Done";
?>
--EXPECTF--
*** Testing mb2_strpos() : error conditions ***

Warning: mb2_strpos(): Unknown encoding "unknown-encoding" in %s on line %d
bool(false)
Done
