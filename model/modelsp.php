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
    function loadall_sanpham(){
        $sql="select * from sanpham order by id desc";
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