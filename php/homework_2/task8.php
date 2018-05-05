<?php

//$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$array = (range(1, 10));

//Найдите сумму элементов данного массива
echo array_sum($array). "</br>";

//Найдите произведение элементов данного массива
echo array_product($array)."</br>";

//Выведите на экран его элементы в следующем порядке: 1102837465.
$arr = $array;
unset($arr[8]);
$str = '';
while (count($arr) > 0) {
	$str .= array_shift($arr);
	$str .= array_pop($arr);
}
echo $str;
