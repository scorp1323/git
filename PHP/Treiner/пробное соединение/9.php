<?
//так всегда начинается php код(файл)

header('Content-Type: text/html; charset=utf-8');
// теперь можно писать на русском без кракозяблов


ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// так отображаются все ошибки


$connection = mysqli_connect( '127.0.0.1', 'root', '' , 'test_db'); 
// подключение к базе с паролем и логином и паролем
// ("127.0.0.1", "my_user", "my_password", "my_db");


mysqli_set_charset($connection, 'utf8');  
// исправляет баг с русским шрифтом от базы 

   if($connection == false)  
   {
      echo 'Нет связи с базой - Сережа НЕмолодец :(<br>';
      echo mysqli_connect_error();
      exit();
   }     
   else 
   {
      echo 'Есть связь с базой - Сережа МОЛОДЕЦ!!!<br><hr><br>';
   }  



   $result = mysqli_query($connection, "SELECT * FROM `articles_categories` "); 
   if (mysqli_num_rows($result) == 0 )
   {
      echo 'Категорий не найдено';
   } else 
   {
      ?>

   <ul>
         <?php
            while(($cat = mysqli_fetch_assoc($result)))
            {
               echo '<li>'.$cat['title'].'</li>';
            }
         ?>
      </ul>

      <?php
   }
   ?>


   <?php
         mysqli_close($connection);
      ?>