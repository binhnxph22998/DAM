<div class="row mb10 fromadmin ">

                <table>
                    <tr>
                        <th></th>
                        <th>Mã Loại</th>
                        <th>Tên Loại</th>
                        <th></th>
                    </tr>

                    <?php

                        foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            // extract để ta lấy trực tiếp tên biến vào!  
                            $editdm="index.php?act=editdm&id=".$id;
                            $deletedm="index.php?act=deletedm&id=".$id;  
                             echo ' <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td> '.$id.' </td>
                                    <td> '.$name.' </td>
                                    <td> <a href=" '.$editdm.' "><input type="button" value="Sửa"></a> <a href=" '.$deletedm.' "><input type="button" value="Xóa"></a> </td>
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
                        <a href="index.php?act=adddm"><input type="button" value="Nhập Thêm"></a>
                       
                </div>

        

        </div>