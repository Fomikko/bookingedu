<?php
	$connection = mysql_connect("bookedu.local", "root", "") or die("Ошибка соединения с сервером.");
	$db = mysql_select_db("bookedudb", $connection) or die("Ошибка при выборе базы данных.");
?>