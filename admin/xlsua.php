<?php
	require_once("./conn.php");
	$tennhanvien = $_POST["tennhanvien"];
	$ngaysinh = $_POST["ngaysinh"];
	$quoctich = $_POST["quoctich"];
	$cmnd = $_POST["cmnd"];
	
	$quequan = $_POST["quequan"];
	$diachi = $_POST["diachi"];

	$sdt = $_POST["sdt"];	
	$chucvu = $_POST["chucvu"];	
	$id = $_POST["id"];

	$sql = "UPDATE nhanvien
			SET tennhanvien = '$tennhanvien', ngaysinh = '$ngaysinh', quoctich = '$quoctich', cmnd = '$cmnd', quequan ='$quequan', diachi ='$diachi', sdt = '$sdt', chucvu = '$chucvu'
			WHERE id = $id;";

	$conn->query($sql);
	echo "<script>alert('Chỉnh sửa nhân viên thành công');
	window.location.href = '/baocao/admin/quanlynv.php';
	</script>";
	
?>