<?php
//так всегда начинается php код(файл)
//============================================
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//============================================
?>
Приведение к integer:
1 - false преобразуется в "0" а true в "1"
2 - у float дрробная часть будет округлена в сторону нуля
3 - NULL преобр. в "0"
4 - у строк - если 1-й символ цыфра, "+" или "-", то интерпретатор переходит к анализу 2-го символа - если 2-й символ цыфра - то интерпретатор переходит к анализу 3-го симвода и т.д. пока не будет обнаружена не цыфра - после этого интерпретатор возвращает полученное число.
Если строка пустая или 1-й символ не цыфра, "+" или "-" - строка преобр. в "0"


<?
echo (int) false, '<br>';
//0

echo (int) true, '<br>';
//1

echo (int) NULL, '<hr>';
//0
//-------------------------
echo (int) 12.3, '<hr>';
//12
//--------------------------
echo(int) '4 месяца беременна ', '<br>';
//4

echo (int) '+17 процентов прибыли', '<br>';
//17

 echo(int) '-32 градуса мороза', '<br>';
 //-32

echo(int) '', '<br>';
//0

echo(int) "", '<br>';
//0

echo (int) ' ', '<br>';
//0
//-----------------------------------
?>
Неявное преобразование:
<?
$a = '1';
echo '$a = ', $a ,' - ',  gettype($a), '<br>';
//$a = 1 - string

$a = 7;
echo '$a = ', $a , ' - ', gettype($a), '<br>';
//$a = 7 - integer

$a*=2;
echo '$a = ', $a, ' - ', gettype($a), '<br>';
//$a = 14 - integer

$a*= 1.3;
echo '$a = ', $a, ' - ', gettype($a), '<br>';
//$a = 18.2 - double

$a = 5 * '10 литров пива';
echo '$a = ', $a, ' - ', gettype($a), '<br>';
//$a = 50 - integer


$a = '5 человек';// string
$b = 10;//integer
echo '$c = ', $c = $a + $b, gettype($c), '<br>' ;
//$c = 15 - integer