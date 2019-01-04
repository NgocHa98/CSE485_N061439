<?php
    $IdKM = $_GET['IdKM'];

    include("../lib/connection.php");
    
    $sql =  "select * from khuyenmai where IdKM = '$IdKM'";
    $qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");

    $rs = mysqli_fetch_array($qr);
    //print_r($rs);
?>


<h1> Cập nhật phim </h1>
<form action = "xl_update_km.php" method =" get">
<input type = "hidden" name = "IdKM" value="<?php echo $IdKM;?>"><br>
Tên Khuyến Mại:<input type="text" name="TenKM" value="<?php echo $rs['TenKM'];?>"><br>
Hình Ảnh:<input type="text" name="Image" value="<?php echo $rs['Image'];?>"><br>
Chi Tiết Khuyến Mại:<input type="text" name="ChitietKM" value="<?php echo $rs['ChitietKM'];?>"><br>
Image:<input type="text" name="hinhanh" value="<?php echo $rs['hinhanh'];?>"><br>
<input type = "submit" value =" Cập nhật">
</form>