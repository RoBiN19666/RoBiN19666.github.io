<?php
    session_start();

    $link = new link('localhost', 'id15341046_admin', 'QXl-tS{aD|Ta7*%l', 'id15341046_users');
  if (!$link) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_error() . ', ошибка: ' . mysqli_connect_error();
    exit;
  }
    

?>
