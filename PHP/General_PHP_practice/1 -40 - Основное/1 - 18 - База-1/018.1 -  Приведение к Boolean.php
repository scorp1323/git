Для явного преобразования к boolean исп. (bool) или (boolean). Однако чаще приведение типа не обязательно, т.к. значение будет авт. преобразовано, если оператор, функция или конструкция требует boolean-аргумент.

При перобразовании в boolean следующие значения рассматриваются как FALSE:
1 - само значение boolean FALSE
2 - integer "0" (ноль)
3 - float "0.0" (ноль)
4 - пустая строка ("", '') и строка '0' ("0")
5 - массив без елементов - пустой
6 - особый тип NULL (включая неустановленные переменные)
7 - обьекты SimpleXML, созданные из пустых тегов.

ВСЕ остальные значения рассматриваются как TRUE (за редкими исключениями), включая любой Resurse и Nan:
1 - само значение boolean TRUE
2 - ЛЮБОЕ ненулевое число (кроме "0" и "0.0")
3 - любая непустая строка
4 - любой непустой массив

<?
var_dump( (bool) 0);
//bool(false) - ноль
echo '<br>';


var_dump((bool) 1);
//bool(true) - любое число
echo '<br>';


var_dump( (bool) -2);
//bool(true) - любое число
echo '<br>';


var_dump((bool) 2.8 );
//bool(true) - любое число
echo '<br>';


var_dump( (bool) 2.3e5);
//bool(true) - число
echo '<hr>';
//-------------------------------------

var_dump( (bool) '');
//bool(false) - пустая строка
echo '<br>';


var_dump( (bool) "");
//bool(false) - пустая строка
echo '<br>';


var_dump( (bool) ' ');
//bool(true) - есть пробел
echo '<br>';


var_dump( (bool) 'foo');
//bool(true) - непустая строка
echo '<hr>';
//------------------------------------------

var_dump( (bool) array(12));
//bool(true) - непустой массив
echo '<br>';


var_dump( (bool) array());
//bool(false) - пустой массив
echo '<hr>';


var_dump( (bool) false);
//bool(false) - сам false
echo '<br>';


var_dump( (bool) true);
//bool(true) - сам true