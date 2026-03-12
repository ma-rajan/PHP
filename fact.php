<!-- . Write a PHP program to find the factorial of a number. -->
 <?php
    $n=5;
    $f=1;
    for($i=1;$i<=$n;$i++){
        $f=$f*$i;
    }
    echo "Factorial of {$n} is : ".$f;
?>
