<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        
            <div class="navbar-brand">Canada Classifieds!</div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class='nav-link' href="home.php">Home</a>
            </li>
            <li class="nav-item">
            <a class='nav-link' href="items.php">Items</a>
            </li>
            <li class="nav-item">
            <a class='nav-link' href="categories.php">Categories</a>
            </li>
            
            <?php
                if(isset($_SESSION['id'])){
                    echo "<li class='nav-item'><a class='nav-link' href='../private/manage_prod.php'>Manage Products</a></li>";
                    echo "<li class='nav-item'><a class='nav-link' href='../private/manage_cat.php'>Manage Categories</a>";
                }else{
                    echo "<li class='nav-item'><a class='nav-link' href='../signup.php'>Sign Up</a></li>";
                    echo "<li class='nav-item'><a class='nav-link' href='../signin.php'>Login</a></li>";
                }
                ?> 
                </ul>
        
        
        
    </div>
 </nav>
    
</body>
</html>