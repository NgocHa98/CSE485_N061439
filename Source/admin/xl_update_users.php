<?php
    $username = $_GET['username'];
    $password = md5($_GET['password']);
    $name = $_GET['name'];
    $email = $_GET['email'];
    $ngaysinh = $_GET['ngaysinh'];
    include("../lib/connection.php");
    
    $sql = "update users set username = '$username', password = '$password', name = '$name', email = '$email', ngaysinh = '$ngaysinh' where id = '$id'";
    $qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");
    $rs = mysqli_fetch_array($qr);

    if($qr){
        header("location:../admin/giaodien4.php");
     }

?>