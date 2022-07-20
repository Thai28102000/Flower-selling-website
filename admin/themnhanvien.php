<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Bổ sung nhân viên</title>
	<!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<style>
		body{
		background-color:#E3F6CE;
		}
	</style>
  </head>

  <body>
  <a href="/baocao/admin/quanlynv.php">
			<img class="img-fluid" width = "200" style = "border: 1px solid #1d87da; border-radius: 10px;" src = "/baocao/admin/image/logo.jpg">
			<div style = "align: center; margin-top: 5px; margin-left: 10px;"><button type = "button" class="btn btn-primary" onclick = "window.location.href = '/baocao/admin/quanlynv.php'">Back</button></div>
		
		</a>
    <div class="container">
      <div class="py-5 text-center">
	  <h2>Bổ sung nhân viên</h2>
      </div>
	  
      <div class="row">
        <div class="col-md order-md-1">
          <form action="xlthemnhanvien.php" method="POST" enctype="multipart/form-data">
			<div class="mb-3">
              <label for="fileUpload">Ảnh</label>
              <div class="input-group">
                <input type="file" id="fileUpload" name="fileUpload" required>
              </div>
            </div>
            <div class="mb-3">
              <label for="tennhanvien">Họ tên</label>
              <div class="input-group">
                <input type="text" class="form-control" id="tennhanvien" name="tennhanvien" required>
              </div>
            </div>
			<div class="mb-3">
              <label for="ngaysinh">Ngày sinh</label>
              <div class="input-group">
                <input type="date" class="form-control" id="ngaysinh" name="ngaysinh" required>
              </div>
            </div>
			<div class="mb-3">
              <label for="quoctich">Quốc tịch</label>
              <div class="input-group">
                <input type="text" class="form-control" id="quoctich" name="quoctich" required>
              </div>
            </div>
			<div class="mb-3">
              <label for="cmnd">Số CMND/CCCD</label>
              <div class="input-group">
                <input type="text" class="form-control" id="cmnd" name="cmnd" required>
              </div>
            </div>
			<div class="mb-3">
              <label for="quequan">Quê quán</label>
              <div class="input-group">
                <input type="text" class="form-control" id="quequan" name="quequan" required>
              </div>
            </div>
			<div class="mb-3">
              <label for="diachi">Địa chỉ liên hệ</label>
              <div class="input-group">
                <input type="text" class="form-control" id="diachi" name="diachi" required>
              </div>
            </div>
			<div class="mb-3">
              <label for="sdt">Số điện thoại</label>
              <div class="input-group">
                <input type="text" class="form-control" id="sdt" name="sdt" required>
              </div>
            </div>
			<div class="mb-3">
              <label for="chucvu">Vị trí/Chức vụ</label>
              <div class="input-group">
                <input type="text" class="form-control" id="chucvu" name="chucvu" required>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-warning btn-lg btn-block" type="submit">Add</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1"></p>
      </footer>
    </div>

  </body>
</html>