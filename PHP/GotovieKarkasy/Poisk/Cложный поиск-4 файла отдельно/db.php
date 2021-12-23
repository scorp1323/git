<?php
//так всегда начинается php код(файл)
//=====================================================



define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'veterinarnaja_baza');


mysql_query('SET NAMES utf8');



if (!mysql_connect(DB_HOST, DB_USER, DB_PASS)) {
    exit('Не могу соединится с сервером!!!');
}
if (!mysql_select_db(DB_NAME)) {
    exit('Не могу выбрать базу!!!');
}


?>