<div class="row mb  banneradmin">
            <h1>Thêm Hàng Hóa Mới</h1>
        </div>

        <div class="row mb10">

            <form action="index.php?act=adddm" method="post" class="fromadmin" >
                <!--  -->
                <div class="row mb10 mt10">
                    Mã Loại sản phẩm <br> 
                     <input type="text" name="maloai" id="" disabled>
                </div>

                <div class="row mb10 mt10">
                    Tên loại sản phẩm <br>
                     <input type="text" placeholder="Tên Loại Hàng" name="tenloai" id="">
                </div>

                <div class="row mb10 mt10">
                    Giá loại sản phẩm <br>
                     <input type="text" placeholder="Giá Loại sản phẩm" name="giasp" id="">
                </div>

                <div class="row mb10 mt10">
                    Hình ảnh sản phẩm <br>
                     <input type="file"  name="image" id="">
                </div>

                <div class="row mb10 mt10">
                    Tên loại sản phẩm <br>
                     <input type="text" placeholder="Tên Loại Hàng" name="tenloai" id="">
                </div>

                <div class="row mb10 mt10">
                    Mô tả loại sản phẩm <br>
                    <textarea name="detail" id="" placeholder="Mô tả sản phẩm của khách hàng" cols="30" rows="10"></textarea>
                    
                </div>

                <div class="row mb10 mt10">
                        <input type="submit" name="submit" value="Thêm Mới">
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