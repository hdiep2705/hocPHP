<?php 
	session_start();
	$ttSV=$_SESSION['ttSV'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Thông Tin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Thông Tin Sinh Viên</h2>
  <a href="ex1.php">Quay Lại</a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Họ và Tên</th>
        <th>Giới Tính</th>
        <th>Ngày Sinh</th>
        <th>Quê Quán</th>
        <th>Ngoại Ngữ</th>
        <th>Thông Tin Thêm</th>
      </tr>
    </thead>
    <tbody>
    	<?php foreach ($ttSV as $thongtin) { ?>
        <tr>
            <td><?= $thongtin['nameSV'] 	?></td>
            <td><?= $thongtin['gender'] 	?></td>
            <td><?= $thongtin['dateSV'] 	?></td>
            <td><?= $thongtin['addressSV'] ?></td>
            <td><?php foreach ($thongtin['ngoaingu'] as $key => $nn) { ?>
            	<?php $dem=$key+1; echo $dem."_".$nn.'<br>'; ?>
             <?php } ?></td>
            <td><?= $thongtin['thongtinthem'] ?></td>
        </tr>
    	<?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>