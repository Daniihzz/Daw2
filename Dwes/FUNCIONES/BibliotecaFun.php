<?php


function cuentaLetras($a, $x=false): int{
$vocales = 0;
$total = 0;
$vocal = ["a", "e", "i", "o", "u"];

if($x){
    for($i = 0; $i<strlen($a); $i++){
        if($a[$i] == $x){
            ++$total;
        } 
    } return $total;
}
    

    if($x==false){
        for($i = 0; $i<strlen($a); $i++){
        if(in_array($a[$i], $vocal)){
            ++$vocales;
        } 
    }
    }return $vocales;
    
    
}
echo "<h1>"; echo "<br>";
echo cuentaLetras("Holaoeoooo", "a");

?>