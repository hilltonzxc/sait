

<?php
session_start();
include 'connection.php';

if (isset($_POST['recipient']) && isset($_POST['message'])) {
    $recipient = $_POST['recipient'];
    $message = trim($_POST['message']); // Убираем лишние пробелы
    $date = date('Y-m-d');

    // Проверка на пустое сообщение
    if (empty($message)) {
        $idrole = $_SESSION['id_role'];
        if ($idrole == 1) {
            header('Location: admin.php');

        } elseif ($idrole == 2) {
            header('Location: user.php');

        }
        exit(); // Не отправляем данные в базу данных и не выполняем запрос к базе данных
    }

    $query = "INSERT INTO messages (id_users, message, date) VALUES ($recipient, '$message', '$date')";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    if ($result) {
        $_SESSION['message'] = 'Сообщение успешно отправлено';
        $idrole = $_SESSION['id_role'];
        if ($idrole == 1) {
            header('Location: admin.php');
        } elseif ($idrole == 2) {
            header('Location: user.php');
        }
    } else {
        $_SESSION['message'] = 'Ошибка при отправке сообщения';
        header('Location: user.php');
    }
}
?>
