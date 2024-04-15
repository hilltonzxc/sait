<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table th {
    background-color: #f0f0f0;
    padding: 10px;
    text-align: left;
}

table td {
    padding: 10px;
}

table tr:nth-child(even) {
    background-color: #f9f9f9;
}

table tr:hover {
    background-color: #e9e9e9;
}
body {
    font-family: Arial, sans-serif;
    background: linear-gradient(to bottom right,  #99ff99 0%, #ffffff 100%);
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table th {
    background-color: #f0f0f0;
    padding: 10px;
    text-align: left;
}

table td {
    padding: 10px;
}

table tr:nth-child(even) {
    background-color: #f9f9f9;
}

table tr:hover {
    background-color: #e9e9e9;
}
</style>
<?php
session_start();
include('connect.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['id_product'])) {
        $product_id = $_POST['id_product'];

        if (isset($_SESSION['id'])) {
            $id_users = $_SESSION['id'];

            $stmt = $link->prepare("INSERT INTO cart (id_product, id_users) VALUES (?, ?)");
            $stmt->bind_param('ii', $product_id, $id_users);
            
            $product_id = $_POST['id_product'];
            $id_users = $_SESSION['id'];
            
            $stmt->execute();
            


            // Вывод сообщения об успешном добавлении товара в корзину
            echo "Товар успешно добавлен в корзину!";
        } else {
            echo "Ошибка: ID пользователя не определен.";
        }
    } else {
        echo "Ошибка: Не удалось получить идентификатор продукта.";
    }
} else {
    echo "Ошибка: Неверный метод передачи данных.";
}
?>
<h1>Ваша корзина</h1>
<?php
if (isset($_SESSION['id'])) {
    $id_users = $_SESSION['id']; // Уникальный идентификатор пользователя
    
    if (!$link) {
        die("Ошибка подключения: " . mysqli_connect_error());
    }

    $query = "SELECT cart.id_position, product_name AS product_name, product.price  
    FROM cart  
    INNER JOIN product ON cart.id_product = product.id_product  
    WHERE cart.id_users = $id_users";


    $result = mysqli_query($link, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID позиции</th>
                    <th>Наименование продукта</th>
                    <th>Цена</th>

                </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['id_position']}</td>
                    <td>{$row['product_name']}</td>
                    <td>{$row['price']}</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "Ваша корзина пуста.";
    }
    mysqli_close($link);
} else {
    echo "ID пользователя не установлен в сессии.";
}
?>