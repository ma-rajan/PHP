<!-- 
Create variables for 
studentName‘,‘rollNumber`, $percentage, and print them in a sentence like:

"Rajan (Roll No: 5) scored 85.5%" 
-->
<?php
    $studentName="Rajan";
    $rollNo=16;
    $percentage=98;
    $Monday=true;
    echo "Name :".$studentName." "." (Roll no : ".$rollNo.") "."Scored : ".$percentage.'%<br>';
    // check "" and ''
    echo "Name : $studentName<br>";
    echo 'Name : $studentName<br>';
    //using var_dump build in function
    var_dump($Monday);
?>
