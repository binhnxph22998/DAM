<?php
    // kiểm tra danh mục có tồn tại hay không nếu tồn tại thì thực hiện còn không tồn tại thì thôi!
    if(is_array($dm)){
        extract($dm);
    }

?>

<div class="row mb  banneradmin">
            <h1>Sửa Hàng Hóa </h1>
        </div>

        <div class="row mb10">

            <form action="index.php?act=uploaddm" method="post" class="fromadmin">
                <!--  -->
                <div class="row mb10 mt10">
                    Mã Loại <br> 
                     <input type="text" name="maloai" id="" disabled>
                </div>

                <div class="row mb10 mt10">
                    Tên Loại <br>
                     <!-- kiểm tra xem $name có tồn tại và khách rỗng để thực hiện câu lệnh echo xuất name ra from! -->
                     <input type="text" value="<?php if(isset($name)&&($name!="")) echo $name ?>" name="tenloai" id=""> 
                </div>

                <div class="row mb10 mt10">
                    <input type="hidden" name="id" value="<?php if(isset($id)&&($id!="")) echo $id ?>">
                        <a href="index.php?act=listdm"><input type="submit" name="upload" value="Cập Nhật">
                        <input type="reset" value="Nhập lại">
                        
                        <a href="index.php?act=listdm"><input type="button"  value="Danh Sách"></a>
                        <!-- trong input cái type rất quan trọng!    -->
                </div>

                <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                
                ?>

            </form>

        </div>

    </div>