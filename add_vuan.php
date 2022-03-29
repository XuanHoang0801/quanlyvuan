<?php
    include('config.php');
    $select = " SELECT * FROM tbl_VuAn ";
    $select2 = " SELECT * FROM tbl_theloai ";
    $select3 = " SELECT * FROM tbl_donvi ";
    $select4 = " SELECT * FROM tbl_trangthai ";
    $select5 = " SELECT * FROM tbl_ngay ";
    $select6 = " SELECT * FROM tbl_thang ";
    $select7 = " SELECT * FROM tbl_nam ";
    $Theloai =   mysqli_query($conn,$select2);
    $donvi =   mysqli_query($conn,$select3);
    $trangthai =   mysqli_query($conn,$select4);

    $ngay =  mysqli_query($conn,$select5);
    $thang =  mysqli_query($conn,$select6);
    $nam =  mysqli_query($conn,$select7);

    

    if (isset ($_POST['add']) )
    {
            //kiểm tra text
    if(empty($_POST['id'] && $_POST ['name'] && $_POST ['SL'] && $_POST ['address']  ) == true)
        {
            echo '<script language="javascript">alert("Hãy nhập đủ thông tin !"); window.location="add_vuan.php";</script>';
        }

        else
        {

            //lấy dữ liệu
            $id = $_POST['id'];
            $name = $_POST ['name'];
            $SL = $_POST ['SL'];
            $address = $_POST ['address'];
            $Ngay = $_POST ['ngay'];
            $Thang = $_POST ['thang'];
            $Nam = $_POST ['nam'];
            $unit = $_POST ['unit'];
            $category = $_POST ['category'];
            $status = $_POST ['status'];
    //thêm
            $insert = "INSERT INTO tbl_vuan(id_VuAn, Ten_VuAn, SL_ToiPham, Ngay,Thang,Nam, DiaDiem_VuAn, DonVi_VuAn, Loai_VuAn, TrangThai_VuAn) VALUES
                                                                                                           ('".$id."',
                                                                                                            '".$name."',
                                                                                                            '".$SL."',
                                                                                                            '".$Ngay."',
                                                                                                            '".$Thang."',
                                                                                                            '".$Nam."',
                                                                                                            '".$address."',
                                                                                                            '".$unit."',
                                                                                                            '".$category."',
                                                                                                            '".$status."')";
      
            $add = mysqli_query($conn,$insert);
            if($add)
            {
            echo '<script language="javascript">alert("Thêm vụ án thành công !"); window.location="index.php";</script>';
            }
            else{
            echo '<script language="javascript">alert("Thêm vụ án thất bại !"); window.location="add_vuan.php";</script>';
            }
        }
        
    }
    if( isset($_POST['pre']) )
       {
           header('location: index.php');
       }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/font/fontawesome/css/all.css">

    <title>
        Demo 01 -Thêm vụ án mới
    </title>
</head>
<body>
    <div id="wrapper">
        <?php 
            include ('config.php');
            // include('header.php');
        ?>
        <section class="section">
    <div class=" content">
        <?php
            include('sidebar.php');
        ?>
        <div class=" main">
            <?php
                include('menu.php');
            ?>
        <div class="main-content container">

                <form method="post" action = "" class="row g-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Mã vụ án</label>
                        <input type="text" class="form-control" id="inputEmail4" name="id">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Tên vụ án</label>
                        <input type="tex" class="form-control" id="inputPassword4" name="name">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Số lượng tội phạm</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="" name= "SL">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Thời gian xảy ra </label>
                    
                    </div>  
                    <div class="col-12 form-datetime">
                        <!-- ngày -->
                        <label for="inputAddress2" class="form-label datetime-lable">Ngày </label>
                        <select id="inputState" class="form-select datetime" name= "ngay">
                        <option selected>dd</option>
                        <?php
                            $i2=0;
                            while($cot3 = mysqli_fetch_array($ngay)){ 
                        ?>
                        <option><?php echo $cot3['Ngay']; ?></option>
                            <?php
                            }
                            ?>
                        </select>

                        <!-- tháng -->
                        <label for="inputAddress2" class="form-label datetime-lable">Tháng </label>
                        <select id="inputState" class="form-select  datetime" name= "thang">
                        <option selected>mm</option>
                        <?php
                            $i2=0;
                            while($cot4 = mysqli_fetch_array($thang)){ 
                        ?>
                        <option><?php echo $cot4['Thang']; ?></option>
                            <?php
                            }
                            ?>
                        </select>

                            <!-- năm -->
                        <label for="inputAddress2" class="form-label datetime-lable">Năm </label>
                        <select id="inputState" class="form-select  datetime" name= "nam">
                        <option selected>yyyy</option>
                        <?php
                            $i2=0;
                            while($cot5 = mysqli_fetch_array($nam)){ 
                        ?>
                        <option><?php echo $cot5['Nam']; ?></option>
                            <?php
                            }
                            ?>
                        </select>

                        
                    </div>
                    
                    
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Địa điểm</label>
                        <input type="text" class="form-control" id="inputCity" name = "address">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Đơn vị quản lí</label>
                        <select id="inputState" class="form-select" name = "unit">
                        <option selected>None</option>
                        <?php
                            $i=0;
                            while($cot = mysqli_fetch_array($donvi)){ 
                        ?>
                        <option><?php echo $cot['DonVi_VuAn']; ?></option>
                        <?php
                            }
                        ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Thể loại</label>
                        <select id="inputState" class="form-select" name= "category">
                        <option selected>None</option>
                        <?php
                            $i2=0;
                            while($cot2 = mysqli_fetch_array($Theloai)){ 
                        ?>
                        <option><?php echo $cot2['Loai_VuAn']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Trạng thái</label>
                        <select id="inputState" class="form-select" name= "status">
                        <option selected>None</option>
                        <?php
                            $i3=0;
                            while($cot3 = mysqli_fetch_array($trangthai)){ 
                        ?>
                        <option><?php echo $cot3['TrangThai_VuAn']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="add">Thêm mới</button>
                        <button type="submit" class="btn btn-primary" name = "pre" >Quay lại</button> 
                    </div>
                </form>
               
            </div>
        </div>
    </div>
</div>
</section>
</body>
</html>