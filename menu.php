
<ul>
	<?php if (($_SESSION['rolID'])==1){?>
		<li><a href="home.php"><h2> HOME </h2></a></li>
		<li><a href="viewShopkeeper.php"><h2> View ShopKeeper</h2></a></li> 
		<li><a href="iterm.php"><h2>GALLERY</h2></a></li>
		<li><a href="orderform.php"><h2>ORDER</h2></a></li> 
		<li><a href="payment.php" ><h2> PAYMENT</h2></a></li> 
		<li><a href="index.php"><h2> Logout</h2></a></li> 

	<?php } else if (($_SESSION['rolID'])==2) {?>
			<li><a href="home.php"><h2> HOME </h2></a></li>
		<li><a href="iterm.php"><h2>GALLERY</h2></a></li>
		<li><a href="orderform.php"><h2>ORDER</h2></a></li> 
		<li><a href="payment.php" ><h2> PAYMENT</h2></a></li> 
		<li><a href="index.php"><h2> Logout</h2></a></li>

	<?php } else {?>

		<li><a href="home.php"><h2> HOME </h2></a></li>
		<li><a href="iterm.php"><h2>GALLERY</h2></a></li>
		<li><a href="orderform.php"><h2>ORDER</h2></a></li> 
		<li><a href="payment.php" ><h2> PAYMENT</h2></a></li> 
		<li><a href="index.php"><h2> Logout</h2></a></li>
		<?php } ?>
		
	</ul>