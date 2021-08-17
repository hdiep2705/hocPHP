<?php 
 session_start();
 $muahang=array();
 if(isset($_SESSION['dsspdamua'])){
  $muahang=$_SESSION['dsspdamua'];
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
 <style>
   tr,th {
    text-align: center;
         }
 </style>
<body>
<div class="container">
  <h2>Danh sách giỏ hàng</h2>
  <a href="list_sanpham.php">Xem Danh sách Sản Phẩm</a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Giá bán</th>
        <th>Ảnh sản phẩm</th>
        <th>Thành Tiền</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	<?php foreach ($muahang as $key => $sp) { ?>
        <tr>
          <td><?=$sp['product_code']	?></td>
          <td><?=$sp['product_name']	?></td>
          <td><button><a href="plus.php?id=<?= $key ?>"><i class='fa fa-plus-circle fa-1x'></i></a></button>&ensp;<?= $sp['product_amount']?>&ensp;<button><a href="minus.php?id=<?= $key ?>"><i class='fa fa-minus-circle'></i></a></button></td>
          <td><?=number_format($sp['product_price'])?></td>
          <td><?=number_format($sp['product_price']* $sp['product_amount']) ?></td>
          <td><img width="100px" height="100px" src="<?=$sp['product_images'] ?>" alt=""> </td>
          <td><a href="delete.php?id=<?= $key ?>" class="btn btn-danger">Xóa khỏi giỏ hàng</a></td>
        </tr>
    	<?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
