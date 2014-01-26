--TEST--
Test mb2_substr() function : basic functionality 
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_substr') or die("skip mb2_substr() is not available in this build");
?>
--INI--
mbstring.internal_encoding=ISO-8859-1
--FILE--
<?php
/* Prototype  : string mb2_substr(string $str, int $start [, int $length [, string $encoding]])
 * Description: Returns part of a string 
 * Source code: ext/mbstring/mbstring.c
 */

/*
 * Test Basic Functionality of mb2_substr with ASCII characters and multibyte strings.
 */

echo "*** Testing mb2_substr() : basic functionality ***\n";

$string_ascii = 'ABCDEF';
//Japanese string in UTF-8
$string_mb = base64_decode('5pel5pys6Kqe44OG44Kt44K544OI44Gn44GZ44CCMDEyMzTvvJXvvJbvvJfvvJjvvJnjgII=');

echo "\n-- ASCII string 1 --\n";
var_dump(mb2_substr($string_ascii, 3));

echo "\n-- ASCII string 2 --\n";
var_dump(mb2_substr($string_ascii, 3, 5, 'ISO-8859-1'));

echo "\n-- Multibyte string 1 --\n";
$result_1 = mb2_substr($string_mb, 2, 7);
var_dump(base64_encode($result_1));

echo "\n-- Multibyte string 2 --\n";
$result_2 = mb2_substr($string_mb, 2, 7, 'utf-8');
var_dump(base64_encode($result_2));

echo "Done";
?>
--EXPECTF--
*** Testing mb2_substr() : basic functionality ***

-- ASCII string 1 --
string(3) "DEF"

-- ASCII string 2 --
string(3) "DEF"

-- Multibyte string 1 --
string(12) "peacrOiqng=="

-- Multibyte string 2 --
string(28) "6Kqe44OG44Kt44K544OI44Gn44GZ"
Done
