<?php

session_start();

if (isset($_POST['login_ok']))
{
  $login = $_POST['login'];
  $pass = $_POST['pass'];

 $login = htmlspecialchars($_POST['login']);
  $pass = htmlspecialchars($_POST['pass']);
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);


  $login = trim($_POST['login']);
  $pass = trim($_POST['pass']);
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);


  //проверяем, сущ. ли запись уже в базе
include_once "db.php";


$query = mysqli_query($sql, "SELECT * FROM users WHERE
 log = '".$login."'");


$num = mysqli_num_rows($query);


if($num >0) {
  //проверяем совпадают ли пароли
    $query2 = mysqli_query($sql, "SELECT * FROM users WHERE
 log = '".$login."'");
    $num2 = mysqli_fetch_array($query2);

$passmd5 = base64_decode($num2['pass']);

$pass2 =explode($num2['sold'], $passmd5 ) ;



    if($pass == $pass2[0] ) {
          
      $_SESSION['id'] = $num2['id'];
      $_SESSION['log'] = $num2['log'];
      $_SESSION['name'] = $num2['name'];
      $_SESSION['email'] = $num2['email'];

      header('Location: home/index.php');

    } else {
      echo 'Пароль не верный';
      echo '<a href="index.php">Вход</a>'; 

    }
} 

}


if (isset($_POST['reg']))
{
  $login = $_POST['login'];
  $pass = $_POST['pass'];
  $name = $_POST['name'];
  $email = $_POST['email'];




  $login = htmlspecialchars($_POST['login']);
  $pass = htmlspecialchars($_POST['pass']);
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);


  $login = trim($_POST['login']);
  $pass = trim($_POST['pass']);
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);


//проверяем, сущ. ли запись уже в базе
include_once "db.php";


$query = mysqli_query($sql, "SELECT * FROM users WHERE
 log = '".$login."'");


$num = mysqli_num_rows($query);

if($num >0) {
    echo 'Такой пользователь уже зарегистрирован <br>';
    echo '<a href="index.php">Вход</a>'; 
} else {

$sold = rand(2, 2000);
$pass1 = $pass . $sold;


$pass2 = md5($pass1);


  $query1 =  'INSERT INTO users (name, log, pass, email, sold) VALUES ("'.$name.'",  "'.$login.'", "'.$pass2.'", "'.$email.'", "'.$sold.'")';

  if(mysqli_query($sql, $query1)) {


    echo 'Спасибо за регистрацию';
  }

}


}


?>

