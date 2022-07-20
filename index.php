<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style>
		.banner-image {
			background-color: #BEBEBE;
			color: 848484;
			height: 300px;
			border-radius: 10px;
			font-size: 50px;
			letter-spacing: 10px;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		
		.first-item {
			margin-top: 15px;
		}
		
		.first-item p {
			text-align: justify;
		}
		
		#main-text {
			background-color: #737884;
			color: white;
			margin-top: 15px;
			padding: 10px;
			text-align: center;
			border-radius: 5px;
		}
	</style>
  </head>
  <body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<!-- Brand -->
		<a>
			<a class="navbar-brand" href="#">FlowerShop</a>
		</a>
		<?php
			?>
					<form action = "/baocao/taikhoan/dangnhap.php" method = "POST" >
					<div class = "input-group">
					<button style = "text-decoration: none;padding: 10px; border: 1px solid #1d87da; border-radius: 3px;" class="btn btn-outline-primary">
					  Đăng nhập
				  	</button>
						<input type = "hidden" name = "url" value = <?php echo $_SERVER["PHP_SELF"]; ?>>
					</form>
					<a href="/baocao/taikhoan/dangky.php" style = "margin-left: 10px; text-decoration: none;padding: 10px; border: 1px solid #1d87da; border-radius: 3px;" class="btn btn-outline-info">
					  Đăng ký
					</a>
				</div>
	<?php
			?>
	 
		<!-- Toggler/collapsibe Button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Navbar links -->
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php"">Trang chủ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Chủ đề</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Dịch vụ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Liên hệ</a>
				</li>
			</ul>
		</div>
	</nav>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-8 first-item">
				<img class="img-fluid" width = "700" height="100" =  style = "border: 1px solid #1d87da; border-radius: 10px;" src = "/baocao/admin/image/h.jpg">		
				</div>
			<div class="col-lg-4">
				<h4>Giới thiệu</h4>
				<p>FlowerShop luôn cam kết đặt chất lượng hoa lên hàng đầu. Các mẫu hoa luôn được cắm đủ số lượng và giống kiểu dáng trên website nhất có thể. Vận chuyển miễn phí và giao hoa tận tay khách hàng.Không ngừng nỗ lực để mang đến một dịch vụ điện hoa tốt nhất Việt Nam. FlowerShop có đội ngũ nhân viên dày dặn kinh nghiệm do chính chúng tôi đào tạo riêng từ thợ cắm hoa đến shiper luôn tận tâm phục vụ quý khách hàng, chúng tôi tự hào mang đến cho quý khách hàng một mạng lưới phục vụ rộng khắp, chuyển phát hơn 30 đơn hàng mỗi ngày tại TPHCM,  cùng với 65 đại lý trên 63 tỉnh thành tại Việt Nam.</p>
			</div>
		</div>
		
		<p id="main-text" >Sản phẩm chính</p>
	<div class = "container">
		<div class = "row">
			<?php
				require_once("conn.php");
				$sql = "SELECT * FROM mathang ORDER BY id DESC";
				$result = $conn->query($sql);
				if (!empty($result) && $result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {	
					?>
					<div class="card mb-3" style="max-width: 540px;">
					  <div class="row g-0">
						<div class="col-md-4">
						  <img src="admin/<?php echo $row['filename']; ?>" style = "width:100%" alt="...">
						</div>
						<div class="col-md-8">
						  <div class="card-body">
							<h5 class="card-title"><?php echo $row['tenloai']; ?></h5>
							<p class="card-text"><?php echo $row['mota']; ?></p>
							<p class="card-text"><small class="text-muted"><?php echo $row['dongia']; ?> VND</small></p>
							<form action = "dathang.php" method = "POST">
								<input name = "id" type = "hidden" value = <?php echo $row['id']; ?> >
								<button type = "submit" class = "btn btn-success">Đặt Hàng</a>
							</form>
						  </div>
						</div>
					  </div>
					</div>
					<?php
					}
				}
			?>
		</div>
	</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>