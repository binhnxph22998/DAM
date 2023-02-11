<?php
    // hàm thêm danh mục 
    function insert_sanpham($name,$price,$image,$detail,$view,$iddm){
                    $sql="insert into sanpham(name,price,img,detail,view,iddm) values('$name','$price','$image','$detail','$view','$iddm')";
                    
                    //hàm thực thi câu lệnh sql
                    pdo_execute($sql);
    }
    // hàm xóa danh mục
    function delete_sanpham($id){
        $sql="delete from sanpham where id=".$id;
                    pdo_execute($sql);
    }
    // hàm load tất cả các danh mục
    function loadall_sanpham($kw,$iddm){
        // chia câu SQL ra thành từng phần câu mặc định đầu luôn luôn tới bảng trong CSDL SQL
        // where 1 để so sánh 2 giữa 2 biến $kw và $iddm với nhau
        $sql="select * from sanpham where 1";
        // kiểm tra 2 điều kiện đưa vào 
        if ($kw!="") {
            // kiểm tra nếu $kw khác rỗng thì nối câu lệnh sql
            // so sánh tên sản phẩm xem có giống với $kw không nếu giống thì hiện lên
            $sql.=" and name like '%".$kw."%'";
        }
        
        if ($iddm>0) {
            // kiểm tra nếu $iddm nếu >0 thì nối câu lệnh sql
            // thì lúc đó iddm trong bảng sẽ = $iddm để tìm kiếm bằng iddm !
            $sql.=" and iddm='".$iddm."'";
        } 
        // Nối chuỗi câu lệnh SQL với nhau chú ý là phải có dấu cách ở cuối đoạn cấu lệnh SQL1 
        // hoặc đầu câu lệnh SQL2 không sẽ hiện lối sai cú pháp
        $sql.=" order by id desc";
        $listdanhmuc=pdo_query($sql);
        // có kết quả trả về thì phải return nó ra!
        return $listdanhmuc;
    }
    // hàm load chi tiết 1 danh mục
    function loadone_sanpham($id){
        $sql="select * from sanpham where id=".$id;
                // hàm lấy chi tiết của 1 danh mục nào đó và đây là hàm có giá trị trả về nên phải có 1 biến để hứng nó!
                $dm=pdo_query_one($sql);
                // có kết quả trả về thì phải return nó ra!
                return $dm;
    }   
    // hàm sửa danh mục
    function update_sanpham($tenloai,$id){
        $sql="update sanpham set name='".$tenloai."' where id=".$id;
                
                //hàm thực thi câu lệnh sql
                pdo_execute($sql);
    }


?>