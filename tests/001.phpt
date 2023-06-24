--TEST--
Check if tapkee is loaded
--SKIPIF--
<?php
if (!extension_loaded('tapkee')) {
	echo 'skip';
}
?>
--FILE--
<?php
echo 'The extension "tapkee" is available';
?>
--EXPECT--
The extension "tapkee" is available
