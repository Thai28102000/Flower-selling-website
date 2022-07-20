<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Đặt hàng</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<style>
		body{
		background-color:#E3F6CE;
		}
	</style>
  </head>

  <body>
    <div class="container">
      <div class="py-5 text-center">
        <h2>Đặt hàng</h2>

      </div>
	<?php 
		$idhang = $_POST["id"];
		require_once("conn.php");
		$sql = "SELECT * FROM mathang where id = '$idhang'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
	?>
      <div class="row">
        <div class="col-md order-md-1">
          <form action="xlhoa.php" method="POST" enctype="multipart/form-data">
			<div class="mb-3">
              <label for="fileUpload">Ảnh xem trước</label>
              <div class="input-group">
                <img style = "width:200px	" src = 'admin/<?php echo $row["filename"]; ?>'>
              </div>
            </div>
			<input type="hidden" class="form-control" id="idloaihoa" name="idloaihoa" value = '<?php echo $_POST["id"]; ?>'>
            <div class="mb-3">
              <label for="tenloai">Tên khách hàng</label>
              <div class="input-group">
                <input type="text" class="form-control" id="tenkhachhang" name="tenkhachhang" required>
              </div>
            </div>
			<div class="mb-3">
              <label for="maloai">số điện thoại</label>
              <div class="input-group">
                <input type="text" class="form-control" id="sdt" name="sdt" required>
              </div>
            </div>
			<div class="mb-3">
              <label for="dongia">Địa chỉ</label>
              <div class="input-group">
                <input type="text" class="form-control" id="diachi" name="diachi" required>
              </div>
            </div>
			<div class="mb-3">
              <label for="mota">Số lượng</label>
              <div class="input-group">
                <input type="text" class="form-control" id="soluong" name="soluong" required>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-warning btn-lg btn-block" type="submit">Đặt hàng</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1"></p>
      </footer>
    </div>

  </body>
</html>