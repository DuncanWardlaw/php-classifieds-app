<?php

include 'dbh.inc.php';

        if (isset($_POST['btn'])) {
            $search = mysqli_real_escape_string($db_con, $_POST['item']);
            $sql = "SELECT * FROM items WHERE title LIKE '%$search%'";
            $result = mysqli_query($db_con, $sql);
            $queryResults = mysqli_num_rows($result);

            if($queryResults >0){
                echo "<h4>Search Results</h4>";
                while($row = mysqli_fetch_assoc($result)){
                    echo "<p>" . $row['title'] . " Price: 
                    " . $row['price'] . "</p>";
                $image = $row['imgpath'];
                echo "<img src=".$row['imgpath']." class='featuredItems'></img>";
                    
                    echo "<p>There are ".$queryResults." results.</p>";
                    header("location:../private/manage_prod.php?searchSuccess");
                }
            }else{
                echo "<p>There are no results matching your search!</p>";
                header("location:../private/manage_prod.php?searchFail");
            }
        }
        
        