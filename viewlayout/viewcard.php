


<!-- Phần Home trang chủ có thể thay đổi -->

<div class="row mb content ">

            <!--Phần box-left chứa sản phẩm   -->
        <div class="box-left formgh">

            <div class="row ">
           
                <div class="boxtitle">
                <h1>
                    Giỏ Hàng Cá Nhân
                </h1>
                </div>

                <div class="row boxcontentct mb10 h1 ">
                    <table>
                        <tr>
                            <td>Hình</td>
                            <td>Sản Phẩm</td>
                            <td>Đơn Giá</td>
                            <td>Số Lượng</td>
                            <td>Thành Tiền</td>
                            <td>Thao Tác</td>
                        </tr>

                        

                        <?php
                            viewcard();
                            
                        ?>


                    </table>
                     
                    
                </div>

            </div>
                    
            <a href="index.php?act=bill"><input type="button" value="Đồng ý Đặt Hàng"></a>
            <a href="index.php?act=delcard"><input type="button" value="Xóa Giỏ Hàng"></a>

            
                
        </div>


            <!-- Phần box-right chứ các thông tin  -->
            <div class="row box-right ">
                <?php
                    include "boxright.php";
                ?>
            </div>


</div>