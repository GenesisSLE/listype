<?php
	session_start();
	$elusu = $_SESSION['usu'];
	echo $elusu;
	
	session_destroy();
	header('location:../ErrorSession.php');
?>