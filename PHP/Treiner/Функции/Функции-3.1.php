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
	echo 'TEST'; /*не выветет НИЧЕГО в связи с возвратом функции (это приводит к уничтожению вызваной функции, т.е. после retern  код не исполняется!!!) */
}

$bigger = get_bigger(10, 20); 
echo $bigger; // выведет 20