


<!-- Phần Home trang chủ có thể thay đổi -->

<div class="row mb content ">

            <!--Phần box-left chứa sản phẩm   -->
        <div class="box-left">

                <div class="row ">
                <div class="boxtitle">
                <h1>Đơn Hàng Của Tôi</h1>
                </div>
                        
                <div class="row boxcontent mb10 formgh">

                <table>

                <?php
                                
                if (isset($bill)&&(is_array($bill))) {
                    extract($bill);
                }

                ?>

                        <tr>
                            <td>STT</td>                            
                            <td>Mã Đơn Hàng</td>
                            <td>Ngày Đặt Hàng</td>
                            
                            <td>Tổng Giá trị Đơn Hàng</td>
                         
                        </tr>

                        <tr>
                            <td></td>
                            <td>DAM-<?=$id;?></td>
                            <td><?=$bill['ngaydathang']?></td>
                            <td>$<?=$bill['total']?></td>
                            
                            
                            
                        </tr>

                         

                    </table>
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