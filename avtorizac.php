<style> 
header { 
    background-color: #333; 
    color: white; 
    text-align: center; 
    padding: 10px; 
    position: fixed; /* делаем позицию фиксированной */ 
    top: 0; /* закрепляем шапку наверху страницы */ 
    left: 0; /* выравниваем шапку по левому краю */ 
    width: 100%; /* ширина шапки на всю страницу */ 
    z-index: 1000; /* устанавливаем z-index, чтобы шапка была выше других элементов */ 
    height: 50px; 
} 
 
body { 
    margin-top: 50px; /* добавляем отступ сверху, чтобы контент не перекрывался под шапкой */ 
} 
  
footer {  
    background-color: #333;  
    color: white;  
    text-align: center;  
    padding: 10px;  
    position: fixed;  
    bottom: 0;  
    left: 0; /* выравниваем подвал по левому краю */ 
    width: 100%;  
    height: 50px; 
} 
</style>

</body> 
</html> 
   
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title> 
    <link rel="stylesheet" href="css/main.css">  
</head> 
<body>   
<div class="container"> 
    <h1>Личный кабинет</h1>   
<?php

include('connect.php');
session_start();

// Установка данных в сессию после успешной аутентификации
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = mysqli_real_escape_string($link, $_POST['login']);
    $password = mysqli_real_escape_string($link, $_POST['password']);

    $query = "SELECT * FROM users WHERE login='$login' AND password='$password'";
    $result = mysqli_query($link, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        $_SESSION['username'] = $user['username'];
        $_SESSION['surname'] = $user['surname'];
        $_SESSION['id_role'] = $user['id_role'];
        $_SESSION['auth'] = true;
        $_SESSION['id'] = $user['id_users']; // Используем правильный ключ 'id' для установки ID пользователя в сессию

        if ($user['id_role'] == '1') {
            header("Location: admin.php"); // Редирект на страницу администратора
        } else {
            header("Location: user.php"); // Редирект на страницу пользователя
        }
        exit();
    } else {
        echo "Неверный логин или пароль!";
    }
}
?>



    </div> 
</body> 
</html>
        