<?php
	require_once("./conn.php");

	$tenloai = $_POST["tenloai"];
	$dongia = $_POST["dongia"];
	$fileUpload = $_FILES["fileUpload"];
	$mota = $_POST["mota"];



	$target_dir = "image/";
	$file_name = basename($_FILES["fileUpload"]["name"]);
	$target_file = $target_dir . $file_name;

	if (!move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
        die("Sorry, there was an error uploading your file.");
    }
	$sql = "INSERT INTO mathang (tenloai, dongia, filename, mota)
			VALUES ('$tenloai', '$dongia', '$target_file', '$mota')";

	$conn->query($sql);
	echo "<script>alert('Thêm mặt hàng thành công');
	window.location.href = '/baocao/admin/themmathang.php';
	</script>";
?>
