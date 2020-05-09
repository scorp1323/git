<?php


session_start();

if(
isset($_SESSION['id']) &&
 isset($_SESSION['log']) &&
isset($_SESSION['name']) &&
 isset($_SESSION['email'])) {

 include_once '../db.php';

    $id = $_GET['id'];

  $query = mysqli_query($sql, "SELECT * FROM users WHERE id = '".$id."'");
  $num = mysqli_fetch_array($query);

  echo $num['name'], '  ', $num['email'];



} else {
  header('Location: ../index.php');
}

?>