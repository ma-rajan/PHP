<!-- Create dashboard.php that checks if the session exists — show welcome message if logged in, else show "Access denied" with a link back to login. -->
<?php
    session_start();
    if(!isset($_SESSION["login"])){
        echo "Please login Access denied";
    }else{
        echo "Welcom to dashbord".$_SESSION["username"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    

    <img src="1.png" alt="" >
</body>
</html>