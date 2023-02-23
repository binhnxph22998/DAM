


<!-- Phần Home trang chủ có thể thay đổi -->

<div class="row mb content ">

            <!--Phần box-left chứa sản phẩm   -->
        <div class="box-left">

            <div class="row ">
           
                <div class="boxtitle">
                <h1>
                    ĐĂNG KÍ THÀNH VIÊN
                </h1>
                </div>

                <div class="row boxcontentct mb10 h1 ">
                    <form action="index.php?act=dangki" method="post" class="fromtk">

                        <div class="row mb10">
                            EMAIL:
                             <input type="email" name="email" placeholder="Nhập Email">
                        </div>

                        <div class="row mb10">
                            USER:
                             <input type="text" name="user" placeholder="Tên sử dụng">
                        </div>

                        <div class="row mb10">
                            PASS:
                             <input type="password" name="pass" id="" placeholder="Mật khẩu">
                        </div>

                        <div class="row mb10">
                            
                            <input type="submit" name="dangki" value="Đăng kí">
                            <input type="submit" name="nhaplai" value="Nhập lại">
                        </div>
                    </form>

                    <div class="thongbao">
                        <h3>
                        <?php
                            // kiểm tra xem biến thông báo có tồn tại và khác rỗng thì thực hiện echo ra thông báo
                            if (isset($thongbao)&&($thongbao!="")) {
                                echo $thongbao;
                            }
                        ?>
                        </h3>
                    </div>

                </div>

            </div>

            
                
        </div>


            <!-- Phần box-right chứ các thông tin  -->
            <div class="row box-right ">
                <?php
                    include "boxright.php";
                ?>
            </div>


</div>