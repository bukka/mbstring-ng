--TEST--
mb2_send_mail() test 3 (lang=English)
--SKIPIF--
<?php
if (!function_exists("mb2_send_mail") || !mb2_language("english")) {
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

/* English (iso-8859-1) */
if (mb2_language("english")) {
	mb2_internal_encoding("ISO-8859-1");
	mb2_send_mail($to, "test ".mb2_language(), "test");
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
Subject: test English
Mime-Version: 1.0
Content-Type: text/plain; charset=%s-8859-1
Content-Transfer-Encoding: 8bit

test
