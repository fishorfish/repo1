<?php

function converter($str, $convertion) {
	if(!is_string($str)) {
		echo "Это не строка!";
		return $str;
	}

	switch ($convertion) {
		case "uppercase":
				return strtoupper($str);
		case "lowercase":
				return strtolower($str);
		case "capitalise":
				return ucwords(strtolower($str));
		default: 
				echo "Такой функции не существует!";
				return $str;
	}
}

converter(1, "capitalise");
echo "<br>";
echo converter("HEY YOU, OUT THERE IN THE COLD", "lowercase");
echo "<br>";
echo converter("getting lonely, getting old", "uppercase");
echo "<br>";
echo converter("CAN you feel me?", "capitalise");