<?php
$db=new PDO('mysql:host=localhost;dbname=supermarket;','root','zanzibary');

session_start();
?>	

<!DOCTYPE html>
<html>
<head><h3> FORM ORDERING<h3>
	<script>
function Confirm(){
	return confirm("do you want to delete order");
}
</script>

<link rel="stylesheet" type="text/css" href="style1.css" >
<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/css/bootstrap.min.css" >
</head>
	<div class='row' style='margin-top:1%'>
		<div class='col-md-12'>
			<table border='1' width='100%'>
				<th>Order_id</th>
				<th>User_id</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Entrydate</th>
				<th>Name</th>
				<th>Action</th>
				<tbody>


				<?php 
				$sql='SELECT * FROM order, user where user.User_id=user.User_id';
				$stm=$db->prepare($sql);
				$stm->execute();
				$row=$stm->fetchAll(PDO::FETCH_ASSOC);
				if($row){
					$c=1;
					foreach($row as $output){
				?>
					<tr>
					<td><?php echo $c; ?></td>
					<td><?php echo $output['Order_id']; ?></td>
					<td><?php echo $output['User_id']; ?></td>
					<td><?php echo $output['Price']; ?></td>
					<td><?php echo $output['Quantity']; ?></td>
					<td><?php echo $output['Entrydate']; ?></td>
					<td><?php echo $output['Name']; ?></td>
					<td><?php echo $output['Action']; ?></td>
				<td>
							<a href='#'>Edit</a> |
							<a href="deleteorder.php.php?delorder=<?php echo $output['Order_id']; ?>" onclick ='return Confirm();'>Delete</a>
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