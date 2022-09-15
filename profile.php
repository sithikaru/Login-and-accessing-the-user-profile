<?php

session_start();

$user = $_SESSION["u"];

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Profile</title>
    </head>
    <body>
        
    <h1>My Profile</h1>

    <span>Name : <?php echo $user["name"]; ?></span> <br/><br/>
    <span>Email : <?php echo $user["email"]; ?></span><br/><br/>
    <span>Mobile : <?php echo $user["mobile"]; ?></span><br/><br/>
    <span>Password : <?php echo $user["password"]; ?></span>

    <script src="script.js"></script>
    </body>
</html>