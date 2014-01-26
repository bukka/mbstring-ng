--TEST--
mb2_ereg_replace() compat test 3
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_ereg_replace') or die("skip mb2_ereg_replace() is not available in this build");
?>
--FILE--
<?php
/* (counterpart: ext/standard/tests/reg/003.phpt) */
  $a="\\'test";
  echo mb2_ereg_replace("\\\\'","'",$a);
?>
--EXPECT--
'test
