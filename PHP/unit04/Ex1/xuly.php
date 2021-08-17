<?php 
    session_start();
    $thongtinSV=$_POST;
    $_SESSION['ttSV'][]=$thongtinSV;
    header('location:thongtinSV.php');
?>