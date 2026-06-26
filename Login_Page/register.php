<?php
        session_start();
        include("db.php");
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $fullname=$_POST["fullname"];
            $username=$_POST["username"];
            $email=$_POST["email"];
            $phoneno=$_POST["phoneno"];
            $password=$_POST["password"];
            $confirm_password=$_POST["confirm_password"];
            $role=$_POST["role"];

            if(!empty($fullname) && !empty($username) && !empty($email) && !empty($phoneno) && !empty($password) 
                && !empty($confirm_password) && !empty($role)){
            
            if($password !=$confirm_password){
                echo "
                <script>
                alert('Please Enter same password in both field');
                window.location='register.php';
                </script>
                ";
                exit();
            }
    

            $sql="INSERT INTO register(fullname,username,email,phoneno,password,role)VALUES
                            ('$fullname','$username','$email','$phoneno','$password','$role')";
            if($conn->query($sql)){      
            echo "
                <script>
                  alert('Register Sucessfully');  
                window.location='register.php';
                  </script>
            ";
            }else{
            echo "
            <script>
                alert('Database Error');
                window.location='register.php';
            </script>
            ";
        }
            }
            else{
                echo "
                    <script>
                    alert('Please fill all fields in form');
                    window.location='register.php';
                    </script>
                ";
               
            }
        }      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Registeration Form</h2>
        <form action="" method="POST">
            <label for="">Fullname</label><br>
            <input type="text" class="box" name="fullname"><br>
            <label for="">Username</label><br>
            <input type="text" class="box" name="username"><br>
            <label for="">Email</label><br>
            <input type="email" class="box" name="email"><br>
            <label for="">Phoneno</label><br>
            <input type="text" class="box" name="phoneno"><br>
            <label for="">password</label><br>
            <input type="password" class="box"  name="password"><br>
            <label for="">Confirm password</label><br>
            <input type="password" class="box" name="confirm_password"><br>
            <label for="">Role</label> <br>
            <select name="role" id="boox">
             <option  value="customer">Customer</option>
             <option  value="service_provider">Service_Provider</option>
                </select>
            <button type="submit">Register</button>
             <p>I have any account</p>
        <a href="login.php"> login</a>
        </form>

    </div>
</body>
</html>


