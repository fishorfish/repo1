<?php
echo "hello, doggo";
var_dump("Отладка"); //для отладки
$first_var = 89;
$first_var = "String"; //переопределили значение переменной в строчный тип
//хранение по значению:
$second_var = $first_var;
$second_var = 90;
var_dump($first_var, $second_var);
//ведет к изменению одной переменной, вторая остается преждней

//хранение по ссылке:
$first = "first";
$second = &$first;
$second = "second";
var_dump($first, $second);

//ведет к изменению двух переменных


$a = "hello";
$$a = "PHP";
echo "$a ${$a}</br>";
echo "$a $hello</br>";

//константы (можно помещать массивы в константы)
//объявление ($ не ставится):
define("CONST_NAME", "Const value");
const CONST2 = true;

//получить значение: 
echo CONST2;
echo constant(CONST2);

//var_dump(get_defined_constants());

//предопределенные переменные
//var_dump($GLOBALS); //область видимости глобальная
//var_dump($_SERVER); //все о сервере
//var_dump($_REQUEST); // все о запросе

//Типы данных:
// кол-во выделяемой памяти, формат значения
//Простые(скалярные): string, boolean, integer, float/double/real
//Смешанные типы: arrays, objects
//Специальные типы: null, resource

isset($some_var); //проверка на наличие переменной












?>