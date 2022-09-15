<?php

session_start();

$user = $_SESSION["u"];

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        
    <h1>Hello <?php echo $user["name"]; ?>!</h1>

    <a href="profile.php">Go to My Profile</a>
    <button onclick="signout();">Sign Out</button>

    <script src="script.js"></script>
    </body>
</html>