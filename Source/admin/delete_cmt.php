<?php
    $cm_id = $_GET['cm_id'];
    include("../lib/connection.php");
    
    $sql =  "delete from comment where cm_id = '$cm_id'";
    $qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");

    if($qr){
        header("location:../admin/adcmt.php");
     }

?> 