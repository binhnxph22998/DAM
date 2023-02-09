<div class="row mb  banneradmin">
            <h1>Thêm Sản Phẩm Mới</h1>
        </div>

        <div class="row mb10">

            <form action="index.php?act=addsp" method="POST" class="fromadmin" enctype="multipart/form-data" >
                <!--  -->
                <div class="row mb10 mt10">
                    Danh Mục <br>
                    <select name="iddm" id="">
                        <!-- cách hiện iddm khi mà nhập from thêm sản phẩm  -->
                        <?php
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }

                        ?>
                    </select>
                </div>
                <div class="row mb10 mt10">
                    Mã Loại sản phẩm <br> 
                     <input type="text" name="maloaisp" id="" disabled>
                </div>

                <div class="row mb10 mt10">
                    Tên loại sản phẩm <br>
                     <input type="text" placeholder="Tên Loại Hàng" name="namesp" id="">
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
                    View sản phẩm <br>
                     <input type="text" name="luotxem" id="">
                </div>

                <div class="row mb10 mt10">
                    Mô tả loại sản phẩm <br>
                    <textarea name="detail" id="" placeholder="Mô tả sản phẩm của khách hàng" cols="129" rows="10"></textarea>
                    
                </div>

                <div class="row mb10 mt10">
                        <input type="submit" name="submit" value="Thêm Mới">
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