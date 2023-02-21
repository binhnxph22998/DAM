


<!-- Phần Home trang chủ có thể thay đổi -->

<div class="row mb content ">

            <!--Phần box-left chứa sản phẩm   -->
            <div class="box-left">

            <div class="row ">
            
                <div class="boxtitle">
                <h1>
                    Danh sách sản phẩm  <?=$tendm?>                 
                </h1>
                </div>

                <div class="row boxcontentct mb10 h1 display2">

                <?php
                    $i=0;
                    foreach ($dssp as $dssp) {
                        extract($dssp);
                        $linksp="index.php?act=sanphamct&idsp=".$id;

                        echo '<div class="col mt10 mb10 ml5">
                            
                        <a href=" '.$linksp.'">
                        <div class="thumb">
                            <img src="../upload/'.$img.'"  alt="">
                            <p>Giá: $'.$price.'</p>
                            <p>Tên: '.$namesp.'</p>
                        </div>
                        
                        
                        <div class="sanphamcontent">
                            <p>Mua Ngay</p>
                        </div>
                        </a>
                        </div>';
                    }
                ?>
        
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