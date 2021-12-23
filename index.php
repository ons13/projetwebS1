<?php 
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

    
?>
<html>
    <head>
        <title> my website </title>
    </head>
<body>
    <a href="logout.php">logout</a>
    <h1> this is the index page</h1>

    <br>
    Hey, <?php echo $user_data['user_name']; ?>
</body>
</html>