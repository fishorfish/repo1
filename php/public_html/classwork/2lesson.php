<?php
//boolean
$boo1 = true;
$boo2 = false;

is_bool($boo2);

//integer
// для 32 битных - 2 млрдб для 64 битных - 9Е18
var_dump(PHP_INT_SIZE);
var_dump(PHP_INT_MAX); //показывают размер в байтах
var_dump(PHP_INT_MIN);

//is_integer(var: 5/2);
//is_float(var: 5/2);

//round(val: 3.67, precision: 0, mode: PHP_INT_HALF_UP);
// прочесть про формат двоичной точности, будут спрашивать 
//пользоваться библиотекой, чтобы было точное вычисление

//NaN / Infinity
// с пхп 7.0 приводится к int = 0
$some_int = 80;

$str = "String $some_int"; // выведет содержимое переменной

$str2 = 'String $some_int'; // выведет как текст

$str = "String {$some_int}"; 

$str2 = 'String {$some_int}';

echo "$str";
echo "$str2";

//объявление нужной переменной (перед именем переменной)
//int 
//bool
//float/double/real
//string
//array
//object

//0, "", null - приводятся к false при преобразовании к строке
//" ", -1 - true


//Operators

$a = 9;
$b = 8;

// операторы присваивания:

$a = $b;
$a += $b;  //$a = $a + $b
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;
$a .= $b; // конкатенация

//Arifmetic operators:
$c = $a + $b;
// see higher

//Инкремент (++) и декремент (--)

$a = 9;
$b = 8;

var_dump(++$a); //10
var_dump($a); //10
var_dump($a++); //10
var_dump($a); //11


var_dump(--$a); 
var_dump($a); 
var_dump($a--); 
var_dump($a); 

//конкатенация строк:
$str1 = "String";
$str2 = "String";
var_dump($str1. $str2);

//Операторы сравнения: 
 /*>
 <
 >=
 <=
 ==
 ===
 !=
 !==*/
 // с PHP 7 появился "<=>" сравнивает переменные и сообщает, какая больше, возвращая -1, 0 или 1
 var_dump($str1<=>$str2);


 //Логические операторы:
 // || or true - no matter
 // && and true-true
 // xor not false => true ( false - true)

 //оператор исполнения
 $a = 'ifconfig';
 echo "$a";

 // тернарный оператор:

 //условие ? значение1( в случае true) : значение 2( в случае false);


 //значение1( в случае true) : значение 2( в случае false); сокращенная запись
 

 //с 7 PHP появился оператор сравнения с null
 //$some_res = $some_var ?? 'default';
 

$num = 89;
$a = $num % 10;
$b = ($mum - $a)/10;

echo $res = ($a > $b) ? $a : $b; //наибольшее двузначное число


$num2 = 456;
$a1 = $num2 % 10;
$b2 = ($mum2 - $a) % 100 / 10;
$c = (integer) ($num2 / 100); //наименьшее трехзначное число

var_dump($a, $b, $c);

//3 задача(вывести ближайшее число к 10)

$n = 9;
$m = 2;

echo ((10 - $m)>(10 - $n)) ? $n : $m;

//задача 4: 3 переменные,  поменять значения переменных местами и вывести в возрастающем порядке

$a = 2;
$b = 23;
$c = -8;

if($a > $b) {
	//$a = $a + $b;
	//$b = $a - $b;
	//$a = $s - $b;

	$tmp = $a;
	$a = $b;
	$b = $tmp;
} 
if($a >$c) {
		$tmp = $a;
		$a = $c;
		$c = $tmp;
	} 
if($b > $c) {
		$tmp = $b;
		$b = $c;
		$c = $tmp;
	}
var_dump($a, $b, $c);




?>




