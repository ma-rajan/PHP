<?php
    $conn=new mysqli("localhost","root","2004","Practice");
    if($conn->connect_error){
        die ("Connection faile ".$conn->connect_error);
    }
?>