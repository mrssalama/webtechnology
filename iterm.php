
	<?php
session_start();
$db=new PDO('mysql:host=localhost;dbname=supermarket;','root','zanzibary');
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" >
<style>
body{ 
background-image:url(image/m1.png);
background-size:cover;
}
</style>
</head>

<body>

	<div class="name" align="center"> <h1><b><P>PRODUCT</P></b></h1>
		<div class="bags"> <h3>BAGS</h3></div>
		<div class="A"><img src="image/w.png" width="300px" height="350px"><div>
		<div class="B"><img src="image/mikoba-7.png" width="300px" height="350px"><div>
		<div class="C"><img src="image/mikoba-8.png" width="300px" height="350px"><div>
		<div class="D"><img src="image/th1.png" width="300px" height="350px"><div>

	</div>
	<a href="home.php"> <input type="button" name="submit" value="Back"></a>

		

	
</body>
</html>