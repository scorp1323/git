<?php
$a = 5;
$b = $a;
$a = 10;
echo $a, ' ', $b;

?>
- присвоить $a 5
- присвоить $b значение $a = 5
- присвоить $a 10
- вывести $a и $b
- выведет $a=10 и $b=5

Переменные а и в после операции копирования указывают на разние ячейки памяти, т.е. при смене одной переменной вторая остается неизменной!!!