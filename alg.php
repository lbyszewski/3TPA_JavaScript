<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="post">
    <input type="number" name="liczba"/>
    <input type="submit" value="wyświetl"/>
  </form>
<?php


$liczba = isset($_POST['liczba']);
$min = 0;
$max = 0;
$tablica = [];




for($z =0;$z<10;$z++){
  $tablica[$z] = $liczba;
  for($i = 0; $i<$z;$i++){
    if($tablica[$i]>$max){
      $tablica[$i] = $tablica[$z];
      $max = $tablica[$i];

    }
    if($tablica[$i]<$min){
      $tablica[$i] = $tablica[$z];
      $min = $tablica[$i];
    }
}
}





echo '<h1>'. $max . '</h1>';
?>
</body>
</html>