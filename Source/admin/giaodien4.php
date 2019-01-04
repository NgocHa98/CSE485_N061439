<?php
    include("header.php");

?>
 <br>
 <?php
include("../lib/connection.php");

$sql =  "select * from users";
$qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");
?>
<h1> Danh sách người dùng</h1>
    <table border = 1>
        <tr>
            <th>STT</th>
              <th>Tên đăng nhập</th>
              <th>Mật Khẩu</th>
              <th>Họ Tên</th>
              <th>Địa chỉ email</th>
              <th>Ngày Sinh</th>
              <th>Action</th>
        </tr>
        <?php
        $i = 1;
            while( $rs = mysqli_fetch_array($qr)){
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$rs["username"]."</td>";
                echo "<td>***********</td>";
                echo "<td>".$rs["name"]."</td>";
                echo "<td>".$rs["email"]."</td>";
                echo "<td>".$rs["ngaysinh"]."</td>";

                echo "<td><a href = 'add_users.php'> Thêm</a> | <a href = 'update_users.php?id=".$rs['id']."'> Sửa</a>  |
                 <a href = 'delete_users.php?id=".$rs['id']."'> Xóa</a></td>";
                echo "</tr>";
                $i++;
            }
        ?>
    </table >
    <br>
    <?php
  include("footer.php");
?>