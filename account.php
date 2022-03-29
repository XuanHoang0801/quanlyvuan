<?php
    include('config.php');
    $user = " SELECT * FROM tbl_user";
    $query_user = mysqli_query($conn,$user);
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
        Demo 01 -Tài khoản
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

            <table class="table table-striped">
            <h1 style="text-align: center; text-transform: uppercase;">Tài khoản</h1>
                    <thead>
                        <tr>
                        <th scope="col">Tên tài khoản</th>
                        <th scope="col">Mật khẩu</th>
                        <th scope="col">Chức vụ</th>
                        <th scope="col">Hành động</th>
                        
                        
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i=0;
                         while($cot = mysqli_fetch_array($query_user)){
                    ?>
                        <tr>
                        <th scope="row"><?php echo $cot['name_user']; ?></th>
                        <td><?php echo $cot['password']; ?></td>
                        <td><?php echo $cot['chuc_vu']; ?></td>
                        
                        <td>
                            <a href="sua-account.php? & STT=<?php echo $cot['id_user'];?>"><i class="fa-solid fa-pen" name="update"></i></a>
                            <a href="xoa-account.php? & STT=<?php echo $cot['id_user'];?>"><i class="fa-regular fa-trash-can"></i></a>
                        </td>
                        </tr>
                        <?php
                         }
                         ?>
                        
                    </tbody>
                </table>

                <div class="main-selecte">
                   <a name="" id="" class="btn btn-primary" href="add-account.php" role="button"><i class="fa-solid fa-plus fa-lg"></i>Tạo tài khoản</a>
                   <a name="" id="" class="btn btn-primary" href="account.php" role="button"><i class="fa-solid fa-arrow-rotate-right fa-lg"></i>Tải lại</a>
                   <a name="" id="" class="btn btn-primary" href="" role="button"><i class="fa-solid fa-print fa-lg"></i>Xuất danh sách</a>
                </div>
        </div>
</div>
</section>
</body>
</html>