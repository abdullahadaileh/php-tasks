<?php

// var_dump($_SERVER["REQUEST_METHOD"]);

 // method وضيفتو يبينلك نوع الريكوست post/method ($_SERVER["REQUEST_METHOD"]

if ($_SERVER["REQUEST_METHOD"]=="POST") { 
    $emaill = htmlspecialchars($_POST["email"]) ; 
    $passwordd = htmlspecialchars($_POST["password"]) ; 

    echo "These are Data that user sended it";
    echo "<br>";
    echo "<br>";
    echo $emaill;
    echo "<br>";
    echo $passwordd;
        
}



