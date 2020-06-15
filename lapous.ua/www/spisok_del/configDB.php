<?php


$user = 's1323_s1323';// заданное вами имя польз.(либо дает провайдер)
$pass = '131313';// заданный вами пароль (чаще пустой)
$opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'',
    ];


$dsn = 'mysql:host=localhost;dbname=s1323_to-do';
$pdo = new PDO($dsn, $user, $pass, $opt);



?>