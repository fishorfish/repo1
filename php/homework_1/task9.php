<?php

$n = 789;

function getSum($n) {
	$sum = 0;
	while ($n > 0) {
		$sum += $n % 10;
		$n = (int)$n / 10;
	}
	echo $sum;
	
}
getSum($n);


