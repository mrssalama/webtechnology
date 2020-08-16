
<?php
$con=new PDO('mysql:host=localhost;dbname=supermarket;','root','zanzibary');
session_start();
 if(isset($_POST['submit']))
{
        $username = $_POST['username'];
        $passwd = $_POST['password'];

        $sql = 'SELECT * FROM user, role where role.Role_id=user.Role_id and username=? and Password=?';
        $stmt = $con->prepare($sql);
        $stmt->execute(array($username,$passwd));
       // $nrw = $stmt->rowCount();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);     
 
if($row){
		foreach ($row as $print){
		
		$_SESSION['rolID']=$print['Role_Id'];

		 header('location:home.php'); 
}
	}
	else{
 	 header('location:index.php');
		}


}
?>