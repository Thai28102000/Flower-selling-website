<?php
	require_once("./conn.php");
	$idloaihoa = $_POST["idloaihoa"];
	$tenkhachhang = $_POST["tenkhachhang"];
	$sdt = $_POST["sdt"];
	$diachi = $_POST["diachi"];
	$soluong = $_POST["soluong"];



	
	$sql = "INSERT INTO xacnhandonhang (id, tenkhachhang, sdt, diachi, soluong)
			VALUES ('$idloaihoa', '$tenkhachhang', '$sdt', '$diachi', '$soluong')";

	$conn->query($sql);
	echo "<script>alert('Đặt hàng thành công');
	window.location.href = '/baocao/index.php';
	</script>";
?>
