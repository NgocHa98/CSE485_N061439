<?php
    include("./includes/header.php");
?>
<br>
<div id="phim" style="background-color: whitesmoke">
    <?php
        include("lib/connection.php");                
        $sql = "select * from khuyenmai where idKM='1' ";                
        $result=mysqli_query($conn,$sql) or die(mysql_error());
        while($row=mysqli_fetch_array($result))
    {?>   
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">

        <br> <br>
        <font face="Comic sans MS" size="7" ><?php echo $row["TenKM"]?></font> 
        <span style="font-size: 15px">
            <p> <br> <?php echo $row["ChitietKM"]?> 
            </p>
</div>
<div class="col-md-12">  
        <br> <br>
<center><img src= "./style/img/<?php echo $row["hinhanh"]?>" class="img-thumbnail" alt="">

</div>
</div>

<?php
    }
    include("./includes/footer.php");
?>