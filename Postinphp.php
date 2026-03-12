<!-- Form to enter multiple data (POST) -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form for POST operation</title>
 </head>
 <body>
    <center>
        <form action="" method="post">
            First name : <input type="text" name="fname"><br><br>
            Last name : <input type="text" name="lname"><br><br>
            email : <input type="email" name="Email"><br><br>
            password : <input type="password" name ="Password"><br><br>
            <input type="submit" value="Submit"><br><br> 
</form>
</center>
 </body>
 </html>
 <?php

    if((isset($_POST['fname'])) &&(isset($_POST['lname'])) && (isset($_POST['Email']))&&(isset($_POST['Password']))){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['Email'];
        $password=$_POST['Password'];

        echo "<h2> Student information </h2> <br><br>";
        echo " First name : {$fname} <br>";
        echo " Last name : {$lname}<br>";
        echo " Email : {$email}<br>";
        echo "Password : {$password}<br>";
    }

 ?>