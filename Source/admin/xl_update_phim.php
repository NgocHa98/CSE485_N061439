<?php
    $t = $_GET['tenphim'];
    $im = $_GET['image'];
    $v = $_GET['video'];
    $id_dm = $_GET['id_dm'];
    $c = $_GET['ChiTiet'];
    $tt = $_GET['TomTat'];
   include("../lib/connection.php");
    
   $sql = "update phim set tenphim = '$t', image = '$im', video = '$v', id_dm = '$id_dm', ChiTiet = '$c', TomTat= '$tt' where id = '$id'";
   $qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");
   $rs = mysqli_fetch_array($qr);
    if($qr){
        header("location:../admin/adphim.php");
     }

?>