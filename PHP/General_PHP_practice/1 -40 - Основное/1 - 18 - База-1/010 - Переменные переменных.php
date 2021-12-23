<?php

$hello = 'word';
$a = 'hello';

echo $a;  // Выведет: hello
echo '<br>';
echo $$a;  // Выведет: word
?>

$$a:
 - сначала вычислит $a = hello
 - слово hello попадет вместо $a, образуя $hello
 - выведет значение $hello - word