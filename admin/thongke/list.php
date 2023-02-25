<div class="row mb10 fromadmin ">

                <table>

                    <tr>
                        <th>Mã Loại Hàng</th>
                        <th>Loại Hàng</th>
                        <th>Số Lượng</th>
                        <th>Giá Cao Nhất</th>
                        <th>Giá Thấp Nhất</th>
                        <th>Giá Trung Bình</th>
                        
                    </tr>

                    <?php

                        foreach($listthongke as $tk){
                            extract($tk);  
                             echo '  
                                <tr>
                                
                                <th>'.$madm.'</th>
                                <th>'.$tendm.'</th>
                                <th>'.$countsp.'</th>
                                <th>'.$minprice.'</th>
                                <th>'.$maxprice.'</th>
                                <th>'.$avgprice.'</th>
                                </tr>
                                  ';
                        }

                    ?>


                    
                </table>

                

                <div class="row mb10 mt10">
                        <a href="index.php?act=bieudo"><input type="button" value="Xem Biểu Đồ"></a>
                       
                </div>

        

        </div>