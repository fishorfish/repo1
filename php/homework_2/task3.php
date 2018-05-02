<?php

setlocale(LC_ALL, 'ru_RU.UTF-8');
$current_date = strftime('%A');
$arr = ["понедельник","вторник","среда","четверг","пятница","суббота","воскресенье"];

foreach ($arr as $value) {
	if ($current_date == $value) {
		echo "День недели: <b>$value</b></br>";
	} else {
		echo "День недели: $value</br>";
	}
}

