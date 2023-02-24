<?php
    // tạo hàm hiển thị list sản phẩm đặt hàng trong file giỏ hàng
    function viewcard(){
                            $tong=0;
                            $i=0;
                            foreach ($_SESSION['mycard'] as $card) {
                                $hinh=$card[1];   
                                $ttien=$card[3] * $card[4];
                                $tong+=$ttien;
                                $xoasp='<a href="index.php?act=delcard&idcard='.$i.'"><input type="button" value="Xóa"></a>';    
                                echo '
                                <tr>
                                <td><img src="../upload/'.$hinh.'" alt=""></td>
                                <td>'.$card[2].'</td>
                                <td>'.$card[3].'</td>
                                <td>'.$card[4].'</td>
                                <td>'.$ttien.'</td>
                                <td>'.$xoasp.'</td>
                                </tr>';

                                $i+=1;
                            }
                                    
                                echo '
                                <tr>
                                    <td colspan=4>Tổng Đơn Hàng</td>
                                    <td>'.$tong.'</td>
                                    <td></td>
                                </tr>
                                ';
    }

     // hàm viewcard của bill   
    function viewcard1(){
        $tong=0;
        $i=0;
        foreach ($_SESSION['mycard'] as $card) {
            $hinh=$card[1];   
            $ttien=$card[3] * $card[4];
            $tong+=$ttien;
            $xoasp='<a href="index.php?act=delcard&idcard='.$i.'"><input type="button" value="Xóa"></a>';    
            echo '
            <tr>
            <td><img src="../upload/'.$hinh.'" alt=""></td>
            <td>'.$card[2].'</td>
            <td>'.$card[3].'</td>
            <td>'.$card[4].'</td>
            <td>'.$ttien.'</td>
            
            </tr>';

            $i+=1;
        }
                
            echo '
            <tr>
                <td colspan=5>Tổng Đơn Hàng: $'.$tong.'</td>
               
               
            </tr>
            ';
}

function tongdonhang(){
    $tong=0;
    
    foreach ($_SESSION['mycard'] as $card) {
        $ttien=$card[3] * $card[4];
        $tong+=$ttien;   
    }
    return $tong;       
}

// hàm thêm bill
function insert_bill($name,$email,$tel,$address,$pttt,$ngaydathang,$tongdonhang){
    $sql="insert into bill(bill_name,bill_email,bill_tel,bill_address,bill_pttt,ngaydathang,total) values('$name','$email','$tel','$address','$pttt','$ngaydathang','$tongdonhang')";
    
    //hàm thực thi câu lệnh sql
    return pdo_execute_return_lastInsertId($sql);
}

// hàm thêm card
function insert_card($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill){
    $sql="insert into card(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    
    //hàm thực thi câu lệnh sql
    return pdo_execute($sql);
}

// hàm load bill 1 sản phẩm
function loadone_bill($idbill){
    $sql="select * from bill where id=".$idbill;
            // hàm lấy chi tiết của 1 bill nào đó và đây là hàm có giá trị trả về nên phải có 1 biến để hứng nó!
            $bill=pdo_query_one($sql);
            // có kết quả trả về thì phải return nó ra!
            return $bill;
}

// hàm load chi tiết dỏ hàng
function loadall_card($idbill){
    $sql="select * from card where idbill=".$idbill;
            // hàm lấy chi tiết của 1 bill nào đó và đây là hàm có giá trị trả về nên phải có 1 biến để hứng nó!
            $bill=pdo_query($sql);
            // có kết quả trả về thì phải return nó ra!
            return $bill;
} 
?>