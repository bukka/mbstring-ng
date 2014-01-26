--TEST--
mb2_ereg_replace() compat test 5
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_ereg_replace') or die("skip mb2_ereg_replace() is not available in this build");
?>
--FILE--
<?php
/* (counterpart: ext/standard/tests/reg/007.phpt) */
  $a="abcd";
  $b=mb2_ereg_replace("abcd","",$a);
  echo "strlen(\$b)=".strlen($b);
?>
--EXPECT--
strlen($b)=0
