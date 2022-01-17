<?php
function emptyInputSignup($username, $email, $pwd, $pwd2){
    $result;
    if(empty($username) || empty ($email) || empty($pwd) || empty($pwd2)){
        $result = true;
    }
    else{
        $result = false;

    }
    return $result;
}
function emptyItemInput($file, $title, $descr, $price, $cat, $status ){
    $result;
    if(empty($file) || empty ($title) || empty($descr) || empty($price) || empty($cat) || empty($status)){
        $result = true;
    }
    else{
        $result = false;

    }
    return $result;
}
function emptyCatInput($name, $descr, $status){
    $result;
    if(empty($name) || empty ($descr) || empty($status)){
        $result = true;
    }
    else{
        $result = false;

    }
    return $result;
}
function invalidUid($username){
    $result;
    if (!preg_match('/^[a-zA-Z0-9]*$/', $username) ){
        $result = true;
    }
    else{
        $result = false;

    }
    return $result;
}

function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else{
        $result = false;

    }
    return $result;
}
function pwdMatch($pwd, $pwd2){
    $result;
    if ($pwd !== $pwd2) {
        $result = true;
    }
    else{
        $result = false;

    }
    return $result;
}
function uidExists($db_con, $username, $email){
    $sql = "SELECT * FROM members WHERE username = ? OR email = ?;";
    $state = mysqli_stmt_init($db_con);
    if(!mysqli_stmt_prepare($state, $sql)){
        exit();

    }
    mysqli_stmt_bind_param($state, "ss", $username, $email);
    mysqli_stmt_execute($state);
    
    $resultData = mysqli_stmt_get_result($state);
    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($state);
}
function createUser($db_con, $firstName, $lastName, $username, $email, $pwd){
    $sql = "INSERT INTO members (first_name, last_name, username, email, password) VALUES (?, ?, ?, ?, ?) ;";
    $state = mysqli_stmt_init($db_con);
    if(!mysqli_stmt_prepare($state, $sql)){
        exit();

    }
    $hashed = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($state, "sssss", $firstName, $lastName, $username, $email, $hashed);
    mysqli_stmt_execute($state);
    mysqli_stmt_close($state);
    header("location: ../signup.php?error=none");
    exit();
    
    
}
function emptyInputSignin($username, $pwd){
    $result;
    if(empty($username) || empty($pwd)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function loginUser($db_con, $username, $pwd){
    $uidExists = uidExists($db_con, $username, $username);
    
    if($uidExists === false){
        header("location: ../signin.php?error=1");
        exit();
    }
    
    $pwdHashed = $uidExists['password'];
    $pwdCheck = password_verify($pwd, $pwdHashed);
    if( $pwdCheck === false){
        header("location: ../signin.php?error=2");
        exit();
    }
    else if( $pwdCheck === true){
        // I don't know why I made this check it sucks
        if($uidExists['id'] <=10){
        session_start();
        $_SESSION['id'] = $uidExists['id'];
        header("location: ../private/manage_prod.php");
        exit();
        }else{
            header("location: ../public/home.php");
        }
    }
    
}
function itemExists($id){
    $sql = "SELECT * FROM items WHERE id = '$id';";
    $state = mysqli_query($db_con, $sql);
    if($state === false){
        header("location: ../private/manage_prod.php?itemNotFound");
        return false;
        
    }else {
        header("location: ../private/manage_prod.php?goodjob");
        return true;
    }
    


}
function catExists($id){
    $sql = "SELECT * FROM category WHERE id = '$id';";
    $state = mysqli_query($db_con, $sql);
    if($state === false){
        header("location: ../private/manage_prod.php?catNotFound");
        return false;
        
    }else {
        header("location: ../private/manage_prod.php?goodjob");
        return true;
    }
    


}

function createItem($db_con, $title, $descr, $price, $cat, $fileDestination, $status){
    
    $sql = "INSERT INTO items (title, descr, price, cat_id, imgpath, status) VALUES (?, ?, ?, ?, ?, ?) ;";
    $state = mysqli_stmt_init($db_con);
    if(!mysqli_stmt_prepare($state, $sql)){
        header("location: ../private/manage_prod.php?error=uploadFailed");
        exit();

    }
    
    
    mysqli_stmt_bind_param($state, "sssiss", $title, $descr, $price, $cat, $fileDestination, $status);
    
    if(mysqli_stmt_execute($state)===true){
        header("location: ../private/manage_prod.php?error=none");
        
    }else{
        header("location: ../private/manage_prod.php?error=badStatement");
    }
   
    mysqli_stmt_close($state);
    
    exit();
    
    
}
function editItem($db_con, $id, $title, $descr, $price, $cat, $fileDestination, $status){
    
    $sql = "UPDATE `items` SET `title` = '$title', `descr` = '$descr', `price` = '$price', `cat_id` = '$cat', `imgpath` = '$fileDestination' WHERE `items`.`id` = $id;";
    $state = mysqli_stmt_init($db_con);
    if(!mysqli_stmt_prepare($state, $sql)){
        header("location: ../private/manage_prod.php?error=editFailed");
        exit();

    }
    
    
    mysqli_stmt_bind_param($state, "sssissi", $title, $descr, $price, $cat, $fileDestination, $status, $id);
    
    if(mysqli_stmt_execute($state)===true){
        header("location: ../private/manage_prod.php?error=none");
        
    }else{
        header("location: ../private/manage_prod.php?error=badStatement");
    }
   
    mysqli_stmt_close($state);
    
    exit();
    
    
}
function deleteItem($db_con, $id){
    
    $sql = "DELETE FROM `items` WHERE `items`.`id` = '$id';";
    $state = mysqli_stmt_init($db_con);
    if(!mysqli_stmt_prepare($state, $sql)){
        header("location: ../private/manage_prod.php?error=deleteFailed");
        exit();

    }
    
    
    mysqli_stmt_bind_param($state, "s", $id);
    
    if(mysqli_stmt_execute($state)===true){
        header("location: ../private/manage_prod.php?error=none");
        
        
    }else{
        header("location: ../private/manage_prod.php?error=badDatabaseQuery");
    }
   
    mysqli_stmt_close($state);
    
    exit();
    
    
}
function addCat($db_con, $name, $descr, $status){
    
    $sql = 'INSERT INTO category (name, descr, status) VALUES (?, ?, ?);';
    $state = mysqli_stmt_init($db_con);
    if(!mysqli_stmt_prepare($state, $sql)){
        header("location: ../private/manage_cat.php?error=addCategoryFailure");
        exit();
        
        
    }
    
    
    mysqli_stmt_bind_param($state, "sss", $name, $descr, $status);
    
    if(mysqli_stmt_execute($state)===true){
        header("location:../private/manage_cat.php?categoryAdded");
        
       
    }else{
        header("location: ../private/manage_cat.php?error=badStatement");
        
    }
   
    mysqli_stmt_close($state);
    
    exit();
    
    
}
function editCat($db_con, $id, $name, $descr, $status){
    
    $sql = "UPDATE `category` SET `name` = '$name', `descr` = '$descr', `status` = '$status' WHERE `category`.`id` = $id;";
    $state = mysqli_stmt_init($db_con);
    if(!mysqli_stmt_prepare($state, $sql)){
        header("location: ../private/manage_cat.php?error=editFailed");
        exit();

    }
    
    
    mysqli_stmt_bind_param($state, "sssi", $name, $descr, $status, $id);
    
    if(mysqli_stmt_execute($state)===true){
        header("location: ../private/manage_prod.php?error=none");
        
    }else{
        header("location: ../private/manage_prod.php?error=badStatement");
    }
   
    mysqli_stmt_close($state);
    
    exit();
    
    
}
function deleteCat($db_con, $id){
    
    $sql = "DELETE FROM `category` WHERE `category`.`id` = '$id';";
    $state = mysqli_stmt_init($db_con);
    if(!mysqli_stmt_prepare($state, $sql)){
        header("location: ../private/manage_prod.php?error=deleteFailed");
        exit();

    }
    
    
    mysqli_stmt_bind_param($state, "s", $id);
    
    if(mysqli_stmt_execute($state)===true){
        header("location: ../private/manage_prod.php?error=none");
        
        
    }else{
        header("location: ../private/manage_prod.php?error=badDatabaseQuery");
    }
   
    mysqli_stmt_close($state);
    
    exit();
    
    
}


