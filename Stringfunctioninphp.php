<!-- String handling functions -->
<?php
$str = "Hello Rajan";
echo "Original String : ".$str."<br><br>";
echo "Length of String : ".strlen($str)."<br><br>";
echo "Reverse String : ".strrev($str)."<br><br>";
echo "Uppercase : ".strtoupper($str)."<br><br>";
echo "Lowercase : ".strtolower($str)."<br><br>";
echo "Substring (0,5) : ".substr($str,0,5)."<br><br>";
echo "Replace Rajan with World : ".str_replace("Rajan","World",$str)."<br><br>";
?>
