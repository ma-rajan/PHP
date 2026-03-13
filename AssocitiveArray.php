<!-- Write a PHP program to create an associative array to store student information (Name, Roll, Address) and display it. -->
<!-- <?php
    // $students=array(
    //     "Name"=>"Rajan Mahato",
    //     "Rollno"=>"17",
    //     "Address"=>"Chitwan"
    // );
    // foreach($students as $key=>$value){
    //     echo "{$key} => {$value} <br><br> ";
    // }
?> -->






<!-- Write a PHP program to store subject marks in an associative array and calculate the total marks. -->
<?php

    $subjects = array(
        "DSA"=>"60",
        "JAVA"=>"64",
        "Web development"=>"58",
        "SAD"=>"50",
        "Statistatic's"=>"56"
    );
    $students["SAD"]="60";
    $sum=0;
    foreach($subjects as $key=>$value){
        $sum=$sum+$value;
        echo "<center>{$key} : {$value}</center><br>";
    }
        echo" <center>Total marks : {$sum}</center>";

?>
