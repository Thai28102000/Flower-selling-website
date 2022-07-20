<?php
	require_once("./conn.php");

	$id = $_POST["id"];
	
	$sql = "DELETE FROM nhanvien WHERE id = '$id'";

	$conn->query($sql);
	
	echo "<script>alert('Xóa nhân viên thành công');
	window.location.href = '/baocao/admin/quanlynv.php';
	</script>";
?>
