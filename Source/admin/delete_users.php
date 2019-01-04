<?php
    $id = $_GET['id'];
    include("../lib/connection.php");
    $sql =  "delete from users where id = '$id'";
    $qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");
    if($qr){
        header("location:../source/giaodien4.php");
     }

?> 