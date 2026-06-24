<!-- Use a for loop to print numbers from 1 to 10. -->
 <?php
    $i=1;
    while($i<=10){
        echo "$i\t\t";
        $i++;
    }
    echo "<br>";
 ?>

<!-- Use a for loop to print the multiplication table of 5 (5x1=5, 5x2=10... up to 5x10=50). -->
 <?php
    $i=1;
    $n=5;
    do{
        echo "$n".'x'."$i".'='.($n*$i)."<br>";
        $i++;
    }while($i<=10);
?>


<!-- Use a while loop to print all even numbers from 1 to 20. -->
 <?php
    $i=1;
    while($i<=20){
        if($i%2==0){
            echo "$i\t";
        }
        $i++;
    }
 ?>



<!-- Use a foreach loop to print this array: $fruits = ["Apple", "Banana", "Mango"]; -->
 <?php
    $fruits=["Apple","Banana","Mango"];
    foreach($fruits as $fruit){
        echo "<br>$fruit \t\t";
    }
 ?>