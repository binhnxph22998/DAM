<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị Website</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!-- Css bất đắc dĩ -->
    <style>
        /* input trong bảng table */
    .fromadmin table input[type="button"]{
        width: 50px;
        border-radius: 5px;
        border-color:#CCC ;
        
        gap: 10px;
    }

    .fromadmin table input[type="button"]:hover{
        background-color: aqua;
        cursor: pointer;
        
    }

    /* input dưới bảng table */
    .fromadmin input[type="button"]{
        border-radius: 5px;
        border-color:#CCC ;
        background-color: #fff;
    }

    .fromadmin  input[type="button"]:hover{
        background-color: aqua;
        cursor: pointer;
        
    }
    /*  */
    .fromadmin input[type="submit"],
    .fromadmin input[type="reset"]{
        border-radius: 5px;
        border-color:#CCC ;
        background-color: #fff;
    }

    .fromadmin input[type="submit"]:hover{
        background-color: aqua;
        cursor: pointer;
    }
    .fromadmin input[type="reset"]:hover{
        background-color: aqua;
        cursor: pointer;
    }
    .fromadmin input[type="text"],
    .fromadmin input[type="email"],
    .fromadmin input[type="password"]
    {
        width: 100%;
        min-height: 30px;
    }
    </style>
    <div class="boxcenter">
        <!-- Phần Header -->
        <div class="row mb  headeradmin">
            <h1>Quản Trị Trang Website</h1>
        </div> 
        <!-- Phần Menu -->
        <div class="row mb menu">
            <ul>
                <li><a href="index.php">Trang Chủ</a></li>
                <li><a href="index.php?act=adddm">Danh Mục</a></li>
                <li><a href="index.php?act=addsp">Hàng Hóa</a></li>
                <li><a href="index.php?act=dskh">Khách Hàng</a></li>
                <li><a href="index.php?act=dsbl">Bình Luận</a></li>
                <li><a href="index.php?act=thongke">Thống Kê</a></li>
            </ul>
        </div>