--TEST--
mb2_send_mail() test 1 (lang=neutral)
--SKIPIF--
<?php
if (!function_exists("mb2_send_mail") || !mb2_language("neutral")) {
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

/* neutral (UTF-8) */
if (mb2_language("neutral")) {
	mb2_internal_encoding("none");
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
Subject: test neutral
Mime-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: BASE64

dGVzdA==
