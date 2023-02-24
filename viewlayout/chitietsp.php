


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
                        echo '
                        <div class="row ">
                        <form action="index.php?act=addtocard" method="post" class="gh">
                            <input type="hidden" name="id" value="'.$id.'">
                            <input type="hidden" name="namesp" value="'.$namesp.'">
                            <input type="hidden" name="img" value="'.$img.'">
                            <input type="hidden" name="price" value="'.$price.'">
                            <input type="submit" name="themgh" value="Thêm vào giỏ hàng">
                        </form>
                        </div> 
                        '
                    ?>

                </div>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
            <script>
            $(document).ready(function(){
            
            // dùng giá trị reques để đọc $idpro truyền data
            // load kia là dẫn link tới trang web
            $("#binhluan").load("../viewlayout/binhluan.php", {idpro: <?=$id?>});
            
            });
            </script>


            <div class="row mb10" id="binhluan">
                
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