<!-- Create a simple HTML form (method = post) with fields: name, email. Create a PHP file that, after submission, prints: "Thank you, [name]! We'll contact you at [email]." -->

<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=$_POST["user"];
        $email=$_POST["email"];
        if(!empty($name) && !empty($email)){
            echo "Thank you $name! We'll contact you at $email";
        }else{
            echo "Please fill the form properly";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="stylep1.css">
</head>
<body>
    <form action="" method="POST">
        <div class="container">
            <label for="" id="name">
                Name
            </label>
            <input type="text" name="user" placeholder="Enter your name"><br>
            <label for="">
                Email
            </label>
            <input type="email" name=email placeholder="email "><br>
            <button type="submit">Submit</button>
        </div>

    </form>
    
</body>
</html>