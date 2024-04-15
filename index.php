
<!DOCTYPE html>
<html lang="ru">
<head>
    <style>
      header { 
    background-color: #333; 
    color: white; 
    text-align: center; 
    padding: 10px; 
    width: 100%; /* Ширина шапки на всю страницу */ 
    z-index: 1000; /* Устанавливаем z-index, чтобы шапка была выше других элементов */ 
} 
 
body { 
    margin-top: 50px; /* Добавляем отступ сверху, чтобы контент не перекрывался под шапкой */ 
} 

footer {  
    background-color: #333; 
    color: white;  
    text-align: center;  
    padding: 20px 0; 
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

.subscription-form { 
    display: flex; 
    flex-direction: column; 
    align-items: center; 
    width: 200px; /* Измените на нужную ширину */ 
    margin: 0 auto; 
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


.carousel { 
    position: relative; 
    width: 100%; 
    overflow: hidden; 
} 
 
.carousel-slide { 
    display: none; 
    width: 100%; 
} 
 
.active { 
    display: block; 
} 
 
.carousel img { 
    width: 100%; 
    height: auto; 
} 
 
.carousel-prev, .carousel-next { 
    position: absolute; 
    top: 50%; 
    transform: translateY(-50%); 
    background-color: #333; 
    color: white; 
    padding: 10px; 
    border: none; 
    cursor: pointer; 
} 
 
.carousel-prev { 
    left: 10px; 
} 
 
.carousel-next { 
    right: 10px; 
}

        
            </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href = "css/main3.css">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist"> 
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/js/"> 
    <!DOCTYPE html>
    <html lang="en">
    <?php
session_start();
if (isset($_SESSION['success_message'])) {
    echo '<div style="background-color: #d4edda; color: #155724; padding: 10px; text-align: center;">'.$_SESSION['success_message'].'</div>';
    unset($_SESSION['success_message']);
}
?>
   


   <header style="background-color: #333; color: #ffffff; text-align: center; padding: 10px; margin-bottom: 20px;">     
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

<section class="carousel"> 
        <div class="carousel-slide active"> 
            <img src="images/Без названия.png" alt="Слайд 1"> 
        </div> 
        <div class="carousel-slide"> 
            <img src="images/gu26lzvybetex73swkuvfjznw1vr2n0g.jpg" alt="Слайд 2"> 
        </div> 
        <button class="carousel-prev">←</button> 
        <button class="carousel-next">→</button> 
</section> 
<script> 
let slideIndex = 0; 
showSlides(slideIndex); 
function showSlides(n) { 
    const slides = document.getElementsByClassName("carousel-slide"); 
    if (n >= slides.length) { 
        slideIndex = 0; 
    } else if (n < 0) { 
        slideIndex = slides.length - 1; 
    } 
 
    for (let i = 0; i < slides.length; i++) { 
        slides[i].style.display = "none"; 
    } 
 
    slides[slideIndex].style.display = "block"; 
} 
function nextSlide() { 
    showSlides(++slideIndex); 
} 
function prevSlide() { 
    showSlides(--slideIndex); 
} 
// Автоматическое перелистывание каждые 3 секунды 
let intervalId = setInterval(nextSlide, 3000); 
// Останавливаем автоматическое перелистывание при наведении на карусель 
document.querySelector(".carousel-container").addEventListener("mouseover", () => { 
    clearInterval(intervalId); 
}); 
// Возобновляем автоматическое перелистывание при уходе курсора с карусели 
document.querySelector(".carousel-container").addEventListener("mouseout", () => { 
    intervalId = setInterval(nextSlide, 3000); 
}); 
document.querySelector(".carousel-prev").addEventListener("click", () => { 
    prevSlide(); 
}); 
document.querySelector(".carousel-next").addEventListener("click", () => { 
    nextSlide(); 
}); 
</script>
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
</html>
