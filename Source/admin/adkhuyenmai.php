<?php
    include("header.php");

?>
 <br>
<?php
include("../lib/connection.php");
//truy vấn dữ liệu
$sql = "select * from khuyenmai";
$qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");
?>
<h1> Danh sách Khuyến Mại</h1>
<center>
    <table border = 1>
        <tr>
            <th>STT</th>
              <th>Tên Khuyến Mại</th>
              <th>Hình Ảnh</th>
              <th>Chi Tiết Khuyến Mại</th>
              <th>Image</th> 
        <?php 
        $i = 1;
            while( $rs = mysqli_fetch_array($qr)){
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$rs["TenKM"]."</td>";
                echo "<td>".$rs["Image"]."</td>";
                echo "<td>".$rs["ChitietKM"]."</td>";
                echo "<td>".$rs["hinhanh"]."</td>";
            
                echo "<td><a href = 'add_km.php'> Thêm</a> | <a href = 'update_km.php?IdKM=".$rs['IdKM']."'> Sửa</a>  |
                 <a href = 'delete_km.php?IdKM=".$rs['IdKM']."'> Xóa</a></td>";
                echo "</tr>";
                $i++;
            }
        ?>
    </table ></center>
    <br>
    <?php
    include("footer.php");
?>