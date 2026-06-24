<!-- . Arithmetic Operators -->
 <?php
    $a=9;
    $b=2;
    echo "Addition : ".($a+$b).  '<br>';
    echo "Subtraction : ". ($a-$b) .'<br>';
    echo "Multiplication : ". ($a*$b).'<br>';
    echo "Division : ". ($a/$b).'<br>';
    echo "Square : ". ($b**$b).'<br>';
?>

<!-- Assignment Operator -->
 <?php
    $a=4;
    $b=2;
    echo $a+=2;
    echo $b-=$a;
    echo $a/=$b;
    echo $b%=2;
    
 ?>


<!-- 
    $x = "10";
   $y = 10;
   var_dump($x == $y);
   var_dump($x === $y);
    this will print 
    i.bool(true)-> beacuse == only check value not datatype
    ii.bool(false) ->because === checks value and datatype strickly

   -->

   <!-- Write a condition using && that checks if a student's $marks >= 40 AND $attendance >= 75 to decide if they "Pass". -->


   <?php
    $marks=97;
    if($marks>=40 && $marks>=75){
        echo "Pass";
    }else{
        echo "fail";
    }
   ?>