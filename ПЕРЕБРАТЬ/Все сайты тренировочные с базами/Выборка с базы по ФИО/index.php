<?php
//так всегда начинается php код(файл)
//=====================================================

header('Content-Type: text/html; charset=utf-8');
// теперь можно писать на русском без кракозяблов
//======================================================

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//=======================================================
?> 
<meta charset="utf-8">
<?php


 // определяем начальные данные
    $db_host = 'localhost';//или "127.0.0.1"
    $db_name = 'veterinarnaja_baza';
    $db_username = 'root';
    $db_password = '';
    $db_table_to_show = 'customers';

    // соединяемся с сервером базы данных
    $connect_to_db = mysql_connect($db_host, $db_username, $db_password)
    or die("Не могу создать соединение: " . mysql_error());

    mysql_query("SET NAMES 'utf8'");
    //

    // подключаемся к базе данных
    mysql_select_db($db_name, $connect_to_db)
    or die("Не могу найти базу: " . mysql_error());




// выбираем все значения из таблицы "customers"
    $qr_result = mysql_query("select `id`,`first_name`,`last_name`,`middle_name` from " . $db_table_to_show)
    or die(mysql_error());

    // пишем на страницу сайта заголовки HTML-таблицы
  echo '<table border="1">';
  echo '<thead>';
  echo '<tr>';
  echo '<th>id</th>';
  echo '<th>Имя</th>';
  echo '<th>Фамилия</th>';
  echo '<th>Отчество</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';
  
   // выводим в HTML-таблицу все данные клиентов из таблицы MySQL 
  while($data = mysql_fetch_array($qr_result)){ 
    echo '<tr>';
    
    echo '<td>' . $data['id'] . '</td>';
    echo '<td>' . $data['last_name'] . '</td>';
    echo '<td>' . $data['first_name'] . '</td>';
    echo '<td>' . $data['middle_name'] . '</td>';
    echo '</tr>';
  }
  
  echo '</tbody>';
  echo '</table>';

    // закрываем соединение с сервером  базы данных
    mysql_close($connect_to_db);
?>
<code lang="php">
    <hr>




<?php
$value = '123abc456def';
echo filter_var($value, FILTER_SANITIZE_NUMBER_INT);
?>