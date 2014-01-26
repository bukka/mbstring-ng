--TEST--
Test mb2_regex_encoding() function : error conditions - Pass an unknown encoding
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_regex_encoding') or die("skip mb2_regex_encoding() is not available in this build");
?>
--FILE--
<?php
/* Prototype  : string mb2_regex_encoding([string $encoding])
 * Description: Returns the current encoding for regex as a string. 
 * Source code: ext/mbstring/php_mbregex.c
 */

/*
 * Pass mb2_regex_encoding an unknown type of encoding
 */

echo "*** Testing mb2_regex_encoding() : error conditions ***\n";

var_dump(mb2_regex_encoding('unknown'));


echo "Done";
?>
--EXPECTF--
*** Testing mb2_regex_encoding() : error conditions ***

Warning: mb2_regex_encoding(): Unknown encoding "unknown" in %s on line %d
bool(false)
Done
