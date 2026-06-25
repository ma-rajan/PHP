<!-- Write a function isEven($num) that returns true if a number is even, false if odd. Test it with a few numbers. -->
 <?php
    function isEven($num){
        if($num%2!=0){
                return false;
        }else{
            return true;
        }
    }
    $a=isEven(42);
    echo $a===1? "Even":"Odd"."<br>";
    $a=isEven(51);
    echo $a===0? "Odd":"Even"."<br>";
 ?>

 <!-- Write a function calculatePercentage($obtained, $total) that returns the percentage. Test with calculatePercentage(450, 500). -->
  <?php
    function calculatePercentage($obtained,$total){
        return ($obtained/$total)*100;
    }
    echo calculatePercentage(450,500)."%";
  ?>

  <!--Rewrite your grading system from Lesson 4 as a function getGrade($marks) that returns the grade as a string. Then call it for 3 different marks (e.g., 95, 72, 38) and print results.-->
  <?php
  echo "<br>";
    function getGrade($marks){
       if($marks>=90 && $marks<=100){
        return "Grade : A+";
    }else if($marks>=80 && $marks<90){
        return "Grade : A";
    }else if($marks>=70 && $marks<80){
        return "Grade : B+";
    }else if($marks>=60 && $marks<70){
        return "Grade : B";
    }else if($marks>=50 && $marks<60){
        return "Grade : C+";
    }else if($marks>=40 && $marks<50){
        return "Grade : C";
    } else{
        return "Fail";
    }
    }

    echo getGrade(95)."<br>";   
    echo getGrade(72)."<br>";
    echo getGrade(38)."<br>";
                             

?>


<!-- Write a function greetStudent($name, $course = "BCA") with a default value for $course. Call it once with both arguments, and once with just the name. -->
 <?php
    function greetStudent($name,$course="BCA"){
        return "$name => $course ";
    }
    echo greetStudent("Rajan")."<br>";
    echo greetStudent("Mikasa","BBA");

 ?>
