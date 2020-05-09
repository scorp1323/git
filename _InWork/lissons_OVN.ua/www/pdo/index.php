<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lisson";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO users (name, login, pass, email)
    VALUES ('John', 'Doe', '333', 'john@example.com')";
    
if($sql)

    // use exec() because no results are returned
    $conn->exec($sql);
    echo 'Новая запись в базу выполнена!';

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage(), '<br>';
    echo 'Что-то пошло не так...';
    }

$conn = null;


?>