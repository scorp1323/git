Тип Null - спец. тип для переменной без значения

Переменная считается Null если:
 1 - ей была присвоена константа Null
 2 - ей еще не было присвоено ник. знач.
 3 - она была удалена с пом. unset()
 <?php

$a = null;

echo $a;//Не выведет ничего - пусто

echo gettype($a);//Выведет NULL

unset($a);//Удалили $a
echo $a;//Выведет ошибку - $a не обьявлена