
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Sinh Viên</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<style>
    form div #nameSV,#dateSV,#addressSV{
        width: 400px;
    }
</style>
<body>
    <div class="container">
        <form action="xuly.php" method="POST" role="form">
            <legend>Thông Tin Sinh Viên</legend>
            <div class="form-group">
                <label for="">Họ và Tên</label>
                <input type="text" class="form-control" id="nameSV" placeholder="Nhập tên họ tên" name="nameSV">
            </div>

            <div class="form-group">
                <label for="">Giới Tính</label>&emsp;
                <input type="radio" name="gender" value="Male"> Male &ensp;
                <input type="radio" name="gender" value="Female"> Female
            </div>

            <div class="form-group">
                <label for="">Ngày Sinh</label>
                <input type="text" class="form-control" id="dateSV"name="dateSV">
            </div>

            <div class="form-group">
                <label for="">Quê Quán</label>
                <input type="text" class="form-control" id="addressSV"name="addressSV">
            </div>

            <div class="form-group">
                <label for="">Ngoại Ngữ</label>&emsp;
                <input type="checkbox" name="ngoaingu[]" value="English"> English&ensp;
                <input type="checkbox" name="ngoaingu[]" value="Japan"> Japan&ensp;
                <input type="checkbox" name="ngoaingu[]" value="France"> France
            </div>

            <div class="forn-group">
                <label for="">Thông Tin Thêm</label><br>
                <textarea name="thongtinthem" id="" cols="70" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Thêm Thông Tin</button>
        </form>
    </div>
</body>
</html>