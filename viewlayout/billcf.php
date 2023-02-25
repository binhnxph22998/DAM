


<!-- Phần Home trang chủ có thể thay đổi -->

<div class="row mb content ">

            <!--Phần box-left chứa sản phẩm   -->
            <div class="box-left ">
            

       
            

            <div class="row mb10">
            
                <div class="boxtitle">
                <h1>
                   Thông Tin Khách Hàng
                </h1>
                </div>

                <div class="row boxcontentct mb10 h1 tablett">

                <?php
                    // kiểm tra xem $_SESSION['user'] có tồn tại hay không (nghĩa là người dùng đã đăng nhập vào trang web) 
                    //sau đó thì gọi biến hứng giá trị

                        if (isset($_SESSION['user'])) {

                            $name=$_SESSION['user']['user'];
                            $address=$_SESSION['user']['address'];
                            $email=$_SESSION['user']['email'];
                            $tel=$_SESSION['user']['tel'];

                        }else {
                            // nếu không tồn tại thì sẽ để biến hứng giá trị rỗng (nghĩa là người dùng chưa đăng nhập vào)
                            $name="";
                            $address="";
                            $email="";
                            $tel="";
                        }

                    ?>
                    <table method="get">
                        <tr>
                            
                            <td>Người Đặt Hàng</td>
                            <td><input type="text" name="name" id="" value="<?=$name?>"></td>
                            
                        </tr>

                        <tr>
                            <td>Địa Chỉ</td>
                            <td><input type="text" name="address" id="" value="<?=$address?>"></td>
                        </tr>

                        <tr>
                            <td>Email khác Hàng</td>
                            <td><input type="text" name="Email" id="" value="<?=$email?>"></td>
                        </tr>

                        <tr>
                            <td>Số Điện Thoại</td>
                            <td><input type="text" name="tel" id="" value="<?=$tel?>"></td>
                        </tr>
                    </table>
                        
                </div>
            </div>

            

            <div class="row mb10">
                <div class="boxtitle">
                <h1>Chi Tiết Giỏ Hàng</h1>
                </div>
                        
                <div class="row boxcontent mb10 formgh">

                    <table>
                        <tr>
                            <td>Hình</td>
                            <td>Sản Phẩm</td>
                            <td>Đơn Giá</td>
                            <td>Số Lượng</td>
                            <td>Thành Tiền</td>
                            
                        </tr>

                        <?php
                            viewcard1();
                        
                        ?>

                    </table>
                </div>
            </div>

            <div class="row mb10">
            
                <div class="boxtitle">
                <h1>
                   Cảm Ơn
                </h1>
                </div>

                <div class="row boxcontent">
                    <h2>Cảm Ơn Quý Khách Đã Đặt Hàng! Rất vui được phục vụ quý khác Hẹn Gặp Lại</h2>
                </div>
            </div>

            <div class="formgh">
            <a href="index.php?act=mybill"><input type="button" value="Đơn hàng của Tôi"></a>
            </div>
                
            </div>


            <!-- Phần box-right chứ các thông tin  -->
            <div class="row box-right ">
                <?php
                    include "boxright.php";
                ?>
            </div>


</div>