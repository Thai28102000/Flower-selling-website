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
		<?php 
		require_once("conn.php");
		$sql = "SELECT * FROM nhanvien";
		$result = $conn->query($sql);

		?>
		<h1 style = "text-align: center"> TRANG QUẢN TRỊ HỆ THỐNG </h1>
		<div class = "row pt-5">
			<div  class= "col-4" style = "align: center"><button type = "button" class="btn btn-primary" onclick = "window.location.href = '/baocao/admin/quanlynv.php'">Quản lí nhân viên</button></div>
		<div class= "col-4" style = "align: center"><button type = "button" class="btn btn-primary" onclick = "window.location.href = '/baocao/admin/quanlymh.php'">Quản lí mặt hàng</button></div>
		<div class= "col-4" style = "align: center"><button type = "button" class="btn btn-primary" onclick = "window.location.href = '/baocao/admin/quanlydathang.php'">Quản lí đặt hàng</button></div>
		</div>
		
		
		

 </body>
 </html>