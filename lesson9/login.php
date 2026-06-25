<!-- Login page -->
<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"] =="POST"){
        $username=$_POST["username"];
        $password=$_POST["password"];
      
        if($username=="admin" && $password=="1234"){ 
           $_SESSION["username"]=$username;
        $_SESSION["login"]=true;   
      header("location:dashbord.php");
      exit();
        }else{
            echo "Incorrect password";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student details</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container">
        <form action="" method="POST">
        <label for="">
            Username
        </label><br>
        <input type="text" name="username" placeholder="Enter username">
        
       <br> <label for="">
            Password
        <br></label>
        <input type="password" name="password" placeholder="enter password">
</label>
    <button> Login</button>
    <a href="logout.php">Logout</a>
    </form>
    </div>
</body>
</html>