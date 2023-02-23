<?php
    // kiểm tra Sản phẩm có tồn tại hay không nếu tồn tại thì thực hiện còn không tồn tại thì thôi!
    if(is_array($sp)){
        extract($sp);
    }

    // tạo biến để hứng link ảnh !
    $hinhpath="../upload/".$img;
    // kiểm tra xem có tồn tại file $hinhpath 
    if (is_file($hinhpath)) {
        // cách thêm hình vào trong bảo table trong trang danh sách sản phẩm!
        $image="<img src='".$hinhpath."' height='80'>";
    }else {
        $image="No Files Image";
    }
?>

<div class="row mb  banneradmin">
            <h1>Sửa Hàng Hóa </h1>
        </div>

        <div class="row mb10">

        <form action="index.php?act=uploadsp" method="POST" class="fromadmin" enctype="multipart/form-data" >
                <!--  -->
                <div class="row mb10 mt10">
                    Danh Mục <br>
                    <select name="iddm" id="">
                        <!-- cách hiện iddm khi mà nhập form thêm sản phẩm  -->
                        
                        <?php
                        // để có biến listdanhmuc thì bắt buộc phải có trong case ở phần index !
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                //kiểm tra để hiển thị danh mục trong phần sửa đổi
                                if ($iddm==$id) {
                                    echo '<option value="'.$id.'" selected>'.$name.'</option>';
                                }else {
                                    echo '<option value="'.$id.'">'.$name.'</option>';
                                }
                                
                                
                            }

                        ?>
                    </select>
                </div>

                <div class="row mb10 mt10">
                    Tên loại sản phẩm <br>
                    <!-- tránh chú ý trùng tên cột của 2 bảng trong database: khi gọi sẽ bị lỗi hiển thị tên của bảng đầu tiên nếu có cùng tên cột -->
                     <input type="text" name="namesp" value="<?=$namesp?>" id="">
                </div>

                <div class="row mb10 mt10">
                    Giá loại sản phẩm <br>
                     <input type="text"  name="giasp" value="<?=$price ?>" id="">
                </div>

                <div class="row mb10 mt10">
                    Hình ảnh sản phẩm <br>
                    <!-- hiển thị hình ảnh sản phẩm để sửa đổi -->
                    <?=$image?> <br>
                     <input type="file"  name="image" id="">
                </div>

                <div class="row mb10 mt10">
                    View sản phẩm <br>
                     <input type="text" name="luotxem" value="<?=$view ?>" id="">
                </div>

                <div class="row mb10 mt10">
                    Mô tả loại sản phẩm <br>
                    <textarea name="detail" id=""cols="129" rows="10"><?=$detail ?></textarea>
                    
                </div>

                <div class="row mb10 mt10">
                            
                            <?php
                            if(is_array($sp)){
                                extract($sp);
                            }
                            ?>
                            <!-- khi không có cụm php trên thì $id ở đây tự hiểu là id của phần danh mục nó sẽ lấy id mới nhất và khi đó sẽ
                            không thể thực hiện đươc lệnh update vì id bị sai. cũng giống như phần Name ở trên cũng bị trùng và máy tự hiểu sẽ lấy 
                            giá trị trong cột name ở bảng danh mục  -->
                        <input type="hidden" name="id" value="<?=$id?>"> 

                        <input type="submit" name="uploadsp" value="Cập Nhật">
                        <input type="reset" value="Nhập lại">
                        
                        <a href="index.php?act=listsp"><input type="button"  value="Danh Sách"></a>
                        <!-- trong input cái type rất quan trọng!    -->
                </div>

                <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                
                ?>

            </form>

        </div>

    </div>