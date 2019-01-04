<?php
    $t = $_POST['TenKM'];
    $im = $_POST['Image'];
    $c = $_POST['ChitietKM'];
    $h = $_POST['hinhanh'];
    include("../lib/connection.php");
    
    $sql =  "insert into khuyenmai(TenKM, Image, ChitietKM, hinhanh)
    values('$t','$im','$c','$h')";
    $qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");

    $rs = mysqli_fetch_array($qr);
    //print_r($rs);
    if($qr){
        header("location:../admin/adphim.php");
     }

?>
