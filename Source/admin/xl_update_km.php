<?php

    $t = $_GET["TenKM"];
    $im = $_GET["Image"];
    $ChitietKM = $_GET["ChitietKM"];
    $hinhanh = $_GET["hinhanh"];
    include("../lib/connection.php");
    
    $sql = "update khuyenmai set TenKM = '$t', Image = '$im', ChitietKM = '$ChitietKM', hinhanh = '$hinhanh' where IdKM = '$IdKM' ";
    $qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");
    $rs = mysqli_fetch_array($qr);
    
    if($qr){
        header("location:../admin/adkhuyenmai.php");
     }

?>