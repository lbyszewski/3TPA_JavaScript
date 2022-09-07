<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egzamin AISI</title>
</head>
<body>
<form  method="post">
        <label>Podaj przedmiot: </label> <input type="text" name="thing"><br>
        <label>Podaj numer z dziennika: </label> <input type="text" name="numbers"><br>
        <label>Podaj ocena: </label> <input type="number" name="ocena"><br>

        <input type="submit" value="zapisz">
</form>

<?php
    # 1. Przechwytywanie danych wprowadzonych od użytkownika

    $rzecz = $_POST['thing'];
    $numer = $_POST['numbers'];
    $oceny = $_POST['ocena'];





    # 2. Utworzenie połaczenia z bazą danych 
        # 2.1 wypisujemy dany z phpmyadmin zgodne z jej połączeniem

        $hostname = "localhost";
        $user = "root";
        $password = "";
        $database = "egzaminaisi";
        $port = 3325;

       # 2.2  tworzymy instację połaczenia do bazy danych na podstawie danych powyżej w pkt 2.1


       $polaczenie = new mysqli($hostname, $user, $password, $database , $port);

        if(mysqli_connect_errno()){
            die(mysqli_connect_error("nie mogłeś połaczyć się do bazy danych , sprawdź dane połaczeniowe "));
        }

    # 3 . utworzenie zapytania do bazy danych w celu zapisania danych od użytkownika 

        #3.1 kwerenda do bazy danych wzbogacone o  dane przechwycone z formularza 
        $zapisz = "INSERT INTO egzamin(id_egz,nazwa,numer,ocena) VALUES('','$rzecz','$numer','$oceny')";

        #3.2 do utorzonego zapytania przekazujemy połaczenie do bazy danych i  kwerendę jako parametry
        $zapytanie = mysqli_query($polaczenie,$zapisz);


        #3.3 odpytanie bazy o wyśwetlnie dostępnych rekordów w tabeli 

        $sql = "SELECT id_egz, nazwa, numer  ,ocena FROM egzamin";

        
            $result = $polaczenie->query($sql);
        #3.4 sprawdzenie czy istnieją wiersze 
        if ($result->num_rows > 0) {
            
        # 3.4.1 jeśli są dostępne     
        while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id_egz"]. " - Name: " . $row["nazwa"]. "  " . $row["numer"]. "  " . $row["ocena"]. "<br>";
        }
        } else {
            echo "0 results";
        }
        $polaczenie->close();


?>


</body>
</html>