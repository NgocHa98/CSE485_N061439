<?php
    $t = $_GET['KhuVuc'];
    $im = $_GET['DiaChi'];
    $GioiThieu = $_GET['GioiThieu'];
    $hinhanh = $_GET['image'];
    include("../lib/connection.php");
    
    $sql = "update rap set KhuVuc = '$t', DiaChi = '$im', GioiThieu = '$GioiThieu', image = '$hinhanh' where idrap = '$idrap' ";
    $qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");
    $rs = mysqli_fetch_array($qr);
    //print_r($rs);
     if($qr){
        header("location:../admin/adrap.php");
     }

?>