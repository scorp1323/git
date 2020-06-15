<?php




$task = $_POST['task'];

if ($task =='') {
  echo 'введите задание';
  exit();
}

require_once 'configDB.php';



$sql = 'INSERT INTO tasks(task) VALUES(:task)';

$query = $pdo->prepare($sql);
$query->execute(['task' => $task]);


sleep(2);
header("Location: http://lapous.com.ua/spisok_del"); 


// ?>