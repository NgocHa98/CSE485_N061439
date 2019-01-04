<?php
    $id = $_GET['id'];
    include("../lib/connection.php");
    
    $sql =  "select * from phim where id = '$id'";
    $qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");

    $rs = mysqli_fetch_array($qr);
    //print_r($rs);
?>
<h1> Cập nhật phim </h1>
<form action = "xl_update_phim.php" method =" get">
<input type = "hidden" name = "id" value="<?php echo $id;?>"><br>
Tên Phim:<input type="text" name="tenphim" value="<?php echo $rs['tenphim'];?>"><br>
Hình Ảnh:<input type="text" name="image" value="<?php echo $rs['image'];?>"><br>
Video:<input type="text" name="video" value="<?php echo $rs['video'];?>"><br>
Danh mục:<input type="text" name="id_dm" value="<?php echo $rs['id_dm'];?>"><br>
Chi Tiết:<input type="text" name="ChiTiet" value="<?php echo $rs['ChiTiet'];?>"><br>
Tóm Tắt:<input type="text" name="TomTat" value="<?php echo $rs['TomTat'];?>"><br>
<input type = "submit" value =" Cập nhật">
</form>