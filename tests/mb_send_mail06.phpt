--TEST--
mb2_send_mail() test 6 (lang=Traditional Chinese)
--SKIPIF--
<?php
if (!function_exists("mb2_send_mail") || !mb2_language("Traditional Chinese")) {
	die("skip mb2_send_mail() not available");
}
if (!@mb2_internal_encoding('BIG5')) {
	die("skip BIG5 encoding is not available on this platform");
}
?>
--INI--
sendmail_path=/bin/cat
--FILE--
<?php
$to = 'example@example.com';

/* default setting */
mb2_send_mail($to, mb2_language(), "test");

/* Traditional Chinese () */
if (mb2_language("traditional chinese")) {
	mb2_internal_encoding('BIG5');
	mb2_send_mail($to, "´úÅç ".mb2_language(), "´úÅç");
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
Subject: =?BIG5?B?tPrF5yBUcmFkaXRpb25hbCBDaGluZXNl?=
Mime-Version: 1.0
Content-Type: text/plain; charset=BIG5
Content-Transfer-Encoding: 8bit

´úÅç
