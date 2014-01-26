--TEST--
Test mb2_decode_mimeheader() function : error conditions 
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_decode_mimeheader') or die("skip mb2_decode_mimeheader() is not available in this build");
?>
--FILE--
<?php
/* Prototype  : string mb2_decode_mimeheader(string string)
 * Description: Decodes the MIME "encoded-word" in the string 
 * Source code: ext/mbstring/mbstring.c
 * Alias to functions: 
 */

echo "*** Testing mb2_decode_mimeheader() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing mb2_decode_mimeheader() function with Zero arguments --\n";
var_dump( mb2_decode_mimeheader() );

//Test mb2_decode_mimeheader with one more than the expected number of arguments
echo "\n-- Testing mb2_decode_mimeheader() function with more than expected no. of arguments --\n";
$string = 'string_val';
$extra_arg = 10;
var_dump( mb2_decode_mimeheader($string, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** Testing mb2_decode_mimeheader() : error conditions ***

-- Testing mb2_decode_mimeheader() function with Zero arguments --

Warning: mb2_decode_mimeheader() expects exactly 1 parameter, 0 given in %s on line %d
NULL

-- Testing mb2_decode_mimeheader() function with more than expected no. of arguments --

Warning: mb2_decode_mimeheader() expects exactly 1 parameter, 2 given in %s on line %d
NULL
===DONE===
