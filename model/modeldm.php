<?php
    // hàm thêm danh mục 
    function insert_danhmuc($tenloai){
                    $sql="insert into danhmuc(name) values('$tenloai')";
                    
                    //hàm thực thi câu lệnh sql
                    pdo_execute($sql);
    }
    // hàm xóa danh mục
    function delete_danhmuc($id){
        $sql="delete from danhmuc where id=".$id;
                    pdo_execute($sql);
    }
    // hàm load tất cả các danh mục
    function loadall_danhmuc(){
        $sql="select * from danhmuc order by id desc";
        $listdanhmuc=pdo_query($sql);
        // có kết quả trả về thì phải return nó ra!
        return $listdanhmuc;
    }
    // hàm load chi tiết 1 danh mục
    function loadone_danhmuc($id){
        $sql="select * from danhmuc where id=".$id;
                // hàm lấy chi tiết của 1 danh mục nào đó và đây là hàm có giá trị trả về nên phải có 1 biến để hứng nó!
                $dm=pdo_query_one($sql);
                // có kết quả trả về thì phải return nó ra!
                return $dm;
    }
    // hàm sửa danh mục
    function update_danhmuc($tenloai,$id){
        $sql="update danhmuc set name='".$tenloai."' where id=".$id;
                
                //hàm thực thi câu lệnh sql
                pdo_execute($sql);
    }


?>
