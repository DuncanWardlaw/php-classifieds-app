<?php
include 'dbh.inc.php';
include 'functions.inc.php';
if(isset($_POST['editCat'])){
    
    $id = $_POST['id'];
    $name = $_POST['name'];   
    $descr = $_POST['descr'];  
    $status = $_POST['status'];

    if(catExists($id)===true){
        editCat($db_con, $id, $name, $descr, $status);
        header("location:../private/manage_cat.php");
    }

   

   
    
    

    
    

}
