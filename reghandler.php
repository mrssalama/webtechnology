<?php
session_start();
$db=new PDO('mysql:host=localhost;dbname=supermarket;','root','zanzibary');
if (isset($_POST['submitdata'])){
	

	$fullname=$_POST['fullname'];
	$adress=$_POST['adress']; 
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$city=$_POST['city'];  
	$username=$_POST['username'];

	$sql='INSERT INTO user VALUES (?,?,?,?,?,?,?,?,?)';
	$stmt=$db->prepare($sql);
	$stmt->execute(array(null,$fullname,$phone,$email,$adress,$password,$city,$username,2));
	$row=$stmt->rowCount();
	if($row){
		 header('location:viewShopkeeper.php');
	}
	else{
		header('location:reg.php');
		}


}


//customer hendel
if (isset($_POST['submitdataCustomer'])){
	

	$fullname=$_POST['fullname'];
	$adress=$_POST['adress']; 
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$city=$_POST['city'];  
	$username=$_POST['username'];

	$sql='INSERT INTO user VALUES (?,?,?,?,?,?,?,?,?)';
	$stmt=$db->prepare($sql);
	$stmt->execute(array(null,$fullname,$phone,$email,$adress,$password,$city,$username,3));
	$row=$stmt->rowCount();
	if($row){
		 header('location:index.php');
	}
	else{
		header('location:customerReg.php');
		}


}
?>