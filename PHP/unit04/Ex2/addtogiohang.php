<?php 
	session_start();
	$products=array();
	if(isset($_SESSION['product'])){
		$products=$_SESSION["product"];
	}
	$key=$_GET['id'];
	$dsspmua=$products[$key];
	$dsspmua['product_amount']=1;
	$_SESSION['dsspdamua'][]=$dsspmua;
	header('location:dsmuahang.php');
 ?>