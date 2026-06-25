<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of even number</title>
</head>
<body>
    <center>
        <form action="" method="post">
    Enter a number : <input type="number" name="Number" ><br><br>
        <input type="submit" value="Sum" name="sum"><br><br>
</form>
</center>
    </body>
</html>

<?php
    function sum($num){
              if($num <= 0){
        return 0;
    }
    if($num % 2 == 0){
        return $num + sum($num - 2);
    }
    else{
        return sum($num - 1);
    }
} 
    if(isset($_POST["sum"])){
        $num=$_POST["Number"];
        echo "<center>Sum of even number is :<center> ". sum($num);
    }
?>