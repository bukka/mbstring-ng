--TEST--
mb2_send_mail() test 2 (lang=Japanese)
--SKIPIF--
<?php
if (!function_exists("mb2_send_mail") || !mb2_language("japanese")) {
	die("skip mb2_send_mail() not available");
}
?>
--INI--
sendmail_path=/bin/cat
--FILE--
<?php
$to = 'example@example.com';

/* default setting */
mb2_send_mail($to, mb2_language(), "test");

/* Japanese (EUC-JP) */
if (mb2_language("japanese")) {
	mb2_internal_encoding('EUC-JP');
	mb2_send_mail($to, "¥Æ¥¹¥È ".mb2_language(), "¥Æ¥¹¥È");
}
?>
--EXPECTF--
To: example@example.com
Subject: %s
Mime-Version: 1.0
Content-Type: text/plain; charset=%s
Content-Transfer-Encoding: %s

%s
To: example@example.com
Subject: =?ISO-2022-JP?B?GyRCJUYlOSVIGyhCIEphcGFuZXNl?=
Mime-Version: 1.0
Content-Type: text/plain; charset=ISO-2022-JP
Content-Transfer-Encoding: 7bit

$B%F%9%H(B
