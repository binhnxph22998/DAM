<?php
try{
    $conn=new PDO("mysql:host=localhost;dbname=duanmau2022;charset=utf8","root","");
} catch(\Throwable $th){
    echo "Lỗi kết nối";
}
?>