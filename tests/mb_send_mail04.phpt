--TEST--
mb2_send_mail() test 4 (lang=German)
--SKIPIF--
<?php
if (!function_exists("mb2_send_mail") || !mb2_language("german")) {
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

/* German (iso-8859-15) */
if (mb2_language("german")) {
	mb2_internal_encoding("ISO-8859-15");
	mb2_send_mail($to, "Pr"."\xfc"."fung ".mb2_language(), "Pr"."\xfc"."fung");
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
Subject: =?ISO-8859-15?Q?Pr=FCfung=20German?=
Mime-Version: 1.0
Content-Type: text/plain; charset=%s-8859-15
Content-Transfer-Encoding: 8bit

Prüfung
