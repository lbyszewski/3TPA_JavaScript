<?php

$w = $_POST['w'];
$k = $_POST['k'];

for($i = 1; $i<=$w;$i++){
	for($j = 1; $j<=$k;$j++){
	echo ('<table border="1">' . '<th>' . '<tr>'.'<td>' . $i.'</td>'.'<td>'.'*'.'</td>'.'<td>'.$j.'</td>'.'<td>'.'<label>'.'Wynik działania to: '.'</label>'.$i * $j.'</td>'.'</tr>' . '</th>' . '</table>');
}
}





?>