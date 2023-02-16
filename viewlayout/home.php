


<!-- Phần Home trang chủ có thể thay đổi -->

<div class="row mb content ">

            <!--Phần box-left chứa sản phẩm   -->
            <div class="box-left">

                <div class="row">
                    <div class="bannerimg">

                        <!-- Slideshow container -->
                        <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                        
                        <img src="../image/bannerlaptop.webp">
                        
                        </div>

                        <div class="mySlides fade">
                        
                        <img src="../image/bannerdienthoai.webp" >
                        
                        </div>

                        <div class="mySlides fade">
                        
                        <img src="../image/bannergalaxy.webp" >
                        
                        </div>

                        <div class="mySlides fade">
                        
                        <img src="../image/banneripad.webp" >
                        
                        </div>

                        

                        <!-- Next and previous buttons -->
                        <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
                        </div>
                        

                        <!-- The dots/circles -->
                        <!-- <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        </div> -->

                    </div>
                </div>

                <div class="row display w">

                    
                         <?php
                            include_once '../model/db.php';
                        
                                $sql_pro="select * from sanpham";
                                $objPro=$conn->query($sql_pro);
                                foreach($objPro as $rows){
                                ?>
                                
                          

                         <div class="col">
                        <a href="#">
                        <div class="thumb">
                            <img src="../upload/<?php echo $rows['img'] ?>"  alt="">
                            <p>Giá: $<?php echo $rows['price'] ?></p>
                            <p>Tên: <?php echo $rows['namesp'] ?></p>
                        </div>
                        
                        
                        <div class="sanphamcontent">
                            <p>Mua Ngay</p>
                        </div>
                        </a>
                        </div>
                         
                        <?php
                             }
                             ?>
                        
                        

                    <!--<div class="col">
                        <a href="#">
                            <div class="thumb">
                                <img src="../image/dongho.webp" alt="">
                                <p>Giá: $19.00</p>
                                <p>Tên: Đồng Hồ</p>
                            </div>
                            
                            
                            <div class="sanphamcontent">
                                <p>Mua Ngay</p>
                            </div>
                        </a>
                        </div>

                        <div class="col">
                            <a href="#">
                                <div class="thumb">
                                    <img src="../image/dongho.webp" alt="">
                                    <p>Giá: $19.00</p>
                                    <p>Tên: Đồng Hồ</p>
                                </div>
                                
                                
                                <div class="sanphamcontent">
                                    <p>Mua Ngay</p>
                                </div>
                            </a>
                            </div>

                            <div class="col">
                                <a href="#">
                                    <div class="thumb">
                                        <img src="../image/dongho.webp" alt="">
                                        <p>Giá: $19.00</p>
                                        <p>Tên: Đồng Hồ</p>
                                    </div>
                                    
                                    
                                    <div class="sanphamcontent">
                                        <p>Mua Ngay</p>
                                    </div>
                                </a>
                                </div> -->


                    

                    

                    
                </div>
            </div>


            <!-- Phần box-right chứ các thông tin  -->
            <div class="box-right">

                <div class="row  mb">
                    <div class="boxtitle"> TÀI KHOẢN</div>
                    <div class="boxcontent ">
                        <!-- from đăng nhập tài khoản vào trang quản trị -->
                        <form action="#" method="post" class="from ">

                            <div class="row mb10 m">
                                Tên Đăng Nhập <br>
                                <input type="text" name="user" id="">
                            </div>

                            <div class="row mb10 m">
                                Password <br>
                                <input type="password" name="pass" id="">
                            </div>

                            <div class="row mb10 m">
                                <input type="checkbox" name="" id="">Ghi Nhớ Tài Khoản?
                            </div>

                            <input type="submit" class="m" value="Đăng Nhập">
                            
                            <ul class="">
                                <li>
                                    <a href="#">Quên Mật Khẩu</a>
                                </li>
        
                                <li>
                                    <a href="#">Đăng kí Thành Viên Mới</a>
                                </li>
                                </ul>
                        </form>

                        
                    </div>
                </div>
                <div class="row  mb">
                    <div class="boxtitle">DANH MỤC</div>

                    <div class="boxcontent2 menu2">

                    <?php
                        foreach ($dsdm as $dm) {
                            extract($dm);
                            // tạo 1 biến hứng link để khi bấm vào có thế load trang dữ liệu 
                            $linkdm="index.php?act=sanpham&iddm=".$id;
                            // linkdm này phục vụ cho sau dể khi bấm vào danh mục sẽ load hết các sản phẩm của danh mục đó!
                            echo '<li><a href="'.$linkdm.'">'.$name.'</a></li>';
                        }
                    ?>

                        <!-- <li><a href="#">Đồng Hồ Đeo tay</a></li>
                        <li><a href="#">Máy Tính Xách tay 2</a></li>
                        <li><a href="#">Máy Ảnh</a></li>
                        <li><a href="#">Điện Thoại</a></li>
                        <li><a href="#">Nước hoa</a></li>
                        <li><a href="#">Nữ Trang</a></li>
                        <li><a href="#">Nón Thời Trang</a></li>
                        <li><a href="#">Túi Xách Du Lịch</a></li>
                        <li><a href="#">New Catalog</a></li>
                        <li><a href="#">Apple 2023</a></li> -->

                    </div>
                    
                    <div class="boxfooter">
                        <form action="" method="post">
                            <input type="search" placeholder="Từ Khóa Tìm Kiếm">
                        </form>
                    </div>

                </div>

                <div class="row mb">

                    <div class="boxtitle">TOP 10 ĐƯỢC YÊU THÍCH NHẤT</div>

                    <div class="boxcontent">

                        <div class="list">
                            
                        <?php
                            // lấy danh sách danh mục chuyền từ database ra 
                        foreach ($loadtop10 as $sp) {
                            extract($sp);
                            $linksp="index.php?act=sanpham&idsp=".$id;
                            // $image=$img_path.$img;

                            echo '  <div class="row mb10 m">
                                    <img class="img" src="../upload/'.$img.'" alt="">
                                    <a href="'.$linksp.'">'.$namesp.'</a>
                                    </div>';
                        }

                        ?>

                        <!-- <div class="row mb10 m">
                            <img class="img" src="../image/dongho.webp" alt="">
                            <a href="#">Đồng Hồ</a>
                        </div>

                        <div class="row mb10 m">
                            <img class="img" src="../image/dongho.webp" alt="">
                            <a href="#">Đồng Hồ</a>
                        </div>

                        <div class="row mb10 m">
                            <img class="img" src="../image/dongho.webp" alt="">
                            <a href="#">Đồng Hồ</a>
                        </div>

                        <div class="row mb10 m">
                            <img class="img" src="../image/dongho.webp" alt="">
                            <a href="#">Đồng Hồ</a>
                        </div>

                        <div class="row mb10 m">
                            <img class="img" src="../image/dongho.webp" alt="">
                            <a href="#">Đồng Hồ</a>
                        </div>

                        <div class="row mb10 m">
                            <img class="img" src="../image/dongho.webp" alt="">
                            <a href="#">Đồng Hồ</a>
                        </div>

                        <div class="row mb10 m">
                            <img class="img" src="../image/dongho.webp" alt="">
                            <a href="#">Đồng Hồ</a>
                        </div>

                        <div class="row mb10 m">
                            <img class="img" src="../image/dongho.webp" alt="">
                            <a href="#">Đồng Hồ</a>
                        </div>

                        <div class="row mb10 m">
                            <img class="img" src="../image/dongho.webp" alt="">
                            <a href="#">Đồng Hồ</a>
                        </div>

                        <div class="row mb10 m">
                            <img class="img" src="../image/dongho.webp" alt="">
                            <a href="#">Đồng Hồ</a>
                        </div> -->

                        </div> 
                    </div>    
                    

                </div>

            </div>


</div>