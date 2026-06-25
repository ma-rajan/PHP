<!-- Create an indexed array of 5 subjects you study, and print them using a for loop (not foreach this time — use count() to get array length for the loop condition). -->

<?php
    $subjects=["Operating System","DBMS","Software Engineer","Javascript","Maths"];
    for($i=0;$i<count($subjects);$i++){
        echo $subjects[$i]."<br>";
    }
?>

<!-- Create an associative array for one student: name, roll, percentage. Print a sentence using the array values. -->
 <?php
    echo "<br>";
    $student=[
        "Name"=>"Mikasa",
        "Roll"=>21,
        "Percentage"=>76
    ];

    echo "$student[Name]"." "."$student[Roll] "." "."Score : "."$student[Percentage]<br>";
 ?>


<!-- Create a multidimensional array of 3 students (name, marks). Use foreach to print each one, and also calculate/print the average marks of all 3 students. -->
<?php
    echo"<br>";
    $students=[
    ["Name"=>"Mikasa","Marks"=>73],
    ["Name"=>"Kajal","Marks"=>78],
    ["Name"=>"Samira","Marks"=>98]
    ];
    $sum=0;
    foreach($students as $student){
        echo $student["Name"]." ".$student["Marks"]."<br>";
        $sum+=$student["Marks"];
    }
    $avg=$sum/3;
    echo "Average marks is :$avg";
?>



<!-- Given $numbers = [23, 5, 67, 12, 89, 34]; — print the max, min, and sum using built-in functions. -->

<?php
    echo "<br>";
    $numbers=[23,5,67,12,89,34];
    echo max($numbers)."<br>";
    echo min($numbers)."<br>";
    echo array_sum($numbers)."<br>";

?>
