<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Sửa thông tin nhân viên</title>
	<!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<style>
		body{
		background-color:#E3F6CE;
		}
	</style>
  </head>

  <body>
	<?php
		$id = $_POST["id"];
		require_once("conn.php");
		$sql = "SELECT * FROM nhanvien where id = '$id'";
		$result = $conn->query($sql);
		$nhanvien = $result->fetch_assoc();
	?>
    <div class="container">
      <div class="py-5 text-center">
	  <h2>Sửa thông tin nhân viên</h2>
      </div>
	  
      <div class="row">
        <div class="col-md order-md-1">
          <form action="xlsua.php" method="POST" enctype="multipart/form-data">
			<input name = "id" type = "hidden" value = "<?php echo $id ?>">
            <div class="mb-3">
              <label for="tennhanvien">Họ tên</label>
              <div class="input-group">
                <input type="text" value = "<?php echo $nhanvien['tennhanvien'] ?>" class="form-control" id="tennhanvien" name="tennhanvien" >
              </div>
            </div>
			<div class="mb-3">
              <label for="ngaysinh">Ngày sinh</label>
              <div class="input-group">
                <input type="date" value = "<?php echo $nhanvien['ngaysinh'] ?>" class="form-control" id="ngaysinh" name="ngaysinh">
              </div>
            </div>
			<div class="mb-3">
              <label for="quoctich">Quốc tịch</label>
              <div class="input-group">
                <input type="text" value = "<?php echo $nhanvien['quoctich'] ?>" class="form-control" id="quoctich" name="quoctich">
              </div>
            </div>
			<div class="mb-3">
              <label for="cmnd">Số CMND/CCCD</label>
              <div class="input-group">
                <input type="text" value = "<?php echo $nhanvien['cmnd'] ?>" class="form-control" id="cmnd" name="cmnd">
              </div>
            </div>
			<div class="mb-3">
              <label for="quequan">Quê quán</label>
              <div class="input-group">
                <input type="text" value = "<?php echo $nhanvien['quequan'] ?>" class="form-control" id="quequan" name="quequan">
              </div>
            </div>
			<div class="mb-3">
              <label for="diachi">Địa chỉ liên hệ</label>
              <div class="input-group">
                <input type="text" value = "<?php echo $nhanvien['diachi'] ?>" class="form-control" id="diachi" name="diachi">
              </div>
            </div>
			<div class="mb-3">
              <label for="sdt">Số điện thoại</label>
              <div class="input-group">
                <input type="text" value = "<?php echo $nhanvien['sdt'] ?>" class="form-control" id="sdt" name="sdt">
              </div>
            </div>
			<div class="mb-3">
              <label for="chucvu">Vị trí/Chức vụ</label>
              <div class="input-group">
                <input type="text" value = "<?php echo $nhanvien['chucvu'] ?>" class="form-control" id="chucvu" name="chucvu">
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-warning btn-lg btn-block" type="submit">Chỉnh sửa</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1"></p>
      </footer>
    </div>

  </body>
</html>