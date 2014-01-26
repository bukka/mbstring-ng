--TEST--
Test mb2_strlen() function : error conditions - pass an unknown encoding
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_strlen') or die("skip mb2_strlen() is not available in this build");
?>
--FILE--
<?php
/* Prototype  : int mb2_strlen(string $str [, string $encoding])
 * Description: Get character numbers of a string 
 * Source code: ext/mbstring/mbstring.c
 */

/*
 * Test mb2_strlen when passed an unknown encoding
 */

echo "*** Testing mb2_strlen() : error ***\n";

$string = 'abcdef';

$encoding = 'unknown-encoding';

var_dump(mb2_strlen($string, $encoding));

echo "Done";
?>
--EXPECTF--
*** Testing mb2_strlen() : error ***

Warning: mb2_strlen(): Unknown encoding "unknown-encoding" in %s on line %d
bool(false)
Done
