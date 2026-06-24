<!-- multi return functions -->
 <?php
    function gread($num){
        if( $num>=90){
            return "A+";
        }else if( $num>=80){
            return "A";
        }else if($num>=70){
            return "B+";
        }else if($num>=60){
            return "B";
        }else if($num>=50){
            return "C+";
        }else{
            return "Fail";
        }
       
    }

     echo gread(95);
 ?>