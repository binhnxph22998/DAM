


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
            <div class="row box-right ">
                <?php
                    include "boxright.php";
                ?>
            </div>


</div>