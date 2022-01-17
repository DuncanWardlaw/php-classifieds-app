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
    
</head>
<body>

<div class="container-fluid">
    
    
    <div class="searchArea" id="itemSearch">
        <label>Search for items</label>
        <form action="search.php" method="POST">
        <input type="text" placeholder="Items...." name="item" id="item">
        <input type="submit" id="searchBtn" value="Search" name="btn" >
        </form>
    </div>
    <div class="itemsHome" id="itemResult">
        
        <?php
        $query = 'SELECT * FROM items';
        $result = $db_con->query($query);
        $queryResults = mysqli_num_rows($result);
        if($queryResults > 0)
        {
            echo "<p>Featured Items</p>";
            while($row = $result->fetch_assoc())
            {
                    echo "<div>
                    <p>" . $row['title'] . " Price: 
                    " . $row['price'] . "</p>
                    </div>";
                $image = $row['imgpath'];
                echo "<img src=".$row['imgpath']." class='featuredItems'></img>";

            }
            
        }
        
        ?>
    </div>   
        
</div>      
        


            
        

    
    <script src="https://code.jquery.com/jquery.js"></script>
   
    
</body>
</html>