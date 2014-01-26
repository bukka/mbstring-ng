--TEST--
Test mb2_strrpos() function : error conditions - pass an unknown encoding
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_strrpos') or die("skip mb2_strrpos() is not available in this build");
?>
--FILE--
<?php
/* Prototype  : int mb2_strrpos(string $haystack, string $needle [, int $offset [, string $encoding]])
 * Description: Find position of last occurrence of a string within another 
 * Source code: ext/mbstring/mbstring.c
 */

/*
 * Pass mb2_strrpos() an encoding that doesn't exist
 */

echo "*** Testing mb2_strrpos() : error conditions ***\n";

$haystack = 'This is an English string. 0123456789.';
$needle = '123';
$offset = 5;
$encoding = 'unknown-encoding';

var_dump(mb2_strrpos($haystack, $needle , $offset, $encoding));

echo "Done";
?>
--EXPECTF--
*** Testing mb2_strrpos() : error conditions ***

Warning: mb2_strrpos(): Unknown encoding "unknown-encoding" in %s on line %d
bool(false)
Done
