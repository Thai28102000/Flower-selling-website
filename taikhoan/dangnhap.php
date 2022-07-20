<?php session_start();
	if (isset($_POST['url'])){
		$url = $_POST['url'];
	}
	if (isset($_POST['loginbtn'])) {
		require_once("conn.php");
		$tmpusername = $_POST['username'];
		$tmppassword = $_POST['password'];
		$sql = "SELECT * FROM taikhoan WHERE tentaikhoan LIKE '$tmpusername' AND matkhau LIKE '$tmppassword'";
		$result = $conn->query($sql) or die($conn->error);
		if($row = $result->fetch_assoc()) {
			$_SESSION['userid'] = $row['idtaikhoan'];
			if (isset($_POST['url1'])){
				$url1 = $_POST['url1'];
				header("Location: $url1");
			}
		}
		else{
			echo '<script language="javascript">';
			echo 'alert("Sai tên đăng nhập hoặc mật khẩu")';
			echo '</script>';
		}
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="account.css">
    <title>Trang đăng nhập</title>
  </head>
	<body>
		<br>
		<div class = "blockcontainer">
			<p class = "title">Đăng Nhập</p>
			<div class = "formcontainer">
			<form class ="form" action="#" method="POST">
				<div class="input-group mb-3">
					<input class="form-control" type="text" name="username" placeholder="Tài khoản" required>
				</div>
				<div class="input-group mb-3">
					<input class="form-control" type="password" name="password" placeholder="Mật khẩu" required>
				</div>
				<div class="input-group mb-3">
					<input type = "hidden" name = "url1" value = <?php if (isset($_POST['url'])){ echo $url;} else {echo "/baocao/index.php";} ?>>
					<button style = "margin:auto; width:100%" class="btn btn-outline-primary" type="submit" name="loginbtn">Đăng nhập</button>
				</div>
				<div class="input-group mb-3">
					<a style = "margin:auto; width:50%; color:black" class = "btn btn-outline-warning" href = "/baocao/taikhoan/dangky.php">Đăng ký</a>
					<a style = "margin:auto; width:50%; color:black" class = "btn btn-outline-warning" href = "/baocao/index.php">Về trang chủ</a>
				</div>
			</div>
			</form>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		</body>
</html>
