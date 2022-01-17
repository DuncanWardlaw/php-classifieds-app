<!DOCTYPE html>
<html lang="en">
<?php
    include_once '../pubheader.php';
    include '../includes/dbh.inc.php';
    include_once '../footer.php';
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classified Items</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../master.css" rel="stylesheet">
    <link href="category.css" rel="stylesheet">
</head>
<body>
<div class="album py-5 bg-light bg-gradient">
    
    
    <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="catResult">
    <?php
        $query = 'SELECT * FROM category';
        $result = $db_con->query($query);
        $queryResults = mysqli_num_rows($result);
        if($queryResults > 0)
        {
            
            while($row = $result->fetch_assoc())
            {
                if($row['status']!= 'HIDE'){
                    $image = $row['imgpath'];
                echo "<div class='col' id='category'>
                    <div class='card shadow-sm'>
                    <h4 id='catTitles'>" . $row['name'] ."</h4>                     
                    <p id='catText' class='card-text'>" . $row['descr'] . "</p>
                    <img src=".$row['imgpath']." class='categoryImage'></img>
                    </div>
                    </div>";
                
                }

            }
            
        }
        
        ?>
    </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery.js"></script>
    
    
</body>
</html>