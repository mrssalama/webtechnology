<?php
$con=new PDO('mysql:host=localhost;dbname=supermarket;','root','zanzibary');
session_start();
 if(isset($_GET['delUser']))
{
	$id=$_GET['delUser'];
	$sql = 'delete from user where User_id=?';
	$stmt = $con->prepare($sql);
	$stmt->execute(array($id));
    $nrw = $stmt->rowCount();     
 
	if($nrw){
		
		 header('location:viewShopkeeper.php'); 

	}
	else{
 	 header('location:viewShopkeeper.php');
		}
}


?>