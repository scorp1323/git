<?php

/*
 * PHP Start | Теория
 * Урок 5: Циклы
 * Задача 2: Квадраты чисел
 */


define('N', 100);

// Добавим на страницу заголовок
echo "<h1>Программа находит числа, квадраты которых не больше ".N. "</h1>";

for($i = 1; N > ($k = $i*$i); $i++) {
    echo "Число $i. Его квадрат: {$k}";
    echo '<hr>';
}

/*
 * N > ($k = $i*$i) - это условия выхода из цикла. Тут написано, что цикл нужно 
 * прервать когда квадрат очередного числа ($i) будет больше N
 * Также мы можем записать в переменную $k значение квадрата очередного числа
 * для того, чтоб использовать его в теле цикла для вывода на страницу 
 */