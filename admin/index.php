<?php 

    include "../model/pdo.php";
    include "../model/modeldm.php";
    include "../model/modelsp.php";
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
                // $listdanhmuc ở đây chính là biến để hứng cái funtion có giá trị trả về ở modeldm.php !
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


            // Phần Sản Phẩm 

            case 'addsp':
                // kiểm tra người dùng có click vào nút add hay không 
                    if(isset($_POST['submit']) && ($_POST['submit'])){
                        // kiểm tra xem có đúng rằng nó tồn tại và người ta có click vào hay không
                        //
                        
                        $namesp=$_POST['namesp'];
                        $price=$_POST['giasp'];
                        $detail=$_POST['detail'];
                        $view=$_POST['luotxem'];
                        $iddm=$_POST['iddm'];
                        $image=$_FILES['image']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        if (move_uploaded_file($_FILES["image"]["tmp_name"],$target_file)) {
                            
                        }else {
                            
                        }
                        // thì ta insert tên loại lên database
                        insert_sanpham($namesp,$price,$image,$detail,$view,$iddm);

                    $thongbao="thêm đã thành công";

                    }
                    // với phần add danh mục này có cái idddm là để phân định loại hàng hóa nên bắt buộc phải có và phải load được danh mục lên
                    //  $listdanhmuc ở đây chính là biến để hứng cái funtion có giá trị trả về ở modeldm.php !
                    // hiển thị list danh mục (load danh sách) 
                    $listdanhmuc=loadall_danhmuc();
                    include "sanpham/add.php";
                break;
              

            case 'listsp':
                // kiểm tra xem người dùng có bấm vào nút tìm kiếm trong trang danh sách sản phẩm không !
                if (isset($_POST['timkiemok'])&&($_POST['timkiemok'])) {
                    // khởi tạo biến
                    $kw=$_POST['keyword'];
                    $iddm=$_POST['iddm'];
                }
                // nếu ngược lại ta xét giá trị cho $kw là rỗng và $iddm là bằng 0
                else {
                    $kw='';
                    $iddm=0;
                }
                // chú ý phải tồn tại biến mới thực hiện câu lệnh
                // hiển thị list danh mục 
                $listdanhmuc=loadall_danhmuc();
                // hiển thị list danh sách
                $listsanpham=loadall_sanpham($kw,$iddm);
                include "sanpham/list.php";
            break;

            case 'deletesp':
                //kiểm tra xem id có tồn tại và có thỏa mãn điều kiện id>0
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    delete_sanpham($_GET['id']);
                };
                // sau khi xóa dữ liệu xong thì ta gọi lại danh sách = câu lệnh dưới
                // "id decs" là để hiện danh sách cái nào mới nhập thì đưa lên trên!
                $sql="select * from danhmuc order by id desc"; 
                $listsanpham=pdo_query($sql);

                $listsanpham=loadall_sanpham("",0);

                include "sanpham/list.php";
                break;
            
            case 'editsp':
                //kiểm tra xem id có tồn tại và thỏa mãn điều kiện id>0
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                // phải lấy đúng biến truyền vào !
                $sp=loadone_sanpham($_GET['id']);
                }
                
                $listdanhmuc=loadall_danhmuc();
                // show phần from update:
                include "sanpham/update.php";
            break;
            
            case 'uploadsp':

                // kiểm tra xem có đúng rằng nó tồn tại và người ta có click vào hay không
                if(isset($_POST['uploadsp']) && ($_POST['uploadsp'])){
                    // id này là phần id ở chỗ hidden trong bảng form update trong update.php
                    $id=$_POST['id'];
                    $iddm=$_POST['iddm'];
                    $namesp=$_POST['namesp'];
                    $price=$_POST['giasp'];
                    $detail=$_POST['detail'];
                    $view=$_POST['luotxem'];
                    $iddm=$_POST['iddm'];
                    $image=$_FILES['image']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);
                    if (move_uploaded_file($_FILES["image"]["tmp_name"],$target_file)) {
                        #code...
                    }else {
                        #code...
                    };
                    // thì ta sửa tên loại lên database
                    update_sanpham($id,$namesp,$image,$price,$view,$detail,$iddm);

                        $thongbao="thêm đã thành công";
                }
                
                // "id decs" là để hiện danh sách cái nào mới nhập thì đưa lên trên!
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham("",0);
                include "sanpham/list.php";
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