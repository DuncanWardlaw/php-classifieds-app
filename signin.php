<!DOCTYPE html>
<html lang="en">
    <?php
    include_once 'rootheader.php';
    include_once 'footer.php';
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    
</head>
<body>
<div class="titleBox">
    <h2 class="title">Login</h2>
</div>
<div id="signinForm" class="input-group container">
    <div class="row">
        <form action="includes/signin.inc.php" method="post">
        <div class="col">
            <label for="username" class="form-label">Username</label>
            <input class="form-control" type="text" name="username" placeholder="Enter username..">
        </div>
            <label for="pwd" class="form-label">Password</label>
            <input class="form-control" type="password" name="pwd" placeholder="Enter password..">
        <div class="col">
        <button id="signButton" class="btn btn-primary" type="submit" name="submit">Sign In</button>
        </div>
    </div>
</div>
<?php
    if(isset($_GET["error"])){
        if($_GET["error"]=="emptyinput"){
            echo "<p>Please complete all fields!</p>";
        }else if($_GET["error"]=="invalidUid"){
            echo "<p>Invalid username</p>";
        }else if($_GET["error"]=="invalidEmail"){
            echo "<p>Invalid email</p>";
        }else if($_GET["error"]=="PwdDontMatch"){
            echo "<p>Invalid username</p>";
        }else if($_GET["error"]=="usernameTaken"){
            echo "<p>Username already taken</p>";
        }else if($_GET["error"]=="none"){
            echo "<p>You have signed up</p>";
        }else if($_GET["error"]=="badlogin"){
            echo "<p>Login failed</p>";
        }
    }
 ?>
</section>   






<script src="https://code.jquery.com/jquery.js"></script>

    
</body>
</html>