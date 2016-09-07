<?php
	session_start();
	session_destroy();
	header('location:order1.php');
?>