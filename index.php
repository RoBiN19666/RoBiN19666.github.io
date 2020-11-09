<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:400,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/about/favicon.ico" type="image/x-icon">
    <title>Home Page</title>
</head>
<body>


<header class="header">
    <div class="container">
        <div class="header__inner">
            <a class="header__logo" target="_blank">
            <div class="header__logo">Интернет технологии</div>
            </a>
            <nav class="nav">
                <a class="nav__link" href="about.html">О нас</a>
                <a class="nav__link" href="otzivi.php" >Отзывы</a>
                <a class="nav__link" href="https://twitter.com/danilyh96?s=09" target="_blank">Блог</a>
                <div class="dropdown">
                    <a class="nav__link">Контакты</a>
                    <div class="dropdown-content">
                        <a class="nav__link" href="https://vk.com/iddanilyh" target="_blank">К. Данил</a>
                        <a class="nav__link" href="https://vk.com/6robin6" target="_blank">В. Иван</a>
                    </div>    
                </div>
                
                    <!-- Если авторизован выведет приветствие -->
                <?php if(isset($_SESSION['user']['name'])) : ?>
                <div class="dropdown">
                <a class="nav__link"> <?php echo $_SESSION['user']['name'] ?> </a>
                <div class="dropdown-content">
                <a class="nav__link" href="reg/logout.php">Выйти</a> <!-- файл logout.php создадим ниже -->
                </div>
                </div>
                <?php else : ?>
                
                <!-- Если пользователь не авторизован выведет ссылки на авторизацию и регистрацию -->
                <a class="nav__link" href="reg/index.html">Авторизоваться</a>
                <?php endif; ?>




            </nav>
        </div>
    </div>
</header>


<div class="intro">
    <div class="container">
        <div class="intro__inner">
        
            <h1 class="intro__title">Home Page</h1>
            <div class="baton">
            <a class="btn" href="2index.html" >Learn More</a>
            </div>    
        </div>
    </div>

    <div class="slider">
        <div class="container">
            <div class="slider__inner">
                <div class="slider__item active">
                    <span class="slider__num">01</span>
                    Production
                </div>
                <div class="slider__item active">
                    <span class="slider__num">02</span>
                    CBT
                </div>
                <div class="slider__item active">
                    <span class="slider__num">03</span>
                    OBT
                </div>
                <div class="slider__item">
                    <span class="slider__num">04</span>
                    Release
                </div>
            </div>
        </div>
    </div>


</div><!-- /.intro -->


<section class="section">
    <div class="container">

        <div class="section__header">
            <h3 class="section__suptitle">Для чего мы это делаем</h3>
            <h2 class="section__title">История о нас</h2>
            <div class="section__text">

                <p>Это наш первый проект на языках html и css</p>
          

            </div>
        </div>

        <div class="about">
            <a class="a" href="next.html" target="_blank">
            <div class="about__item">
                <div class="about__img">
                    <img src="assets/images/about/4.jpg" alt="">
                </div>
                <div class="about__text">Our next project 1</div>
            </div>
            </a>
            <a class="a" href="next2.html" target="_blank">
            <div class="about__item">
                <div class="about__img">
                    <img src="assets/images/about/5.jpg" alt="">
                </div>
                <div class="about__text">Our next project 2</div>
            </div>
            </a>
            <a class="a" href="next3.html" target="_blank">
            <div class="about__item">
                <div class="about__img">
                    <img src="assets/images/about/7.jpg" alt="">
                </div>
                <div class="about__text">Our next project 3</div>
            </div>
            </a>
        </div>

    </div><!-- /.container -->
</section>



<div class="statistics">
    <div class="container">

        <div class="stat">
            <div class="stat__item">
                <div class="stat__count">9</div>
                <div class="stat__text">Дней без сна</div>
            </div>
            <div class="stat__item">
                <div class="stat__count">1млн</div>
                <div class="stat__text">Нервных клеток потрачено</div>
            </div>
            <div class="stat__item">

                <div class="stat__count">0</div>
                <div class="stat__text">Удачных проектов</div>
   
            </div>
            <div class="stat__item">
                <div class="stat__count">135</div>
                <div class="stat__text">чашек кофе</div>
            </div>
            <div class="stat__item">
                <div class="stat__count">2</div>
                <div class="stat__text">участника</div>
            </div>
        </div>

    </div>
</div>
    
</body>
</html>
