<?php
session_start();
$db=new PDO('mysql:host=localhost;dbname=supermarket;','root','zanzibary');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css3.css" >
<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/css/bootstrap.min.css" >
<!--<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/css/bootstrap.css" >-->

<style> 
</style>
</head>
<body>
<div class="oderform" align="center">
	<center><div> <b>ORDERING FORM</b></div> </center>
<form action="oderformhandler.php" method="POST">
	<div class='row' style='margin-top:1%'>
		<div class='col-md-12'>
	<table border="2px" solid cellpadding="20" cellspacing="5" width=500px" height="350px">

		<tr> <th>ITERM TYPE</th> <td colspan="4"><text area><input type="text" name="item_name" ></td>
			</tr>
				<span id ="item_name"></span>
				<br>

		<tr><th>QUANTITY*</th><td colspan=4><input type="number" name="Quantity" ></td>
			</tr></td></tr>
				<span id="Quantity"></span>

			<th>PRICE</th><td><input type="tect" name="price" ></td>
		</tr>
		<tr><th>ENTRY DATE</th><td colspan=4><input type="date" name="Entrydate" ></td>
		</tr>
		<tr><th colspan=4><input type="reset" name="clear" value="Clear">
				<input type="submit" name="submit" value="send order">
		</th></tr>
	</table>
</form>		        
</div>
</body>
</html>