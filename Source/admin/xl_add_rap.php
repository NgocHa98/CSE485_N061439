<?php
    $k = $_POST['KhuVuc'];
    $d = $_POST['DiaChi'];
    $g = $_POST['GioiThieu'];
    $image = $_POST['image'];
    include("../lib/connection.php");
    
    $sql = "insert into rap(KhuVuc, DiaChi, GioiThieu, image )
    values('$k','$d','$g','$image')";
    $qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");

    $rs = mysqli_fetch_array($qr);
    //print_r($rs);

    if($qr){
        header("location:../admin/adrap.php");
     }

?>
