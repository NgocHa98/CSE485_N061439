<?php
    $id = $_GET['id'];
    include("../lib/connection.php");
    $sql =  "delete from phim where id = '$id'";
    $qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");
    if($qr){
        header("location:../admin/adphim.php");
     }

?> 