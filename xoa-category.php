<?php
include ('config.php');

$donvi = $_GET['loai'];
$xoa = " DELETE FROM tbl_theloai WHERE Loai_VuAN = '".$donvi."'";
mysqli_query($conn,$xoa);
echo '<script language="javascript">alert("Xóa thành công ! "); window.location="category.php";</script>';
?>