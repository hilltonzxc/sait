<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title> 
    <link rel="stylesheet" href="css/mainabout.css">  
</head> 
<body> 
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
            color: #000;
        }
                </style>
<header style="background-color: rgb(#333); color: #ffffff; text-align: center; padding: 10px; margin-bottom: 20px;">    
        <nav> 
            <ul class="navigation"> 
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
<title>О нас</title>
<div class="container">  
    <div class="about-section">  
        <h2>О магазине</h2>  
        <p>Магазин SoundRevolution Автозвук (магнитолы, сабвуферы, усилители, динамики)
        <p>Мы рады приветствовать Вас на сайте нашей компании. Компания SoundRevolution занимается не просто продажей автозвука, но и качественным подбором компонентов, установкой, настройкой систем любой сложности.</p>   
        <p>Мы имеем богатый опыт в инсталляциях как повседневных, так и для автозвукового спорта. </p>  
Основной офис нашей компании находится в г. Ростове-на-Дону. В другие города России и Мира есть возможность доставки по средствам транспортных компаний (подробности в разделе "Доставка", а также расчет стоимости и сроков доставки в свой город Вы можете увидеть на странице товара в левом верхнем углу.)

В нашем магазине Вы можете выбрать аудио компоненты ведущих мировых и российских производителей. Собрать систему от начального до профессионального уровня. У нас вы получите качественную консультацию по подбору и установке, а так же сможете прослушать аудио компоненты.</p>  
    </div>  
  
   
</div>

<footer>
        <div class="footer-container">
            <div class="contact-info">
                <h3>Контактная информация</h3>
                <p>Телефон: +7(950)432-51-35</p>
                <p>Email: SoundRevolution@mail.ru</p>
                <p>Адрес: ул. Советов,д 20</p>
            </div>
            <div class="social-links">  
                <h3>Социальные сети</h3>  
                <a href="https://web.telegram.org"><img class="fixed-size" src="images/icons8-телеграмма-app-48.png" alt="Telegram"></a>
                <a href="https://vk.com/awdadawedf"><img class="fixed-size" src="images/icons8-vk-48.png" alt="Vk"></a>
            </div>
            <div class="newsletter">
                <h3>Подписаться на рассылку</h3>
                <div class="subscription-form"> 
                    <input type="email" placeholder="Ваш Email"> 
                    <button type="submit">Подписаться</button> 
                </div>
            </div>
        </div>
    </footer>

</body>
</html>