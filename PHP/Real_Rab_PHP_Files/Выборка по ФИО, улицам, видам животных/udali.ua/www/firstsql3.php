<?php


echo "<h2>Выборка по ФИО</h2>";







$query = "SELECT * FROM `customers`";
//выбрать из таблицы `animal_features` БД все записи из всех полей. 
$res = mysqli_query($connection, $query);
//присвоить результат выбора имя функци $res

while($row = mysqli_fetch_array($res))
{
echo "№: ".$row['id']."<br>\n";
echo "Ф.И.О. ".$row['first_name']."&nbsp";
echo $row['middle_name']."&nbsp";
echo $row['last_name']."<br>\n";
}
//пока введенная нами переменная $row получает не нулевые результаты работы функции mysql_fetch_row следует выдать в броузер значение полей $row['id'], $row['featuers'], $row['...'], $row['...'] с помощью echo.  
//================РАБОТАЕТ!!!!!===============




?>


<hr>
