<div id = "main">
<?php
include("./includes/header.php");


session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['username'])) {
     header('Location: login.php');
}
else {
    echo"<br>";
    echo"<div class='row'>";
  echo "<div class='col-md-9'></div>";
  echo"  <div class='col-md-3'>";
    echo "<p >Xin chào: &nbsp" . $_SESSION['username'] ."|| <a href='logout.php' style='color:blue'>Đăng Xuất</a> </p>";
    echo"</div>";
echo"</div>";
    }
?>
  
   <center> <font face="Comic sans MS" size="9" >** Merry Christmas **</font> </center>
    <div class="row">  
      
      
        <div class= "col-md-12">
        <div id="mycarousel" class="carousel slide" data-ride="carousel">

            <!--Cho hiện thị chỉ số nếu muốn-->
            <ol class="carousel-indicators">
                <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                <li data-target="#mycarousel" data-slide-to="1" class=""></li>
                <li data-target="#mycarousel" data-slide-to="2" class=""></li>
            </ol>
            <!--Hết tạo chỉ số-->

            <!--Các slide bên trong carousel-inner-->
            <div class="carousel-inner">

            <!--Slide 1 thiết lập hiện thị đầu tiên .active-->
            <div class="carousel-item active">
                <img class="d-block w-100 h" src="./style/img/anh1.jpg">
                
            </div>

            <!--Slide 2-->
            <div class="carousel-item">
                <img class="d-block w-100" src="./style/img/anh7.jpg">
            </div>
            <!--Slide 3-->
            <div class="carousel-item">
                <img class="d-block w-100" src="./style/img/anhcuoi.jpg">
            </div>
        </div>



            <!--Cho thêm khiển chuyển slide trước, sau nếu muốn-->
                <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span></a>
                <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
            <!--Hết tạo điều khiển chuyển Slide--> 

        </div>
    </div>


    <div class= "col-md-2"></div>
       
    </div>
        <br> <br>
         <center> <font face="Comic sans MS" size="9">Phim Hot THáng 12</font> </center>
  
       
        <br><br>
        <div class="row">
        
           
            <div class="col-md-4"> 
            <?php
                include("lib/connection.php");
                
                $sql = "select * from phim where id='1' ";
                
                $result=mysqli_query($conn,$sql) or die(mysql_error());           
                while($row=mysqli_fetch_array($result))
                {?>
                    <center><img class="img-thumbnail" src= "./style/img/<?php echo $row["image"] ?>"width="250" height="200"  alt="" />
                        <div class ="caption">
                            <h4><?php echo $row["tenphim"] ?></h4>
                            <p>
                                <a href="phimnguoinhen.php" class="btn btn-danger">Chi tiết</a> 
                                <a href="datve.php" class="btn btn-danger">Đặt vé</a>
                            </p>
                        </div>
                    </center>
            </div>
                 
            <div class="col-md-4"> 
                <?php
                include("lib/connection.php");            
                $sql = "select * from phim where id='2' ";            
                $result=mysqli_query($conn,$sql) or die(mysql_error());
                while($row=mysqli_fetch_array($result))
                {?>            
                    <center><img src= "./style/img/<?php echo $row["image"] ?>" width="250" height="200" class="img-thumbnail" alt="" >
                        <div class ="caption">
                            <h4><?php echo $row["tenphim"] ?></h4>
                            <p>
                                <a href="phimRalph.php" class="btn btn-danger">Chi tiết</a> 
                                <a href="#" class="btn btn-danger">Đặt vé</a>
                            </p>
                        </div>
                    </center>
            </div>
                
            <div class="col-md-4"> 
                <?php
                    include("lib/connection.php");                
                    $sql = "select * from phim where id='3' ";                
                    $result=mysqli_query($conn,$sql) or die(mysql_error());
                    while($row=mysqli_fetch_array($result))
                {?>            
                    <center><img src= "./style/img/<?php echo $row["image"] ?>"  width="250" height="200" class="img-thumbnail" alt="">
                        <div class ="caption">
                            <h4><?php echo $row["tenphim"] ?></h4>
                            <p>
                                <a href="phimcomaytuthan.php" class="btn btn-danger">Chi tiết</a> 
                                <a href="#" class="btn btn-danger">Đặt vé</a>
                            </p>
                        </div>
                    </center>
            </div>
                
        </div>
        <div class=row></div>
        <div class="row">
            
            <div class="col-md-4"> 
                <?php
                    include("lib/connection.php");                
                    $sql = "select * from phim where id='4' ";                
                    $result=mysqli_query($conn,$sql) or die(mysql_error());
                    while($row=mysqli_fetch_array($result))
                {?>            
                    <center><img src= "./style/img/<?php echo $row["image"] ?>" width="250" height="200" class="img-thumbnail" alt="" >
                        <div class ="caption">
                            <h4><?php echo $row["tenphim"] ?></h4>
                            <p>
                                <a href="phimmatvu.php" class="btn btn-danger">Chi tiết</a> 
                                <a href="#" class="btn btn-danger">Đặt vé</a>
                            </p>
                        </div>
                    </center>
            </div>
                

            <div class="col-md-4"> 
                <?php
                    include("lib/connection.php");                
                    $sql = "select * from phim where id='5' ";                
                    $result=mysqli_query($conn,$sql) or die(mysql_error());
                    while($row=mysqli_fetch_array($result))
                {?>            
                    <center><img src= "./style/img/<?php echo $row["image"] ?>" width="250" height="200" class="img-thumbnail" alt="" >
                        <div class ="caption">
                            <h4><?php echo $row["tenphim"] ?></h4>
                            <p>
                                <a href="phimcomaytuthan.php" class="btn btn-danger">Chi tiết</a> 
                                <a href="#" class="btn btn-danger">Đặt vé</a>
                            </p>
                        </div>
                    </center>
            </div>
                
        
            <div class="col-md-4"> 
                <?php
                    include("lib/connection.php");                
                    $sql = "select * from phim where id='6' ";                
                    $result=mysqli_query($conn,$sql) or die(mysql_error());
                    while($row=mysqli_fetch_array($result))
                {?>            
                    <center><img src= "./style/img/<?php echo $row["image"] ?>" width="250" height="200" class="img-thumbnail" >
                        <div class ="caption">
                            <h4><?php echo $row["tenphim"] ?></h4>
                            <p>
                                <a href="phimhonpapa.php" class="btn btn-danger">Chi tiết</a> 
                                <a href="#" class="btn btn-danger">Đặt vé</a>
                            </p>
                        </div>
                    </center>
            </div>
                
        </div>
       
    </div>
    
               
       
   
<?php
                    }
                }
            }
        }
    }
}
    include("./includes/footer.php");
?>
