<?php
	
	session_start();
	unset($_SESSION['flag']);
	header("../view/index.php");
?>