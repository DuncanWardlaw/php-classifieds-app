<!DOCTYPE html>
<html lang="en">
<?php
    include_once '../privheader.php';
    include_once '../includes/search.inc.php';
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DCC -- Home</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    
    
</head>
<body>

<div id="prodDiv" class="container-fluid">

<div>
    
    <div id="manProd" class="hero-unit span 6">
        <h1>Dunk's Classifieds</h1>
        <p>Welcome, Admin.</p>
        <h2>Manage Products</h2>
        

        <div id="submitDiv">
            <h4>Add Products</h4>
            <form action="../includes/upload.php" method="POST" enctype="multipart/form-data">
            <label for="file">Image:</label>
            <input type="file" name="file">
            
            <label for="title">Title:</label>
            <input type="text" name="title">
            <label for="descr">Description:</label>
            <input type="text" name="descr">
            <label for="price">Price:</label>
            <input type="text" name="price">
            <label for="category">Category:</label>
            <select name="category">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            </select><br>
            <label for="status">Status:</label>
            <select name="status">
            <option value="SHOW">Show</option>
            <option value="HIDE">Hide</option>
            
            </select><br>
            <label for="fPage">Display on Front Page:</label>
            <select name="fPage">
            <option value="YES">Yes</option>
            <option value="NO">No</option>
            
            </select><br>
            <button type="submit" name="submititem">UPLOAD</button>
            
            </form>
        </div>
        <div id="editDiv">
            <h4>Edit Product</h4>
            <form action="../includes/edit.inc.php" method="POST" enctype="multipart/form-data">
            <label for="id">Select via Item ID:</label>
            <input type="text" name="id">
            
            <label for="file">Image:</label>
            <input type="file" name="file">
            
            <label for="title">Title:</label>
            <input type="text" name="title">
            <label for="descr">Description:</label>
            <input type="text" name="descr">
            <label for="price">Price:</label>
            <input type="text" name="price">
            <label for="category">Category:</label>
            <select name="category">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            </select><br>
            <label for="status">Status:</label>
            <select name="status" >
            <option value="SHOW">Show</option>
            <option value="HIDE">Hide</option>
            
            </select><br>
            <label for="fPage">Display on Front Page:</label>
            <select name="fPage">
            <option value="YES">Yes</option>
            <option value="NO">No</option>
            
            </select><br>
            <button type="submit" name="editItem">EDIT</button>
            </form>
        </div>
        <div id="deleteDiv">
            <h4>Edit Product</h4>
            <form action="../includes/delete.inc.php" method="POST" enctype="multipart/form-data">
            <label for="id">Select via Item ID:</label>
            <input type="text" name="id">
            
            
            <button type="submit" name="deleteItem" onclick="prompt()">Delete</button>
            
            </form>
        </div>
      </div>
</div>
<div id="searchProd" class="hero-unit span 6">
    <div id="searcharea">
    <h2>Search For Products</h2>
    <form action="../includes/search.inc.php" method="POST">
        <input type="text" placeholder="Items...." name="item" id="item">
        <input type="submit" id="searchBtn" value="Search" name="btn" >
        </form>
    </div>
</div>

</div>
    
    <script src="https://code.jquery.com/jquery.js"></script>
   
    
</body>
</html>