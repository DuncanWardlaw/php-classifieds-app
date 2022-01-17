

<?php
include 'dbh.inc.php';
include 'functions.inc.php';
include '../includes/script.js';
if(isset($_POST['deleteCat'])){

?>

    <script type="text/javascript">
    prompter();
    </script>';
    
<?php
        $id = $_POST['id'];
        if(catExists($id)===true){
        deleteCat($db_con, $id);
        }
    
    
    
    

}
?>