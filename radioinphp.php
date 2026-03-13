<!-- Write a program to display the day of the week based on a number entered by the user. -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days in week</title>
 </head>
 <body>
    <center>
        <form action="" method="post">
       Enter first number : <input type="number" name="first"><br><br>
       Enter second number : <input type="number" name="second"><br><br>
        <input type="radio" name="calc" value="+"> Add'+'<br><br>
        <input type="radio" name="calc" value="-"> sub'-'<br><br>
        <input type="radio" name="calc" value="*"> mul'*'<br><br>
        <input type="radio" name="calc" value="/"> div'/'<br><br>
        <input type="radio" name="calc" value="%"> mod'%'<br><br>
        <input type="submit" name="button" value="calculate"><br><br>
    </form>
</center>   
 </body>
 </html>

 <?php
    if(isset($_POST["button"])){
    $num1=$_POST["first"];
    $num2=$_POST["second"];    
    $choice=$_POST["calc"];
        
        switch($choice){
            case '+':
                $sum=$num1+$num2;
                echo "<center>Sum of two number is {$sum} </center>";
                break;
            
            case '-':
                $sub=$num1-$num2;
                echo "<center>Subtract of two number is : {$sub}</center>";
                break;

            case '*':
                $mul=$num1*$num2;
                echo "<center> Multiple of two number is : {$mul}</center>";
                break;

            case '/':
                $div=$num1/$num2;
                echo "<center>Divide of two number is : {$div}</center>";
                break;
            
            case '%':
                $mod=$num1%$num2;
                echo "<center> Mod of two number is : {$mod} </center>";
                break;
            
            default:
                echo "<center>Invalild choice..</center>";

  
                
        }
    }
 ?>