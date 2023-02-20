<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự Án Mẫu</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<style>
    /* css thêm và lỗi khi chuyển từ html sang php */
    .col {
        width: calc(30.66% - 0px);
        /* width: 30.66%; */
        border: 1px solid #999999;
        border-top-left-radius:5px ;
        border-top-right-radius:5px ;
    }
    .thumb {
        overflow: hidden;
    }
    .thumb img{
        width: 100%;
        transform: scale(100%);
        transition: 1s;
    }
    .col:hover .thumb img {
        transform: scale(110%);
        /* transform: rotate(90deg); */
        /* transform: translate(-20px, 20px); */
        /* transform: skew(25deg); */
    }

    .col {
        position: relative;
        overflow: hidden;
    }
    /* .thumb {
        padding-bottom: 60px;
    } */
    .sanphamcontent {
        position: absolute;
        width: 100%;
        /* bottom: -18%; */
        left: 0;
        right: 0;
        transform: translate(0, 11px);
        background-color: dodgerblue;
        transition: 0.65s ease-in-out;
        opacity: 0.75;
    }
    .sanphamcontent p{
        color:black;
        font-size: 20px;
        text-align: center;
    }
    .col:hover .sanphamcontent {
        /* bottom: 0; */
        transform: translate(0, calc(-80px - 100%));
    }        
    .col:hover .sanphamcontent p:hover{
        color: #fff;
    }

    /* 1 phần code lỗi của slideshow */
    .slideshow-container {
    max-width: 1000px;
    position: relative;
    
    margin: auto;
    }

    .slideshow-container img{
        width: 100%;
        height: 300px;
        border-radius: 10px;
    }

    .col {
    width: calc(30.66% - 0px);
    border: 1px solid #999999;
    border-top-left-radius:5px ;
    border-top-right-radius:5px ;    
    }

    .thumb img{
    width: 100%;
    height: 250px;
    transform: scale(100%);
    transition: 1s;
    }

    .col:hover{
    box-shadow: 4px 4px 4px 4px #ccc ;
    border: 1px solid black;
    
    }
    /* css phần box sản phẩm chi tiết */
    .boxcontentct{
    border-left: 1px solid #CCC;
    border-bottom: 1px solid #ccc;
    border-right: 1px solid #CCC;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius:5px ;
    height: auto;
    }
    .imgct{
        
        width: 65%;
        padding-left: 300px;
        
    }
</style>
    
    <div class="boxcenter">
        <!-- Phần Header -->
        <div class="row mb  header">
            <h1>Siêu Thị Trực Tuyến</h1>
        </div> 
        <!-- Phần Menu -->
        <div class="row mb menu">
            <ul>
                <li><a href="index.php">Trang Chủ</a></li>
                <li><a href="index.php?act=gioithieu">Giới Thiệu</a></li>
                <li><a href="index.php?act=lienhe">Liên Hệ</a></li>
                <li><a href="index.php?act=gopy">Góp Ý</a></li>
                <li><a href="index.php?act=hoidap">Hồi Đáp</a></li>
            </ul>
        </div>