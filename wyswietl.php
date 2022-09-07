<?php
$database = require('./connect.php');




$sql = "SELECT id_user, imie, nazwisko,pass FROM uzytkownik";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id_user"]. " - Name: " . $row["imie"]. " " . $row["nazwisko"]. " ". $row["pass"]. "<br>";
    }
} else {
    echo "0 results";


}

?>