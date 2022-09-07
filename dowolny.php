<?php

$zmiennaA = 5;
$zmiennaB = 10;


$wynik = $zmiennaA * $zmiennaB;


for($i = $wynik; $i<=10000;$i+=20){

    $wynik *= 2;
    if($wynik >=10000){
        break;
    } else{
        echo "podana wartość dwóch zmiennych wynosi" . " " . '<h1>'. $wynik . '</h1>';
    }
    

}










?>