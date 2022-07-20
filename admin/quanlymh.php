<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> Admin</title>

  </head>
 <body>
	<div class ="container">
	<a href="/baocao/admin/index.php">
			<img class="img-fluid" width = "200" style = "border: 1px solid #1d87da; border-radius: 10px;" src = "/baocao/admin/image/logo.jpg">
			<div style = "align: center; margin-top: 5px; margin-left: 10px;"><button type = "button" class="btn btn-primary" onclick = "window.location.href = '/baocao/admin/index.php'">Back</button></div>
		</a>
		<?php 
		require_once("conn.php");
		$sql = "SELECT * FROM mathang";
		$result = $conn->query($sql);

		?>
		<h1 style = "text-align: center"> Quản lý mặt hàng </h1>
		<div style = "align: center"><button type = "button" class="btn btn-primary" onclick = "window.location.href = '/baocao/admin/themmathang.php'">Thêm mặt hàng</button></div>
		<div id='qlnv'>
			<table class="table table-dark">
			  <thead>
				<tr>
				  <th scope="col">ID</th>
				  <th scope="col">Tên loại hoa</th>
				  <th scope="col">Đơn giá</th>
				  <th scope="col">Mô tả</th>
				  <th scope="col"></th>
				  <th scope="col"></th>
				</tr>
			  </thead>
			  <tbody>
			  <?php
				  if (!empty($result) && $result->num_rows > 0) {
						while ($mathang = $result->fetch_assoc()) {	
						?>
				<tr>
				  <th scope="row"><?php echo $mathang['id'] ?></th>
				  <td><?php echo $mathang['tenloai'] ?></td>
				  <td><?php echo $mathang['dongia'] ?></td>
				  <td><?php echo $mathang['mota'] ?></td>
				  <td><form action = "suamh.php" method = "POST"><input name = "id" type = "hidden" value = "<?php echo $mathang['id'] ?>"><button type = "submit" class="btn btn-primary">Sửa</button></form></td>
				  <td><form action = "xlxoamh.php" method = "POST"><input name = "id" type = "hidden" value = "<?php echo $mathang['id'] ?>"><button type = "submit" class="btn btn-primary">Xóa</button></form></td>
				</tr>
				<?php
					}
				}
			?>
			  </tbody>
			  
			</table>
			
		</div>
		
		

 </body>
 </html>