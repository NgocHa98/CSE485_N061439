<?php
    $n = $_GET["name"];
    $m = $_GET["message"];
    $t = $_GET["time"];
    include("../lib/connection.php");
    
    $sql = "update comment set name = '$n', message = '$m', time = '$t' ";
    $qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");
    $rs = mysqli_fetch_array($qr);

    if($qr){
        header("location:../admin/adcmt.php");
     }

?>