<br> <br>


<link rel="stylesheet" type="text/css"  href="./style/detail.css" />
<script src="vendor/jquery/jquery.js"></script>
<script>
        $(document).ready(function() {
            $(".com-submit").click(function(){
                m=$(".com-mess").val();
                n=$(".com-name").val();
                $.ajax({
                        url: "vendor/jquery/xuly_cmt.php",
                        type:"post",
                        data:"name="+n+"&mess="+m,
                        async: true,
                        success:function(kq){
                            $("ul li:eq(0)").before(kq);
                        }
                    })
                    return false;
            });

        });
</script>

<fieldset style="width:570px;margin-left:100px">
        <legend ><b>Bình Luận</b></legend>
        <form action="detail1.php" method="pos">
            <table>
                <tr>
                    <td>Mess</td>
                    <td><textarea cols="60" rows="5" class="com-mess" > </textarea> </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" size="25" class="com-name"></td>
                </tr>                
                <tr>
                    <td></td>
                    <td><input type="submit" value="Comment" class="com-submit"></td>
                </tr>
            </table>
        </form>
    </fieldset>

    <fieldset style="width:568px;margin-left:100px;padding: 0px 0px 8px 2px">
        <legend>Bình Luận Cũ</legend>
        <ul>
            <li>
                <img src="./style/img/avatar1.jpg" width="52"/>
                <div>
                    <b>Phan Tung</b><small>  10/12/2018  <a href="#">Reply</a></small>
                    <p>Phim rất hay</p>
                </div>
                <ul>
                    <li>
                    <img src="./style/img/avatar2.jpg" width="50"/>
                    <div>
                        <b>Vu Ngoc</b><small>  10/12/2018 </small>
                        <p>like ^^</p>
                    </div>
                    </li>
                    <li>
                    <img src="./style/img/avatar.jpg" width="50"/>
                    <div>
                        <b>Pham Hung</b><small> 10/12/2018 </small>
                        <p>Đồng ý vs bạn</p>
                    </div>
                    </li>
                    
                </ul>
            <fieldset style="width:490px;margin-left:52px">
                <legend>Your Reply</legend>
                <form action="detail1.php" method="pos">
                    <table>
                        <tr>
                            <td>Mess</td>
                            <td><textarea class="rep-mess" > </textarea> </td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" class="rep-name"></td>
                        </tr>                
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Reply" name="com-submit"></td>
                        </tr>
                    </table>
                </form>
            </fieldset>
            </li>
            <div style="clear:left"></div>
            <li>
            <img src="./style/img/avatar.jpg" width="52"/>
                <div>
                    <b>Nguyen My</b><small>10/12/2018 <a href="#">Reply</a></small>
                    <p>Đáng Xem !!</p>
                </div>
            </li>
            
            <li>
            <img src="./style/img/avatar3.jpg" width="52"/>
                <div>
                    <b>Hai Yen</b><small>10/12/2018 <a href="#">Reply</a></small>
                    <p>Hình ảnh tốt</p>
                </div>
            </li>
        </ul>
    </fieldset>