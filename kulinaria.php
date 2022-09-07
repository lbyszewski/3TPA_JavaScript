<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Restauracja Kulinaria.pl</title>
    <link rel="stylesheet" href="styl4.css" type="text/css"/>
</head>
<body>
<header>
    <div id="banner">
    <h2>Restauracja Kulinaria.pl Zaprasza!</h2>
    </div>
</header>
<div>
    <section id="lewa">
        <p>Dania mięsne zamówisz już od</p>
    </section>
    <section id="srodkowa">
    
    </section>
    <section id="prawa">
    
    </section>
</div>
<footer>
<text>Stronę internetową opracował:</text> <text><i>Mikołaj Śpiewak 3Tip</i></text>
</footer>
</body>
</html>
<?php
$poloczenie = mysqli_connect('localhost','root','','baza');
$zapytanie1 = 'SELECT cena FROM dania WHERE typ = 2';
$skrypt1 = mysqli_query($poloczenie,$zapytanie1);
?>
