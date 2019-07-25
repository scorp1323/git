<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ветеринарная клиника "Оскар"</title>
  <link rel='StyleSheet' type='text/css' href='../css/style.css' />
</head>
<body>
<!-- подключаем горизонтальное меню -->
<? include_once "../horisontell_meny.php" ?>

<div class="wrapper">
  <div class="wrapper1">
      <div class="wr1_1">
           <h1>Ветеринарная клиника  "Оскар"</h1>
      </div>  
  </div>

<h2>Прайс</h2>

<style type="text/css">
   TABLE {
    width: 300px; /* Ширина таблицы */
    border-collapse: collapse; /* Убираем двойные линии между ячейками */
   }
   TD, TH {
    padding: 3px; /* Поля вокруг содержимого таблицы */
    border: 1px solid black; /* Параметры рамки */
   }
   TH {
    background: #b0e0e6; /* Цвет фона */
   }
  </style>

<table>
    <thead>
        <th>№</th>
        <th>Наименование услугии</th>
        <th>Цена, грн за ед
            <td>Цена, грн за ед</td>
        	<td>Цена, грн за ед</td>
        </th>
    </thead>
<?
$query = "SELECT * FROM `price`";
//выбрать из таблицы `price` БД все записи из всех полей. 
$res = mysqli_query($connection, $query);
//присвоить результат выбора имя функци $res

// while($row = mysqli_fetch_array($res))
// {
// echo $row['id']."&nbsp;";
// echo $row['service']."&nbsp;";
// echo $row['price_min'];
// echo ' - ';
// echo  $row['price_max']."<br>\n";
// }
//пока введенная нами переменная $row получает не нулевые результаты работы функции mysql_fetch_row следует выдать в броузер значение полей $row['id'], $row['names_types_of_streets'], $row['...'], $row['...'] с помощью echo
	?>

    <tbody>
        <?php while ($row = mysqli_fetch_assoc($res)) { ?>
            <tr>
                <?php foreach ($row as $col_value) { ?>
                    <td><?php echo $col_value ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </tbody>
</table>
</table>


<div>

	

</div>



<footer>
  <!-- подключаем футер -->
<? include_once "../footer.php" ?>
</footer>

</body>
</html>
