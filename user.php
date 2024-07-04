<link rel="stylesheet" href="css/main 5 promo.css"> 
<style>
     
    .footer-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
}

.contact-info, .social-links, .newsletter {
    flex: 1;
    padding: 0 20px;
}

.contact-info p {
    margin: 5px 0;
}

.social-links a {
    display: block;
    color: white;
    text-decoration: none;
    margin: 5px 0;
}

.newsletter form {
    display: flex;
}

.newsletter input {
    flex: 2;
    padding: 5px;
    margin-right: 5px;
}

.newsletter button {
    flex: 1;
    padding: 5px 10px;
    background-color: #555;
    color: white;
    border: none;
    cursor: pointer;
}
               
.navigation {
    display: flex;
    justify-content: center;
    list-style: none;
    margin: -10px 0 10px 0;
    padding: 0;
}

.navigation li {
    margin: 0 15px;
    font-size: 18px;
}

.navigation a {
    color: #000000; /* изменение цвета текста на черный */
    text-decoration: none;
    font-family: Arial, sans-serif;
}

    input[type="password"] {
        width: 100%; /* Увеличить ширину поля ввода пароля на 80% */
        padding: 10px; /* Добавить внутренний отступ вокруг текста в поле ввода */
        box-sizing: border-box; /* Учесть отступ внутри поля ввода в общей ширине */
    }
    input[type="email"] {
  width: 100%;
  padding: 10px;
  box-sizing: border-box;
}
.subscription-form {
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        width: 200px; /* Измените на нужную ширину */
                        margin: 0 auto; /* Чтобы форма была по центру */
                    }
                    .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
        }

        .about-section {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .about-section h2 {
            color: #333;
        }

        .about-section p {
            color: #666;
        }
                </style>

    </style>
    <header style="background-color: rgb(#333); color: #ffffff; text-align: center; padding: 10px; margin-bottom: 20px;">    
        <nav> 
            <ul class="navigation"> 
            <li><a href="index.php">Главная</a></li> 
            <li><a href="about.php">О нас</a></li> 
            <li><a href="contacts.php">Контакты</a></li> 
            <li><a href="katalog.php">Каталог</a></li> 
            <li><a href="promokod.php">Промокоды</a></li> 
            <li><a href="avtorizform.html">Авторизация</a></li> 
            <li><a href="registerforma.html">Регистрация</a></li>
            <li><a href="cart.php">Корзина</a></li>
            <li class="search-form"><input type="text" placeholder="Поиск"><button type="submit">Найти</button></li> 
            </ul> 
        </nav> 
        </header> 
        
</header>
<?php
session_start();
include('connect.php');

if (!empty($_SESSION['auth']) && $_SESSION['id_role'] === '2') {
    echo "<p>Добрый день, {$_SESSION['username']} {$_SESSION['surname']}</p>";
    echo "<p>Теперь вы можете добавлять товары в избранное и смотреть историю заказов<p>";

    if (isset($_SESSION['id'])) {
        $id_users = $_SESSION['id']; // Используем уникальный идентификатор пользователя
        $query = "SELECT username, surname, patronymic, email, login FROM users WHERE id_users = '$id_users'";
        $result = mysqli_query($link, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            echo "<table border='1'>
                    <tr>
                        <th>Имя</th>
                        <th>Фамилия</th>
                        <th>Отчество</th>
                        <th>Email</th>
                        <th>Логин</th>
                    </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['username']}</td>
                        <td>{$row['surname']}</td>
                        <td>{$row['patronymic']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['login']}</td>
                    </tr>";
            }

            echo "</table>";
        } else {
            echo "Информация о пользователе не найдена.";
        }
    } else {
        echo "ID пользователя не установлен в сессии.";
    }
} else {
    echo "Иди отсюда";
}

echo "<h1>Ваши заказы</h1>";
if (isset($id_users)) {
    if (!$link) {
        die("Ошибка подключения: " . mysqli_connect_error());
    }

    $query_orders = "SELECT orders.id_orders, product_name AS 'name_product', product.price, orders.quantity 
    FROM orders 
    INNER JOIN product ON orders.id_product = product.id_product 
    WHERE orders.id_users = '$id_users'";


    $result_orders = mysqli_query($link, $query_orders);

    if ($result_orders && mysqli_num_rows($result_orders) > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID заказа</th>
                    <th>Наименование продукта</th>
                    <th>Цена</th>
                    <th>Количество</th>
                </tr>";

        while ($row = mysqli_fetch_assoc($result_orders)) {
            echo "<tr>
                    <td>{$row['id_orders']}</td>
                    <td>{$row['name_product']}</td>
                    <td>{$row['price']}</td>
                    <td>{$row['quantity']}</td>
                </tr>";
        }

        echo "</table>";
        
    } else {
        echo "Информация о заказах не найдена.";
    }

    // Закрытие соединения с базой данных
    mysqli_close($link);
} else {
    echo "ID пользователя не установлен в сессии.";
}
?>
 <h3>Изменить данные:</h3>
<form action='user.php' method='post'>
    <input type='text' name='username' placeholder='Имя'><br>
    <input type='text' name='surname' placeholder='Фамилия'><br>
    <input type='text' name='patronymic' placeholder='Отчество'><br>
    <input type='email' name='email' placeholder='Email' style='width: 80%;'><br>
    <input type='text' name='login' placeholder='Логин'><br>
    <input type='submit' value='Сохранить изменения'>
</form>
<?php
include('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['username']) && !empty($_POST['surname']) && !empty($_POST['patronymic']) && !empty($_POST['email']) && !empty($_POST['login'])) {
        // Получение данных из формы
        $username = $_POST['username'];
        $surname = $_POST['surname'];
        $patronymic = $_POST['patronymic'];
        $email = $_POST['email'];
        $login = $_POST['login'];

        // Обновление данных в базе
        $id_users = $_SESSION['id']; // Получаем ID пользователя из сессии
        $query_update = "UPDATE users SET username = '$username', surname = '$surname', patronymic = '$patronymic', email = '$email', login = '$login' WHERE id_users = '$id_users'";
        $result_update = mysqli_query($link, $query_update);

        if ($result_update) {
            echo "Данные успешно обновлены!";
        } else {
            echo "Ошибка при обновлении данных: " . mysqli_error($link);
        }
    } else {
        echo "Пожалуйста, заполните все поля формы.";
    }
}
?>
<div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Отправка сообщения</h5>
                        <form action="send_message.php" method="post">
                            <div class="form-group">
                                <label for="recipient">Получатель:</label>
                                <select class="form-control" id="recipient" name="recipient">
                                    <?php
                                    include("connect.php");
                                    $query = "SELECT * FROM users";
                                    $result = mysqli_query($link, $query) or die(mysqli_error($link));
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo '<option value="' . $row['id_users'] . '">' . $row['surname'] . ' ' . $row['username'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="message">Сообщение:</label>
                                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<a href="avtorizform.html"><button>Выход</button></a>