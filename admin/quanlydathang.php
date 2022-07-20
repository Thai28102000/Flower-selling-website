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
			<img class="img-fluid" width = "200" style = "border: 1px solid #1d87da; border-radius: 10px;" src = "/baocao/admin/image/logo.jpg">
			<div style = "align: center; margin-top: 5px; margin-left: 10px;"><button type = "button" class="btn btn-primary" onclick = "window.location.href = '/baocao/admin/index.php'">Back</button></div>
		</a>
	<div class ="container">
		<?php 
		require_once("conn.php");
		$sql = "SELECT * FROM xacnhandonhang";
		$result = $conn->query($sql);

		?>
		<h1 style = "text-align: center"> XÁC NHẬN ĐƠN HÀNG </h1>
		<div id='qlnv'>
			<table class="table table-dark">
			  <thead>
				<tr>
				  <th scope="col">ID</th>
				  <th scope="col">Loại hoa</th>
				  <th scope="col">Tên khách hàng</th>
				  <th scope="col">SĐT</th>
				  <th scope="col">Địa chỉ</th>
				  <th scope="col">Số lượng</th>
				  <th scope="col">Trạng thái</th>
				</tr>
			  </thead>
			  <tbody>
			  <?php
				  if (!empty($result) && $result->num_rows > 0) {
						while ($donhang = $result->fetch_assoc()) {	
						?>
				<tr>
				  <th scope="row"><?php echo $donhang['iddon'] ?></th>
				  <td><?php echo $donhang['id'] ?></td>
				  <td><?php echo $donhang['tenkhachhang'] ?></td>
				  <td><?php echo $donhang['sdt'] ?></td>
				  <td><?php echo $donhang['diachi'] ?></td>
				  <td><?php echo $donhang['soluong'] ?></td>
					<td>
					<?php if ($donhang['trangthai']==0)
					{					?>
					<form action = "xlxacnhan.php" method = "POST"><input name = "id" type = "hidden" value = "<?php echo $donhang['iddon'] ?>"><button type = "submit" class="btn btn-success">Xác nhận</button></form>
					<?php }
					else { ?>
					<a class = "btn btn-danger">Đã xác nhận</a>
					</td>
						<?php } ?>
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