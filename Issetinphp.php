<!-- Write a PHP program to check whether a variable is set or not using isset(). -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
 </head>
 <body>
    <center>
    <form action="" method="post">
        Username : <input type="text" name="username" placeholder="Enter your username"><br><br>
        Password : <input type="password" name="Password"><br><br>
        <input type="submit" value="Login" name="login"><br><br>
</form>
</center>
 </body>
 </html>
 
 <?php
    if(isset($_POST["login"])){ 
        $username=$_POST["username"];
        $password=$_POST["Password"];

        if((empty($_POST["username"])) && (empty($_POST["Password"])) ){
            echo "Username and password is empty";
        }
        else if(empty($_POST["username"])){
            echo "User name is empty ";
        }else if(empty($_POST["Password"])){
            echo "Password is empty";
        }
        else{
            foreach($_POST as $key=>$value){
                echo "{$key} = {$value}<br>";
            }
        }
    }

 ?> 