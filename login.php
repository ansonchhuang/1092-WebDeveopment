<?php
	session_start();
	if(isset($_GET[out])){
		echo"<script>alert('Logout.')</script>";
	}
	if(isset($_POST[username])){
		$conn = mysqli_connect("localhost", "root", "88888888", "ec_platform");
		$username = $_POST[username];
		$password = $_POST[password];
		$username = mysqli_real_escape_string($conn, $username);
		$password = mysqli_real_escape_string($conn, $password);
		$sql = "select * from users where username='$username' and password='$password'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) == 1){
			$row = mysqli_fetch_assoc($result);
			$_SESSION[username] = $row[username];
			header("location: index.php");
		}else{
			echo"<script>alert('Incorrect username/password.')</script>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		input[type=text],input[type=password]{
			padding: 20px;
			margin: 10px;
			border-radius: 5px;
			width: 240px;
		}
		input[type=submit]{
			padding: 10px;
			margin-left: 8px;
			border-radius: 5px;
			background: navy;
			font-weight: bolder;
			color: white;
			width: 288px;
		}
	</style>
</head>
<body>
	<h1>Login</h1>
	<form action="ec.php" method="post">
		<input type="text" name="username" placeholder="username"><br>
		<input type="password" name="password" placeholder="****"><br>
		<input type="submit" value="Login">
	</form>
</body>
</html>