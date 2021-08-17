<?php 
 session_start();
 $product=$_SESSION['product'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Danh sách sản phẩm trong kho</h2>
  <a href="ex2.php">Quay Lại</a><br>
  <a href="dsmuahang.php">Xem giỏ hàng</a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Giá bán</th>
        <th>Ảnh sản phẩm</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	<?php foreach ($product as $key => $sp) { ?>
        <tr>
          <td><?= $sp['product_code']	?></td>
          <td><?= $sp['product_name']	?></td>
          <td><?= $sp['product_amount']	?></td>
          <td><?= $sp['product_price']	?></td>
          <td><img width="100px" height="100px" src="<?=$sp['product_images'] ?>" alt=""> </td>
          <td><a href="addtogiohang.php?id=<?= $key ?>" class="btn btn-danger">Thêm vào giỏ hàng</a></td>
        </tr>
    	<?php } ?>
    	
    </tbody>
  </table>
</div>
</body>
</html>