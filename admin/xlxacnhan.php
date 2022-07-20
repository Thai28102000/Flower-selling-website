<?php
	require_once("./conn.php");

	$id = $_POST["id"];
	
	$sql = "UPDATE xacnhandonhang
			SET trangthai = '1'
			WHERE iddon = $id";

	$conn->query($sql);
	
	echo "<script>
	window.location.href = '/baocao/admin/quanlydathang.php';
	</script>";
?>
