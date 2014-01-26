--TEST--
mb2_regex_set_options() 
--SKIPIF--
<?php
extension_loaded('mbstring') or die("skip mbstring not available\n");
function_exists('mb2_regex_set_options') or die("skip\n");
?>
--FILE--
<?php
	mb2_regex_set_options( 'x' );
	print mb2_ereg_replace(' -', '+', '- - - - -' );

	mb2_regex_set_options( '' );
	print mb2_ereg_replace(' -', '+', '- - - - -' );
?>

--EXPECT--
+ + + + +-++++
