<?php
    include("./includes/header.php");
    include("./includes/menu_login.php");
?>


<div id = "main">
   <br> <br>
  
   <center> <font face="Comic sans MS" size="9" >** Merry Christmas **</font> </center>
    <div class="row"> 
        <div class= "col-md-12">

        </div>
    </div>
    <div class= "col-md-2"></div>
       
    </div>
        <br> <br>
         <center> <font face="Comic sans MS" size="9">Khuyến Mại</font> </center>
  
       
        <br><br>
        <div class="row">
        <?php
            include("lib/connection.php");                
            $sql = "select * from khuyenmai where idKM='1' ";                
            $result=mysqli_query($conn,$sql) or die(mysql_error());
            while($row=mysqli_fetch_array($result))
        {?>   
            <div class="col-md-4"> 
                <center><img src= "./style/img/<?php echo $row["Image"] ?>" class="img-thumbnail" alt="">
                    <div class ="caption">
                        <h4><?php echo $row["TenKM"] ?></h4>
                        <p>
                            <a href="km1.php" class="btn btn-danger">Chi tiết</a> 
                           
                        </p>
                    </div>
                </center>
            </div>
            <?php
            include("lib/connection.php");                
            $sql = "select * from khuyenmai where idKM='2' ";                
            $result=mysqli_query($conn,$sql) or die(mysql_error());
            while($row=mysqli_fetch_array($result))
        {?>   
            <div class="col-md-4"> 
                <center><img src= "./style/img/<?php echo $row["Image"] ?>" class="img-thumbnail" alt="">
                    <div class ="caption">
                        <h4><?php echo $row["TenKM"] ?></h4>
           
                        <p>
                            <a href="km2.php" class="btn btn-danger">Chi tiết</a> 
                            
                        </p>
                    </div>
                </center>
            </div>
            <?php
                include("lib/connection.php");                
                $sql = "select * from khuyenmai where idKM='3' ";                
                $result=mysqli_query($conn,$sql) or die(mysql_error());
                while($row=mysqli_fetch_array($result))
            {?>   
            <div class="col-md-4"> 
                <center><img src= "./style/img/<?php echo $row["Image"] ?>" class="img-thumbnail" alt="">
                    <div class ="caption">
                        <h4><?php echo $row["TenKM"] ?></h4>
                        <p>
                            <a href="km3.php" class="btn btn-danger">Chi tiết</a> 
                           
                        </p>
                    </div>
                </center>
            </div>
        </div>
        <div class=row></div>
        <div class="row">
            
        <?php
            include("lib/connection.php");                
            $sql = "select * from khuyenmai where idKM='4' ";                
            $result=mysqli_query($conn,$sql) or die(mysql_error());
            while($row=mysqli_fetch_array($result))
        {?>   
            <div class="col-md-4"> 
                <center><img src= "./style/img/<?php echo $row["Image"] ?>" class="img-thumbnail" alt="">
                    <div class ="caption">
                        <h4><?php echo $row["TenKM"] ?></h4>
                        <p>
                            <a href="km4.php" class="btn btn-danger">Chi tiết</a> 
                           
                        </p>
                    </div>
                </center>    
            </div>
      
            <?php
            include("lib/connection.php");                
            $sql = "select * from khuyenmai where idKM='5' ";                
            $result=mysqli_query($conn,$sql) or die(mysql_error());
            while($row=mysqli_fetch_array($result))
        {?>   
            <div class="col-md-4"> 
                <center><img src= "./style/img/<?php echo $row["Image"] ?>" class="img-thumbnail" alt="">
                    <div class ="caption">
                        <h4><?php echo $row["TenKM"] ?></h4>
                        <p>
                            <a href="km5.php" class="btn btn-danger">Chi tiết</a> 
                     
                        </p>
                    </div>
                </center>    
            </div>
        
            <?php
            include("lib/connection.php");                
            $sql = "select * from khuyenmai where idKM='6' ";                
            $result=mysqli_query($conn,$sql) or die(mysql_error());
            while($row=mysqli_fetch_array($result))
        {?>   
            <div class="col-md-4"> 
                <center><img src= "./style/img/<?php echo $row["Image"] ?>" class="img-thumbnail" alt="">
                    <div class ="caption">
                        <h4><?php echo $row["TenKM"] ?></h4>
                        <p>
                            <a href="km6.php" class="btn btn-danger">Chi tiết</a> 
                        
                        </p>
                    </div>
                </center>    
            </div>
        </div>
       
    </div>
    
    
               
       
   
<?php
        }}}}}
        }
    include("./includes/footer.php");
?>
