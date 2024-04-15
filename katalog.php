<!DOCTYPE html> 
<html lang="ru"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/js/"> 
    
</head> 
<body> 
    
    <header style="background-color: rgb(#333); color: #ffffff; text-align: center; padding: 10px; margin-bottom: 20px;">    
    <nav> 
        <ul class="navigation"> 
        <li><img src="images/logotip.png" alt="Логотип"></li> 
        <li><a href="index.html">Главная</a></li>  
            <li><a href="about.php">О нас</a></li>  
            <li><a href="contacts.php">Контакты</a></li> 
            <li><a href="katalog.php">Каталог</a></li> 
            <li><a href="promokod.php">Промокоды</a></li> 
            <li><a href="avtorizform.html">Авторизация</a></li> 
            <li><a href="registerforma.html">Регистрация</a></li> 
            <li class="search-form"><input type="text" placeholder="Поиск"><button type="submit">Найти</button></li> 
        </ul> 
    </nav> 
    </header> 
    <title>Каталог товаров</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        .product {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px;
            width: 250px;
            display: inline-block;
            text-align: center;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .product:hover {
            transform: translateY(-5px);
        }

        .product img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .product h3 {
            color: #333;
            font-size: 18px;
            margin: 0;
        }

        .product p {
            color: #555;
            font-size: 14px;
        }

        .product form {
            margin-top: 10px;
        }

        .product form input[type='submit'] {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .product form input[type='submit']:hover {
            background-color: #000000;
        }
    header {
        background-color:#333;
        color: white;
        text-align: center;
        padding: 10px;
        position: fixed; /* делаем позицию фиксированной */
        top: 0; /* закрепляем шапку наверху страницы */
        width: 100%; /* ширина шапки на всю страницу */
        z-index: 1000; /* устанавливаем z-index, чтобы шапка была выше других элементов */
    }
    
    body {
            margin-top: 50px; /* добавляем отступ сверху, чтобы контент не перекрывался под шапкой */
            background-color:  #99ff99; /* Цвет фона страницы */
    }
     
    footer { 
            background-color: #333;
            color: white; 
            text-align: center; 
            padding: 20px 0;
            position: fixed; 
            bottom: 0; 
            width: 100%; 

            
           
} 

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
    margin: 0; 
    padding: 0; 
} 
 
.navigation li { 
    margin: 0 15px; 
    font-size: 18px; 
} 
 
.navigation a { 
    color: #ffffff; 
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

            
        </style>
        
    </style>
</head>
<body>
<header style="background-color: rgb(#333); color: #ffffff; text-align: center; padding: 10px; margin-bottom: 20px;">    
        <nav> 
            <ul class="navigation"> 
                <li><img src="images/logotip.png" alt="Логотип"></li> 
                <li><a href="index.php">Главная</a></li>  
            <li><a href="about.php">О нас</a></li>  
            <li><a href="contactforma.html">Контакты</a></li> 
            <li><a href="katalog.php">Каталог</a></li> 
            <li><a href="promokod.php">Промокоды</a></li> 
            <li><a href="avtorizform.html">Авторизация</a></li> 
            <li><a href="registerforma.html">Регистрация</a></li> 
            <li><a href="cart.php">Корзина</a></li> 
                <li class="search-form"><input type="text" placeholder="Поиск"><button type="submit">Найти</button></li> 
            </ul> 
        </nav> 
        </header> 
    <h2>Каталог товаров</h2>

    <div class="product">
        <img src="images/1.jpg" alt="Machete ML-10A">
        <h3>Machete ML-10A</h3>
        <p>Machete ML-10А - сабвуфер, созданный для того, чтобы заполнить пустоту салона качественным и мощным бассом.</p>
        <p>Цена: 14 391 ₽</p>
        <form action="cart.php" method="post">
            <input type='hidden' name='add_to_cart' value='1'>
            <input type='hidden' name='id_product' value='1'>
            <input type='submit' value='Добавить в корзину'>
        </form>
    </div>

    <div class="product">
        <img src="images/prology_cmx_400_id1556_2.jpg" alt="Prology CMX-400">
        <h3>Prology CMX-400</h3>
        <p>PROLOGY CMX-400 - FM/USB-ресивер с Bluetooth, поддерживающий все популярные аудиоформаты, включая MP3, WAV и FLAC, оснащается 20-полосным эквалайзером.</p>
        <p>Цена: 3 940 ₽</p>
        <form action="cart.php" method="post">
            <input type='hidden' name='add_to_cart' value='1'>
            <input type='hidden' name='id_product' value='2'>
            <input type='submit' value='Добавить в корзину'>
        </form>
    </div>
    <div class="product">
        <img src="images/2.jpg" alt="Pride Harmony 5C">
        <h3>Pride Harmony 5C</h3>
        <p>Pride Harmony 5C - модель с безупречными характеристиками, позволяющая добиться чистого звучания музыки. Обладают достойным качеством сборки.</p>
        <p>Цена:5 450 ₽</p>
        <form action="cart.php" method="post">
            <input type='hidden' name='add_to_cart' value='1'>
            <input type='hidden' name='id_product' value='2'>
            <input type='submit' value='Добавить в корзину'>
        </form>
    </div>
    <div class="product">
        <img src="images/Machete-M8_DSP.jpg" alt="Machete M8-DSP">
        <h3>Machete M8-DSP</h3>
        <p>Большинство "развитых" головных устройств стоят дорого и на их борту находятся скудные срезы (второй, максимум третий порядок)</p>
        <p>Цена:17 990 ₽</p>
        <form action="cart.php" method="post">
            <input type='hidden' name='add_to_cart' value='1'>
            <input type='hidden' name='id_product' value='2'>
            <input type='submit' value='Добавить в корзину'>
        </form>
    </div>

    <!-- Добавьте другие товары в аналогичном формате -->

</body>
</html>
