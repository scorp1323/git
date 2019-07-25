<?php

$value = '123abc456def';
echo filter_var($value, FILTER_SANITIZE_NUMBER_INT);
//выведет 123456 - удалит все, кроме цыфр
?>
<hr>
<?php 
// Проверка e-mail
$var = 'mail@example.com';
var_dump(filter_var($var, FILTER_VALIDATE_EMAIL));

 ?>


