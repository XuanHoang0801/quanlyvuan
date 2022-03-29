<?php
$severName = 'localhost';
$userName = "root";
$pass = "";
$dbName = "QuanLi_VuAn";

$con = new mysqli($severName, $userName, $pass, $dbName);
$conn = mysqli_connect($severName, $userName, $pass, $dbName);

 // test ket noi
 if($conn){
    $conn ->set_charset('utf8');
}
else {
    echo "  Kết nối thất bại!" .mysqli_connect_error();
}
?>