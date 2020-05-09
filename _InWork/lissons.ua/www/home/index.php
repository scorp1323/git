<?php

session_start();

if(
isset($_SESSION['id']) &&
 isset($_SESSION['log']) &&
isset($_SESSION['name']) &&
 isset($_SESSION['email'])) {

echo 'Добро пожаловать ' . ', ' . $_SESSION['name'];
echo '<br>';

echo '<a href="exit.php">Выход</a> ', '<br>';
echo '<a href="oll_users.php">Список пользователей</a>';

echo '<br>';
echo '<br>';
echo '<form action="" method="POST">
<input type="file" name="avatar">
<input type="submit" name="upload" value="Загрузить">
</form>';



if(isset($_POST['upload'] )) {
  $dir = 'img/';

include_once "../db.php";
$login = $_SESSION['log'];

$query = mysqli_query($sql, "SELECT * FROM users WHERE
 log = '".$login."'");
$num = mysqli_fetch_array($query);

$id = $num['id'];

  // $name_img =  date("m.d.y") .    rand(1, 1000)  . $id . '.png' ;

  // echo $name_img;
  
$name_img = $_POST['avatar'] . '.png';


// $size = getimagesize($name_img);
// echo $size;

// if(  $size[0] > 501 && $size[1] < 1501 ) {
var_dump($_FILES['avatar']) ;
    if(move_uploaded_file($_FILES['avatar']['tmp_name'],  $dir)) {
      echo 'Файл ' . $size . ' помещен в папку';
    // }


} else {
  echo 'Размер не соответствует параметрам';
  exit();

}

  // 1 - имя изображению
  // 2 - заносим загружаемому пользователю ссылку 
  // 3 - переносим картинку в папку имейж
}

} else {
  header('Location: ../index.php');
}


?>
