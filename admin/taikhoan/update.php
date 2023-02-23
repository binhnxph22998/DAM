<?php
    
if(isset($taikhoan)){
    extract($taikhoan);
}
?>
<div class="row mb  banneradmin">
            <h1>Sửa Tài Khoản </h1>
        </div>

        <div class="row mb10">
                    
            <form action="index.php?act=uploadtk" method="post" class="fromadmin">
                        
                <!--  -->
                <div class="row mb10 mt10">
                    Mã Loại <br> 
                     <input type="text" name="id" id="" disabled>
                </div>

                        <div class="row mb10">
                            EMAIL:
                             <input type="email" name="email" value="<?=$email?>">
                        </div>

                        <div class="row mb10">
                            USER:
                             <input type="text" name="user" value="<?=$user?>">
                        </div>

                        <div class="row mb10">
                            PASS:
                             <input type="text" name="pass" id="" value="<?=$pass?>">
                        </div>

                        <div class="row mb10">
                            ADDRESS:
                             <input type="text" name="address" value="<?=$address?>">
                        </div>

                        <div class="row mb10">
                            TEL:
                             <input type="text" name="tel" value="<?=$tel?>">
                        </div>
                        
                        <div class="row mb10">
                            Vai Trò <br>
                            <select name="role" id="">
                                
                            <?php
                             if((isset($role))&&($role==1)){
                                echo '<option value="1" selected>Admin</option>
                                    <option value="2" selected>Khách Hàng</option>';
                            }else {
                                echo '<option value="2">khách Hàng</option>
                                    <option value="1" >Admin</option>';
                            }
                            
                            ?>
                                
                            </select>
                            
                        </div>
                    
                        

                <div class="row mb10 mt10">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id!="")) echo $id ?>">
                        <a href="index.php?act=dskh"><input type="submit" name="upload" value="Cập Nhật">
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