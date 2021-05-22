<?php
	session_start();
	session_destroy();
	header("location: login.php?out=1");
?>


