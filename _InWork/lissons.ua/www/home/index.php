<?php

session_start();
include_once "../db.php";

if(
isset($_SESSION['id']) &&
 isset($_SESSION['log']) &&
isset($_SESSION['name']) &&
 isset($_SESSION['email'])) {

echo 'Добро пожаловать ' . ', ' . $_SESSION['name'];
echo '<br>';

$login = $_SESSION['log'];

$query_name = mysqli_query($sql, "SELECT avatar FROM users WHERE log = '".$login."'");
$num_name = mysqli_fetch_array($query_name);

echo '<img src="'.$num_name['avatar'].'" 
  width="100" height="100" alt="lorem">';




echo '<br>','<br>','<br>';
echo '<a href="exit.php">Выход</a> ', '<br>';
echo '<a href="oll_users.php">Список пользователей</a>';

echo '<br>';
echo '<br>';
echo '<form enctype="multipart/form-data" action="" method="POST" action="">
<input type="file" name="avatar">
<input type="hidden" name="MAX_FILE_SIZE" value="50000000000" />
<input type="submit" name="upload" value="Загрузить">

</form>';



if(isset($_POST['upload'] )) {
  $dir = 'img/';


$login = $_SESSION['log'];

$query = mysqli_query($sql, "SELECT * FROM users WHERE
 log = '".$login."'");
$num = mysqli_fetch_array($query);

$id = $num['id'];



// $uploaddir = '../home/img';  - если хочешь поебася
$uploaddir = '../home/img/';
$uploadfile = $uploaddir . basename($_FILES['avatar']['name']);
echo '<pre>' . 
$_FILES["avatar"]["name"] . 
'</pre>';


$avatar = $_FILES["avatar"]["name"];
$avatar = 'img/' . $avatar;

$sql_avatar =  mysqli_query($sql, "UPDATE users SET avatar = '".$avatar."' WHERE log = '".$login."'");



header("Location: http://lissons.ua/home/index.php ");
//для загрузки картинки без перезагрузки




echo '<pre>';
if (move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}

echo 'Некоторая отладочная информация:';
print_r($_FILES);

print "</pre>";






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




