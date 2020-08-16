
<!DOCTYPE html>;
<html>
<head>       
<script>
 function login(){
 var form=/[^ a-zA-Z]+$/;
 
 var username = document.getElementById("username").value;

	if(username==null || username==""){
	
	document.getElementById("usernames").innerHTML="enter your username";
	return false;
	}else if(username.match(form)){
document.getElementById("usernames").innerHTML=" must be letter";
	return false;
	}else{
	
document.getElementById("usernames").innerHTML="";
	}
	
	
 var password = document.getElementById("password").value;
	if(password==null || password==""){
	document.getElementById("passwords").innerHTML="enter your password";
	return false;
	}else{
	document.getElementById("passwords").innerHTML="";
	
	}
	
	

}

</script>
<style type="text/css">
body{
background-image:url(image/haa.png);
background-size:cover;
}    
</style>
</head>

<body >
	<center>
	<form onclick="return login()" action="loginHandler.php" method="POST" >
		<table width="500ppx" height="500px"  border="5px">
			<tr>
				<th colspan ="2">LOGIN FORM</th>
			</tr>
			<tr>
				<th>username</th>
				<td><input type ="text" id="username" name="username" >
				<span id="usernames"></span>
				</td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type ="password" id="password" name="password" >
				<span id="passwords"></span>
				
				</td>
			</tr>
			
			<tr>
				<th colspan ="2"><input type="submit" value="LOGIN"  name="submit"></th>
			</tr>
			
			<tr>
				<th colspan ="2"><a href="reg.php" > <b>create new account</b> </a></th>
			</tr>
		</table>
		</form>
	</center>
</body>
</html  