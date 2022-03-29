<?php
include ('config.php');

$id = $_GET['STT'];
$xoa = " DELETE FROM tbl_user WHERE id_user = '".$id."'";
mysqli_query($conn,$xoa);
echo '<script language="javascript">alert("Xóa tài khoản thành công ! "); window.location="account.php";</script>';
?>