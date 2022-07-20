<?php session_start();
	session_destroy();
	echo '<script language="javascript">history.go(-1); </script>';
?>
