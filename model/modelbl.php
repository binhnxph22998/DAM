<?php
    // hàm thêm bình luận 
    function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
        $sql="insert into binhluan(noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan')";
        
        //hàm thực thi câu lệnh sql
        pdo_execute($sql);
    }

    // load danh sách bình luận
    function loadall_binhluan($idpro){
        $sql="select * from binhluan where 1"; 
        if($idpro>0){
            $sql.=" AND idpro='".$idpro."'"; 
        }else {
            $sql.=" order by id desc";
        }
        
        $listbinhluan=pdo_query($sql);
        // có kết quả trả về thì phải return nó ra!
        return $listbinhluan;
    }


?>
