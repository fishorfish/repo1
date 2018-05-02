<?php

$arr = ['<p>Some</p>', '<p>info</p>'];

$newArr = array_map(function($v) {
	return trim(strip_tags($v));
}, $arr);

print_r($newArr);