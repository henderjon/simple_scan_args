<?php

require_once "vendor/autoload.php";

FUnit::test("simple_scan_args()", function(){

	$input = array(
		"filename.txt",
		"-f1",
		"-flag1",
		"--f2",
		"--flag2",
		"-key1=value",
		"-key2",
		"value2",
		"JUNK-IGNORE-ME",
		"--key3=value",
		"--key4",
		"value4",
	);

	$output = simple_scan_args($input,
		array("key1", "key2", "key3", "key4", "key5"),
		array("f1", "f2", "f3", "flag1", "flag2", "flag3")
	);

	$expected = array(
		"f1"     => true,
		"f2"     => true,
		"f3"     => false,
		"flag1"  => true,
		"flag2"  => true,
		"flag3"  => false,
		"key1"   => "value",
		"key2"   => "value2",
		"key3"   => "value",
		"key4"   => "value4",
	);

	FUnit::equal($expected, $output);

});