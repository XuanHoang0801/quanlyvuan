<?php
    include('config.php');
    if (isset ($_POST['add']) )
    {
            //kiểm tra text
    if(empty( $_POST ['name']  ) == true)
        {
            echo '<script language="javascript">alert("Hãy nhập đủ thông tin !"); window.location="add-category.php";</script>';
        }
        else
        {

            //lấy dữ liệu
            
            $loai = $_POST ['name'];

            //thêm
            $insert = "INSERT INTO tbl_theloai(Loai_VuAn) VALUES ('".$loai."')";
                $add = mysqli_query($conn,$insert);
                if($add)
                     {
                        echo '<script language="javascript">alert("Thêm thành công !"); window.location="category.php";</script>';
                     }
                else{
                        echo '<script language="javascript">alert("Thêm thất bại !"); window.location="add-category.php";</script>';
                    }
        }
    }

    

    if(isset($_POST['pre'])){
        header ('location: category.php');
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
        Demo 01 -Tạo tài khoản
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

        <form method= "post" acction = "">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Tên đơn vị</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="name">
                </div>
            </div>
            
                <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="add">Thêm đơn vị</button>
                        
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