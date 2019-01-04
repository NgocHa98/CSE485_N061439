<?php
    $k = $_POST['name'];
    $d = $_POST['message'];
    $t = $_POST['time'];

    include("../lib/connection.php");
    
    $sql =  "insert into comment(name, message, time )
    values('$k','$d','$t')";
    $qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");
    
    if($qr){
        header("location:../admin/adcmt.php");
     }

?>