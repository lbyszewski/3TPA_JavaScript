<?php 

$zmiennaF = $_POST['four'];

	function fibb($zmiennaF){
		if($zmiennaF <3){
		return 1;
	} else {
		return fibb($zmiennaF - 2) + fibb($zmiennaF - 1);
		 
	}
	}


echo ('<table border="1">' . '<tr>' . '<th>' . fibb($zmiennaF) . '</th>' . '</tr>' . '</table>');


?>