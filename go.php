<?php


$a=$_POST["Go"];
$b=$_POST["GOT"];

echo "Equals :". $a+$b ;

echo "   Numbers:";

$k=$a+$b;

if ($k<=50){


    for ($k=1; $k<=50; $k++){
        echo  "$k," ;
        
    }
}else {

    for ($k=51; $k<=100; $k++){
        echo  "$k," ;
        
    }
    
}
 
 ?>