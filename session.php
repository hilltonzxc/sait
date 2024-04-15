<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {   
    include('connect.php'); // Подключаем файл с подключением к базе данных 
 
    if (isset($_POST['login'])) {   
        $login = 'login';   
        $password = 'pass';   
        if ($_POST['login'] === $login && $_POST['password'] === $password) {   
            $_SESSION['auth'] = true;   
 
            // Заменяем эту строку 
            // $_SESSION['role_id'] = '2';  
            // на следующую строку, если у вас есть корректный user_id после аутентификации 
            $_SESSION['id_users'] = 1; // Пусть это будет id текущего пользователя в базе данных 
 
            if ($_SESSION['id_role'] === '1') {   
                header("Location: admin.php");   
            } else {   
                header("Location: user.php");   
            }   
            exit();   
        } else {   
            echo "Неверный логин или пароль!";   
        }   
    } elseif (isset($_POST['regist'])) {   
        $_SESSION['auth'] = true;   
        $_SESSION['id_role'] = '2';   
        header("Location: user.php");   
        exit();   
    }

    
}   
?>