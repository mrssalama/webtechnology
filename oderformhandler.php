<?php
session_start();
$db=new PDO('mysql:host=localhost;dbname=supermarket;','root','zanzibary');
if (isset($_POST['submit'])){
	echo "string";

	$price=$_POST['price'];
	$item_name=$_POST['item_name']; 
	$Quantity=$_POST['Quantity'];
	$Entrydate=$_POST['Entrydate'];
	
	$sql='INSERT INTO order VALUES (?,?,?,?,?)';
	$stmt=$con->prepare($sql);
	$stmt->execute(array(null,$price,$Quantity,$Entrydate,$item_name));
	$row=$stmt->rowCount();
	if($row){
		 header('location:payment.php');
	}
	else{
		header('location:oderformhandler.php');
		}


}

?>