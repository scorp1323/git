<?php

function get_bigger($a, $b)
{
	//блок кода
	if($a > $b )
	{
		echo $a;
	} else 
	{
		echo $b;
	}
	echo '<br>';
}

get_bigger(10, 20); // Выведет 20
get_bigger(10, 50); // Выведет 50
get_bigger(5, -100); // Выведет 5