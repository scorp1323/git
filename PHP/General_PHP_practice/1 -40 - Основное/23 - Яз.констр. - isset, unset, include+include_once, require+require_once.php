<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//=================================================
// Языковые конструкции:
// В отличие от ф-й, можно вызывать без ()

// echo  &  print
// return
// die  & exit
// isset  & unset
// include  & include_once
// require  & require_once
// empty
// eval
// list


//isset() — Определяет, была ли установлена переменная значением, отличным от NULL
$var = '';

// Проверка вернет TRUE, поэтому текст будет напечатан.
if (isset($var)) {
    echo "Эта переменная определена, поэтому меня и напечатали.";
}
echo '<br>';

// В следующем примере мы используем var_dump для вывода
// значения, возвращаемого isset().

$a = "test";
$b = "anothertest";

var_dump(isset($a));     // TRUE
	echo '<br>';
var_dump(isset($a, $b)); // TRUE
	echo '<br>';

unset ($a);

var_dump(isset($a));     // FALSE
	echo '<br>';
var_dump(isset($a, $b)); // FALSE
	echo '<br>';

$foo = NULL;
var_dump(isset($foo));   // FALSE
	echo '<hr>';
//=========================
//unset() — Удаляет переменную
$a = 'Katerpiller';
	var_dump($a); //"Katerpiller" 
unset($a);
	var_dump($a); // Undefined variable   NULL 
echo '<br>';



//Если переменная, объявленная глобальной, удаляется внутри функции, то будет удалена только локальная переменная. Переменная в области видимости вызова функции сохранит то же значение, что и до вызова unset().
function destroy_foo() 
{
    global $foo;
    unset($foo);
}

$foo = 'bar';
destroy_foo();
echo $foo; // bar
	echo '<br>';
//==========================
//Выражение include включает и выполняет указанный файл.
//Когда файл включается, его код наследует ту же область видимости переменых, что и строка, на которой произошло включение. Все переменные, доступные на этой строке во включающем файле, будут также доступны во включаемом файле. Однако все функции и классы, объявленные во включаемом файле, имеют глобальную область видимости.
 include 'porodu.txt';
 echo '<br>';
 //========================
 //Выражение include_once включает и выполняет указанный файл во время выполнения скрипта. Его поведение идентично выражению include, с той лишь разницей, что если код из файла уже один раз был включен, он не будет включен и выполнен повторно и вернёт TRUE. Как видно из имени, он включит файл только один раз.
include_once 'porodu.txt';
 echo '<hr>';
 //=======================
 //require аналогично include, за исключением того, что при ошибке он также выдаст фатальную ошибку уровня E_COMPILE_ERROR. Другими словами, он остановит выполнение скрипта, тогда как include только выдал бы предупреждение E_WARNING, которое позволило бы скрипту продолжить выполнение.
 require('somefile.php');
//=================
//Выражение require_once аналогично require за исключением того, что PHP проверит, включался ли уже данный файл, и если да, не будет включать его еще раз.
 require_once('somefile.php');
 	echo '<hr>';