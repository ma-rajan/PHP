<?php
    $conn=new mysqli("localhost","root","2004","CRUD");
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $fullname=$_POST["fullname"];
        $username=$_POST["username"];
        $email=$_POST["email"];
        $phoneno=$_POST["phoneno"];
        $password=$_POST["password"];
        $confirmpass=$_POST["confirmpass"];
        $gender=$_POST["gender"];
        if(!empty($fullname) && !empty($username) && !empty($email) && !empty($phoneno) && !empty($confirmpass) && !empty($gender)) {

        if($password!=$confirmpass){
            echo "
                <script>
                alert('please enter same password');
                window.location.href='register.php';
                </script>
            ";
            exit();
        }

        $sql="INSERT INTO register(fullname,username,email,phoneno,password,confirm_password,gender)VALUES('$fullname','$username','$email','$phoneno','$password','$confirmpass','$gender')";

        if($conn->query($sql)){
            echo "
            <script>
            alert('Register Sucessfully');
            </script>
            ";
        }
        }else{
            echo "
            <script>
                alert('Please fill form properly');
                window.location.href = 'register.php';
            </script>. 
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
            <input type="password" class="box" name="confirmpass"><br>
            <div class="gender">
            <label for="" >Gender</label><br>
            <input type="radio" class="gg" name="gender" value="male">Male
            <input type="radio" class="gg" name="gender" value="female">Female
            <input type="radio" class="gg" name="gender" value="other">others
</div>
            <button type="submit">Register</button>
        </form>

    </div>
</body>
</html>