<?php
    include("header.php");

?>
 <br>
<?php
include("../lib/connection.php");

$sql =  "select * from comment";
$qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");
?>
<h1> Quản Lý Bình Luận</h1>
<center>
    <table border = 1>
        <tr>
            <th>STT</th>
              <th>Tên Người Dùng</th>
              <th>Bình Luận</th>
              <th>Thời Gian</th>
              <th>Action</th>
        </tr>
        <?php 
        $i = 1;
            while( $rs = mysqli_fetch_array($qr)){
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$rs["name"]."</td>";
                echo "<td>".$rs["message"]."</td>";
                echo "<td>".$rs["time"]."</td>";
                echo "<td><a href = 'add_cmt.php'> Thêm</a> | <a href = 'update_cmt.php?cm_id=".$rs['cm_id']."'> Sửa</a>  |
                 <a href = 'delete_cmt.php?cm_id=".$rs['cm_id']."'> Xóa</a></td>";
                echo "</tr>";
                $i++;
            }
        ?>
    </table ></center>
    <br>
    <?php
  include("footer.php");
?>