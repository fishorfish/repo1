<?php

$arr = [
	'1'=> ['price' => 10, 'count' => 2],
	'2'=> ['price' => 5, 'count' => 5],
	'3'=> ['price' => 8, 'count' => 5],
	'4'=> ['price' => 12, 'count' => 4],
	'5'=> ['price' => 8, 'count' => 4],
];

function cmp($a, $b) {
	if ($a['price'] < $b['price']) {
		return true;
	} else if ($a['price'] > $b['price']) {
		return false;
	} else {
		return 0;
	}
}

usort($arr, 'cmp');
print_r($arr);


