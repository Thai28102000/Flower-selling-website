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
	<a href="/baocao/admin/index.php">
		<img class="img-fluid" width = "200" style = "border: 1px solid #1d87da; border-radius: 10px;margin-left: 10px;" src = "/baocao/admin/image/logo.jpg"></a>
		<div style = "align: center; margin-top: 5px; margin-left: 10px;"><button type = "button" class="btn btn-primary" onclick = "window.location.href = '/baocao/admin/index.php'">Back</button></div>
	<div class ="container">
		<?php 
		require_once("conn.php");
		$sql = "SELECT * FROM nhanvien";
		$result = $conn->query($sql);

		?>
		<h1 style = "text-align: center"> TRANG QUẢN LÝ NHÂN VIÊN </h1>
		<div style = "align: center"><button type = "button" class="btn btn-primary" onclick = "window.location.href = '/baocao/admin/themnhanvien.php'">Thêm nhân viên</button></div>
		<div id='qlnv'>
			<table class="table table-dark">
			  <thead>
				<tr>
				  <th scope="col">ID</th>
				  <th scope="col">Tên nhân viên</th>
				  <th scope="col">Ngày sinh</th>
				  <th scope="col">Quốc tịch</th>
				  <th scope="col">CMND/CCCD</th>
				  <th scope="col">Quê quán</th>
				  <th scope="col">Địa chỉ</th>
				  <th scope="col">SĐT</th>
				  <th scope="col">Chức vụ</th>
				  <th scope="col"></th>
				  <th scope="col"></th>
				</tr>
			  </thead>
			  <tbody>
			  <?php
				  if (!empty($result) && $result->num_rows > 0) {
						while ($nhanvien = $result->fetch_assoc()) {	
						?>
				<tr>
				  <th scope="row"><?php echo $nhanvien['id'] ?></th>
				 
				  <td><?php echo $nhanvien['tennhanvien'] ?></td>
				  <td><?php echo $nhanvien['ngaysinh'] ?></td>
				  <td><?php echo $nhanvien['quoctich'] ?></td>
				  <td><?php echo $nhanvien['cmnd'] ?></td>
				  <td><?php echo $nhanvien['quequan'] ?></td>
				  <td><?php echo $nhanvien['diachi'] ?></td>
				  <td><?php echo $nhanvien['sdt'] ?></td>
				  <td><?php echo $nhanvien['chucvu'] ?></td>
				  <td><form action = "suanv.php" method = "POST"><input name = "id" type = "hidden" value = "<?php echo $nhanvien['id'] ?>"><button type = "submit" class="btn btn-primary">Sửa</button></form></td>
				  <td><form action = "xlxoa.php" method = "POST"><input name = "id" type = "hidden" value = "<?php echo $nhanvien['id'] ?>"><button type = "submit" class="btn btn-primary">Xóa</button></form></td>
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