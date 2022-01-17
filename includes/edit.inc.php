<?php
include 'dbh.inc.php';
include 'functions.inc.php';
if(isset($_POST['editItem'])){
    $file = $_FILES['file'];
    $id = $_POST['id'];
    $title = $_POST['title'];
    $descr = $_POST['descr'];
    $price = $_POST['price'];
    $cat = (is_numeric($_POST['category']) ? (int)$_POST['category'] : 0);
    $status = $_POST['status'];
    $fPage = $_POST['fPage'];

    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    
    
    

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');
    if(in_array($fileActualExt, $allowed))
    {
        if($fileError === 0){
            if($fileSize < 50000000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = '../uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                editItem($db_con, $id, $title, $descr, $price,  $cat, $fileDestination, $status);
                
            }else{
                echo "The file is too big";
            }
        } else{
            echo "There was an error uploading your file";
        }
    }else{
        echo "You cannot upload files of this type.";
    }
    
    

}
