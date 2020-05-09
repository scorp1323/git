<?php

session_start();

if(
isset($_SESSION['id']) &&
 isset($_SESSION['log']) &&
isset($_SESSION['name']) &&
 isset($_SESSION['email'])) {

 include_once '../db.php';

 $query = mysqli_query($sql, "SELECT * FROM users");



while($num = mysqli_fetch_array($query) ) {
  echo  '<a href="fit.php?id='.$num["id"].'">  ' .$num["log"].'    </a>'     , '<br>' ;
}

if(isset($_GET['id'])) {

  $id = $_GET['id'];

  echo $id;

  $query = mysqli_query($sql, "SELECT * FROM users WHERE id = '".$id."'");
  $num = mysqli_fetch_array($query);

  echo $num['name'], '  ', $num['email'];
}


} else {
  header('Location: ../index.php');
}

?>