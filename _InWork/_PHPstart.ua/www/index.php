<?php
//так всегда начинается php код(файл)
//============================================
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//============================================
 
//regular expressions
//preg_match, preg_replace


$string = 'Apples and oranges ';
$pattern = '/p{3}/';

$result = preg_match($pattern, $string);

var_dump($result);
