<?php
	if(isset($_POST['signup'])){
		$id=$_POST['id'];
		$pass=$_POST['pass'];
		$cpass=$_POST['cpass'];
		$name=$_POST['name'];
		$utype=$_POST['usert'];	
		if(empty($id) == true || empty($pass) == true || empty($cpass) == true ||empty($utype) == true  ||empty($name) == true){
			echo "null submission!";
	}
	else {
		$user=fopen('user.txt','a+');
		$data=fwrite($user, "$id"."|"."$pass"."|"."$cpass"."|"."$name"."|"."$utype");
		fclose($user);
		header('location: login.php');
	}
	}


?>

<!DOCTYPE html>

<html>
	<head>
		<title>Registration</title>
	</head>
	
	<body>
		
			<form method="POST" action="reg.php"/>
			<fieldset>
				<legend><b>Registration</b></legend>
				<table>
					
					<tr>
					<td>ID: <br>
					<input type="number" name="id" /></td>
				</tr>
				<tr>
					<td>Password:
					<br><input type="password" name="pass" /></td>
				</tr>
				<tr>
					<td>Confirm Password:<br>
					<input type="password" name="cpass" /></td>
				</tr>
				<tr>
					<td>Name: <br>
					<input type="text" name="name" /></td>
				</tr>
				<tr>
					<td>User Type<br>
						<input type="radio" name="usert" value="admin"/> Admin
						<input type="radio" name="usert" value="user"/> User 
					</td>
				</tr>
				<tr>
					
					<td>
					<input type="submit" name="signup" value="Sing Up">
					<a href="signin.php">Sign In</a>
					</td>
				</tr>
				</table>
				</fieldset>
			
				</body>
				</html>
						
				
		