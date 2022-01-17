<!DOCTYPE html>

<html lang="en">
<?php
    include_once '../pubheader.php';
    include_once '../footer.php';
    ?>
<head>
<?php
include "items.php"
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
<div class="container-fluid" id="results">
    
    
    
        
        <?php
        if (isset($_POST['btn'])) {
            $search = mysqli_real_escape_string($db_con, $_POST['item']);
            $sql = "SELECT * FROM items WHERE title LIKE '%$search%'";
            $result = mysqli_query($db_con, $sql);
            $queryResults = mysqli_num_rows($result);

            if($queryResults >0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "
                    <p>" . $row['title'] . " Price: 
                    " . $row['price'] . "</p><br>
                    ";
                    echo "<p>There are ".$queryResults." results.</p>";
                }
            }else{
                echo "There are no results matching your search!";
            }
        }
        
        ?>
    </div>   
        
</div> 
    
    <script src="https://code.jquery.com/jquery.js"></script>
   
    
</body>
</html>