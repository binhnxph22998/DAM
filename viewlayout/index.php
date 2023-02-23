<?php
    session_start();
    // kết nối với database MySQL
    include "../model/pdo.php";
    include "../model/modeldm.php";
    include "../model/modelsp.php";
    include "../model/modeltk.php";
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
            case 'sanphamct':
                
                if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $id=$_GET['idsp'];
                    $onesp=loadone_sanpham($id);
                    extract($onesp);
                    // extract biến $onesp để lấy ra $iddm trong đó thành giá trị 
                    
                    $spcl=load_sanpham_cungloai($id,$iddm);
                    // sản phầm cùng loại phải khác id và cùng danh mục
                    
                include "chitietsp.php";
                }else {
                    include "chitietsp.php";    
                }
                break;
            
            case 'sanphamdm':
                if(isset($_POST['kw'])&&($_POST['kw']>0)){
                    $kw=$_POST['kw'];
                }else {
                    $kw="";
                }

                // kiểm tra xem iddm có tồn tại và iddm >0 
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
            
                }else {
                    $iddm=0;   
                }
                    // truyền vào biến $iddm ở trên xuống
                    // truyền vào biến $kw ở trên xuống
                    // hiển thị tất cả các sản phẩm cùng danh mục
                $dssp=loadall_sanpham($kw,$iddm);
                    
                    // khai báo biến tên hứng hàm thực hiện câu lệnh hiển thị lên tên danh mục theo iddm
                    $tendm=load_tendmsanpham($iddm);
                    include "sanphamdm.php";

            
                    break;    

            case 'dangki':
                // kiểm tra xem người dùng có bấm vào nút đăng kí hay không
                if(isset($_POST['dangki'])&&($_POST['dangki'])){
                    // khởi tạo biến
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    // hàm thực hiện chức năng insert
                    insert_taikhoan($email,$user,$pass);
                    $thongbao="Bạn đã đăng kí tài khoản thành công.Vui lòng đăng nhập để thực hiện các chức năng!";
                }
                include "dangki.php";
                break;
            
                case 'dangnhap':
                    // kiểm tra xem người dùng có bấm vào nút đăng kí hay không
                    if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                        // khởi tạo biến
                        $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        // hàm thực hiện chức năng insert
                        $check_user=check_user($user,$pass);
                        // kiểm tra xem biến $check_user có phải là 1 cái mảng không
                        if (is_array($check_user)) {
                            $_SESSION['user']=$check_user;
                            // chuyển trang khi đăng nhập thành công
                          
                            
                        }else{
                            $thongbao="Tài khoản đăng nhập không tồn tại vui lòng kiểm tra lại thông tin!";
                        }
                        
                    };

                    include "home.php";
                    
                    break;

                case 'edit_tk':
                        // kiểm tra xem người dùng có bấm vào nút đăng kí hay không
                        if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                            // khởi tạo biến
                            $email=$_POST['email'];
                            $user=$_POST['user'];
                            $pass=$_POST['pass'];
                            $address=$_POST['address'];
                            $tel=$_POST['tel'];
                            $id=$_POST['id'];
                            // hàm thực hiện chức năng insert
                            update_tk($id,$user,$pass,$email,$address,$tel);
                            $thongbao="Bạn đã cập nhật tài khoản thành công.Vui lòng đăng nhập để thực hiện các chức năng!";
                           
                        }
                        include "edit_tk.php";
                    break;
                    
                    case 'quenmk':
                        //kiểm tra xem người dùng có bấm vào nút đăng kí hay không
                        if(isset($_POST['gui'])&&($_POST['gui'])){
                            // khởi tạo biến
                            $email=$_POST['email'];
                            $user=$_POST['user'];
                           
                            // hàm thực hiện chức năng insert
                            $check_ue=check_mk($user,$email);
                            if (is_array($check_ue)) {
                                $thongbao="Mật khẩu của bạn là: ".$check_ue['pass'];
                            }else {
                                $thongbao="vui lòng nhập lại Email và User";
                            }
                           
                        }
                        include "quenmk.php";
                    break; 
                
                    case 'out':
                        session_unset();
                        include "home.php";
                    break;        
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