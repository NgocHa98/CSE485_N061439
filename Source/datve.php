<?php include("./includes/header.php");
 ?>
<?php

  session_start();
  //tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
  //nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
  if (!isset($_SESSION['username'])) {
  header('Location: login.php');
}

?>
<br>
<link rel="stylesheet" type="text/css" href="./style/buyticket.css" >
<div class="showtime-filters">
    <div class="date-container ">
      <ul id="showDates">
        <li class="_active _slick" style="left: 0px;">
          <a href="#">
            <span></span> 
            <div>05<br>
              <span>T .bảy</span>
            </div>
          </a>
        </li>
        <li class="_slick" style="left: 67px;">
          <a href="#">
            <span></span>
            <div>06<br>
              <span>C.nhật</span>
            </div>
          </a>
        </li>
        <li class="_slick" style="left: 121px;">
          <a href="#">
            <span></span>
            <div>07<br>
              <span>T.hai</span>
            </div>
          </a>
        </li>
        <li class="_slick" style="left: 173px;">
          <a href="#">
            <span></span>
            <div>08<br>
              <span>T.ba</span>
            </div>
          </a>
        </li>
        <li class="_slick" style="left: 230px;">
          <a href="#">
            <span></span>
            <div>11<br>
              <span>T.tư</span>
            </div>
          </a>
        </li>
        <li class="_slick" style="left: 279px;">
          <a href="#">
            <span></span>
            <div>09<br>
              <span>T.năm</span>
            </div>
          </a>
        </li>
        <li class="_slick" style="left: 334px;">
          <a href="#">
            <span></span>
            <div>10<br>
              <span>T.sáu</span>
            </div>
          </a>
        </li>
      </ul>
    </div>
</div>
    <br>
    <br>
   
    
<br>
<div class="row" style="background-color: whitesmoke">
<p style="margin-left: 30px">*Lưu ý: Chỗ ngồi của quý khách sẽ được sếp ngẫu nhiên, sau khi xác nhận đặt vé quý khách vui lòng đến HM Cinema để nhận vé.
                              <br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp Vé chỉ có giá trị trong ngày đặt vé, quý khách có thể sử dụng vé vào bất kì khung giờ nào phim chiếu. Xin cảm ơn!</p>
    <div class="col-md-4"></div>
    <form action="datve.php" method="get" class="col-md-4" style="border:4px double #0080FF">
        <div style="font-size: 25px" >
            <center><p ><b>Đặt Vé!</b></p></center>
        </div>
      <div class="form-group">
          <label><b> Tên khách hàng:</b> </label>
          <input type="text" id="email" name="tenkhach">
      </div>
		  <div class="form-group" ">
            <label ><b> Nhập sđt:</b> </label>
            <input style="margin-left:55px" type="text" id="email" name="sdt">
        </div>
        <div class="form-group">
            <p><b>Chọn Phim: </b></p>
                  
                
                    <select class="form-control input-sm" name="phim" >     
                        <option value="phim"></option>
                        <?php 
                        require_once("lib/connection.php");
                           $sql = "SELECT tenphim FROM phim";
                           $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) 
                            {
                                // Sử dụng vòng lặp while để lặp kết quả
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<option>" . $row["tenphim"] . "</option>";
                                }
                            } 
                            else {
                                echo "Không có record nào";
                            }
                        
                        ?> 
                        
                    </select>    
                
        </div>
        <div class="form-group">
            <p><b>Chọn Rạp: </b></p>
                  
                
                    <select class="form-control input-sm" name="rap" >     
                        <option value="rap"></option>    
                        <?php 
                        require_once("lib/connection.php");
                           $sql = "SELECT DiaChi FROM rap";
                           $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) 
                            {
                                // Sử dụng vòng lặp while để lặp kết quả
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<option>" . $row["DiaChi"] . "</option>";
                                }
                            } 
                            else {
                                echo "Không có record nào";
                            }
                        
                        ?> 
                    </select>    
                
        </div>
        <div class="form-group">
            <p><b>Mời chọn ngày </b></p>
            <div class="row" name="ngay">   
                <select class="form-control input-sm" name="day" >     
                    <option value="Day">Ngày</option>         
                    <?php 
                        $d = range(31, 1);
                        foreach ($d as $day) {
                            echo '<option value='.$day.'>'.$day.'</option>';
                        } 
                    ?> 
                </select> 
            
            
                <select class="form-control input-sm" name="month">              
                    <option value="Month">Tháng</option>      
                    <?php
                        $m = array("Jan");
                        foreach ($m as $month) {
                            echo '<option value='.$month.'>'.$month.'</option>';
                        }
                    ?>   
                </select> 
            </div>
              
      </div>
      <div class="form-group">
        <p><b>Số lượng vé: </b></p>                  
        <select class="form-control input-sm" name="soluong" style="width:60%">     
             
            <?php                 
                $soluong = array("1","2","3","4","5","6");
                foreach ($soluong as $sl) {
                    echo '<option value='.$sl.'>'.$sl.'</option>';
                }           
            ?> 
        </select>                   
      </div>
      <div class="form-group">
			<center><input type="submit" name="btn_datve" value="Đặt Vé"></center>
                            
		</div>

    </form>
</div>
<?php include("./includes/footer.php"); ?>