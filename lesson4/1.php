<?php
    $marks=74;
    if($marks>=90 && $marks<=100){
        echo "Grade : A+";
    }else if($marks>=80 && $marks<90){
        echo "Grade : A";
    }else if($marks>=70 && $marks<80){
        echo "Grade : B+";
    }else if($marks>=60 && $marks<70){
        echo "Grade : B";
    }else if($marks>=50 && $marks<60){
        echo "Grade : C+";
    }else if($marks>=40 && $marks<50){
        echo "Grade : C";
    } else{
        echo "Fail";
    }
?>