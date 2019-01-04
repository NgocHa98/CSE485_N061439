<?php
    $id = $_GET['id'];
    include("../lib/connection.php");
    
    $sql = "select * from users where id = '$id'";
    $qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");
 
    $rs = mysqli_fetch_array($qr);
    //print_r($rs);
?>
<h1> Cập nhật người dùng </h1>
<form action = "xl_update_users.php" method ="get">
<input type = "hidden" name = "id" value="<?php echo $id;?>"><br>
Tên đăng nhập :<input type = "text" name = "username" value="<?php echo $rs['username'];?>"><br>
Mật khẩu :<input type = "password" name = "password" value="<?php echo $rs['password'];?>"><br>
Họ tên :<input type = "text" name = "name" value="<?php echo $rs['name'];?>"><br>
Địa chỉ email :<input type = "text" name = "email" value="<?php echo $rs['email'];?>"><br>
Ngày sinh:<input type = "text" name = "ngaysinh" value="<?php echo $rs['ngaysinh'];?>"><br>
<input type = "submit" value =" Cập nhật">
</form>