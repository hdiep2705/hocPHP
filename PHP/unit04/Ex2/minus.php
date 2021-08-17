<?php 
	session_start();
	$key=$_GET['id'];
	$minus=(int)$_SESSION['dsspdamua'][$key]['product_amount'];
	if($minus > 1){
		$minus--;
	}else{
		$minus=1;
	}
	$_SESSION['dsspdamua'][$key]['product_amount']=$minus;
	header('location:dsmuahang.php');
 ?>