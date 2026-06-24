

<!-- <?php
// if(isset($_POST['submit'])){
//         $numbers=array(5,10,32,12,54);
//         foreach($numbers as $number){
//             echo "arr=>{$number}<br>";
//         }
// }
?> -->





<!-- Write a PHP program to find the sum of all elements in an array. -->
 <!-- <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Array elements</title>
 </head>
 <body>
    <center>
        <form>
        Enter numbers : <input type="numbers" name="num1"><br><br>
        <input type="numbers" name="num2"><br><br>
        <input type="numbers" name="num3"><br><br>
        <input type="numbers" name="num4"><br><br>
        <input type="numbers" name="num5"><br><br>
        <input type="submit" value="Sum" name="sum"><br><br>
</form>
</center>
 </body>
 </html>
 <?php
        // if(isset($_GET["sum"])){
        //     $num1=$_GET["num1"];
        //     $num2=$_GET["num2"];
        //     $num3=$_GET["num3"];
        //     $num4=$_GET["num4"];
        //     $num5=$_GET["num5"];

        //     $sum=$num1+$num2+$num3+$num4+$num5;
        //     echo "<center>Sum of array element is : {$sum}</center>";
        // } 

 ?> -->





<!-- Write a PHP program to find the largest element in an array. -->
  <!-- <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest element</title>
 </head>
 <body>
    <center>
        <form>
        Enter numbers : <input type="number" name="num1"><br><br>
        <input type="number" name="num2"><br><br>
        <input type="number" name="num3"><br><br>
        <input type="number" name="num4"><br><br>
        <input type="number" name="num5"><br><br>
        <input type="submit" value="Largest" name="largest"><br><br>
</form>
</center>
 </body>
 </html>
 <?php
    // if(isset($_GET["largest"])){
    //     $num1=$_GET["num1"];
    //         $num2=$_GET["num2"];
    //         $num3=$_GET["num3"];
    //         $num4=$_GET["num4"];
    //         $num5=$_GET["num5"];

    //         $arrays= array($num1,$num2,$num3,$num4,$num5);

    //         $greatest=$arryas[0];
    //         foreach($arrays as $array){
    //             if($array>$greatest){
    //                 $greatest=$array;
    //             }
    //         }
    //         echo "Greatest number is :{$greatest}";
    // }
 ?> -->






<!-- Write a PHP program to sort the elements of an array in ascending order. -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Array element in ascending order</title>
</head>

<body>

<center>
<form method="get">
Enter numbers : <input type="number" name="num1"><br><br>
<input type="number" name="num2"><br><br>
<input type="number" name="num3"><br><br>
<input type="number" name="num4"><br><br>
<input type="number" name="num5"><br><br>

<input type="submit" value="Sort" name="largest"><br><br>
</form>
</center>

<?php
if(isset($_GET["largest"])){

    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $num3 = $_GET["num3"];
    $num4 = $_GET["num4"];
    $num5 = $_GET["num5"];

    $arrays = array($num1,$num2,$num3,$num4,$num5);

    // Sorting logic
    for($i=0;$i<count($arrays)-1;$i++){
        for($j=$i+1;$j<count($arrays);$j++){
            if($arrays[$i] > $arrays[$j]){
                $temp = $arrays[$i];
                $arrays[$i] = $arrays[$j];
                $arrays[$j] = $temp;
            }
        }
    }

    echo "<center>Numbers in ascending order:<br>";

    for($i=0;$i<count($arrays);$i++){
        echo $arrays[$i]."<br>";
    }

    echo "</center>";
}
?>

</body>
</html>



