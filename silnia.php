<?php 

$zmiennaS = $_POST['five'];

	function silnia($zmiennaS){
		if($zmiennaS == 0){
		return 1;
	} else {
		return $zmiennaS * silnia($zmiennaS - 1);
		 
	}
	}


echo ('<table border="1">' . '<tr>' . '<th>' . silnia($zmiennaS) . '</th>' . '</tr>' . '</table>');


?>