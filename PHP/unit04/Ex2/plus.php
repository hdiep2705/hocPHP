<?php 
	session_start();
	$key=$_GET['id'];
	$amout=(int)$_SESSION['dsspdamua'][$key]['product_amount'];
	if($amout >= 0){
		$amout++;
	}
	$_SESSION['dsspdamua'][$key]['product_amount']=$amout;
	header('location:dsmuahang.php');
 ?>