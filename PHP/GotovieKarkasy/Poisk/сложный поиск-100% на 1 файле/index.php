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
//=======================================================
?>

<form name="search" method="post" action="">
    <input type="search" name="query" placeholder="Поиск">
    <button type="submit">Найти</button> 
</form>


















<?php 
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'veterinarnaja_baza');





if (!mysql_connect(DB_HOST, DB_USER, DB_PASS)) {
    exit('Не могу соединится с сервером!!!');
}
if (!mysql_select_db(DB_NAME)) {
    exit('Не могу выбрать базу!!!');
}




mysql_query('SET NAMES utf8');

function search ($query) 



{ 
    $query = trim($query); 
    $query = mysql_real_escape_string($query);
    $query = htmlspecialchars($query);

    if (!empty($query)) 
    { 
        if (strlen($query) < 3) {
            $text = '<p>Слишком короткий поисковый запрос.</p>';
        } else if (strlen($query) > 25) {
            $text = '<p>Слишком длинный поисковый запрос.</p>';
        } else { 
            $q = "SELECT `id`, `first_name`, `middle_name`, `last_name`
                  FROM `customers`
                 WHERE `first_name` LIKE '%$query%'
                  OR `middle_name` LIKE '%$query%' 
                  OR `last_name` LIKE '%$query%'
                  OR `id` LIKE '%$query%'";




            $result = mysql_query($q);



            if (mysql_affected_rows() > 0) { 
                $row = mysql_fetch_assoc($result); 
                $num = mysql_num_rows($result);

                $text = '<p>По запросу <b>'.$query.'</b> найдено совпадений: '.$num.'</p>';

                do {
                    // Делаем запрос, получающий ссылки на статьи
                    $q1 = "SELECT `id`, `first_name`, `middle_name`, `last_name` 
                    FROM `customers` 
                    WHERE `id` = '$row[id]'";


                    $result1 = mysql_query($q1);


                    if (mysql_affected_rows() > 0) {
                        $row1 = mysql_fetch_assoc($result1);
                    }

                    $text .= $row['last_name'].
                    ' '.$row['first_name'].
                    ' '.$row['middle_name'].'<br>';






                } while ($row = mysql_fetch_assoc($result)); 
            } else {
                $text = '<p>По вашему запросу ничего не найдено.</p>';
            }
        } 
    } else {
        $text = '<p>Задан пустой поисковый запрос.</p>';
    }

    return $text; 
} 
?>

<?php 
if (!empty($_POST['query'])) { 
    $search_result = search ($_POST['query']); 
    echo $search_result; 
}
?>