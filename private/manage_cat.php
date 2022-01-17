<!DOCTYPE html>
<html lang="en">
<?php
    include_once '../privheader.php';
    include_once '../includes/search.inc.php';
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DCC -- Manage Categories</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    
    
</head>
<body>

<div id="prodDiv" class="container-fluid">

<div>
    
    <div id="manProd" class="hero-unit span 6">
        <h1>Dunk's Classifieds</h1>
        <p>Welcome, Admin.</p>
        <h2>Manage Categories</h2>
        

        <div id="submitDiv">
            <h4>Add A Category</h4>
            <form action="../includes/addCat.inc.php" method="POST" enctype="multipart/form-data">
            
            <label for="name">Category Name:</label>
            <input type="text" name="name">
            <label for="descr">Description:</label>
            <input type="text" name="descr">       
            <label for="status">Status:</label>
            <select name="status">
            <option value="SHOW">Show</option>
            <option value="HIDE">Hide</option>
            </select><br>
            
            <button type="submit" name="addCat">ADD</button>
            
            </form>
        </div>
        <div id="editDiv">
            <h4>Edit A Category</h4>
            <form action="../includes/editCat.inc.php" method="POST" enctype="multipart/form-data">
            <label for="id">Select via Category ID:</label>
            <input type="text" name="id">
            
            
            
            <label for="name">Name:</label>
            <input type="text" name="name">

            <label for="descr">Description:</label>
            <input type="text" name="descr">
           
            
            <label for="status">Status:</label>
            <select name="status" >
            <option value="SHOW">Show</option>
            <option value="HIDE">Hide</option>
            
            </select><br>
            
            <button type="submit" name="editCat">EDIT</button>
            </form>
        </div>
        <div id="deleteDiv">
            <h4>Delete A Category </h4>
            <form action="../includes/deleteCat.inc.php" method="POST" enctype="multipart/form-data">
            <label for="id">Select via Category ID:</label>
            <input type="text" name="id"><br>
            
            
            <button type="submit" name="deleteCat" onclick="prompt()">DELETE</button>
            
            </form>
        </div>
      </div>
</div>
<div id="statusChange" class="hero-unit span 6">
<div id="changeArea">
    <h2>Search For Categories</h2>
    <form action="../includes/searchCat.inc.php" method="POST">
        <input type="text" placeholder="Categories...." name="name" id="name">
        <input type="submit" id="searchBtn" value="Search" name="btn" >
        </form>
    </div>
</div>

</div>
    
    <script src="https://code.jquery.com/jquery.js"></script>
   
    
</body>
</html>