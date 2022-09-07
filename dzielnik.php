<?php

$z = $_POST['one'];


for($i = 1; $i<=$z;$i++){
    if($z % $i == 0){
        echo ('<table border="1">' . '<tr>' . '<th>' . $i . '</th>' . '</tr>' . '</table>');

    }
}




?>