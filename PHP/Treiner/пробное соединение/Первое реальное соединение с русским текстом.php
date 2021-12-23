<?php

header('Content-Type: text/html; charset=utf-8');
// теперь можно писать на русском без кракозяблов




ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$connection = mysqli_connect( '127.0.0.1',
 'root',
  '' ,

   'test_db');   

   if($connection == false)  
   {
      echo 'Нет связи с базой - Сережа НЕмолодец :(<br>';
      echo mysqli_connect_error();
      exit();
   }     
   else 
   {
      echo 'Есть связь с базой - Сережа МОЛОДЕЦ!!!';
   }  