<?php
    $student=[
        ["Name"=>"Mikasa", "Score"=>75],
        ["Name"=>"Anjali", "Score"=>76],
        ["Name"=>"Rahual", "Score"=>65]
    ];

    foreach($student as $stud){
        echo "$stud[Name]". "\t\t\tScore : "."$stud[Score] <br>";
    }

?>