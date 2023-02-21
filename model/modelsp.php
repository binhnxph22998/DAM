<?php
    // hàm thêm danh mục 
    function insert_sanpham($namesp,$price,$image,$detail,$view,$iddm){
                    $sql="insert into sanpham(namesp,price,img,detail,view,iddm) values('$namesp','$price','$image','$detail','$view','$iddm')";
                    
                    //hàm thực thi câu lệnh sql
                    pdo_execute($sql);
    }
    // hàm xóa danh mục
    function delete_sanpham($id){
        $sql="delete from sanpham where id=".$id;
                    pdo_execute($sql);
    }
    // hàm load tất cả các danh mục
    function loadall_sanpham($kw="",$iddm=0){
        // chia câu SQL ra thành từng phần câu mặc định đầu luôn luôn tới bảng trong CSDL SQL
        // where 1 để so sánh 2 giữa 2 biến $kw và $iddm với nhau
        $sql="select * from sanpham where 1";
        // kiểm tra 2 điều kiện đưa vào 
        if ($kw!="") {
            // kiểm tra nếu $kw khác rỗng thì nối câu lệnh sql
            // so sánh tên sản phẩm xem có giống với $kw không nếu giống thì hiện lên
            $sql.=" and namesp like '%".$kw."%'";
        }
        
        if ($iddm>0) {
            // kiểm tra nếu $iddm nếu >0 thì nối câu lệnh sql
            // thì lúc đó iddm trong bảng sẽ = $iddm để tìm kiếm bằng iddm !    
            $sql.=" and iddm='".$iddm."'";
        } 
        // Nối chuỗi câu lệnh SQL với nhau chú ý là phải có dấu cách ở cuối đoạn cấu lệnh SQL1 
        // hoặc đầu câu lệnh SQL2 không sẽ hiện lối sai cú pháp
        $sql.=" order by id desc";
        $listsanpham=pdo_query($sql);
        // có kết quả trả về thì phải return nó ra!
        return $listsanpham;
    }

    // hàm để thực hiện loadall sản phẩm lên trang chủ
   
    function loadall_sanpham_home(){
        // câu lệnh sql để load 9 sản phẩm lên trang chủ home
        $sql="select * from sanpham where 1 order by id desc limit 0,9";
        $listsanpham=pdo_query($sql);
        // có kết quả trả về thì phải return nó ra!
        return $listsanpham;
        // hàm có giá trị trả về
    }

    // hàm để thực hiện load danh sách top 10 sản phẩm được yêu thích nhất
    function loadall_sanpham_top10(){
        // câu lệnh sql để load 10 sản phẩm được yêu thích lên trang chủ home
        $sql="select * from sanpham where 1 order by view desc limit 0,10";
    
        $listsanpham=pdo_query($sql);
        // có kết quả trả về thì phải return nó ra!
        return $listsanpham;
        // hàm có giá trị trả về
    }

     // hàm load tên chi tiết 1 danh mục
     function load_tendmsanpham($iddm){
        // nếu iddm >0 thì thực hiện hiển thị danh mục
        if ($iddm>0) {
            $sql="select * from danhmuc where id=".$iddm;
                // hàm lấy chi tiết của 1 danh mục nào đó và đây là hàm có giá trị trả về nên phải có 1 biến để hứng nó!
                $dm=pdo_query_one($sql);
                extract($dm);
                // có kết quả trả về thì phải return tên danh mục đó  ra!
                return $name;    
        }else{
            // còn iddm <0 thì hiển thị kết quả trả về ra rỗng
            return "";
        }
        
    } 


    // hàm load chi tiết 1 sản phẩm
    function loadone_sanpham($id){
        $sql="select * from sanpham where id=".$id;
                // hàm lấy chi tiết của 1 danh mục nào đó và đây là hàm có giá trị trả về nên phải có 1 biến để hứng nó!
                $sp=pdo_query_one($sql);
                // có kết quả trả về thì phải return nó ra!
                return $sp;
    }   

    // hàm load các sản phẩm cùng loại
    function load_sanpham_cungloai($id,$iddm){
        // để ra sản phẩm cùng loại thì cần sửa câu lệnh SQL từ "=" sang "<>"
        // khi đó sẽ khác id với sản phẩm ở trang chi tiết => sẽ cho ra sản phẩm cùng danh mục và khác id
        $sql="select * from sanpham where iddm=".$iddm." AND id <> ".$id;
        // sau đó sẽ load tất cả các sản phẩm cùng loại
        $listsanpham=pdo_query($sql);
        // có kết quả trả về thì phải return nó ra!
        return $listsanpham;
        // hàm có giá trị trả về
    }

    // hàm sửa sản phẩm
    function update_sanpham($id,$namesp,$image,$price,$view,$detail,$iddm){

        // kiểm tra hình ảnh 
        if ($image!="") {
            // nếu có hình ảnh thì thực hiện update như bình thường và có ảnh
            $sql="update sanpham set iddm='".$iddm."', namesp='".$namesp."', price='".$price."', img='".$image."', detail='".$detail."', view='".$view."' where id=".$id;
        }else{
            // nếu không có hình ảnh vẫn thực hiện update bình thường và không có ảnh 
        $sql="update sanpham set iddm='".$iddm."', namesp='".$namesp."', price='".$price."', detail='".$detail."', view='".$view."' where id=".$id;
        }        
                //hàm thực thi câu lệnh sql
                pdo_execute($sql);
    }


?>