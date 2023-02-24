


<!-- Phần Home trang chủ có thể thay đổi -->

<div class="row mb content ">

            <!--Phần box-left chứa sản phẩm   -->
            <div class="box-left ">

            <div class="row ">
            
                <div class="boxtitle">
                <h1>
                   Cảm Ơn
                </h1>
                </div>

                <div class="row boxcontent">
                    <h2>Cảm Ơn Quý Khách Đã Đặt Hàng</h2>
                </div>
            </div>
            
            <?php
               
                if (isset($bill)&&(is_array($bill))) {
                    extract($bill);
                }

                

             ?>

        <div class="row ">
            
            <div class="boxtitle">
            <h1>
            Thông Tin Đơn Hàng
            </h1>
            </div>

            <div class="row boxcontent">
                <h2>DAM-<?=$bill['id'];?></h2>
                <h2>Ngày Đặt Hàng-<?=$bill['ngaydathang']?></h2>
                <h2>Tông Đơn Hàng-$<?=$bill['total']?></h2>
                <h2>Phương Thức Thanh Toán-<?=$bill['bill_pttt']?></h2>
            </div>
        </div>
            

            <div class="row ">
            
                <div class="boxtitle">
                <h1>
                   Thông Tin Khách Hàng
                </h1>
                </div>

                <div class="row boxcontentct mb10 h1 tablett">

                    <table>
                        <tr>
                            <td>Người Đặt Hàng</td>
                            <td><?=$listbill['bill_name']?></td>
                        </tr>

                        <tr>
                            <td>Địa Chỉ</td>
                            <td><?=$listbill['bill_address']?></td>
                        </tr>

                        <tr>
                            <td>Email khác Hàng</td>
                            <td><?=$listbill['bill_email']?></td>
                        </tr>

                        <tr>
                            <td>Số Điện Thoại</td>
                            <td><?=$listbill['bill_tel']?></td>
                        </tr>
                    </table>
                        
                </div>
            </div>

            

            <div class="row ">
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

            <div class="formgh">
            <a href="index.php?act=bill"><input type="button" value="Đồng ý Đặt Hàng"></a>
            </div>
                
            </div>


            <!-- Phần box-right chứ các thông tin  -->
            <div class="row box-right ">
                <?php
                    include "boxright.php";
                ?>
            </div>


</div>