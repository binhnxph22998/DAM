<!-- do không thể chỉnh css trên file css -->
<style>
    .fromadmin input[type="button"]{
        border-radius: 5px;
        margin-top: 5px;
        border-color:#CCC ;
        background-color: #fff;
    }
</style>

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
                        <th>idsm</th>
                        <th></th>
                    </tr>
                    

                    <?php

                        foreach($listsanpham as $sanpham){
                            extract($sanpham);
                            // extract để ta lấy trực tiếp tên biến vào! 
                            // tạo biến hứng để chuyển dữ liệu qua file index.php 
                            $editsp="index.php?act=editsp&id=".$id;
                            $deletesp="index.php?act=deletesp&id=".$id;  
                             echo ' <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td> '.$id.' </td>
                                    <td> '.$name.' </td>
                                    <td> '.$price.' </td>
                                    <td> '.$img.' </td>
                                    <td> '.$detail.' </td>
                                    <td> '.$view.' </td>
                                    <td> '.$iddm.' </td>
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