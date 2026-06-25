<!-- Add the isset() + empty() check to Question 1 — if name or email is left blank, show an error message: "Please fill in all fields." instead of processing. -->
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="stylep1.css">
</head>
<body>
          <div class="container">
            <form action="" method="POST">
  
            <label for="" id="name">
                Name
            </label>
            <input type="text" name="user" placeholder="Enter your name"><br>
            <label for="">
                Email
            </label>
            <input type="email" name=email placeholder="email "><br>
            <button type="submit">Submit</button><br>

            

    </form>
        </div>
        <?php
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $user=$_POST["user"];
                    $email=$_POST["email"];
                    if((isset($_POST["user"]) && isset($_POST["email"])) && (!empty($_POST["user"]) && !empty($_POST["email"]))){
                            echo "user : $user<br> Email :$email";
                    }else{
                        echo "Please fill in all fields";
                    }
                }
            ?>
</body>
</html>