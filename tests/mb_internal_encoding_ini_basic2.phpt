--TEST--
Test INI mbstring.internal_encoding basic - encoding when valid specified
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_stripos') or die("skip mb2_stripos() is not available in this build");
?>
--INI--
mbstring.internal_encoding=ISO-8859-7
--FILE--
<?php

echo "*** Testing INI mbstring.internal_encoding : basic functionality ***\n";

echo mb2_internal_encoding()."\n";
echo ini_get('mbstring.internal_encoding')."\n";
mb2_internal_encoding('UTF-8');
echo mb2_internal_encoding()."\n";
echo ini_get('mbstring.internal_encoding')."\n";

?>
===DONE===
--EXPECT--
*** Testing INI mbstring.internal_encoding : basic functionality ***
ISO-8859-7
ISO-8859-7
UTF-8
ISO-8859-7
===DONE===
