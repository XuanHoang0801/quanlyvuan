<?php
     include('config.php');
     $select = " SELECT * FROM tbl_VuAn ";
     $query =   mysqli_query($conn,$select);
     $in = mysqli_num_rows ($query);
    //  $cot = mysqli_fetch($query);
    //  $string = implode($cot);
     echo $in;
?>



                            

                            
        

                         