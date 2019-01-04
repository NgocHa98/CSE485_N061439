<?php
    $t = $_POST['DoTuoi'];
    $im = $_POST['Gia'];
    include("../lib/connection.php");
    
    $sql = "update giave set DoTuoi = '$t', Gia = '$im' ";
    $qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");
    $rs = mysqli_fetch_array($qr);
    if($qr){
        header("location:../admin/adgiave.php");
     }

?>