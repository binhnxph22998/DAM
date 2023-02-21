


<!-- Phần Home trang chủ có thể thay đổi -->

<div class="row mb content ">

            <!--Phần box-left chứa sản phẩm   -->
            <div class="box-left">

            <div class="row ">
            <?php extract($onesp);?>
                <div class="boxtitle">
                <h1>
                    <?=$namesp?>
                </h1>
                </div>

                <div class="row boxcontentct mb10 h1">

                    <?php 
                        
                       
                        echo '<img class=" imgct mb10 mt10" src="../upload/'.$img.'" alt=""><br>';
                        echo '<p> Tên Sản Phẩm: '.$namesp.' </p>';
                        echo '<p> Giá Sản Phẩm: $'.$price.' </p>';
                        echo '<p> Mô Tả Sản Phẩm: '.$detail.'</p>';
                    ?>

                </div>
            </div>

            <div class="row ">
                <div class="boxtitle">
                <h1>Bình Luận</h1>
                </div>

                <div class="row boxcontent mb10 h1">
                    
                </div>
            </div>

            <div class="row ">
                <div class="boxtitle">
                <h1>Sản Phẩm Cùng Loại</h1>
                </div>
                
                <div class="row boxcontent mb10 h1">
                    <?php 
                        // foreach lấy giá trị biến $spcl trong file index.php
                        foreach ($spcl as $spcl) {
                            extract($spcl);
                            // khai báo biên hứng link 
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            // khi gán link này vòa thẻ a để có thể truy cập vào trang chi tiết sản phẩm của sản phẩm cùng loại đó
                            echo '<li><a href="'.$linksp.'">'.$namesp.'</a></li>';
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