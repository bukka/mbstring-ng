--TEST--
Test mb2_strripos() function : error conditions - Pass unknown encoding
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_strripos') or die("skip mb2_strripos() is not available in this build");
?>
--FILE--
<?php
/* Prototype  : int mb2_strripos(string haystack, string needle [, int offset [, string encoding]])
 * Description: Finds position of last occurrence of a string within another, case insensitive 
 * Source code: ext/mbstring/mbstring.c
 * Alias to functions: 
 */

/*
 * Pass an unknown encoding to mb2_strripos() to test behaviour
 */

echo "*** Testing mb2_strripos() : error conditions ***\n";
$haystack = b'Hello, world';
$needle = b'world';
$offset = 2;
$encoding = 'unknown-encoding';

var_dump( mb2_strripos($haystack, $needle, $offset, $encoding) );

echo "Done";
?>
--EXPECTF--
*** Testing mb2_strripos() : error conditions ***

Warning: mb2_strripos(): Unknown encoding "unknown-encoding" in %s on line %d
bool(false)
Done
