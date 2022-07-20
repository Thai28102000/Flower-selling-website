<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Sửa thông tin mặt hàng</title>
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
		$sql = "SELECT * FROM mathang where id = '$id'";
		$result = $conn->query($sql);
		$mathang = $result->fetch_assoc();
	?>
    <div class="container">
      <div class="py-5 text-center">
	  <h2>Sửa thông tin mặt hàng</h2>
      </div>
	  
      <div class="row">
        <div class="col-md order-md-1">
          <form action="xlsuamh.php" method="POST" enctype="multipart/form-data">
			<input name = "id" type = "hidden" value = "<?php echo $id ?>">
            <div class="mb-3">
              <label for="tenloai">Tên mặt hàng</label>
              <div class="input-group">
                <input type="text" value = "<?php echo $mathang['tenloai'] ?>" class="form-control" id="tenloai" name="tenloai" >
              </div>
            </div>

			<div class="mb-3">
              <label for="dongia">Đơn giá</label>
              <div class="input-group">
                <input type="text" value = "<?php echo $mathang['dongia'] ?>" class="form-control" id="dongia" name="dongia">
              </div>
            </div>
			<div class="mb-3">
              <label for="mota">Mô tả</label>
              <div class="input-group">
                <input type="text" value = "<?php echo $mathang['mota'] ?>" class="form-control" id="mota" name="mota">
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