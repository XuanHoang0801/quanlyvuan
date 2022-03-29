<?php
    include 'config.php';
    $select = " SELECT * FROM tbl_theloai ";
    $query =   mysqli_query($conn,$select);

    $donvi= $_GET['loai'];

       $sql = "SELECT * FROM tbl_theloai WHERE Loai_VuAn = '$donvi'  ";
       $query_sua =mysqli_query($conn,$sql);
       $row= mysqli_fetch_array($query_sua);

       if(isset($_POST['update']))
       {
            //kiểm tra text
            if(empty($_POST['name']   ) == true)
            {
                echo '<h4 style= "color:red;" >Hãy nhập đủ thông tin</h4>';
            }

            else
            {
                //lấy dữ liệu
                $name = $_POST['name'];
                
                $donvi= $_GET['loai'];

                $update = "UPDATE tbl_theloai SET Loai_VuAn = '$name' WHERE Loai_VuAn = '$donvi'";

                $query_update = mysqli_query($conn,$update);
                    if($query_update)
                    {
                        echo '<script language="javascript">alert("Cập nhật  thành công !"); window.location="category.php";</script>';
                        
                    }
                    else{
                        echo '<script language="javascript">alert("Cập nhật thất bại !"); window.location="sua-category.php";</script>';
                    }

            }
       }

       if( isset($_POST['pre']) )
       {
           header('location: category.php');
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
        Demo 01 -Cập nhật loại vụ án
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
                        <label for="inputEmail4" class="form-label">Loại vụ án</label>
                        <input type="text" class="form-control" id="inputEmail4" name="name" value="<?php echo $row['Loai_VuAn']?>">
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