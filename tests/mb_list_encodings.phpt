--TEST--
mb2_list_encodings
--FILE--
<?php
var_dump(in_array("7bit", mb2_list_encodings()));
var_dump(in_array("8bit", mb2_list_encodings()));
var_dump(in_array("ASCII", mb2_list_encodings()));
var_dump(in_array("non-existent", mb2_list_encodings()));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
bool(false)
