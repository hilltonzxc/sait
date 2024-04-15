<?php
include("connect.php");
$username = $_POST['username'];
$surname = $_POST['surname'];
$patronymic = $_POST['patronymic'];
$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];

if (!empty($username) && !empty($surname) && !empty($patronymic) && !empty($login) && !empty($password) && !empty($email) && !empty($telefon)) {
    // Хеширование пароля
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Замена символов пароля на точки 
    $hidden_password = str_repeat('*', strlen($password));

    $query = "INSERT INTO users (username, surname, patronymic, login, password, email, telefon, id_role)     
          VALUES ('$username', '$surname', '$patronymic', '$login', '$hashed_password', '$email', '$telefon', '2')";

    $result = mysqli_query($link, $query);

    if ($result) {
        echo "Вы успешно зарегистрировались!";
        echo '<form action="avtorizform.html"> <input type="submit" name="submit" value="Вернуться"> </form>';
    } else {
        echo "Произошла ошибка при выполнении запроса: " . mysqli_error($link);
    }
} else {
    echo "Одно из значений не заполнено! Данные не добавлены";
}
?>
