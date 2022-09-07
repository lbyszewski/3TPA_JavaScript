<?php

$pierw = $_POST['pierwiastek'];


for($i = 1; $i<=$pierw; $i=$i*2){
	
 echo ('<table border="1">' . '<tr>' . '<th>' . $i . '</th>' . '</tr>' . '</table>');
}

?>