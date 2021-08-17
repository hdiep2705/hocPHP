<?php 
	session_start();
	$ttSP=$_POST;
	$_SESSION['product'][]=$ttSP;
	header('location:list_sanpham.php');
 ?>