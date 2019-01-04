<?php
    $t = $_POST['tenphim'];
    $im = $_POST['image'];
    $v = $_POST['video'];
    $id_dm = $_POST['id_dm'];
    $c = $_POST['ChiTiet'];
    $tt = $_POST['TomTat'];
    include("../lib/connection.php");
    
    $sql = "insert into phim(tenphim, image, video, id_dm, ChiTiet, TomTat)
    values('$t','$im','$v','$id_dm','$c','$tt')";
    $qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");

    $rs = mysqli_fetch_array($qr);
    //print_r($rs);
    if($qr){
        header("location:../admin/adphim.php");
     }

?>
