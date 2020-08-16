<?php
session_start();
$db=new PDO('mysql:host=localhost;dbname=supermarket;','root','zanzibary');
if (isset($_POST['submit'])){

$username=$_POST['username'];
$passwod=$_POST['password'];


$sql='select* from user order by user_id';
$statement=$db->prepare($sql);
$statement->execute();

$rows=$statement->fetchAll(PDO::FETCH_ASSOC);
				 						
 foreach ($rows as $row){
$row =$_POST['uusername'];
$row =$_POST['password'];
}
header('location:index.php');
}
else{
	header('location:login.php');
}
?>
