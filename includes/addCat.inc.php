<?php
include 'dbh.inc.php';
include 'functions.inc.php';
if(isset($_POST['addCat'])){
    
    
    $name = $_POST['name'];
    $status = $_POST['status'];
    $descr = $_POST['descr'];

    if(emptyCatInput($name, $status, $descr)===true){
        header("location:../private/manage_cat.php?emptyField");
        exit();
        }
        
    addCat($db_con, $name, $descr, $status);
    
        
    
    

   
    
    

}
