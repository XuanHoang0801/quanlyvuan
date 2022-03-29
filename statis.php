<?php
    include('config.php');
    $select = " SELECT * FROM tbl_VuAn ";
    $query =   mysqli_query($conn,$select);
    $in = mysqli_num_rows ($query);

    $select5 = " SELECT * FROM tbl_ngay ";
    $select6 = " SELECT * FROM tbl_thang ";
    $select7 = " SELECT * FROM tbl_nam ";



    $ngay =  mysqli_query($conn,$select5);
    $thang =  mysqli_query($conn,$select6);
    $thang2 =  mysqli_query($conn,$select6);
    $nam =  mysqli_query($conn,$select7);
    $nam2 =  mysqli_query($conn,$select7);
    $nam3 =  mysqli_query($conn,$select7);

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
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>

    <title>
        Demo 01 -Quản lý đơn vị
    </title>
</head>
<script src="chart.js"></script>

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
        <form method = "post" action="">

            <table class="table table-striped">
                <h1 style="text-align: center; text-transform: uppercase;" >Thống kê vụ án</h1>
                    <thead>
                        <tr>
                        <th scope="col">Tổng số vụ án</th>
                        <th scope="col">Tổng số vụ án theo ngày</th>
                        <th scope="col">Tổng số vụ án theo Tháng</th>
                        <th scope="col">Tổng số vụ án theo Năm</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <tr>
                                <th scope="row"><?php echo $in ?></th>
                                <th scope="row"> <div class="col-12 ">
                                <!-- ngày -->
                                <div class="loc-ngay">
                                
                                    <select id="inputState" class="form-select datetime" name= "ngay">
                                    <option selected>Ngày</option>
                                    <?php
                                        $i=0;
                                        while($cot3 = mysqli_fetch_array($ngay)){ 
                                    ?>
                                    <option><?php echo $cot3['Ngay']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>

                                    <!-- tháng -->
                                
                                    <select id="inputState" class="form-select  datetime" name= "thang">
                                    <option selected>Tháng</option>
                                    <?php
                                        $i=0;
                                        while($cot4 = mysqli_fetch_array($thang)){ 
                                    ?>
                                    <option><?php echo $cot4['Thang']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>

                                        <!-- năm -->
                                    
                                    <select id="inputState" class="form-select  datetime" name= "nam">
                                    <option selected>Năm</option>
                                    <?php
                                        $i=0;
                                        while($cot5 = mysqli_fetch_array($nam)){ 
                                    ?>
                                    <option><?php echo $cot5['Nam']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>


                                
                                <div class="num-day">
                                <?php
                                if (isset ($_POST['fill']) )
                                    {
                                            //kiểm tra text
                                    if(empty($_POST['ngay'] && $_POST['thang'] && $_POST['nam']   ) == true)
                                        {
                                            echo '<script language="javascript">alert("Hãy nhập đủ thông tin !"); window.location="statis.php";</script>';
                                        }
                                
                                        else
                                        {
                                            $Ngay = $_POST ['ngay'];
                                            $Thang = $_POST ['thang'];
                                            $Nam = $_POST ['nam'];
                                
                                            //truy vấn
                                
                                            $Lay_Ngay = " SELECT * FROM `tbl_vuan` WHERE Ngay='$Ngay' AND Thang='$Thang' AND Nam='$Nam'";
                                            $View_Ngay = mysqli_query($conn,$Lay_Ngay);
                                            $in_Ngay = mysqli_num_rows ($View_Ngay);
                                            echo  "<h4> $in_Ngay </h4>" ;
                                            
                                            
                                
                                        }
                                    }
                                    ?>

                                    
                                </div>
                                <div class="col-12 col-fill">
                                <button type="submit" class="btn btn-primary" name="fill">Lọc</button>
                                </div>
                                </div>
                                </th>


                                <!-- lọc theo tháng -->

                                <th scope="row"> <div class="col-12 ">
                                <!-- ngày -->
                                <div class="loc-ngay">
                                

                                    <!-- tháng -->
                                
                                    <select id="inputState" class="form-select  datetime" name= "thang2">
                                    <option selected>Tháng</option>
                                    <?php
                                        $i2=0;
                                        while($cot6 = mysqli_fetch_array($thang2)){ 
                                    ?>
                                    <option><?php echo $cot6['Thang']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>

                                        <!-- năm -->
                                    
                                    <select id="inputState" class="form-select  datetime" name= "nam2">
                                    <option selected>Năm</option>
                                    <?php
                                        $i2=0;
                                        while($cot7 = mysqli_fetch_array($nam2)){ 
                                    ?>
                                    <option><?php echo $cot7['Nam']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>


                                
                                <div class="num-day">
                                <?php
                                if (isset ($_POST['fill-thang']) )
                                    {
                                            //kiểm tra text
                                    if(empty($_POST['thang2'] && $_POST['nam2']   ) == true)
                                        {
                                            echo '<script language="javascript">alert("Hãy nhập đủ thông tin !"); window.location="statis.php";</script>';
                                        }
                                
                                        else
                                        {
                                            
                                            $Thang2 = $_POST ['thang2'];
                                            $Nam2 = $_POST ['nam2'];
                                
                                            //truy vấn
                                
                                            $Lay_Thang = " SELECT * FROM `tbl_vuan` WHERE Thang='$Thang2' AND Nam='$Nam2'";
                                            $View_Thang = mysqli_query($conn,$Lay_Thang);
                                            $in_Thang= mysqli_num_rows ($View_Thang);
                                            echo  "<h4> $in_Thang </h4>" ;
                                            
                                            
                                
                                        }
                                    }
                                    ?>

                                    
                                </div>
                                <div class="col-12 col-fill">
                                <button type="submit" class="btn btn-primary" name="fill-thang">Lọc</button>
                                </div>
                                </div>
                                </th>

                                <!-- Lọc theo năm -->

                                <!-- lọc theo tháng -->

                                <th scope="row"> <div class="col-12 ">
                                <!-- ngày -->
                                <div class="loc-ngay">
                                

                                    

                                        <!-- năm -->
                                    
                                    <select id="inputState" class="form-select  datetime" name= "nam3">
                                    <option selected>Năm</option>
                                    <?php
                                        $i3=0;
                                        while($cot8= mysqli_fetch_array($nam3)){ 
                                    ?>
                                    <option><?php echo $cot8['Nam']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>


                                
                                <div class="num-day">
                                <?php
                                if (isset ($_POST['fill-nam']) )
                                    {
                                            //kiểm tra text
                                    if(empty( $_POST['nam3']   ) == true)
                                        {
                                            echo '<script language="javascript">alert("Hãy nhập đủ thông tin !"); window.location="statis.php";</script>';
                                        }
                                
                                        else
                                        {
                                            
                                            
                                            $Nam3 = $_POST ['nam3'];
                                
                                            //truy vấn
                                
                                            $Lay_Nam = " SELECT * FROM `tbl_vuan` WHERE  Nam='$Nam3'";
                                            $View_Nam = mysqli_query($conn,$Lay_Nam);
                                            $in_Nam= mysqli_num_rows ($View_Nam);
                                            echo  "<h4> $in_Nam </h4>" ;
                                            
                                            
                                
                                        }
                                    }
                                    ?>

                                    
                                </div>
                                <div class="col-12 col-fill">
                                <button type="submit" class="btn btn-primary" name="fill-nam">Lọc</button>
                                </div>
                                </div>
                                </th>
                    </tbody>
                </table>
                </form>

                <!--Div that will hold the pie chart-->
                <div id="chart_div"></div>

                <div class="main-selecte">
                   
                   <a name="" id="" class="btn btn-primary" href="statis.php" role="button"><i class="fa-solid fa-arrow-rotate-right fa-lg"></i>Tải lại</a>
                   <a name="" id="" class="btn btn-primary" href="" role="button"><i class="fa-solid fa-print fa-lg"></i>Xuất danh sách</a>
                   <a href="index.php"><button type="" class="btn btn-primary" name = "pre" >Quay lại</button> </a>
                </div>
        </div>
</div>
</section>
</body>
</html>