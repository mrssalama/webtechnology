<?php
session_start();
$db=new PDO('mysql:host=localhost;dbname=supermarket;','root','zanzibary');
if (isset($_POST['submit'])){
	?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style1.css" >
<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/css/bootstrap.min.css" >
<!--<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/css/bootstrap.css" >-->

</head>

<body>
		<label for Amount>TOTAL AMOUNT</label><br>
		<input type="currency" name="amount"><br>
		<label for Amount>ENTRY DATE</label><br>
<input type="date" name="enterydate"> <br>

<input type="submit" name="submit" value="submit payment"> <br>

	</body>
	</html>