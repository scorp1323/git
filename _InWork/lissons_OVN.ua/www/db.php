<?php

$host = 'localhost';
$db = 'lisson';
$login_db = 'root';
$pass_db = '';

$sql = mysqli_connect("$host", "$login_db", "$pass_db");

mysqli_select_db( $sql, $db);

?>