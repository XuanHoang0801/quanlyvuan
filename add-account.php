<?php
    include('config.php');
    if (isset ($_POST['add']) )
    {
            //kiểm tra text
    if(empty( $_POST ['username'] && $_POST ['password'] && $_POST ['chucvu'] ) == true)
        {
            echo '<script language="javascript">alert("Hãy nhập đủ thông tin !"); window.location="add-account.php";</script>';
        }
        else
        {

            //lấy dữ liệu
            $user = $_POST['username'];
            $pass = $_POST ['password'];
            $chucvu = $_POST ['chucvu'];

            //thêm
            $insert = "INSERT INTO tbl_user(name_user, password,chuc_vu) VALUES
                                                                                 ('".$user."',
                                                                                    '".$pass."',
                                                                                    '".$chucvu."')";
                $add = mysqli_query($conn,$insert);
                if($add)
                     {
                        echo '<script language="javascript">alert("Thêm tài khoản thành công !"); window.location="account.php";</script>';
                     }
                else{
                        echo '<script language="javascript">alert("Thêm tài khoản thất bại !"); window.location="add-account.php";</script>';
                    }
        }
    }

    if(isset($_POST['login'])){
        header ('location: login.php');
    }

    if(isset($_POST['pre'])){
        header ('location: account.php');
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
                <label for="inputEmail3" class="col-sm-2 col-form-label">Tài khoản</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" name="username">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Mật khẩu</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" name="password">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Chức vụ</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" name="chucvu">
                </div>
            </div>
                <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="add">Tạo tài khoản</button>
                        <button type="submit" class="btn btn-primary" name = "login">Đăng nhập</button>
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