
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href = "css/main2.css">
    <style>
        form {
    padding: 20px;
    border: 1px solid #463f3f;
    border-radius: 5px;
    background-color: #ffffff;
    max-width: 300px;
    width: 100%;
    text-align: center;
    margin-top: 20px; /* добавляем отступ сверху для центрирования формы */
}
</style>
    <title>Document</title>
</head>
<body>
<h1>Личный кабинет: Администратор</h1> 
<?php   
    session_start();  
    include ('connect.php');  
      
    if (!empty($_SESSION['auth']) && $_SESSION['id_role'] === '1') {   
        echo "<h2>Добрый день, {$_SESSION['username']} {$_SESSION['surname']}</h2>";   
    } else {   
        echo "Иди отсюда";   
    }   
    ?>  
 <h2>Таблица пользователей</h2>
    <table>
        <tr>
            <th>Номер</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Отчество</th>
            <th>Почта</th>
            <th>Логин</th>
            <th>Пароль</th>
        </tr>
        <tr>

        <?php
        include 'connect.php'; // Подключение к базе данных

        $query = "SELECT * FROM users"; // Выборка данных из таблицы users
        $result = mysqli_query($link, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['id_users']."</td>";
                echo "<td>".$row['username']."</td>";
                echo "<td>".$row['surname']."</td>";
                echo "<td>".$row['patronymic']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['login']."</td>";
                echo "<td>".$row['password']."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Нет данных для отображения</td></tr>";
        }

        mysqli_close($link);
        ?>
    </table>
    <a href="index.html">
        <button>Выход</button>
</body>
</html>