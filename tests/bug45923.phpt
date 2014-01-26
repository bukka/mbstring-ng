--TEST--
Bug #45923 (mb2_st[r]ripos() offset not handled correctly)
--SKIPIF--
<?php extension_loaded('mbstring') or die('skip mbstring not available'); ?>
--INI--
mbstring.internal_encoding=UTF-8
--FILE--
<?php
var_dump(strpos("abc abc abc", "abc", 0));
var_dump(strpos("abc abc abc", "abc", 3));
var_dump(strpos("abc abc abc", "abc", 6));
var_dump(strpos("abc abc abc", "abc", 9));
var_dump(strpos("abc abc abc", "abc", 11));
var_dump(strpos("abc abc abc", "abc", 12));
var_dump(strpos("abc abc abc", "abc", -1));
var_dump(strpos("abc abc abc", "abc", -3));
var_dump(strpos("abc abc abc", "abc", -6));

var_dump(mb2_strpos("●○◆ ●○◆ ●○◆", "●○◆", 0));
var_dump(mb2_strpos("●○◆ ●○◆ ●○◆", "●○◆", 3));
var_dump(mb2_strpos("●○◆ ●○◆ ●○◆", "●○◆", 6));
var_dump(mb2_strpos("●○◆ ●○◆ ●○◆", "●○◆", 9));
var_dump(mb2_strpos("●○◆ ●○◆ ●○◆", "●○◆", 11));
var_dump(mb2_strpos("●○◆ ●○◆ ●○◆", "●○◆", 12));
var_dump(mb2_strpos("●○◆ ●○◆ ●○◆", "●○◆", -1));
var_dump(mb2_strpos("●○◆ ●○◆ ●○◆", "●○◆", -3));
var_dump(mb2_strpos("●○◆ ●○◆ ●○◆", "●○◆", -6));

var_dump(stripos("abc abc abc", "abc", 0));
var_dump(stripos("abc abc abc", "abc", 3));
var_dump(stripos("abc abc abc", "abc", 6));
var_dump(stripos("abc abc abc", "abc", 9));
var_dump(stripos("abc abc abc", "abc", 11));
var_dump(stripos("abc abc abc", "abc", 12));
var_dump(stripos("abc abc abc", "abc", -1));
var_dump(stripos("abc abc abc", "abc", -3));
var_dump(stripos("abc abc abc", "abc", -6));

var_dump(mb2_stripos("●○◆ ●○◆ ●○◆", "●○◆", 0));
var_dump(mb2_stripos("●○◆ ●○◆ ●○◆", "●○◆", 3));
var_dump(mb2_stripos("●○◆ ●○◆ ●○◆", "●○◆", 6));
var_dump(mb2_stripos("●○◆ ●○◆ ●○◆", "●○◆", 9));
var_dump(mb2_stripos("●○◆ ●○◆ ●○◆", "●○◆", 11));
var_dump(mb2_stripos("●○◆ ●○◆ ●○◆", "●○◆", 12));
var_dump(mb2_stripos("●○◆ ●○◆ ●○◆", "●○◆", -1));
var_dump(mb2_stripos("●○◆ ●○◆ ●○◆", "●○◆", -3));
var_dump(mb2_stripos("●○◆ ●○◆ ●○◆", "●○◆", -6));

var_dump(strrpos("abc abc abc", "abc", 0));
var_dump(strrpos("abc abc abc", "abc", 3));
var_dump(strrpos("abc abc abc", "abc", 6));
var_dump(strrpos("abc abc abc", "abc", 9));
var_dump(strrpos("abc abc abc", "abc", 11));
var_dump(strrpos("abc abc abc", "abc", 12));
var_dump(strrpos("abc abc abc", "abc", -1));
var_dump(strrpos("abc abc abc", "abc", -3));
var_dump(strrpos("abc abc abc", "abc", -6));

var_dump(mb2_strrpos("●○◆ ●○◆ ●○◆", "●○◆", 0));
var_dump(mb2_strrpos("●○◆ ●○◆ ●○◆", "●○◆", 3));
var_dump(mb2_strrpos("●○◆ ●○◆ ●○◆", "●○◆", 6));
var_dump(mb2_strrpos("●○◆ ●○◆ ●○◆", "●○◆", 9));
var_dump(mb2_strrpos("●○◆ ●○◆ ●○◆", "●○◆", 11));
var_dump(mb2_strrpos("●○◆ ●○◆ ●○◆", "●○◆", 12));
var_dump(mb2_strrpos("●○◆ ●○◆ ●○◆", "●○◆", -1));
var_dump(mb2_strrpos("●○◆ ●○◆ ●○◆", "●○◆", -3));
var_dump(mb2_strrpos("●○◆ ●○◆ ●○◆", "●○◆", -6));

var_dump(strripos("abc abc abc", "abc", 0));
var_dump(strripos("abc abc abc", "abc", 3));
var_dump(strripos("abc abc abc", "abc", 6));
var_dump(strripos("abc abc abc", "abc", 9));
var_dump(strripos("abc abc abc", "abc", 11));
var_dump(strripos("abc abc abc", "abc", 12));
var_dump(strripos("abc abc abc", "abc", -1));
var_dump(strripos("abc abc abc", "abc", -3));
var_dump(strripos("abc abc abc", "abc", -6));

var_dump(mb2_strripos("●○◆ ●○◆ ●○◆", "●○◆", 0));
var_dump(mb2_strripos("●○◆ ●○◆ ●○◆", "●○◆", 3));
var_dump(mb2_strripos("●○◆ ●○◆ ●○◆", "●○◆", 6));
var_dump(mb2_strripos("●○◆ ●○◆ ●○◆", "●○◆", 9));
var_dump(mb2_strripos("●○◆ ●○◆ ●○◆", "●○◆", 11));
var_dump(mb2_strripos("●○◆ ●○◆ ●○◆", "●○◆", 12));
var_dump(mb2_strripos("●○◆ ●○◆ ●○◆", "●○◆", -1));
var_dump(mb2_strripos("●○◆ ●○◆ ●○◆", "●○◆", -3));
var_dump(mb2_strripos("●○◆ ●○◆ ●○◆", "●○◆", -6));

?>
--EXPECTF--
int(0)
int(4)
int(8)
bool(false)
bool(false)

Warning: strpos(): Offset not contained in string in %s on line %d
bool(false)

Warning: strpos(): Offset not contained in string in %s on line %d
bool(false)

Warning: strpos(): Offset not contained in string in %s on line %d
bool(false)

Warning: strpos(): Offset not contained in string in %s on line %d
bool(false)
int(0)
int(4)
int(8)
bool(false)
bool(false)

Warning: mb2_strpos(): Offset not contained in string in %s on line %d
bool(false)

Warning: mb2_strpos(): Offset not contained in string in %s on line %d
bool(false)

Warning: mb2_strpos(): Offset not contained in string in %s on line %d
bool(false)

Warning: mb2_strpos(): Offset not contained in string in %s on line %d
bool(false)
int(0)
int(4)
int(8)
bool(false)
bool(false)

Warning: stripos(): Offset not contained in string in %s on line %d
bool(false)

Warning: stripos(): Offset not contained in string in %s on line %d
bool(false)

Warning: stripos(): Offset not contained in string in %s on line %d
bool(false)

Warning: stripos(): Offset not contained in string in %s on line %d
bool(false)
int(0)
int(4)
int(8)
bool(false)
bool(false)

Warning: mb2_stripos(): Offset not contained in string in %s on line %d
bool(false)

Warning: mb2_stripos(): Offset not contained in string in %s on line %d
bool(false)

Warning: mb2_stripos(): Offset not contained in string in %s on line %d
bool(false)

Warning: mb2_stripos(): Offset not contained in string in %s on line %d
bool(false)
int(8)
int(8)
int(8)
bool(false)
bool(false)

Warning: strrpos(): Offset is greater than the length of haystack string in %s on line %d
bool(false)
int(8)
int(8)
int(4)
int(8)
int(8)
int(8)
bool(false)
bool(false)

Warning: mb2_strrpos(): Offset is greater than the length of haystack string in %s on line %d
bool(false)
int(8)
int(8)
int(4)
int(8)
int(8)
int(8)
bool(false)
bool(false)

Warning: strripos(): Offset is greater than the length of haystack string in %s on line %d
bool(false)
int(8)
int(8)
int(4)
int(8)
int(8)
int(8)
bool(false)
bool(false)

Warning: mb2_strripos(): Offset is greater than the length of haystack string in %s on line %d
bool(false)
int(8)
int(8)
int(4)
