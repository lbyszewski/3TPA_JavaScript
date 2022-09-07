<?php
$database = require('./connect.php');

if($_POST) {

    // zbieranie danych z formularza POST
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $haslo = $_POST['haslo'];


    // tworzenie hasha hasla
    $hash = password_hash($haslo, PASSWORD_DEFAULT);

    
        // zapytanie sql
        $result = mysqli_query($connection, "INSERT INTO uzytkownik (id_user, imie, nazwisko, pass) VALUES ('', '$imie', '$nazwisko', '$hash')");
   

    // przekierowanie
    return header('Location: formularzzapisu.html');
}