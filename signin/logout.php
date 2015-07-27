<?php
	session_start();
	unset($_SESSION['username']);
	unset($_SESSION['email']);
	session_destroy();
	header('location: '. $_SERVER['HTTP_REFERER']);
?>
