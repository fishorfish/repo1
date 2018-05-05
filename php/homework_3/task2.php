<?php

function sort_by_alphabet(string $string) {
	$output = $string;
	$words = explode(' ', $string);
	if (count($words) > 1) {
		sort($words, SORT_STRING);
		$output = implode(' ', $words);
	}
	return $output;
}
var_dump(sort_by_alphabet('Санкт-Петербург, Москва, Казань, Уфа, Самара'));



