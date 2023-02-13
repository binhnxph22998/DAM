<!-- do không thể chỉnh css trên file css -->
<style>
    .fromadmin input[type="button"]{
        border-radius: 5px;
        margin-top: 5px;
        border-color:#CCC ;
        background-color: #fff;
    }
</style>

<div class="mb10">
    <!-- Thêm 1 cái form để tra sản phẩm -->
    <form action="index.php?act=listsp" method="post">
        <!-- action đến file index.php?act=listsp thực chất để tìm đến "case:listsp" để thực hiện hành động -->
                        <input type="text" name="keyword" placeholder="Nhập Tên Sản Phẩm..." >
                        <select name="iddm" id="">
                            <option value="0" selected >Tất Cả</option>
                        <!-- cách hiện iddm khi mà nhập form thêm sản phẩm  -->
                        <?php
                            // để có biến listdanhmuc thì bắt buộc phải có trong case ở phần index !
                            foreach($listdanhmuc as $danhmuc){
                                // lấy list danh mục để show ra cái iddm!
                                extract($danhmuc);
                                
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }

                        ?>
                    </select>

                     <input type="submit" name="timkiemok" value="Tìm Kiếm">       

                    </form>
</div>


<div class="row mb10 fromadmin ">

                
                <table>
                    <tr>
                        <th></th>
                        <th>Mã Loại Sản phẩm</th>
                        <th>Tên Loại Sản phẩm</th>
                        <th>Giá</th>
                        <th>Ảnh</th>
                        <th>Mô tả</th>
                        <th>view</th>
                        
                        <th></th>
                    </tr>
                    

                    <?php

                        foreach($listsanpham as $sanpham){
                            extract($sanpham);
                            // extract để ta lấy trực tiếp tên biến vào! 
                            // tạo biến hứng để chuyển dữ liệu qua file index.php 
                            $editsp="index.php?act=editsp&id=".$id;
                            $deletesp="index.php?act=deletesp&id=".$id;
                            // tạo biến để hứng link ảnh !
                            $hinhpath="../upload/".$img;
                            // kiểm tra xem có tồn tại file $hinhpath 
                            if (is_file($hinhpath)) {
                                // cách thêm hình vào trong bảo table trong trang danh sách sản phẩm!
                                $image="<img src='".$hinhpath."' height='80'>";
                            }else {
                                $image="No Files Image";
                            }
                            // phải sủa trong echo là biến $hinh để có đường link ảnh hiển thị kết ảnh!
                             echo ' <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td> '.$id.' </td>
                                    <td> '.$namesp.' </td>
                                    <td> '.$price.' </td>
                                    <td> '.$image.' </td>
                                    <td> '.$detail.' </td>
                                    <td> '.$view.' </td>
                                    
                                    <td> <a href=" '.$editsp.' "><input type="button" value="Sửa"></a> <a href=" '.$deletesp.' "><input type="button" value="Xóa"></a> </td>
                                    </tr> 
                                  ';
                        }

                    ?>

                    <!-- <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>001</td>
                        <td>Đồng Hồ</td>
                        <td><a href=""><input type="button" value="Sửa"></a> <a href=""><input type="button" value="Xóa"></a></td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>002</td>
                        <td>Đồng Hồ</td>
                        <td><a href=""><input type="button" value="Sửa"></a> <a href=""><input type="button" value="Xóa"></a></td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>003</td>
                        <td>Đồng Hồ</td>
                        <td><a href=""><input type="button" value="Sửa"></a> <a href=""><input type="button" value="Xóa"></a></td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>004</td>
                        <td>Đồng Hồ</td>
                        <td><a href=""><input type="button" value="Sửa"></a> <a href=""><input type="button" value="Xóa"></a></td>
                    </tr>

                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>005</td>
                        <td>Đồng Hồ</td>
                        <td><a href=""><input type="button" value="Sửa"></a> <a href=""><input type="button" value="Xóa"></a></td>
                    </tr> -->

                    
                </table>

                

                <div class="row mb10 mt10">
                        <input type="button" value="Chọn Tất Cả">
                        <input type="button" value="Bỏ Chọn Tất Cả">
                        <input type="button" value="Xóa Các Mục Chọn">
                        <a href="index.php?act=addsp"><input type="button" value="Nhập Thêm"></a>
                       
                </div>

        

        </div>