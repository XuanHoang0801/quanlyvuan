<?php
include ('config.php');

$donvi = $_GET['donvi'];
$xoa = " DELETE FROM tbl_donvi WHERE DonVi_VuAN = '".$donvi."'";
mysqli_query($conn,$xoa);
echo '<script language="javascript">alert("Xóa đơn vị thành công ! "); window.location="unit.php";</script>';
?>