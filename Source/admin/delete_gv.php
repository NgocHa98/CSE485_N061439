<?php
    $Idgv = $_GET['Idgv'];
    include("../lib/connection.php");
    
    $sql =  "delete from giave where Idgv = '$Idgv'";
    $qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");

    if($qr){
        header("location:../admin/adgiave.php");
     }

?> 