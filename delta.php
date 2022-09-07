<?php


$a = $_POST['one'];
$b = $_POST['two'];
$c = $_POST['tree'];

$wynik = (pow($b,2)) - (4 * $a * $c);

$pierwDelta = sqrt($wynik);

if($wynik > 0){
        $x1 = ((-$b) - $pierwDelta)/(2 * $a);
        echo ('<table border="1">' . '<tr>' . '<th>' . $x1 . '</th>' . '</tr>' . '</table>');
        $x2 = ((-$b) + $pierwDelta)/(2 * $a);
        echo ('<table border="1">' . '<tr>' . '<th>' . $x2 . '</th>' . '</tr>' . '</table>');
} elseif ($wynik == 0){

    $x0 = -$b/(2 * $a);
    echo ('<table border="1">' . '<tr>' . '<th>' . $x0 . '</th>' . '</tr>' . '</table>');
} elseif ($wynik < 0){
    echo ('<table border="1">' . '<tr>' . '<th>' . "Pierwiastek nie istnieje :(" . '</th>' . '</tr>' . '</table>');
}




?>