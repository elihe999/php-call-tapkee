--TEST--
tapkee_test1() Basic test
--SKIPIF--
<?php
if (!extension_loaded('tapkee')) {
	echo 'skip';
}
?>
--FILE--
<?php
$ret = tapkee_test1();

var_dump($ret);
?>
--EXPECT--
The extension tapkee is loaded and working!
NULL
