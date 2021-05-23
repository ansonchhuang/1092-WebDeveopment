<?php
	session_start();
	if(!isset($_SESSION[username])){
		header("location: 1.php?act=1");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Index</title>
</head>
<body>
	<h1>Content Management System</h1>
	Welcome, <?php echo $_SESSION[username]; ?>
	<a href="logout.php">Logout</a>
</body>
</html>



