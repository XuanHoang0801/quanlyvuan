<?php
include 'config.php';
    $select= " SELECT * FROM tbl_vuan";
    $query = mysqli_query($conn,$select);

    if(isset($_POST ['delete'])){
        if(isset($_POST['check'])){
            foreach ($_POST ['check'] as $v){
                $xoa = " DELETE FROM tbl_vuan WHERE id_VuAn = '".$v."'";
                mysqli_query($conn,$xoa);
                echo '<script language="javascript">confirm("Bạn có chắc chắn muốn xóa ! "); window.location="index.php";</script>';
            }
        }
       
    }

    if(isset($_POST ['edit'])){
        if(isset($_POST['check'])){
            foreach ($_POST ['check'] as $v){
                // $mang = array("$v");
                echo "$v</br>";
               header("location: suanhieu-vuan.php? & STT=$v");
               
            }

        }
    }

    


?>

<script src="checkall.js"></script>
<div class="main-content container">
<table class="table table-striped">
    <form action="" method = "post" >
<h1 style="text-align: center; text-transform: uppercase;"> Danh sách vụ án</h1>
                    <thead>
                        <tr>    
                        <th scope="col">
                            <input class="form-check-input" type="checkbox" name="checkall" value="" id="selecctall" onclick="CheckAll(this)"> 
                        </th>
                        <th scope="col">Mã Vụ Án</th>
                        <th scope="col">Tên Vụ Án</th>
                        <th scope="col">Số Lượng Tội Phạm</th>
                        <th scope="col">Thời gian xảy ra</th>
                        <th scope="col">Địa điểm</th>
                        <th scope="col">Đơn vị triệt phá</th>
                        <th scope="col">Loại vụ án</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    <?php
                        $i=0;
                         while($cot = mysqli_fetch_array($query)){
                    ?>
                        <tr>
                         <th> 
                            <div class="form-check select-all">
                                <input class="form-check-input" type="checkbox" name="check[]" value="<?php echo $cot['id_VuAn']; ?>" id="flexCheckIndeterminate">
                                
                            </div>   
                         </th>
                        <th scope="row" name= "STT"><?php echo $cot['id_VuAn']; ?></th>
                        <td ><?php echo $cot['Ten_VuAn']; ?></td>
                        <td><?php echo $cot['SL_ToiPham']; ?></td>
                        <td><?php echo $cot['Ngay']; ?> / <?php echo $cot['Thang']; ?> / <?php echo $cot['Nam']; ?> </td>
                        <td><?php echo $cot['DiaDiem_VuAn']; ?></td>
                        <td><?php echo $cot['DonVi_VuAn']; ?></td>
                        <td><?php echo $cot['Loai_VuAn']; ?></td>

                        <td> <?php
                                if( $cot['TrangThai_VuAn']=="Đang xử lý")
                                {
                                    echo '<p style= "color:blue">Đang xử lý</p>';
                                }
                                if($cot['TrangThai_VuAn']=="Đã kết thúc"){
                                    echo '<p style= "color:red;">Đã kết thúc</p>';
                                }
                            ?>
                            </td>
                        
                        
                        <td>
                            <a href="sua_vuan.php? & STT=<?php echo $cot['id_VuAn'];?>"><i class="fa-solid fa-pen" name="update"></i></a>
                            
                            
                            
                            <a href="funtion.php? & STT=<?php echo $cot['id_VuAn'];?>"><i class="fa-regular fa-trash-can"></i></a>
                        </td>
                        </tr>
                        <?php
                         }
                         ?>
                        
                    </tbody>
                </table>

                <div class="main-selecte">
                   <a name="" id="" class="btn btn-primary" href="add_vuan.php" role="button"><i class="fa-solid fa-plus fa-lg"></i>Thêm mới</a>
                   <button type="submit" class="btn btn-primary" name="delete">Xóa</button>
                   <a name="" id="" class="btn btn-primary" href="index.php" role="button"><i class="fa-solid fa-arrow-rotate-right fa-lg"></i>Tải lại</a>
                   <a name="" id="" class="btn btn-primary" href="" role="button"><i class="fa-solid fa-print fa-lg"></i>Xuất danh sách</a>
                </div>
                </form>
</div>