<?php
	if(isset($_POST[submit])){
		$file_name = $_FILES[file][name];
		$file_tmp = $_FILES[file][tmp_name];
		$file_path = "img/" . rand(1000,9999). $file_name;
		move_uploaded_file($file_tmp, $file_path);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Upload File</title>
</head>
<body>
	<h3>Upload File</h3>
	<form action="upload.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="file">
		<input type="submit" name="submit" value="Upload Image">
	</form>
</body>
</html>