<div class="mb10">
    <!-- Thêm 1 cái form để tra sản phẩm -->
    <form action="index.php?act=dsbl" method="post">
        <!-- action đến file index.php?act=listsp thực chất để tìm đến "case:listsp" để thực hiện hành động -->
                        <input type="text" name="keyword" placeholder="Nhập Tên Sản Phẩm..." >
                        <select name="idpro" id="">
                            <option value="0" selected >Tất Cả</option>
                        <!-- cách hiện iddm khi mà nhập form thêm sản phẩm  -->
                        <?php
                            // để có biến listdanhmuc thì bắt buộc phải có trong case ở phần index !
                            foreach($listsanpham as $sanpham){
                                // lấy list danh mục để show ra cái iddm!
                                extract($sanpham);
                                
                                echo '<option value="'.$id.'">'.$namesp.'</option>';
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
                        <th>ID</th>
                        <th>Nội dung Bình Luận</th>
                        <th>IDsser</th>
                        <th>IDpro</th>
                        <th>Ngày bình luận</th>
                        <th></th>
                    </tr>

                    <?php

                        foreach($listbinhluan as $binhluan){
                            extract($binhluan);
                            // extract để ta lấy trực tiếp tên biến vào!  
                            $editbl="index.php?act=editbl&id=".$id;
                            $deletebl="index.php?act=deletebl&id=".$id;  
                             echo ' <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td> '.$id.' </td>
                                    <td> '.$noidung.' </td>
                                    <td> '.$iduser.' </td>
                                    <td> '.$idpro.' </td>
                                    <td> '.$ngaybinhluan.' </td>
                                    <td> <a href=" '.$editbl.' "><input type="button" value="Sửa"></a> <a href=" '.$deletebl.' "><input type="button" value="Xóa"></a> </td>
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