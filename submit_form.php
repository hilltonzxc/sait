<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $message = $_POST['message']; 
     
    // Email на который будет отправлено сообщение 
    $to = "youremail@example.com"; 
    $subject = "Новое сообщение с формы контактов"; 
    $body = "Имя: $name\nEmail: $email\n\n$message"; 
     
    // Отправка письма 
    if (mail($to, $subject, $body, 'From: Contact Form')) { 
        $_SESSION['success_message'] = "Письмо успешно отправлено!";
        header("Location: index.php"); 
        exit(); 
    } else { 
        echo "Ошибка при отправке письма."; 
    } 
} else { 
    echo "Ошибка: форма не была отправлена."; 
} 
?>
