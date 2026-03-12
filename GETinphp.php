<!-- GET Calculator (Addition, Subtraction, Multiplication, Division) -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
 </head>
 <body>
    <form action="" method="get">
    <center>
    Enter first number : <input type="number" name="first"><br><br>
    Enter second number : <input type="number" name="second"><br><br>
    <select name="op">
        <option value='+'>+</option>
        <option value='-'>-</option>
        <option value='*'>*</option>
        <option value='/'>/</option>
</select><br><br>
    <input type="submit" value="calculate"><br><br>

</center>
</form>
 </body>
 </html>

 <?php
    if((isset($_GET['first'])) && (isset($_GET['second']))){
        $a=$_GET['first'];
        $b=$_GET['second'];
        $choice=$_GET['op'];

        switch($choice){
            case '+':
                $sum=$a+$b;
                echo "sum is : {$sum}";
            break;

            case '-':
                $sub=$a-$b;
                echo "sub is : {$sub}";
            break;

            case '*':
                $mul=$a*$b;
                echo "mul is : {$mul}";
            break;

            case '/':
                $div=$a/$b;
                echo "div is : {$div}";
            break;
        }
    }


?>

