<?php
session_start();
require_once('../mySql_general/function_helper.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Abel&family=Dancing+Script:wght@600&family=Saira:ital,wght@1,700&family=Source+Serif+Pro:ital,wght@1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
        width: 100%;
        height: -1%;
    }

    .carousel-indicators {
        opacity: 0.5;
    }

    .product li i {

        font-size: 30px;
        margin-right: 10px;
    }

    .product li #mui_ten {
        position: absolute;
        top: 23px;
        left: 62px;
    }

    .drop_header {
        display: flex;
        justify-content: space-between;
        justify-items: center;
        height: 61px;

    }

    .drop_header #search #search_item {
        margin-top: 5px;
    }

    #search {
        position: relative;
        right: 341px;
    }

    #search #search_icon {
        background-color: #cc0000;
        color: white;
        padding: 15px 22px;
        margin-right: 25px;
        position: absolute;
        right: 18px;
        top: 6%;
    }

    .drop_header #danh_muc i {
        position: absolute;
        color: #fff;
        top: 20px !important;
        left: 40px !important;
        font-size: 24px;
        font-weight: 100;
    }
    </style>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Trang chu</title>
</head>

<body>
    <?php include '../pageHeader/header.php' ?>
    <div id="wraper" style="margin-top: 20px;">
        <div class="drop_header">
            <div id="danh_muc" style="position: relative; left: 35px;">
                <i class="fas fa-align-left"></i>
                <p> DANH MỤC</p>
            </div>
            <form action="" method="GET">
                <div id="search">
                    <input type="text" id="search_item" name="search" id="search" placeholder="Tìm Kiếm Sản Phẩm">
                    <div id="search_icon">
                        <a href="#"> <i class="fas fa-search"></i> </a>
                    </div>
                </div>
            </form>
        </div>
        <div class="prev_product">
            <div class="left">
                <ul class="product">
                    <li>
                        <i class="fal fa-tshirt"></i>
                        <a href=""> <span>TRANG PHỤC</span>
                        </a>
                        <i id="mui_ten1" class="far fa-chevron-right"></i>
                        <ul class="sub_trangphuc">
                            <li> <a href="../search/QuanAoDoiTuyen.php" target="_blank"><span>Quần áo Đội Tuyển
                                    </span></a></li>
                            <li> <a href="../search/QuanAoCLB.php" target="_blank"> <span>Quần áo CLB</span> </a></li>
                        </ul>
                    </li>
                    <li>
                        <!--    <img src="/main/img/shoes.png" alt="giày đá bóng" width="40px" height="auto"> -->
                        <img src="img/shoseSport.png" alt="">
                        <a id="shoes" href=""><span
                                style="color: #111; font-size: 15px; font-weight: 400px ; margin-left: 15px;">GIÀY</span>
                        </a>
                        <i id="mui_ten" class="far fa-chevron-right"></i>
                        <ul class="sub_trangphuc">
                            <li> <a href=""> <span>Giày Đá Bóng</span> </a></li>
                            <li> <a href=""> <span> Giày Thể Thao</span> </a></li>
                        </ul>
                    </li>
                    <li>
                        <i class="fal fa-backpack"></i>
                        <a id="balo" href=""><span>BALO</span></a>
                    </li>
                    <li>
                        <a id="other" href=""> <span> SẢN PHẨM KHÁC</span></a>
                    </li>
                </ul>
                <div class="info">
                    <div id="facebook">
                        <img src="img/ảnh me.jpg" alt="ảnh đại diện">
                        <i class="fab fa-facebook-square"></i>
                        <a href="https://www.facebook.com/tranvannguyen26032001">Nguyện Ken </a>
                    </div>
                    <div id="zalo">
                        <i class="fas fa-phone-square-alt"></i>
                        <a href="https://zalo.me/+84825871266">082 587 xxxx</a>
                    </div>
                    <div id="address">
                        <i class="fal fa-location-arrow"></i>
                        <a href="https://www.google.com/maps/place/Th%C3%B4n+Y%C3%AAn+M%E1%BB%B9+x%C3%A3+Li%C3%AAn+Minh+%C4%90%E1%BB%A9c+Th%E1%BB%8D+H%C3%A0+T%C4%A9nh/@18.5359047,105.6058617,17z/data=!3m1!4b1!4m5!3m4!1s0x3139c92aca736c17:0xa41e4f359ce1be83!8m2!3d18.5358996!4d105.6080504"
                            target="_blank">ĐỨC THỌ HÀ TĨNH</a>
                    </div>
                </div>
            </div>
            <div id="right">
                <div class="picture">
                    <div class="picture_items">
                        <div id="demo" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                <li data-target="#demo" data-slide-to="1"></li>
                                <li data-target="#demo" data-slide-to="2"></li>
                            </ul>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/ao_doi_tuyen1.jpg" alt="Los Angeles" width="1100px" height="500">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/ao_doi_tuyen2.jpg" alt="Chicago" width="1100px" height="500">
                                </div>
                                <div class="carousel-item" id="pictureLast">
                                    <img src="img/ao_doi_tuyen4.jpg" alt="New York" width="1100px" height="500">
                                </div>
                            </div>
                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="camket_sp">
                <div class="text">
                    <div id="text1">
                        <span> 100% sản phẩm chính hãng</span>
                    </div>
                    <div id="text2">
                        <span> Hỗ trợ đổi trả thoải mái</span>
                    </div>
                    <div id="text3">
                        <span> Uy Tín chất lượng </span>
                    </div>
                </div>
            </div>
        </div> <!-- div prev_ product -->
        <div class="marketing_title">
            <h3> Sản phẩm bán chạy</h3>
        </div>
        <div style="font-family: 'Abel', sans-serif;
        font-family: 'Dancing Script', cursive;
        font-family: 'Saira', sans-serif;
        font-family: 'Source Serif Pro', serif" class="">
            <!--  phần này để show các sản phẩm -->
            <!-- sản phẩm thứ 1 -->
            <?php
            $limit = 12;
            $page = 1;
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            }
            if ($page < 0) {
                $page = 1;
            }
            $firtIndex = ($page - 1) * 12;
            $content = '';
            if (isset($_GET['search'])) {
                $content = $_GET['search'];
            }
            $addcontent = '';
            if (!empty($content)) {
                $addcontent = ' tenHang like "%' . $content . '%" or donGia  BETWEEN "' . $content . '" and  "' . $content . '"+50000 ';
                $sql = " select * from sanpham where $addcontent  limit $firtIndex,$limit";
            } else
                $sql = " select * from sanpham limit $firtIndex,$limit";
            $result = executeResult($sql, true);
            $sql1 = "select count(id) as 'total'  from sanpham";
            $kq = executeResult($sql1);
            $count = ($kq[0]['total']); // số lượng sản phẩm 
            $pageNumber = ceil($count / $limit);
            if ($result != null) {
                foreach ($result as $item) {
                    echo '  
        <div class="product">
            <div class="product_top">
             <img src="' . $item['hinhAnh'] . '"  width="350px" height=" auto" class="product_image" > 
                <p class="sale">10%</p>
                <a href="../detail_product/detailProduct.php?id=' . $item['id'] . '" class="mua"> XEM NGAY</a>
            </div>
            <div class="product_bottom">
                <h3 class="title">' . $item['tenHang'] . '</h3>
                <div class="product_price">
                    <p class="price_root">' . number_format($item['donGia']) . 'đ</p>
                    <p style="color:red;" class="price_sale">' . number_format($item['donGia'] * 0.9) . 'đ</p>
                </div>
            </div>
        </div>';
                }
            }
            ?>
        </div>
    </div><!-- div by wraper -->
    <ul class="pagination  justify-content-center">
        <?php
        for ($i = 1; $i <= $pageNumber; $i++) {
            if ($page == $i) {
                echo ' <li class="page-item active"><a class="page-link" href="" >' . $i . '</a></li>';
            } else {
                echo ' <li class="page-item "><a class="page-link" href="?page=' . $i . '" >' . $i . '</a></li>';
            }
        }
        ?>
    </ul>
</body>
<?php include '../footer/footer.php' ?>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="main.js"></script>
<script src="slider.js"></script>

</html>