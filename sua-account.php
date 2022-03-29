<?php
    include 'config.php';
    $select = " SELECT * FROM tbl_user ";
    $query =   mysqli_query($conn,$select);

    $STT= $_GET['STT']; 

       $sql = "SELECT * FROM tbl_user  WHERE id_user = $STT";
       $query_sua =mysqli_query($conn,$sql);
       $row= mysqli_fetch_array($query_sua);

       if(isset($_POST['update']))
       {
            //kiểm tra text
            if(empty($_POST['name'] && $_POST ['pass'] && $_POST ['chucvu']  ) == true)
            {
                echo '<h4 style= "color:red;" >Hãy nhập đủ thông tin</h4>';
            }

            else
            {
                //lấy dữ liệu
                $user = $_POST['name'];
                $pass = $_POST ['pass'];
                $chucvu = $_POST ['chucvu'];
                $STT= $_GET['STT'];

                $update = "UPDATE tbl_user SET name_user = '$user', password = '$pass', chuc_vu ='$chucvu' WHERE id_user = '$STT'";

                $query_update = mysqli_query($conn,$update);
                    if($query_update)
                    {
                        echo '<script language="javascript">alert("Cập nhật  thành công !"); window.location="account.php";</script>';
                        
                    }
                    else{
                        echo '<script language="javascript">alert("Cập nhật thất bại !"); window.location="sua-account.php";</script>';
                    }

            }
       }

       if( isset($_POST['pre']) )
       {
           header('location: account.php');
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
        Demo 01 -Cập nhật tài khoản
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
                        <label for="inputEmail4" class="form-label">Tài khoản</label>
                        <input type="text" class="form-control" id="inputEmail4" name="name" value="<?php echo $row['name_user']?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Mật khẩu</label>
                        <input type="text" class="form-control" id="inputPassword4" name="pass" value="<?php echo $row['password']?>">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Chức vụ</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="" name= "chucvu" value="<?php echo $row['chuc_vu']?>">
                    </div>
                    
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="update">Cập nhật</button>
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