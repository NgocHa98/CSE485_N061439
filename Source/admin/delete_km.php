<?php
    $IdKM = $_GET['IdKM'];
    include("../lib/connection.php");
    $sql =  "delete from khuyenmai where IdKM = '$IdKM'";
    $qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");
    if($qr){
        header("location:../admin/adkhuyenmai.php");
     }

?> 