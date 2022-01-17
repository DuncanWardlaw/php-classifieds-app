

<?php
include 'dbh.inc.php';
include 'functions.inc.php';
include '../includes/script.js';
if(isset($_POST['deleteItem'])){

?>

    <script type="text/javascript">
    prompter();
    </script>';
    
<?php
        $id = $_POST['id'];
        if(itemExists($id)===true){
        deleteItem($db_con, $id);
        }
    
    
    
    

}
?>