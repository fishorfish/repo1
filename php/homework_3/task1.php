<?php

function greeting($name = "default value") {
	$name = "гость";
	echo "Приветствуем тебя, {$name}!";
}

greeting();
