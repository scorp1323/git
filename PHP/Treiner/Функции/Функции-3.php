<?php

function get_bigger($a, $b)
{
	//блок кода
	if($a > $b )
	{
		return $a;
	} else 
	{
		return $b;
	}
	echo 'TEST'
}

$bigger = get_bigger(10, 20); 
echo $bigger; // выведет 20