<?php
    $idrap = $_GET['idrap'];
   include("../lib/connection.php");
    
   $sql =  "select * from rap where idrap = '$idrap'";
   $qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");

   $rs = mysqli_fetch_array($qr);
   //print_r($rs);
?>
<h1> Cập nhật Rạp </h1>
<form action = "xl_update_rap.php" method ="get">
<input type = "hidden" name = "idrap" value="<?php echo $idrap;?>"><br>
Khu Vực Rạp:<input type="text" name="KhuVuc" value="<?php echo $rs['KhuVuc'];?>"><br>
Địa Chỉ Rạp:<input type="text" name="DiaChi" value="<?php echo $rs['DiaChi'];?>"><br>
Giới Thiệu:<input type="text" name="GioiThieu" value="<?php echo $rs['GioiThieu'];?>"><br>
Hình Ảnh:<input type="text" name="image" value="<?php echo $rs['image'];?>"><br>
<input type = "submit" value =" Cập nhật">
</form>