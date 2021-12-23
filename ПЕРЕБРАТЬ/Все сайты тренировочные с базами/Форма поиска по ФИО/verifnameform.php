
<!-- ========================СЛЕДУЮЩАЯ ФОРМА======== -->

<?php
unset($_POST);
?>

<hr size="3" color = "#00FFFF">
<hr color = "#ff0000" size ="5"/>

<form method="POST" action="">

<input name="veriflastname" type="text" placeholder="Проверка фамилии на наличие" size="30" autocomplete="on" autofocus/>

<input name="verifsurname" type="text" placeholder="Проверка имени (наличие)" size="20" autocomplete="on"/><p>

<input type="submit" value="Проверить"/>
<input type="reset" name="reset" value="Очистить">

<output  id="verifsurname" size="30" oninput="x.value=parseInt(a.value)+parseInt(b.value)">
    

   

<?php

//=========================================================
                 // Формы
//-------------------------------------------------------


// МЕНЯЕМ ТУТ!!!
if (isset($_POST['veriflastname'])
    && isset($_POST['verifsurname'])


)

{
 

 // МЕНЯЕМ ТУТ!!!
    // Переменные с формы
    $veriflastname = $_POST['veriflastname'];
    $verifsurname = $_POST['verifsurname'];


    // Параметры для подключения
    $db_host = "127.0.0.1"; 
    $db_user = "root"; // Логин БД
    $db_password = ""; // Пароль БД
    $db_table = "customers"; // Имя Таблицы БД
     
    // Подключение к базе данных
    $db = mysql_connect($db_host,$db_user,$db_password) 
        OR DIE("Не могу создать соединение ");

     // Установка кодировки соединения
    mysql_query("SET NAMES 'utf8'",$db);
    //если не работает, убери ,$db
     
    // Выборка базы
    mysql_select_db("veterinarnaja_baza",$db);
     
   




   // выбираем все значения из таблицы "student"
    $resultverif = mysql_query("select * from " . $db_table)
    or die(mysql_error());





    
     
     while($data = mysql_fetch_array($resultverif)){ 
    echo '<tr>';
    echo '<td>' . $resultverif['lastname'] . '</td>';
    echo '<td>' . $resultverif['surname'] . '</td>';
    echo '</tr>';
  }
}
  



?>
 <textarea name="verif_aut" placeholder="Найденые похожие" required form="veriflastname,verifsurname" rows="5" cols="40" ></textarea></p>

  </output>
</form>


<hr color="000000">
