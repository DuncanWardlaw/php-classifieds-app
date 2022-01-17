<?php

if(isset($_POST["submit"])){

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignin( $username, $pwd)!== false){
        header("location: ../signup.php?error=emptyinput");
        exit();

    }

    loginUser($db_con, $username, $pwd);
    
}