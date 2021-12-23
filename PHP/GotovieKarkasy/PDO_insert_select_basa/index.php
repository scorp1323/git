<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//============================
header('Content-type: text/html; charset=utf-8');


 # Подключаемся к БД с помощью PDO
 # 1 - обьявляем переменную $pdo, в кот. сохранен обьект класса PDO с исп. "new" и передать параметры (без них - ошибка)
 # 1-й - строка с инструкциями подключения - СУБД и хост 'msql:host=localhost;dbname=slim_db;charset=utf8'
 # 2-й - имя пользователя БД - 'root'
 # 3-й - пароль к БД - пустой ''
 # ========================================
 // public function tryConnect() {
 //  class DBO {

 //    public $DBHOST = 'localhost'; // укажтие имя БД
 //    public $DBNAME = 'slim_db'; // укажтие имя БД
 //    public $DBUSER = 'root';  // укажие имя пользователя БД
 //    public $DBPASS = '';  // укажтие пароль для подкл. к БД

 //    public $dbc = 0;  // connection

 //    try{
 //      $this->dbc = new PDO("mysql:host=" . $this->DBHOST . ";dbname=" . $this->DBNAME, $this->DBUSER, $this->DBPASS);
 //      return $this->dbc;
 //    }
 //    catch(PDOException $e) {
 //        printme(' подключиться к MySQL не получилось', 1);
 //        printme(' проверьте настройки в коде скрипта (поля класса DBO этого скрипта), а также убедитесь что PHP PDO включено | текст ошибки:');
 //        printme("Error: ".$e->getMessage());
 //            //  exit();
 //    }
 //  }
 // }
 //=================================================
 // $pdo = new PDO(' msql:host=localhost;dbname=slim_db;charset=utf8', 'root', '');
//===================================================


    $host = '127.0.0.1';
    $db   = 'testsite2'; //s1323_vetbaza, 'slim_db'
    $user = 'root';
    $pass = '';
    $charset = 'utf8';

    $dsn = "mysql:host=$host; dbname=$db; charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE           => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $user, $pass, $opt);

    $stmt = $pdo->query('SELECT * FROM news');
    //'SELECT login FROM users')
while ($row = $stmt->fetch())
{
    echo  $row['id'] . ' - ' . $row['h1'] . '<br>'
    . $row['schort_content'] . '<br>' . $row['content'] ."<br/><br>";
    //echo $row['login'] . "<br/>";
}
echo "<hr>";
//======================

$affectedRows = $pdo->exec('INSERT INTO users VALUES (0, "somejjhапораорfg
  ", "somevalue" )');
//('INSERT INTO users VALUES (1, "somevalue"');
