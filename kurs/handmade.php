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

// Получение данных из базы данных
$sql = "SELECT * FROM products";
$result = $dbreg->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="1.css">
    <title>Изделия ручной работы</title>
      <style>
        .contact-info {
            margin-top: 40px;
            font-size: 18px;
        }
        .contact-info a {
            color: #007BFF;
            text-decoration: none;
        }
        .contact-info a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body class="l">
<header>
<button type="submit" class="account-button"><A href='about.html'>О нас</A></button>
<button type="submit" class="account-button"><A href="#Изделия ручной работы">Изделия ручной работы</A></button>
<button type="submit" class="style"><A href='ak.php'>Личный кабинет</a></button>
</header>
    <h1>HandMade</h1> 
    <h2>Украшения и аксессуары ручной работы - стильно, красиво, индивидуально.</h2>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    


    <table>
    <caption><A name="Изделия ручной работы">Изделия ручной работы</A></caption>
        <tr>
            <th>Название</th>
            <th>Описание</th>
            <th>Цена</th>
            <th>Изображение</th>
        </tr>
        <tr>
            <td>Белый сотуар с кистью</td>
            <td>Белый сотуар с кистью из Жемчужин Майорка и фурнитуры с родиевым покрытием, инкрустированной фианитами.
Сотуар – женское украшение в виде удлиненного ожерелья с подвешенным кулоном или просто кисточкой из нитей. Оригинальный и элегантный аксессуар весьм</td>
<td>4000 руб.</td>
<td><img src='1.jpg' alt=' '></td></tr>

<tr>
    <td>Стильное кольцо в виде цепи с бериллом</td>
    <td>Премиум фурнитура с родиевым покрытием.
Размер кольца регулируется.
Диаметр бусины берилла 10 мм.

Минерал дружбы, верности и взаимопонимания.
Считается, что Берилл – это камень-хранитель супружеских уз, семейного очага. Самоцвет будет способствовать</td>
<td>1100 руб.</td>
<td><img src='2.jpg' alt=' '></td></tr>

<tr>
    <td>Браслет из цветного, черного полосатого и серого агата</td>
    <td>Браслеты на эластичной основе из натурального агата.

Агат - самый разнообразный по окраске камень в природе.
Несколько интересных фактов об Агате.
Минерал доставляет гармонию и приносит умиротворение.
Символ духовности, чистоты и возвышенности чувст</td>

<td>1000 руб.</td>
<td><img src='3.jpg' alt=' '></td></tr>
<tr>
    <td>Серьги-гроздья цвета рубин</td>
    <td>Изящные и грациозные серьги-гроздья цвета рубин.
Основа Сережек Серебро 925 пробы, фурнитура с покрытием родия, богемские хрустальные бусины Чехия.
Длина 8 см.</td>
<td>1700 руб.</td>
<td><img src='4.jpg' alt=' '></td></tr>
    </table>
    <br>
    <br>
    <br>
    <br>
   <div class="contact-info">
        <h5>Контактная информация</h5>
        <p3>Телефон: <a href="tel:+79835078347">+7 (983) 507-83-47</a>          Email: <a href="mailto:info@handmade.ru">info@handmade.ru</a>               Соцсети: <a href="https://vk.com/red_accessories" target="_blank">ВКонтакте</a></p>
    </div>
    <?php
    // Закрытие подключения к базе данных
    $dbreg->close();
    ?>
</body>
</html>