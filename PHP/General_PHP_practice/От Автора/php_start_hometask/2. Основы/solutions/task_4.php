<?php

/*
 * PHP Start | Теория
 * Урок 3: Основы
 * Задача 4
 */

/*
 * Мы будем использовать переменные $a, $b, $c, $d
 * Задайте значения 1 и 2 переменным $a, $b соответственно
 */
$a = 1;
$b = 2;

/*
 * Выведите значения переменных $a, $b
 * Используем html-тег <br> переноса строки для красивого вывода данных
 */
echo "a ="; echo $a; echo "<br>";
echo "b ="; echo $b; echo "<br>";

/*
 * Скопируйте значение переменной $a в переменную $c
 */
$c = $a;

/*
 * Скопируйте переменную $b в переменную $d по ссылке
 */
$d = &$b;

/*
 * Распечатайте значения переменных $c, $d
 */
echo "c ="; echo $c; echo "<br>";
echo "d ="; echo $d; echo "<br>";

/*
 * Присвойте переменным $a, $b значения 3 и 4 соответственно
 */
$a = 3;
$b = 4;

/*
 * Распечатайте переменнные $a, $b, $c, $d
 * Используем горизонтальный html-разделитель <hr> для красивого вывода данных
 */
echo "<hr>";
echo "a ="; echo $a; echo "<br>";
echo "b ="; echo $b; echo "<br>";
echo "c ="; echo $c; echo "<br>";
echo "d ="; echo $d; echo "<br>";

/*
 * Сделайте выводы относительно полученных результатов
 * Выводы: В случае копирования переменной происходит копирование только значения. 
 * По сути, переменные $a и $c - разные переменные. 
 * Переменной $d была присвоена ссылка на переменную $b. Таким образом, эти переменные
 * указывают на одну область памяти, а значит, если изменить значение одной из
 * этих переменнных, то изменится и другая. Что и видно в результате задачи.
 */