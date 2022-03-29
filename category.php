<?php
     include('config.php');
     $donvi = " SELECT * FROM tbl_theloai";
     $query_donvi = mysqli_query($conn,$donvi);
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
        Demo 01 - Loại vụ án
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
                <h1 style="text-align: center; text-transform: uppercase;">Loại vụ án</h1>
                    <thead>
                        <tr>
                        <th scope="col">Loại vụ án</th>
                        
                        <th scope="col">Hành động</th>
                        
                        
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i=0;
                         while($cot = mysqli_fetch_array($query_donvi)){
                    ?>
                        <tr>
                        <th scope="row"><?php echo $cot['Loai_VuAn']; ?></th>
                        
                        
                        <td>
                            <a href="sua-category.php? & loai=<?php echo $cot['Loai_VuAn'];?>"><i class="fa-solid fa-pen" name="update"></i></a>
                            <a href="xoa-category.php? & loai=<?php echo $cot['Loai_VuAn'];?>"><i class="fa-regular fa-trash-can"></i></a>
                        </td>
                        </tr>
                        <?php
                         }
                         ?>
                        
                    </tbody>
                </table>

                <div class="main-selecte">
                   <a name="" id="" class="btn btn-primary" href="add-category.php" role="button"><i class="fa-solid fa-plus fa-lg"></i>Thêm mới</a>
                   <a name="" id="" class="btn btn-primary" href="category.php" role="button"><i class="fa-solid fa-arrow-rotate-right fa-lg"></i>Tải lại</a>
                   <a name="" id="" class="btn btn-primary" href="" role="button"><i class="fa-solid fa-print fa-lg"></i>Xuất danh sách</a>
                </div>
        </div>
</div>
</section>
</body>
</html>