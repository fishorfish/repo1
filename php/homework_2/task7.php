<?php

$array = ['a','b','c','d','e','f','j'];
foreach($array as &$value) {
	$value = strtoupper($value);
}
print_r($array);