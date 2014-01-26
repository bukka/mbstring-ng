--TEST--
mb2_ereg_replace() compat test 10
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_ereg_replace') or die("skip mb2_ereg_replace() is not available in this build");
?>
--FILE--
<?php
/* (counterpart: ext/standard/tests/reg/013.phpt) */
  $a="abc123";
  echo mb2_ereg_replace("123","def\\g\\\\hi\\",$a);
?>
--EXPECT--
abcdef\g\\hi\
