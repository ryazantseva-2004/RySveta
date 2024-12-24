<?php
// Подключение к базе данных
$host = "localhost";
$db = "kurs";
$user = "root";
$password = "SRyazantseva-UB22";

$dbreg = new mysqli($host, $user, $password, $db);
if ($dbreg->connect_error) 
{
    
    die("Ошибка подключения к базе данных: " . $dbreg->connect_error);
}
?>