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


include('forma.html');








//=========================================================
                 // Формы
//-------------------------------------------------------


// МЕНЯЕМ ТУТ!!!
if (isset($_POST['first_name']) && isset($_POST['last_name'])

    && isset($_POST['middle_name'])

    && isset($_POST['fone_namber_1'])

){
 




 // МЕНЯЕМ ТУТ!!!
    // Переменные с формы
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $middle_name = $_POST['middle_name'];

    $fone_namber_1 = $_POST['fone_namber_1'];






     
    // Параметры для подключения
    $db_host = "127.0.0.1"; 
    $db_user = "root"; // Логин БД
    $db_password = ""; // Пароль БД
    $db_table = "customers"; // Имя Таблицы БД
     
    // Подключение к базе данных
    $db = mysql_connect($db_host,$db_user,$db_password) OR DIE("Не могу создать соединение ");
     
    // Выборка базы
    mysql_select_db("veterinarnaja_baza",$db);
     
    // Установка кодировки соединения
    mysql_query("SET NAMES 'utf8'",$db);







     // МЕНЯЕМ ТУТ - 2 РАЗА!!!
    $result = mysql_query ("INSERT INTO ".$db_table." (first_name,last_name,middle_name,fone_namber_1)



     VALUES ('$first_name','$last_name','$middle_name','$fone_namber_1')");





    
     
    if ($result = 'true'){
        echo "Информация занесена в базу данных";
    }else{
        echo "Информация не занесена в базу данных";
    }
}







?>
