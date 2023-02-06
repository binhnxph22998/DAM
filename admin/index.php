<?php 

    include "../model/pdo.php";
    include "../model/modeldm.php";
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
                        insert_danhmuc($tenloai);

                    $thongbao="thêm đã thành công";

                    }

                    include "danhmuc/add.php";
                break;
            // hiển thị list danh mục (load danh sách)       
            case 'listdm':
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
            break;

            case 'deletedm':
                //kiểm tra xem id có tồn tại và thỏa mãn điều kiện id>0
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    delete_danhmuc($_GET['id']);
                };
                // sau khi xóa dữ liệu xong thì ta gọi lại danh sách = câu lệnh dưới
                // "id decs" là để hiện danh sách cái nào mới nhập thì đưa lên trên!
                $sql="select * from danhmuc order by id desc"; 
                $listdanhmuc=pdo_query($sql);
                include "danhmuc/list.php";
                break;
            
            case 'editdm':
                //kiểm tra xem id có tồn tại và thỏa mãn điều kiện id>0
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                // phải lấy đúng biến truyền vào !
                $dm=loadone_danhmuc($_GET['id']);
                }
                // show phần from update:
                include "danhmuc/update.php";
            break;
            
            case 'uploaddm':
                // kiểm tra người dùng có click vào nút Cập Nhật hay không 
                if(isset($_POST['upload']) && ($_POST['upload'])){
                    // kiểm tra xem có đúng rằng nó tồn tại và người ta có click vào hay không
                $tenloai=$_POST['tenloai'];
                $id=$_POST['id'];
                    // thì ta sửa tên loại lên database
                    update_danhmuc($tenloai,$id);

                $thongbao="thêm đã thành công";
                }
                
                // "id decs" là để hiện danh sách cái nào mới nhập thì đưa lên trên!
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
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