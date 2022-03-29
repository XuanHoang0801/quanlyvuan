<html>
    <head>
        <title>Demo Search Basic by freetuts.net</title>
    </head>
    <body>
        <div align="center">
            <form action="search.php" method="get">
                Search: <input type="text" name="search" />
                <input type="submit" name="ok" value="search" />
            </form>
        </div>
        <?php
        // Nếu người dùng submit form thì thực hiện
        if (isset($_REQUEST['ok'])) 
        {
            // Gán hàm addslashes để chống sql injection
            $search = addslashes($_GET['search']);
 
            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
            if (empty($search)) {
                echo "Yeu cau nhap du lieu vao o trong";
            } 
            else
            {
                
 
                // Kết nối sql
                include 'config.php';
                // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                $query_search = "SELECT * from tbl_vuan where Ten_VuAn like '%$search%'";
                // Thực thi câu truy vấn
                $sql = mysqli_query($conn,$query_search);
 
                // Đếm số đong trả về trong sql.
                $num = mysqli_num_rows($sql);
 
                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                if ($num > 0 && $search != "") 
                {
                    // Dùng $num để đếm số dòng trả về.
                    echo "$num ket qua tra ve voi tu khoa <b>$search</b>";
 
                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                    echo '<table border="1" cellspacing="0" cellpadding="10">';
                    while ($row = mysqli_fetch_array($sql)) {
                        echo '<tr>';
                            echo "<td>{$row['id_VuAn']}</td>";
                            echo "<td>{$row['Ten_VuAn']}</td>";
                            echo "<td>{$row['SL_ToiPham']}</td>";
                            echo "<td>{$row['DiaDiem_VuAn']}</td>";
                            echo "<td>{$row['DonVi_VuAn']}</td>";
                        echo '</tr>';
                    }
                    echo '</table>';
                } 
                else {
                    echo "Khong tim thay ket qua!";
                }
            }
        }
        ?>   
    </body>
</html>