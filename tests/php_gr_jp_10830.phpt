--TEST--
php-users@php.gr.jp #10830 
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip mbstring not available');
function_exists('mb2_ereg') or die("skip mb2_ereg() is not available in this build");
?>
--FILE--
<?php
$a="aaa\n<>";

var_dump( mb2_ereg("^[^><]+$",$a) );
var_dump( ereg("^[^><]+$",$a) );
?>

--EXPECTF--
bool(false)

Deprecated: Function ereg() is deprecated in %s on line %d
bool(false)
