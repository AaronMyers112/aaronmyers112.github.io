<?php
    session_start();
    $title_name = $_SESSION['title_name'];
    $username = $_GET['username'];
    $password = $_GET['password'];

    function login($username = 'User', $password = 'admin') {  
        if($username != $_SESSION['title_name'] || $password != 'admin') {
            return false;
        }
        else {
            return true;
        }
    }
    if(login($username, $password)){
        $_SESSION['login'] = true;
        header("refresh:1;url = index.php");
        echo ' <p> login successful, you will be redirected in 1 second, otherwise click  <a href="index.php" >here</a> ';
    }
    else{
        header("refresh:0;url = index.php");
    }
?>