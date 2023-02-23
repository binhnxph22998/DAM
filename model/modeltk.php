<?php
// hàm thêm danh mục 
    function insert_taikhoan($email,$user,$pass){
                    $sql="insert into taikhoan(email,user,pass) values('$email','$user','$pass')";
                    
                    //hàm thực thi câu lệnh sql
                    pdo_execute($sql);
    }

    function insert_tk($user,$pass,$email,$address,$tel,$role){
        $sql="insert into taikhoan(email,user,pass,address,tel,role) values('$email','$user','$pass','$address','$tel','$role')";
        
        //hàm thực thi câu lệnh sql
        pdo_execute($sql);
}


    // hàm check thông tin đăng nhập
    function check_user($user,$pass){
        // chú ý dấu trong câu lệnh sql
        $sql="select * from taikhoan where user='".$user."' AND pass='".$pass."' ";
                // hàm lấy chi tiết của 1 danh mục nào đó và đây là hàm có giá trị trả về nên phải có 1 biến để hứng nó!
                $tk=pdo_query_one($sql);
                // có kết quả trả về thì phải return nó ra!
                return $tk;
    }

    function update_tk($id,$user,$pass,$email,$address,$tel,$role){

        
            $sql="update taikhoan set user='".$user."', email='".$email."', pass='".$pass."', address='".$address."', tel='".$tel."',role='".$role."' where id=".$id;
                
                //hàm thực thi câu lệnh sql
                pdo_execute($sql);
    }

    function check_mk($user,$email){
        // chú ý dấu trong câu lệnh sql
        $sql="select * from taikhoan where user='".$user."' AND email='".$email."' ";
                // hàm lấy chi tiết của 1 danh mục nào đó và đây là hàm có giá trị trả về nên phải có 1 biến để hứng nó!
                $tk=pdo_query_one($sql);
                // có kết quả trả về thì phải return nó ra!
                return $tk;
    }
    // hàm load list danh sách tài khoản
    function loadall_taikhoan(){
        $sql="select * from taikhoan order by id desc";
        $listdtaikhoan=pdo_query($sql);
        // có kết quả trả về thì phải return nó ra!
        return $listdtaikhoan;
    }

    // hàm xóa tài khoản
    function delete_taikhoan($id){
        $sql="delete from taikhoan where id=".$id;
                    pdo_execute($sql);
    }

    // hàm load chi tiết 1 tài khoản
    function loadone_taikhoan($id){
        $sql="select * from taikhoan where id=".$id;
                // hàm lấy chi tiết của 1 tài khoản nào đó và đây là hàm có giá trị trả về nên phải có 1 biến để hứng nó!
                $tk=pdo_query_one($sql);
                // có kết quả trả về thì phải return nó ra!
                return $tk;
    }
?>    