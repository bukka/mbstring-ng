--TEST--
mb2_strtoupper() / mb2_strtolower() 
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip mbstring not available');
function_exists('mb2_strtolower') and
function_exists('mb2_convert_case' ) or die("skip mb2_convert_case() is not available");
?>
--INI--
output_handler=
--FILE--
<?php
	mb2_internal_encoding( 'ISO-8859-1' );
	print mb2_strtolower( "ABCDEFGHIJKLMNOPQRSTUVWXYZ\n" );
	print mb2_strtoupper( mb2_strtolower( "ABCDEFGHIJKLMNOPQRSTUVWXYZ\n" ) );
	print mb2_strtoupper( "הכן\n" );
	print mb2_convert_case( "הכן\n", MB_CASE_TITLE );
?>

--EXPECT--
abcdefghijklmnopqrstuvwxyz
ABCDEFGHIJKLMNOPQRSTUVWXYZ
ִֻֿ
ִכן
