<?php
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $ngaysinh = $_POST['ngaysinh'];
    include("../lib/connection.php");
    
    $sql = "insert into users(username, password, name, email, ngaysinh)
    values('$username','$password','$name','$email','$ngaysinh')";
    $qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");

    $rs = mysqli_fetch_array($qr);
    //print_r($rs);
    if($qr){
        header("location:../admin/giaodien4.php");
     }

?>
