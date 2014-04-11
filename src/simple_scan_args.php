<?php

/**
 * Function to take an array, like a CLI command and parse it into meaningful
 * key=>value pairs. Args should follow these formats:
 *  -f
 *  -flag
 *  -key=value
 *  -key value
 *
 * @param array $args The array to parse
 * @param array $values The keys that SHOULD have a value
 * @param array $flags The keys that should NOT have a value ... booleans
 * @return array
 */

function simple_scan_args(array $_argv, array $values, array $flags = array()){

	// $values = array_fill_keys($values, false);
	$final = array_fill_keys($flags, false);

	while( $arg = array_shift($_argv) ){
		$arg = trim($arg, " -");

		if(false !== ($pos = strpos($arg, "="))){
			$key         = substr($arg, 0, $pos);
			$final[$key] = substr($arg, ($pos + 1));
			continue;
		}

		if( in_array($arg, $values) ){
			$final[$arg] = array_shift($_argv);
			continue;
		}
		if( in_array($arg, $flags) ){
			$final[$arg] = true;
			continue;
		}
	}
	return $final;
}
