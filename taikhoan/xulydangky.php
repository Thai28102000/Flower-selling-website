<?php
	require_once("./conn.php");
	$username = $_POST["username"];
	$password = $_POST["password"];

	$checkaccount = "SELECT * FROM taikhoan WHERE tentaikhoan = '$username'";
	$result = $conn->query($checkaccount);
	if($row = $result->fetch_assoc()) {
		echo '<script language="javascript">';
		echo 'alert("Tài khoản đã tồn tại, bấm OK để về trang đăng ký...")';
		echo '</script>';
		header("Refresh: 0; url =  /baocao/taikhoan/dangky.php");
	}
	else {
		$sql = "INSERT INTO taikhoan (tentaikhoan, matkhau, isAdmin)
				VALUES ('$username', '$password',0)";

		$conn->query($sql);
		echo '<script language="javascript">';
		echo 'alert("Đăng ký thành công, bấm OK để về trang đăng nhập...")';
		echo '</script>';
		header("Refresh: 0; url = /baocao/taikhoan/dangnhap.php");
	}
	?>
