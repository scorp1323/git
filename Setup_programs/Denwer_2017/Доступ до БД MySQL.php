<?php
//На Денвері:
$user = 'root'; // ім'я користувача
$password = ''; // пароль (порожній)

//=======================================================


//На Сайті:
$host = '127.0.0.1'; // или (localhost)  - имя хоста (уточняется у провайдера)
$dbname = 's1323_exams'; // имя базы данных, которую вы должны создать
$user = 's1323'; // заданное вами имя пользователя, либо определенное провайдером
$password = '131313'; // заданный вами пароль (чаще пустой)
$charset = 'utf8'; // кодировка


$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

$opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_EMULATE_PREPARES   => false,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'',
    ];

$db = new PDO($dsn, $user, $password, $opt);