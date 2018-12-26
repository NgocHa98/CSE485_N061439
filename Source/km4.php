<?php
    include("./includes/header.php");
?>
<br>
<div id="phim" style="background-color: whitesmoke">
<?php
        include("lib/connection.php");                
        $sql = "select * from khuyenmai where idKM='4' ";                
        $result=mysqli_query($conn,$sql) or die(mysql_error());
        while($row=mysqli_fetch_array($result))
    {?>   
    <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-8">

        <br> <br>
        <font face="Comic sans MS" size="7" ><?php echo $row["TenKM"]?></font> 
    <div class="col-md-1" > </div>   
        <div class="col-md-10">  
        <br> <br>

    <br> <br>
    <span style="font-size: 15px">
        <p><?php echo $row["ChitietKM"]?></p>
    </span>
    </div>
</div>
</div>
<?php
    }
    include("./includes/footer.php");
?>
