--TEST--
mb2_strlen()
--SKIPIF--
<?php extension_loaded('mbstring') or die('skip mbstring not available'); ?>
--INI--
mbstring.func_overload=0
--FILE--
<?php
// TODO: Add more encodings

//$debug=true;
ini_set('include_path', dirname(__FILE__));
include_once('common.inc');

// restore detect_order to 'auto'
mb2_detect_order('auto');

// Test string
$euc_jp = '0123この文字列は日本語です。EUC-JPを使っています。0123日本語は面倒臭い。';
$ascii  = 'abcdefghijklmnopqrstuvwxyz;]=#0123456789';

// ASCII
echo "== ASCII ==\n";
print  mb2_strlen($ascii,'ASCII') . "\n";
print  strlen($ascii) . "\n";

// EUC-JP
echo "== EUC-JP ==\n";
print  mb2_strlen($euc_jp,'EUC-JP') . "\n";
mb2_internal_encoding('EUC-JP') or print("mb2_internal_encoding() failed\n");
print  strlen($euc_jp) . "\n";

// SJIS
echo "== SJIS ==\n";
$sjis = mb2_convert_encoding($euc_jp, 'SJIS','EUC-JP');
print  mb2_strlen($sjis,'SJIS') . "\n";
mb2_internal_encoding('SJIS') or print("mb2_internal_encoding() failed\n");
print  strlen($sjis) . "\n";

// JIS
// Note: either convert_encoding or strlen has problem
echo "== JIS ==\n";
$jis = mb2_convert_encoding($euc_jp, 'JIS','EUC-JP');
print  mb2_strlen($jis,'JIS') . "\n";
mb2_internal_encoding('JIS')  or print("mb2_internal_encoding() failed\n");
print  strlen($jis) . "\n"; 

// UTF-8
// Note: either convert_encoding or strlen has problem
echo "== UTF-8 ==\n";
$utf8 = mb2_convert_encoding($euc_jp, 'UTF-8','EUC-JP');
print  mb2_strlen($utf8,'UTF-8') . "\n";
mb2_internal_encoding('UTF-8')  or print("mb2_internal_encoding() failed\n");
print  strlen($utf8) . "\n";  


// Wrong Parameters
echo "== WRONG PARAMETERS ==\n";
// Array
// Note: PHP Warning, strlen() expects parameter 1 to be string, array given
$r = strlen($t_ary);
echo $r."\n";
// Object
// Note: PHP Warning, strlen() expects parameter 1 to be string, object given
$r = strlen($t_obj);
echo $r."\n";
// Wrong encoding
mb2_internal_encoding('EUC-JP');
$r = mb2_strlen($euc_jp, 'BAD_NAME');
echo $r."\n";




?>

--EXPECT--
== ASCII ==
40
40
== EUC-JP ==
43
72
== SJIS ==
43
72
== JIS ==
43
90
== UTF-8 ==
43
101
== WRONG PARAMETERS ==
ERR: Warning

ERR: Warning

ERR: Warning



