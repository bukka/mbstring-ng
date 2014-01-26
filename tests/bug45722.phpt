--TEST--
Bug #45722 (mb2_check_encoding() crashes)
--FILE--
<?php
var_dump(mb2_check_encoding("&\xc2\xb7 TEST TEST TEST TEST TEST TEST", "HTML-ENTITIES"));
?>
--EXPECT--
bool(false)
