<?php
	require_once("./conn.php");

	$id = $_POST["id"];
	
	$sql = "DELETE FROM mathang WHERE id = '$id'";

	$conn->query($sql);
	
	echo "<script>alert('Xóa mặt hàng thành công');
	window.location.href = '/baocao/admin/quanlymh.php';
	</script>";
?>