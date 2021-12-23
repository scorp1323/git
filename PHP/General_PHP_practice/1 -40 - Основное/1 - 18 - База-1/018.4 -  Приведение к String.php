Приведение к строке:
 - TRUE преобр. в 1
 - FALSE преобр. в 0
 - целое число или число с плав. точкой преобр. в строку, состоящую из цыфр числа
 - массив преобр. в строку Array
 - NULL преобр. в пустую строку
 - Resurse  преобр. в строку вида "Resurse id# 1"
 - преобр. обьекта в строку исп. метод __toString()

 <?
 
echo(string) true, '<br>';
//'1'

echo(string) false, '<br>';
//'пустая строка', ''

echo (string) 124, '<br>';
//'124'

echo(string) -127, '<br>';
//'-127'

$arr = ['Jon', 'Enn', 'Pitt'];
echo(string) $arr;
//Notice: Array to string conversion in ...index.php on line 24

echo (string) NULL;
//пустая строка