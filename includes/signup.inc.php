<?php

if(isset($_POST['submit'])){
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $username = $_POST["username"];
    $email = $_POST['email'];
    $pwd = $_POST["pwd"];
    $pwd2 = $_POST["pwd2"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($firstName, $lastName, $username, $email, $pwd, $pwd2)!== false){
        header("location: ../signup.php?error=emptyinput");
        exit();

    }
    if(invalidUid($username)!== false){
        header("location: ../signup.php?error=invalidUsername");
        exit();

    }
    
    if(invalidEmail($email)!== false){
        header("location: ../signup.php?error=invalidEmail");
        exit();

    }
    if(pwdMatch($pwd, $pwd2)!== false){
        header("location: ../signup.php?error=PwdDontMatch");
        exit();

    }
    if(uidExists($db_con, $username, $email)!== false){
        header("location: ../signup.php?error=usernameTaken");
        exit();

    }
    createUser($db_con, $firstName, $lastName, $username, $email, $pwd);
}

else{
    header("location: ../signup.php");
}