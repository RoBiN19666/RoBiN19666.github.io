<?php
    session_start();
    require_once 'connect.php';
    $name = filter_var(trim($_POST['name']), 
     FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
     FILTER_SANITIZE_STRING);

 
        
    $pass = md5($pass."hfghffdsfdgfd");

    $mysql = new mysqli('localhost', 'id15341046_admin', 'QXl-tS{aD|Ta7*%l', 'id15341046_users');
    
    $result = $mysql->query("SELECT * FROM `users` WHERE `name` = '$name' AND `password` = '$pass'");

    $user = $result->fetch_assoc();
    if(count($user) == 0) {
        echo "Такой пользователь не найден";
       exit();
    }
    
    

    $_SESSION['user'] = ["name" => $user['name']];
    header('Location: /index.php');
    

    setcookie('user', $user['name'], time() + 3600, "/");

    $mysql->close();


?>