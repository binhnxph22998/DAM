<div class="row mb10 fromadmin ">

                <table>
                    <tr>
                        <th></th>
                        <th>Mã</th>
                        <th>Tên Đăng Nhập</th>
                        <th>Email</th>
                        <th>Mật Khẩu</th>
                        <th>Địa Chỉ</th>
                        <th>Số Điện Thoại</th>
                        <th>Vai Trò</th>
                        <th></th>
                    </tr>

                    <?php

                        foreach($listtk as $taikhoan){
                            extract($taikhoan);
                            // extract để ta lấy trực tiếp tên biến vào!  
                            $edittk="index.php?act=edittk&id=".$id;
                            $deletetk="index.php?act=deletetk&id=".$id;  
                             echo ' <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td> '.$id.' </td>
                                    <td> '.$user.' </td>
                                    <td> '.$email.' </td>
                                    <td> '.$pass.' </td>
                                    <td> '.$address.' </td>
                                    <td> '.$tel.' </td>
                                    <td> '.$role.' </td>
                                    <td> <a href=" '.$edittk.' "><input type="button" value="Sửa"></a> <a href=" '.$deletetk.' "><input type="button" value="Xóa"></a> </td>
                                    </tr> 
                                  ';
                        }

                    ?>

                    

                    
                </table>

                

                <div class="row mb10 mt10">
                        <input type="button" value="Chọn Tất Cả">
                        <input type="button" value="Bỏ Chọn Tất Cả">
                        <input type="button" value="Xóa Các Mục Chọn">
                        <a href="index.php?act=addtk"><input type="button" value="Nhập Thêm"></a>
                       
                </div>

        

        </div>