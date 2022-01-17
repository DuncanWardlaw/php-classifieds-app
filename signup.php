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
    <link href="../master.css" rel="stylesheet">
    <style>
        .signin-form{
            margin: auto;
            width: 50%;
        }
        
    </style>
</head>
<body>
<div class="titleBox">
    <h2 class="title">Sign Up</h2>
</div>
<div id="signupForm" class="input-group container">
    
    <form action="includes/signup.inc.php" method="post">
    <div class="row">
        <div class="col">
        <label for="firstName" class="form-label">First Name</label>
        <input class="form-control" type="text" name="firstName" placeholder="Enter first name..">
        </div>
        <div  class="col">
        <label for="lastName" class="form-label">Last Name</label>
        <input class="form-control" type="text" name="lastName" placeholder="Enter last name..">
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="username" class="form-label">Username</label>
        <input class="form-control" type="text" name="username" placeholder="Enter username..">
        </div>
        <div class="col">
        <label for="email" class="form-label">Email</label>
        <input class="form-control" type="text" name="email" placeholder="Enter email..">
        </div>
    </div>
    <div class="row">
        <div class="col">
        <label for="password" class="form-label">Password</label>
        <input class="form-control" type="password" name="pwd" placeholder="Enter password..">
        </div>
        <div class="col">
        <label for="password" class="form-label">Password</label>
        <input class="form-control" type="password" name="pwd2" placeholder="Enter password again..">
        </div>
    </div>
    <button id="signButton" class="btn btn-primary" type="submit" name="submit">Sign Up</button>
</form>
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
        }
    }
 ?>
</div>   

   






<script src="https://code.jquery.com/jquery.js"></script>
<script src="../bootstrap.min.js"></script>
    
</body>
</html>