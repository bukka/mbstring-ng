--TEST--
Test mb2_strtolower() function : basic functionality
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
 * Test basic functionality of mb2_strtolower
 */

echo "*** Testing mb2_strtolower() : basic functionality***\n";

$ascii_lower = 'abcdefghijklmnopqrstuvwxyz';
$ascii_upper = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$greek_lower = base64_decode('zrHOss6zzrTOtc62zrfOuM65zrrOu868zr3Ovs6/z4DPgc+Dz4TPhc+Gz4fPiM+J');
$greek_upper = base64_decode('zpHOks6TzpTOlc6WzpfOmM6ZzprOm86czp3Ons6fzqDOoc6jzqTOpc6mzqfOqM6p');

echo "\n-- ASCII String --\n";
$ascii = mb2_strtolower($ascii_upper);
var_dump($ascii);

if($ascii == $ascii_lower) {
	echo "Correctly converted\n";
} else {
	echo "Incorrectly converted\n";
}

echo "\n-- Multibyte String --\n";
$mb = mb2_strtolower($greek_upper, 'UTF-8');
var_dump(base64_encode($mb));

if ($mb == $greek_lower) {
	echo "Correctly converted\n";
} else {
	echo "Incorreclty converted\n";
}

echo "Done";
?>
--EXPECTF--
*** Testing mb2_strtolower() : basic functionality***

-- ASCII String --
string(26) "abcdefghijklmnopqrstuvwxyz"
Correctly converted

-- Multibyte String --
string(64) "zrHOss6zzrTOtc62zrfOuM65zrrOu868zr3Ovs6/z4DPgc+Dz4TPhc+Gz4fPiM+J"
Correctly converted
Done
