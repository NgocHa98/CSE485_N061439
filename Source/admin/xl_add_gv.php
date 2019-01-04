<?php
    $k = $_POST['DoTuoi'];
    $d = $_POST['Gia'];
    include("../lib/connection.php");
    
    $sql =  "insert into giave(DoTuoi, Gia )
    values('$k','$d')";
    $qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");
    if($qr){
        header("location:../admin/adgiave.php");
     }

?>
