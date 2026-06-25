<!-- Create a form with a number input field for marks. After submitting, use your getGrade() function from Lesson 7 to show the grade for the entered marks. (This is your first "real" mini project combining forms + functions!) -->

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
            <label for="" id="marks">         
                Your Marks
            </label>
            <input type="number" name="marks" placeholder="Enter your marks"><br>
            <button type="submit">Check</button>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $marks=$_POST["marks"];   
        if(!empty($_POST["marks"])){
        if( $marks>=90){
            echo "A+";
        }else if( $marks>=80){
            echo "A";
        }else if($marks>=70){
            echo "B+";
        }else if($marks>=60){
            echo "B";
        }else if($marks>=50){
            echo "C+";
        }else{
            echo "Fail";
        }
            }else{
                echo "Please enter marks";
            }
        }
    ?>

</div>
</body>
</html>