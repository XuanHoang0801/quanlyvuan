<?php
if(isset($_POST['login'])){
    //kiểm tra text
    if(empty($_POST['username'] && $_POST['password'])  == true) {
      echo '<script language="javascript">alert("Hãy nhập đủ thông tin !"); window.location="login.php";</script>';
    }
    else{
        $u = $_POST["username"];
        $p = $_POST["password"];
        $user_check= "admin" ;
        $pass_check = "Demo123";
         if($u == $user_check && $p == $pass_check ){
            header("location: index.php");  

        }
        else{
            echo '<script type="text/javascript">alert("Tài khoản không đúng!"); window.location="login.php";</script>';
           
        }
    }
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
        Demo 01
    </title>
</head>
<body>
    <div id="wrapper">
        <?php 
            include('header.php');
        ?>    

        <section class="section">
            <div class="container container-content">
                <div class="content-login">
                    <form method="post" action="" class="form-login">
                        <div class="form-head">
                            <h3 class="form-title">
                                Đăng nhập hệ thống
                            </h3>
                            <p class="form-check text-secondary">Vui lòng nhập đầy đủ thông tin</p> 
                            <p class="form-info bg-info ">Thông tin tài khoản</p> 
                        </div>

                        <div class="form-main">
                            <div class=" mb-3">    
                                <lable class="lable-input">Tên đăng nhập</lable>
                                <input type="text   " class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value= "admin"  name="username">
                            </div>

                            <div class=" mb-3">    
                                <lable class="lable-input">Mật khẩu</lable>
                                <input type="password" class="form-control" placeholder="password" value= "Demo123" name="password">
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Duy trì trạng thái đăng nhập
                                </label>
                            </div>

                            <div class="form-button">
                                <button type="submit" class="btn btn-login text-warning" name="login">Đăng nhập</button>
                            </div>
                        </div>
                        
                    </form>
                    
                </div>
            </div>
        </section>
    </div>
</body>
</html>