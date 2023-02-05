<?php 

    include "../model/pdo.php";

    include "header.php";
    // controler

    // kiểm tra xem act có tồn tại không
    if(isset($_GET['act'])){
        // nếu mà act có tồn tại nên cho biến mới bằng với giá trị mình so sánh
        $act=$_GET['act'];

        switch ($act) {
            
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
                $sql="select * from danhmuc order by id desc";
                $listdanhmuc=pdo_query($sql);
                include "danhmuc/list.php";
            break;

            case 'xoadm':
                //kiểm tra xem id có tồn tại và thỏa mãn điều kiện id>0
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    $sql="delete from danhmuc where id=".$_GET['id'];
                    pdo_execute($sql);
                };
                // sau khi xóa dữ liệu xong thì ta gọi lại danh sách = câu lệnh dưới
                // "id decs" là để hiện danh sách cái nào mới nhập thì đưa lên trên!
                $sql="select * from danhmuc order by id desc"; 
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