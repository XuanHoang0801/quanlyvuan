<?php
include ('config.php');



$id = $_GET['STT'];
$xoa = " DELETE FROM tbl_vuan WHERE id_VuAn = '".$id."'";
mysqli_query($conn,$xoa);
    echo '<script language="javascript">alert("Đã xoá ! "); window.location="index.php";</script>';
?>