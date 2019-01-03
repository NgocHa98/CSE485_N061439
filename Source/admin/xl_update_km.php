<?php
    $server_username = "root";
    $server_password = "";
    $server_host = "localhost";
    $database = 'datvexemphim';
     
    $conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");
    mysqli_query($conn,"SET NAMES 'UTF8'");
?>

<?php
    if (isset($_POST["btn_submit"])) {
    $t = $_POST["TenKM"];
    $im = $_POST["Image"];
    $ChitietKM = $_POST["ChitietKM"];
    $hinhanh = $_POST["hinhanh"];

    
    //truy vấn dữ liệu
    $sql = "UPDATE phim set TenKM = '$t', Image = '$im', ChitietKM = '$ChitietKM', hinhanh = '$hinhanh' where IdKM = '$IdKM'";
    $qr = mysqli_query($conn,$sql) or die (" lỗi truy vấn ");
    
    echo "<div class='alert alert-info'>
    <strong>Chúc mừng bạn đã đặt vé thành công!!.</strong>
    </div>";
     
    }
?>