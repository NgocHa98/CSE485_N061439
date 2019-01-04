<?php
    $idrap = $_GET['idrap'];
    include("../lib/connection.php");
    $sql =  "delete from rap where idrap = '$idrap'";
    $qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");
    $rs = mysqli_fetch_array($qr);
    //print_r($rs);
    if($qr){
        header("location:../admin/adrap.php");
     }

?> 