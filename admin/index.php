<?php 

    include "../model/pdo.php";

    include "header.php";
    // controler

    // kiểm tra xem act có tồn tại không
    if(isset($_GET['atc'])){
        // nếu mà act có tồn tại nên cho biến mới bằng với giá trị mình so sánh
        $atc=$_GET['atc'];

        switch ($atc) {
            
            case 'adddm':
                // kiểm tra người dùng có click vào nút add hay không 
                    if(isset($_POST['submit']) && ($_POST['submit'])){
                        // kiểm tra xem có đúng rằng nó tồn tại và người ta có click vào hay không
                    $tenloai=$_POST['tenloai'];
                        // thì ta insert tên loại lên database
                    $sql="insert into danhmuc(name) values('$tenloai')";
                    
                    //hàm thực thi câu lệnh sql
                    pdo_execute($sql);

                    $thongbao="thêm đã thành công";

                    }

                    include "danhmuc/add.php";
                break;

            case 'listdm':
                $sql="select * from danhmuc order by name";
                $listdanhmuc=pdo_query($sql);
                include "danhmuc/list.php";
            break;
            
            case 'addsp':
                include "sanpham/addsp.php";
            break;    
            
            default:
                include "home.php";
                break;
        }
    }else {
        // còn nếu atc không tồn tại thì mình vẫn phải load cái trang home lên
        include "home.php";
    }



    include "home.php";

    include "footer.php";

?>