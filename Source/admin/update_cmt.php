<?php
    $cm_id = $_GET['cm_id'];
 
    include("../lib/connection.php");
    
    $sql =  "select * from comment where cm_id = '$cm_id'";
    $qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");

    $rs = mysqli_fetch_array($qr);
    //print_r($rs);
?>
<h1> Cập nhật Bình luận </h1>
<form action = "xl_update_cmt.php" method =" get">
<input type = "hidden" name = "cm_id" value="<?php echo $cm_id;?>"><br>
Tên Người Dùng:<input type="text" name="name" value="<?php echo $rs['name'];?>"><br>
Bình Luận:<input type="text" name="message" value="<?php echo $rs['message'];?>"><br>
Thời Gian:<input type="text" name="time" value="<?php echo $rs['time'];?>"><br>
<input type = "submit" value =" Cập nhật">
</form>

