<?php
//так всегда начинается php код(файл)
//=====================================================


?>

<?php 





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