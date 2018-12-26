<?php
    include("./includes/header.php");
?>
<br>
<div id="phim" style="background-color: whitesmoke">
<?php
        include("lib/connection.php");                
        $sql = "select * from khuyenmai where idKM='3' ";                
        $result=mysqli_query($conn,$sql) or die(mysql_error());
        while($row=mysqli_fetch_array($result))
    {?>   
    <div class="row">
        <div class="col-md-1"></div>

        <div class="col-md-10">

        <br> <br>
        <font face="Comic sans MS" size="7" ><?php echo $row["TenKM"]?></font> 
            <p> Từ lâu, chương trình Ngày Tri Ân Nhằm tạo điều kiện thuận lợi hơn cho các khách hàng thả ga xem phim đã trở nên quen thuộc<br> <br>
             với các khách hàng thân yêu của HM Cinema.<br> <br>
            </p>
        </div>
</div>
<img src= "./style/img/<?php echo $row["hinhanh"]?>" class="img-thumbnail" alt="" style="margin-left:90px" > 
    <div class="row">  
    
        <br> <br>
        <div class="col-md-1"> </div>
        <div class="col-md-10">

        <br> <br>
        <span style="font-size: 15px">
            <p> <?php echo $row["ChitietKM"]?> </p>
        </span>
</div>
</div>
<?php
    }
    include("./includes/footer.php");
?>
