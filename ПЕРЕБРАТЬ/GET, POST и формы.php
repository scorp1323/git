<?php
//так всегда начинается php код(файл)
//=====================================================

header('Content-Type: text/html; charset=utf-8');
// теперь можно писать на русском без кракозяблов
//======================================================

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//=============================================

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="post">
    <fieldset>
      <legend>Выберите животное</legend>
      <label for="dog">
      <input type="checkbox" id="dog" name="animal[]" value="собака">
      Собака
      </label>
      <label for="cat">
      <input type="checkbox" id="cat" name="animal[]" value="кошка">
      Кошка
      </label>
      <label for="fox">
      <input type="checkbox" id="fox" name="animal[]" value="лиса">
      Лиса
      </label>
      <label for="tiger">
      <input type="checkbox" id="tiger" name="animal[]" value="тигр">
      Тигр</label>
    </fieldset>
    <input type="submit" value="Отправить">
  </form>
 
<?php 
$animal = isset($_POST['animal']) ? $_POST['animal'] : '' ;
if (!empty($animal)) {
  echo '<br><br> Выбраны: ';
  foreach ($animal as $a) {
    echo  "<span style=\"color:green\">" . htmlentities($a) . "</span>";
  }
}
?>

</body>
</html>


