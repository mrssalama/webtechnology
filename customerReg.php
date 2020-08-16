<?php
session_start();
$db=new PDO('mysql:host=localhost;dbname=supermarket;','root','zanzibary');
?>

<!DOCTYPE html >
<html>
<head> 
 
<link rel="stylesheet" type="text/css" href="css3.css">
<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/css/bootstrap.css" >

</head>
<body>

<form  onsubmit="return acount()" action="reghandler.php" method="POST" >
					<table width="650px"  height="600px" align="center"  border="3px">
						<tr>
							<th style="color:blue;" colspan="2"><h2>New account </h2></th>
						</tr>
						<tr> 
							<th align="left">FULL NAME:</th>
								<td><input type="text" name="fullname"><span  id="fullnames" ></span></td>
						</tr> 
						<tr>
							<th align="left">PHONE NUMBER:</th><td><input type ="text" name="phone">	<span id="Phones"></span></td>
						</tr>
						<tr>
							<th align="left">ADDRESS:</th><td><input type ="text" name="adress">	<span id="adress"></span></td>
						</tr>
						<tr>
							<th align="left">CITY:</th><td><input type ="text" name="city">	<span id="city"></span></td>
						</tr>
							<tr>
							<th align="left">EMAIL:</th><td><input type ="email" name="email"><span id="email"></span></td>

						</tr>
						
						</tr>
						<tr>
							<th align="left">USER NAME:</th><td><input type ="text" name="username"><span id="username"></span></td>
						</tr>
						
						<tr>
							<th align="left">PASSWORD:</th>
								<td><input type ="password" name ="password"> 
									<span id="passwords"></span>
								</td>
						</tr>
						
						
						<tr>
						
							<th colspan="2" >
								<div id="sub">
									<input type="submit" value ="submit" name="submitdataCustomer"> <a href='index.php'><input type="button" value ="cancel"></a>
							</th>	
						
						</tr>
					
					</table>
					
					</form>
</body>
</html>
  

