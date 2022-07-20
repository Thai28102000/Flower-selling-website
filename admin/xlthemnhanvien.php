<?php
	require_once("./conn.php");
	$fileUpload = $_FILES["fileUpload"];
	$tennhanvien = $_POST["tennhanvien"];
	$ngaysinh = $_POST["ngaysinh"];
	$quoctich = $_POST["quoctich"];
	$cmnd = $_POST["cmnd"];
	
	$quequan = $_POST["quequan"];
	$diachi = $_POST["diachi"];

	$sdt = $_POST["sdt"];	
	$chucvu = $_POST["chucvu"];	
	$target_dir = "./image/";
	$file_name = basename($_FILES["fileUpload"]["name"]);
	$target_file = $target_dir . $file_name;

	if (!move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
        die("Sorry, there was an error uploading your file.");
    }
	$sql = "INSERT INTO nhanvien (tennhanvien, ngaysinh, quoctich, cmnd, anh, quequan, diachi, sdt, chucvu)
			VALUES ('$tennhanvien', '$ngaysinh', '$quoctich', '$cmnd', '$file_name', '$quequan', '$diachi', '$sdt','$chucvu')";

	$conn->query($sql);
	echo "<script>alert('Thêm nhân viên thành công');
	window.location.href = '/baocao/admin/themnhanvien.php';
	</script>";
	
?>