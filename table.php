<!DOCTYPE html> 
<html> 
<head> 
    <meta charset="UTF-8"> 
<link rel="stylesheet" href="bootstrap.min.css">
<link rel ="stylesheet" href = "css/main2.css">

<?php
include("connect.php");

$result = $link->query("SELECT * FROM users"); // Замените your_table_name на имя вашей таблицы

if ($result && $result->num_rows > 0) {
    echo "<table border='1'><tr><th>Имя</th><th>Фамилия</th><th>Отчество</th><th>Логин</th><th>Пароль</th><th>Почта</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["username"] . "</td><td>" . $row["surname"] . "</td><td>" . $row["patronymic"] . "</td><td>" . $row["login"] . "</td><td>" . $row["password"] . "</td><td>" . $row["email"] . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "Нет доступных данных для отображения.";
}

// Закрываем соединение с базой данных
$link->close();
?>
</body>
</html>