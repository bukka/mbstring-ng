--TEST--
mb2_split()
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip mbstring not available');
function_exists('mb2_split') or die("skip mb2_split() is not available in this build");
?>
--INI--
mbstring.func_overload=0
--FILE--
<?php
	mb2_regex_set_options( '' );
	mb2_regex_encoding( 'EUC-JP' );

	function verify_split( $spliton, $str, $count = 0 )
	{
		$result1 = mb2_split( $spliton, $str, $count );
		$result2 = split( $spliton, $str, $count );
		if ( $result1 == $result2 ) {
			print "ok\n";
		} else {
			print count($result1).'-'.count($result2)."\n";
		}	
	}

	var_dump( mb2_split( b" ", b"a b c d e f g" )
	          == mb2_split( b"[[:space:]]", b"a\nb\tc\nd e f g" ) );

	for ( $i = 0; $i < 5; ++$i ) {
		verify_split( b" ", b"a\tb\tc\td   e\tf g", $i );
	}

	for ( $i = 1; $i < 5; ++$i ) {
		verify_split( b"\xa1\xa1+", b"\xa1\xa1\xa1\xa2\xa2\xa1\xa1\xa1\xa1\xa1\xa1\xa2\xa2\xa1\xa1\xa1", $i );
	}
?>

--EXPECTF--
bool(true)

Deprecated: Function split() is deprecated in %s on line %d
ok

Deprecated: Function split() is deprecated in %s on line %d
ok

Deprecated: Function split() is deprecated in %s on line %d
ok

Deprecated: Function split() is deprecated in %s on line %d
ok

Deprecated: Function split() is deprecated in %s on line %d
ok

Deprecated: Function split() is deprecated in %s on line %d
ok

Deprecated: Function split() is deprecated in %s on line %d
2-2

Deprecated: Function split() is deprecated in %s on line %d
3-3

Deprecated: Function split() is deprecated in %s on line %d
4-4

