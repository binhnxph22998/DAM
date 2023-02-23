<div class="row mb  banneradmin">
            <h1>Thêm Tài khoản mới Mới</h1>
        </div>

        <div class="row mb10">

            <form action="index.php?act=addtk" method="post" class="fromadmin">
                <!--  -->
                <div class="row mb10 mt10">
                    Mã Loại <br> 
                     <input type="text" name="id" id="" disabled>
                </div>

                    <div class="row mb10">
                            EMAIL:
                            <br>
                             <input type="email" name="email" placeholder="Nhập Email">
                        </div>

                        <div class="row mb10">
                            USER:
                            <br>
                             <input type="text" name="user" placeholder="Tên sử dụng">
                        </div>

                        <div class="row mb10">
                            PASS:
                            <br>
                             <input type="password" name="pass" id="" placeholder="Mật khẩu">
                        </div>

                        <div class="row mb10">
                            ADDRESS:
                            <br>
                             <input type="text" name="address" placeholder="Địa chỉ">
                        </div>

                        <div class="row mb10">
                            TEL:
                            <br>
                             <input type="text" name="tel" placeholder="Số Điện Thoại">
                        </div>

                        <div class="row mb10">
                            Vai Trò:
                            <br>
                             <select name="role" id="">
                                <option value="1">Admin</option>
                                <option value="2">khách Hàng</option>
                             </select>
                        </div>

                <div class="row mb10 mt10">
                        <a href="index.php?act=dskh"><input type="submit" name="submit" value="Thêm Mới"></a>
                        <input type="reset" value="Nhập lại">
                        
                        <a href="index.php?act=dskh"><input type="button"  value="Danh Sách"></a>
                        <!-- trong input cái type rất quan trọng!    -->
                </div>

                <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                
                ?>

            </form>

        </div>

    </div>