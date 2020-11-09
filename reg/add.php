<?php
    session_start();

    
    $message = $_POST['message'];

    $ses = $_COOKIE['user'];
    
    if (mb_strlen($message) < 10 || mb_strlen($message) > 10000) {
        echo "Количество символов должно быть от 10 - 100";
    }
    else  
    {  
    
    
    
    $mysql = new mysqli('localhost', 'id15341046_admin', 'QXl-tS{aD|Ta7*%l', 'id15341046_users');
        $mysql->query("INSERT INTO `reviews` ( `uname`, `text`) VALUES( '$ses', '$message')");
    }
    $mysql->close();
    
    header('Location: /otzivi.php');
?>