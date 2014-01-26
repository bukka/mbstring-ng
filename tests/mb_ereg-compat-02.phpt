--TEST--
mb2_ereg() compat test 2
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_ereg') or die("skip mb2_ereg() is not available in this build");
?>
--FILE--
<?php
/* (counterpart: ext/standard/tests/reg/005.phpt) */
  $a="This is a nice and simple string";
  echo mb2_ereg(".*(is).*(is).*",$a,$registers);
  echo "\n";
  echo $registers[0];
  echo "\n";
  echo $registers[1];
  echo "\n";
  echo $registers[2];
  echo "\n";
?>
--EXPECT--
32
This is a nice and simple string
is
is
