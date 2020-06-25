<?php

function convertFullName($string)
{	
	$result = "";
	$arr= explode(" ", $string);
	$result = $arr[0] . ' ' . mb_substr($arr[1], 0,1) . '.' . mb_substr($arr[2], 0,1) .'.';


    return $result; // Результат: Фамилия И.О.
}

echo convertFullName('Иванов Иван Иванович');
