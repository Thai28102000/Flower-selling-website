<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Bổ sung mặt hàng</title>

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
	<a href="/baocao/admin/quanlymh.php">
			<img class="img-fluid" width = "200" style = "border: 1px solid #1d87da; border-radius: 10px;" src = "/baocao/admin/image/logo.jpg">
			<div style = "align: center; margin-top: 5px; margin-left: 10px;"><button type = "button" class="btn btn-primary" onclick = "window.location.href = '/baocao/admin/quanlymh.php'">Back</button></div>
		</a>
      <div class="py-5 text-center">
        <h2>Bổ sung mặt hàng</h2>

      </div>
	  
      <div class="row">
        <div class="col-md order-md-1">
          <form action="xlhoa.php" method="POST" enctype="multipart/form-data">
			<div class="mb-3">
              <label for="fileUpload">Ảnh xem trước</label>
              <div class="input-group">
                <input type="file" id="fileUpload" name="fileUpload" required>
              </div>
            </div>
            <div class="mb-3">
              <label for="tenloai">Tên loại hoa</label>
              <div class="input-group">
                <input type="text" class="form-control" id="tenloai" name="tenloai" required>
              </div>
            </div>
			<div class="mb-3">
              <label for="dongia">Đơn giá</label>
              <div class="input-group">
                <input type="text" class="form-control" id="dongia" name="dongia" required>
              </div>
            </div>
			<div class="mb-3">
              <label for="mota">Mô tả</label>
              <div class="input-group">
                <input type="text" class="form-control" id="mota" name="mota" required>
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
