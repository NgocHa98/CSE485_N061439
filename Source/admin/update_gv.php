<?php
    $Idgv = $_GET['Idgv'];
    include("../lib/connection.php");
    
    $sql =  "select * from giave where Idgv = '$Idgv'"
    $qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");

    $rs = mysqli_fetch_array($qr);
    //print_r($rs);

?>
<h1> Cập nhật Rạp </h1>
<form action = "xl_update_gv.php" method =" post">
<input type = "hidden" name = "Idgv" value="<?php echo $Idgv;?>"><br>
Độ Tuổi:<input type="text" name="DoTuoi" value="<?php echo $rs['DoTuoi'];?>"><br>
Giá:<input type="text" name="Gia" value="<?php echo $rs['Gia'];?>"><br>
<input type = "submit" value =" Cập nhật">
</form>