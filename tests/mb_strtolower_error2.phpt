--TEST--
Test mb2_strtolower() function : error conditions - pass an unknown encoding
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_strtolower') or die("skip mb2_strtolower() is not available in this build");
?>
--FILE--
<?php
/* Prototype  : string mb2_strtolower(string $sourcestring [, string $encoding])
 * Description: Returns a lowercased version of $sourcestring
 * Source code: ext/mbstring/mbstring.c
 */

/*
 * Pass an unknown encoding to mb2_strtolower() to test behaviour
 */

echo "*** Testing mb2_strtolower() : error conditions***\n";

$sourcestring = 'hello, world';
$encoding = 'unknown-encoding';

var_dump( mb2_strtolower($sourcestring, $encoding) );
?>
===DONE===
--EXPECTF--
*** Testing mb2_strtolower() : error conditions***

Warning: mb2_strtolower(): Unknown encoding "unknown-encoding" in %s on line %d
bool(false)
===DONE===
