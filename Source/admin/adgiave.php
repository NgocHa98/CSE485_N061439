<?php
    include("header.php");

?>
 <br>
 <?php
include("../lib/connection.php");

$sql =  "select * from giave";
$qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");
?>
<h1> Giá Vé</h1>
<center>
    <table border = 1>
        <tr>
            <th>STT</th>
              <th>Độ Tuổi</th>
              <th>Giá</th>
              <th>Action</th>
        </tr>
        <?php 
        $i = 1;
            while( $rs = mysqli_fetch_array($qr)){
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$rs["DoTuoi"]."</td>";
                echo "<td>".$rs["Gia"]."</td>";
              
                echo "<td><a href = 'add_gv.php'> Thêm</a> | <a href = 'update_gv.php?Idgv=".$rs['Idgv']."'> Sửa</a>  |
                 <a href = 'delete_gv.php?Idgv=".$rs['Idgv']."'> Xóa</a></td>";
                echo "</tr>";
                $i++;
            }
        ?>
    </table ></center>
    <br>
    <?php
  include("footer.php");
?>