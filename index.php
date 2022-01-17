<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<?php
    include_once 'rootheader.php';
    include_once 'footer.php';
    
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC -- Home</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../master.css" rel="stylesheet">
    
    
</head>
<body>





<div id="home-hero" class="px-4 pt-5 my-5 text-center border-bottom">
    <h1>Dunk's Classifieds</h1>
    <p>We are Toronto's premiere classified hosting site. Find just about anything you need or post your old stuff for some extra cash. Happy hunting!</p>
    <p><a href="/public/about.php" class="btn btn-primary btn-large">Learn more »</a></p>
</div>
<div class="container" id="buttonsParent">
    <h2 id="buttonsChild">Join Today!</h2>
    <a href="signup.php" id="buttonsChild" class="btn btn-secondary btn-lg">Register</a>
    <h2 id="buttonsChild" >Already A User?</h2>
    <a href="signin.php" id="buttonsChild"  class="btn btn-secondary btn-lg">Login</a>
</div>

    
    <script src="https://code.jquery.com/jquery.js"></script>
 
    
</body>
</html>