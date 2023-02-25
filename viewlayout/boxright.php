
                <div class="row  mb">

                    <div class="boxtitle"> TÀI KHOẢN</div>
                    <div class="boxcontent ">
                        <?php
                            // kiểm tra xem nếu có tồn tại $_SESSION['user'] thì hiển thị ra tên user
                            if (isset($_SESSION['user'])) {
                                extract($_SESSION['user']);
                                     
                                

                        ?>
                            <div class="ml10">
                            <br>    
                            Xin chào <?=$user?>
                                
                            </div>

                            <div class="from">
                            <ul>
                                <li>
                                    <a href="index.php?act=quenmk">Quên Mật Khẩu</a>
                                </li>

                                <li>
                                    <a href="index.php?act=edit_tk">Cập nhật thông tin tài khoản</a>
                                </li>

                                <?php 
                                if (isset($_SESSION['user'])) {
                                    extract($_SESSION['user']);
                                // kiểm tra để phân chia nếu tài khoản thuộc quyền quản lý admin hay chỉ là 1 tài khoản bình thường
                                if ($role==1) {
                            
                                 ?>   
                                
                                <li>
                                    <a href="../admin/index.php">Đăng nhập admin</a>
                                </li>

                                
                                <?php
                                }
                                }
                                ?>
                                <li>
                                    <a href="index.php?act=addtocard">Xem Giỏ Hàng</a>
                                </li>

                                <li>
                                    <a href="index.php?act=out">Thoát</a>
                                </li>

                                </ul>
                                </div>
                        <?php 
                            }else {
    
                        ?>
                        <!-- from đăng nhập tài khoản vào trang quản trị -->
                        <form action="index.php?act=dangnhap" method="post" class="from ">

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

                            <input type="submit" class="m" name="dangnhap" value="Đăng Nhập">
                            
                            <ul class="">
                                <li>
                                    <a href="index.php?act=quenmk">Quên Mật Khẩu</a>
                                </li>
        
                                <li>
                                    <a href="index.php?act=dangki">Đăng kí Thành Viên Mới</a>
                                </li>
                                </ul>
                        </form>
                         
                        <?php 
                        }?>
                        
                    </div>
                </div>

                <div class="row  mb">
                    <div class="boxtitle">DANH MỤC</div>

                    <div class="boxcontent2 menu2">

                    <?php
                        foreach ($dsdm as $dm) {
                            extract($dm);
                            // tạo 1 biến hứng link để khi bấm vào có thế load trang dữ liệu
                            // chú ý cái act để đưa đường chuyền vào đúng case chức năng trong index 
                            $linkdm="index.php?act=sanphamdm&iddm=".$id;
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
                        <!-- act là phải chuyển về trang index.php để thực hiện chức năng có trong case "sanphamdm" -->
                        <form action="index.php?act=sanphamdm" method="post" class="formsearch">
                            <input type="search" name="kw" placeholder="Từ Khóa Tìm Kiếm">
                            
                            <input type="submit" name="timkiem" value="Tìm Kiếm">
                        </form>
                    </div>

                </div>

                <div class="row mb">

                    <div class="boxtitle">TOP 10 ĐƯỢC YÊU THÍCH NHẤT</div>

                    <div class="boxcontent">

                        <div class="list">
                            
                        <?php
                            // lấy danh sách danh mục chuyền từ database ra 
                            // foreach cái biến $loadtop10 này ở trong file index.php đã khai báo nên sẽ không báo lỗi cú pháp
                        foreach ($loadtop10 as $sp) {
                            extract($sp);
                            $linksp="index.php?act=sanphamct&idsp=".$id;
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

