


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
                    <?php
                        if (isset($_SESSION['user'])&&(is_array($_SESSION['user']))) {
                            extract($_SESSION['user']);
                        }
                    ?>
                    <form action="index.php?act=edit_tk" method="post" class="fromtk">

                        <div class="row mb10">
                            EMAIL:
                             <input type="email" name="email" value="<?=$email?>">
                        </div>

                        <div class="row mb10">
                            USER:
                             <input type="text" name="user" value="<?=$user?>">
                        </div>

                        <div class="row mb10">
                            PASS:
                             <input type="text" name="pass" id="" value="<?=$pass?>">
                        </div>

                        <div class="row mb10">
                            ADDRESS:
                             <input type="text" name="address" placeholder="Địa chỉ">
                        </div>

                        <div class="row mb10">
                            TEL:
                             <input type="text" name="tel" placeholder="Số Điện Thoại">
                        </div>

                        <div class="row mb10">
                            <input type="hidden" name="id" value="<?=$id?>">
                            <input type="submit" name="capnhat" value="Cập nhật">
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