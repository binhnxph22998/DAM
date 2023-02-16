<?php
    // kết nối với database MySQL
    include "../model/pdo.php";
    include "../model/modeldm.php";
    include "../model/modelsp.php";
    // tạo biến hứng hàm load sản phẩm trong file modelsp.php
    $spnew=loadall_sanpham_home();
    // tạo biến hứng hàm load danh mục trong file modeldm.php
    $dsdm=loadall_danhmuc();
    // tạo biến hứng hàm load sản phẩm top 10 trong file modelsp.php
    $loadtop10=loadall_sanpham_top10();

    include "../gobal.php";
    include "header.php";
    // kiểm tra xem giá trị act có tồn tại và khác rỗng không 
    if (isset($_GET['act'])&&($_GET['act']!="")) {
        // Nếu khác thì gán 1 biến được chuyền = phương thức $_GET có giá trị là act
        $act=$_GET['act'];
        // switch-case với biến là $act là để thực hiện các chức năng cũng như là chuyển trang trong phần content(home) của trang web
        switch ($act) {
            case 'gioithieu':
                include "gioithieu.php";
                break;
            case 'lienhe':
                include "lienhe.php";
                break;

            default:
            // nếu act không thuộc giá trị nào cả thì ta sẽ load lại trang chủ qua phần file home.php
                include "home.php";
                break;
        }
    }
    // nếu trường hơp act rỗng hoặc không tồn tại thì ta sẽ load trang chủ qua file home.php
    else{
            include "home.php";
        }
    include "footer.php";
?>