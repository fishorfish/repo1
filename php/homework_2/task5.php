<?php

$fruits = [
	["name"=> "apple", "color"=> "red",],
	["name"=> "orange", "color"=> "orange",],
	["name"=> "lemon", "color"=> "yellow",],
	["name"=> "apple", "color"=> "green",],
	["name"=> "plum", "color"=> "violet",],
	["name"=> "plum", "color"=> "violet",],
	["name"=> "apple", "color"=> "red",],
	["name"=> "lemon", "color"=> "yellow",],
	["name"=> "banana", "color"=> "yellow",]
];

for ($i = 0; $i < 9; $i++) { 
	$fruits[$i]["count"] = count($fruits[$i]);
}

$result = array_unique($fruits, SORT_REGULAR);

foreach($result as &$value) {
	print_r($value);
	print_r("</br>");
}