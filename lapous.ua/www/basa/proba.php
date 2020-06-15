<?php

$host = '127.0.0.1'; // или (localhost)  - имя хоста (уточняется у провайдера)
$dbname = 's1323_Oskar'; // имя базы данных, которую вы должны создать
$user = 'root'; // заданное вами имя пользователя, либо определенное провайдером
$password = ''; // заданный вами пароль (чаще пустой)
//====================================================

$charset = 'utf8'; // кодировка

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

$opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'',
    ];



$db = new PDO($dsn, $user, $password, $opt);

$result = $db->query('SELECT * ' . 'FROM publication ' . 'ORDER BY id  ' . 'LIMIT 10');

foreach ($result as $row){
 #       echo '<pre>';
#    $statti = ($row['id'] . '<br/>' . $row['h1'] . $row['content']);
 #   	echo '<pre>';
 #========================
 	$ollPublication[] = $row;

}

#print_r ($statia['0']['h1']);