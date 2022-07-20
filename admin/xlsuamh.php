<?php
	require_once("./conn.php");
	$tenloai = $_POST["tenloai"];
	$maloai = $_POST["maloai"];
	$dongia = $_POST["dongia"];
	$mota = $_POST["mota"];
	
	$id = $_POST["id"];

	$sql = "UPDATE mathang
			SET tenloai = '$tenloai', maloai = '$maloai', dongia = '$dongia', mota = '$mota'
			WHERE id = $id;";

	$conn->query($sql);
	echo "<script>alert('Chỉnh sửa mặt hàng thành công');
	window.location.href = '/baocao/admin/quanlymh.php';
	</script>";
	
?>