<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username=$_POST["username"];
        $password=$_POST["Password"];
        echo "Username : $username <br> Password : $password";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="" method="POST">
        <h3>Login Form</h3>
        <label for="">
            Username
        </label>
        <input type="text" name="username" placeholder="Enter your username"><br>
        <label for="">
            Password
        </label>
        <input type="password" name="Password" placeholder="Password"><br>
        <button id="login" >Login</button>
        </form>
    </div>
    
</body>
</html>