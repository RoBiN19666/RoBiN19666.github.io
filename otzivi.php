<?php
    session_start();
    include_once "reg/connect.php";

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style3.css"> 
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:400,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css">
    <link rel="shortcut icon" href="assets/images/about/favicon.ico" type="image/x-icon">
    <title>Отзывы</title>
        
    </table>
    
</head>

<body>
    <div class="body">
    <?php
    if(($_COOKIE['user']) != ''):
    ?>
     <div class="testimonials">
      <div class="inner">
        <a class="col"> 
        <h2>
          Отзывы
        </h2>
        </a>
         <div class="col">
            <div class="testimonial">
              <div class="name">

            <form action="reg/add.php" method="post" >
            <p><textarea name='message' rows="9" cols="45" placeholder="Текст отзыва"></textarea></p>
            <p><button class="c-button">Добавить</button></p>
            </form>
        </div>

        <br>

        <h2>Список отзывов</h2>
        
        <?php
          $kom=mysqli_query($connect, "SELECT * FROM `reviews` ORDER BY `id` DESC");
          $kom = mysqli_fetch_all($kom);
          foreach($kom as $kom){
              ?>
              
            <div class="reviews">
                <span><i><?=$kom[1]?></i></span>
                <br>
                <?=$kom[2]?>
            </div>
        
        <?php
          }
          ?>
        
    

   
        </div>
        

       </div>
</div>
       

    <?php else: ?>
          <div class="col">
            <div class="testimonial">
              <div class="name">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;"></font>
                </font>
              </div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </div>

 
        <h2>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> Вы не авторизованы, доступ запрещен. Чтобы авторизоваться нажмите <a href="/reg/index.html">ЗДЕСЬ</a></font>
          </font>
        </h2>
            </div>
          </div>



    <?php endif ?>
    </div>
</div>
</body>
      