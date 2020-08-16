
<?php
$db=new PDO('mysql:host=localhost;dbname=supermarket;','root','zanzibary');
session_start();
?>	

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style1.css" >
<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/css/bootstrap.min.css" >
<!--<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/css/bootstrap.css" >-->

<script>
function Confirms(){
	return confirm("do you want to delete data");
}
</script>

</head>

<body>
	<div class="container-fluid">

	<div class="name" align="center"> <h1><b>ON LINE SUPERMARKET</b></h1>
		</div>
		<div class="navbar" style='margin-bottom:3%'>
			<nav>
				<?php include 'menu.php'?>
			</nav>
	
	

	</div>	

	<a href='reg.php' ><input type="button" value ="Add ShopKeeper"></a>
	<div class='row' style='margin-top:1%'>
		<div class='col-md-12'>
			<table border='1' width='100%'>
				<th>ID</th>
				<th>Full Name</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Address</th>
				<th>City</th>
				<th>User Name</th>
				<th>Role Name</th>
				<th>Action</th>
				<tbody>
				<?php 
				$sql='SELECT * FROM user, role where role.Role_id=user.Role_id';
				$stm=$db->prepare($sql);
				$stm->execute();
				$row=$stm->fetchAll(PDO::FETCH_ASSOC);
				if($row){
					$c=1;
					foreach($row as $output){
				?>
					<tr>
					<td><?php echo $c; ?></td>
					<td><?php echo $output['Fullname']; ?></td>
					<td><?php echo $output['Phone']; ?></td>
					<td><?php echo $output['Email']; ?></td>
					<td><?php echo $output['Adress']; ?></td>
					<td><?php echo $output['City']; ?></td>
					<td><?php echo $output['username']; ?></td>
					<td><?php echo $output['roleName']; ?></td>
					<td>
							<a href='#'>Edit</a> |
							<a href="deleteUserHendler.php?delUser=<?php echo $output['User_id']; ?>" onclick ='return Confirms();'>Delete</a>
					</td>
					</tr>

				<?php 
				$c++;
				} }
				?>
				</tbody>
    			</table>
		</div>
	</div>

</body>

<!-- link for java script triger the delete-->
<script src="js/jquery.min.js" type="text/javascript"></script>
	
</html>
  