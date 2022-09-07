<?php

require("polacz.php");
$id=$_GET['id'];

$query = mysqli_query($conn,"select * from uzytkownik where id_user='$id'");
$result = $query;
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<label>Firstname:</label><input type="text" value="<?php echo $row['first']; ?>" name="firstname">
		<label>Lastname:</label><input type="text" value="<?php echo $row['second']; ?>" name="lastname">
		<input type="submit" name="submit">
		<a href="formularzzapisu.html">Back</a>
	</form>
</body>
</html>