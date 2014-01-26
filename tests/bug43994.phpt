--TEST--
Test mb2_ereg() function : mb2_ereg 'successfully' matching incorrectly
--SKIPIF--
<?php
extension_loaded('mbstring') or die('skip');
function_exists('mb2_ereg') or die("skip mb2_ereg() is not available in this build");
?>
--FILE--
<?php
/* Prototype  : int mb2_ereg(string $pattern, string $string [, array $registers])
 * Description: Regular expression match for multibyte string 
 * Source code: ext/mbstring/php_mbregex.c
 */

/*
 * mb2_ereg 'successfully' matching incorrectly: 
 * Bug now seems to be fixed - error message is now generated when an 'empty'
 * pattern is supplied to mb2_ereg. Similar error message to ereg().
 */

$unset_var = 10;
unset ($unset_var);
$inputs = array(NULL, null, false, FALSE, "", '', @$undefined_var,
@$unset_var);

$iterator = 1;
foreach($inputs as $input) {
	if(@is_array($mb2_regs)){
		$mb2_regs = '';
	}
	echo "\n-- Iteration $iterator --\n";
	echo "Without \$regs arg:\n";
	var_dump( mb2_ereg($input, 'hello, world') );
	echo "With \$regs arg:\n";
	var_dump(mb2_ereg($input, 'hello, world', $mb2_regs));
	var_dump($mb2_regs);
	$iterator++;
};
?>

--EXPECTF---- 

-- Iteration 1 --
Without $regs arg:

Warning: mb2_ereg(): empty pattern in %s on line %d
bool(false)
With $regs arg:

Warning: mb2_ereg(): empty pattern in %s on line %d
bool(false)
NULL

-- Iteration 2 --
Without $regs arg:

Warning: mb2_ereg(): empty pattern in %s on line %d
bool(false)
With $regs arg:

Warning: mb2_ereg(): empty pattern in %s on line %d
bool(false)
NULL

-- Iteration 3 --
Without $regs arg:

Warning: mb2_ereg(): empty pattern in %s on line %d
bool(false)
With $regs arg:

Warning: mb2_ereg(): empty pattern in %s on line %d
bool(false)
NULL

-- Iteration 4 --
Without $regs arg:

Warning: mb2_ereg(): empty pattern in %s on line %d
bool(false)
With $regs arg:

Warning: mb2_ereg(): empty pattern in %s on line %d
bool(false)
NULL

-- Iteration 5 --
Without $regs arg:

Warning: mb2_ereg(): empty pattern in %s on line %d
bool(false)
With $regs arg:

Warning: mb2_ereg(): empty pattern in %s on line %d
bool(false)
NULL

-- Iteration 6 --
Without $regs arg:

Warning: mb2_ereg(): empty pattern in %s on line %d
bool(false)
With $regs arg:

Warning: mb2_ereg(): empty pattern in %s on line %d
bool(false)
NULL

-- Iteration 7 --
Without $regs arg:

Warning: mb2_ereg(): empty pattern in %s on line %d
bool(false)
With $regs arg:

Warning: mb2_ereg(): empty pattern in %s on line %d
bool(false)
NULL

-- Iteration 8 --
Without $regs arg:

Warning: mb2_ereg(): empty pattern in %s on line %d
bool(false)
With $regs arg:

Warning: mb2_ereg(): empty pattern in %s on line %d
bool(false)
NULL
