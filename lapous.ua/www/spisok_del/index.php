<?php
header('Content-Type: text/html; charset=utf-8');
// теперь можно писать на русском без кракозяблов
//======================================================
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки
//=======================================================

?>

<!DOCTYPE html>
<html lang="ru"> <!-- Русский язык -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <!-- Кодировка -->
   
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- размер на мобильном устройстве -->
  <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
  
  <title>Список дел</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
      <div class="container">
        <h1>Список дел</h1>
        <form action="/spisok_del/add.php" method="post">
              <input autofocus type="text" name="task" id="task" placeholder="Cделать!." class="form-control">
              <button type="submit" name="sendTask" id="sendTask" class="btn btn-success">Отправить</button>
            </form>


          <?
            require_once 'configDB.php';



                echo '<ul>';
            $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');

            while($row = $query->fetch(PDO::FETCH_OBJ)) {
                echo '<li><b>' . $row->task . '</b><a href="/spisok_del/delete.php?id=' . $row->id . '"><button>Удалить</button></a></li>';
            }
                echo '</ul>';
          ?>


      </div>
</body>
</html>