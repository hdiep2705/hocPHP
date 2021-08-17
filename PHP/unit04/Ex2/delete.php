<?php 
	session_start();
	echo "<pre>";
		print_r($_SESSION['dsspdamua']);
	echo "</pre>";
	$key=$_GET['id'];
	$minus=(int)$_SESSION['dsspdamua'][$key]['product_amount'];
	if($minus > 0){
		$minus--;
	}
	$_SESSION['dsspdamua'][$key]['product_amount']=$minus;
	if($_SESSION['dsspdamua'][$key]['product_amount']==0){
	unset($_SESSION['dsspdamua'][$key]);
	}
	header('location:dsmuahang.php');

 ?>