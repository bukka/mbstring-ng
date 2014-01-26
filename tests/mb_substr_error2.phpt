--TEST--
Test mb2_substr() function : error conditions - Pass an unknown encoding
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_substr') or die("skip mb2_substr() is not available in this build");
?>
--FILE--
<?php
/* Prototype  : string mb2_substr(string $str, int $start [, int $length [, string $encoding]])
 * Description: Returns part of a string 
 * Source code: ext/mbstring/mbstring.c
 */

/*
 * Pass an unknown encoding to mb2_substr() to test behaviour
 */

echo "*** Testing mb2_substr() : error conditions ***\n";

$str = 'Hello, world';
$start = 1;
$length = 5;
$encoding = 'unknown-encoding';

var_dump( mb2_substr($str, $start, $length, $encoding));

echo "Done";
?>
--EXPECTF--
*** Testing mb2_substr() : error conditions ***

Warning: mb2_substr(): Unknown encoding "unknown-encoding" in %s on line %d
bool(false)
Done
