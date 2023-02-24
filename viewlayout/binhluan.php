<?php
    session_start();
    include "../model/pdo.php";
    include "../model/modelbl.php";
    $idpro=$_REQUEST['idpro'];
    // khởi tạo biến hứng hàm load danh sách bình luận

    $dsbl=loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bình Luận</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .binhluantb table{
                width: 90%;
                margin-left:5%;


        }

        .binhluantb table td:nth-child(1){
        width: 60%;
        
        }

        .binhluantb table td:nth-child(2){
        width: 10%;
        
        }

        .binhluantb table td:nth-child(3){
        width: 30%;
        
        }

        .formsearch input[type="text"]{
        margin-bottom:10px;
        }
    </style>
</head>
<body>
    
<div class="row  mb">
                    <div class="boxtitle">Bình Luận</div>

                    <div class="boxcontent2 h1 binhluantb">
                    <table>
                        
                    <?php
                        foreach ($dsbl as $binhluan) {
                            extract($binhluan);

                            echo '<tr><td>'.$noidung.'</td>';
                            echo '<td>'.$iduser.'</td>';
                            echo '<td>'.$ngaybinhluan.'</td></tr>';  
                        }
                                          
                    ?>
                    </table>
                        

                    </div>
                    
                    <div class="boxfooter binhluanform">
                        <!-- act là phải chuyển về trang index.php để thực hiện chức năng có trong case "sanphamdm" -->
                        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" class="formsearch">
                        <input type="hidden" name="idpro" value="<?=$idpro?>">
                            <input type="text" name="noidung" placeholder="Viết Bình Luận">
                            
                            <input type="submit" name="binhluan" value="Gửi Bình Luận">
                        </form>
                    </div>

                    <?php
                        if (isset($_POST['binhluan'])&&($_POST['binhluan'])) {
                            $noidung=$_POST['noidung'];
                            $idpro=$_POST['idpro'];
                            $iduser=$_SESSION['user']['id'];
                            $ngaybinhluan=date("h:i:sa d/m/y");
                            insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
                            // khi mà insert được bình luận lên database thì quy lại trang bằng lệnh header
                            header("Location:".$_SERVER['HTTP_REFERER']);

                        }
                    
                    ?>

                </div>

</body>
</html>