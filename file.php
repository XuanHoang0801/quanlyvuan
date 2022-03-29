<?php
	include('config.php');
	require ('Classes/PHPExcel.php');

	if(isset($_POST['btnGui'])){
		$file = $_FILES['file']['tmp_name'];
		$objReader = PHPExcel_IOFactory::createReaderForFile($file);
		$objReader ->setloadSheetsOnly('2019');

		$objExcel = $objReader ->load($file);
		$sheetData = $objExcel ->getActiveSheet()->toArray('null', true, true, true);

		$highestRow = $objExcel->setActiveSheetIndex()->getHighestRow();
		for($row = 2; $row<=$highestRow; $row++){
			$hopso = $sheetData[$row]['A'];
			$mahoso = $sheetData[$row]['B'];
			$chusudung = $sheetData[$row]['C'];
			$namcap = $sheetData[$row]['D'];
			$loaihoso = $sheetData[$row]['E'];
			$sothua = $sheetData[$row]['F'];
			$tobando = $sheetData[$row]['G'];
			$maloaidat = $sheetData[$row]['H'];
			$loaithua = $sheetData[$row]['I'];
			$mucluc = $sheetData[$row]['J'];
		$sql = "INSERT INTO tbl_duan(id_VuAn, Ten_VuAn, SL_ToiPham, Ngay, Thang, Nam, DiaDiem_VuAn, DonVi_VuAN, Loai_VuAn, TrangThai_VuAn) VALUES ('$hopso', '$mahoso', '$chusudung', '$namcap', '$loaihoso', '$sothua', '$tobando', '$maloaidat', '$loaithua', '$mucluc')";

			$mysql = mysql_query($sql);
		}
		echo 'Insert thành công';
	}



?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="file">
		<button type="submit" name="btnGui">Import</button>
	</form>

</body>
</html>