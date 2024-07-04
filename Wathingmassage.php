<?php
session_start();
include("connect.php");

// Проверка роли пользователя
$idrole = $_SESSION['id_role'];
if ($idrole != 1 && $idrole != 2) {
    // Если роль не соответствует администратору или пользователю, выйти
    echo "Недостаточно прав доступа для просмотра сообщений.";
    exit();
}

// Запрос к базе данных для получения сообщений
if ($idrole == 2) {
    // Для пользователя с ролью 2 получить только сообщения, адресованные ему
    $iduser = $_SESSION['id_users'];
    $query = "SELECT * FROM messages WHERE id_users = $iduser"; // Было $id_users, исправлено на $iduser
} else {
    // Для пользователя с ролью 1 получить все сообщения
    $query = "SELECT * FROM messages";
}
$result = mysqli_query($link, $query) or die(mysqli_error($link));

// Вывод сообщений
echo '<div class="container mt-5">';
echo '<h1>Просмотр сообщений</h1>';
echo '<hr>';
echo '<table class="table">';
echo '<tr><th>Сообщение</th><th>Дата</th></tr>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['message'] . '</td>';
    echo '<td>' . $row['date'] . '</td>';
    echo '</tr>';
}
echo '</table>';
echo '</div>';

mysqli_close($link);
?>