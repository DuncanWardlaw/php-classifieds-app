<?php

include 'dbh.inc.php';

        if (isset($_POST['btn'])) {
            $search = mysqli_real_escape_string($db_con, $_POST['name']);
            $sql = "SELECT * FROM category WHERE name LIKE '%$search%';";
            $result = mysqli_query($db_con, $sql);
            $queryResults = mysqli_num_rows($result);

            if($queryResults >0){
                echo "<h4>Search Results</h4>";
                while($row = mysqli_fetch_assoc($result)){
                    echo "<p>" . $row['name'] . " Price: 
                    " . $row['status'] . "</p>";
                
                    
                    echo "<p>There are ".$queryResults." results.</p>";
                    header("location:../private/manage_cat.php?searchSuccess");
                }
            }else{
                echo "<p>There are no results matching your search!</p>";
                header("location:../private/manage_cat.php?searchFail");
            }
        }
        
        