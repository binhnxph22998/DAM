<div class="row mb  banneradmin">
            <h1>Thêm Hàng Hóa Mới</h1>
        </div>

        <div class="row mb10">

            <form action="index.php?atc=adddm" method="post" class="fromadmin">
                <!--  -->
                <div class="row mb10 mt10">
                    Mã Loại <br> 
                     <input type="text" name="maloai" id="" disabled>
                </div>

                <div class="row mb10 mt10">
                    Tên Loại <br>
                     <input type="text" placeholder="Tên Loại Hàng" name="tenloai" id="">
                </div>

                <div class="row mb10 mt10">
                        <input type="submit" name="submit" value="Thêm Mới">
                        <input type="reset" value="Nhập lại">
                        
                        <a href="index.php?atc=listdm"><input type="button"  value="Danh Sách"></a>
                        <!-- trong input cái type rất quan trọng!    -->
                </div>

                <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                
                ?>

            </form>

        </div>

    </div>