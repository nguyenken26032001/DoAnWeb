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
    <link rel="stylesheet" href="../pageHeader/header.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <link rel="stylesheet" href="../main/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Dancing+Script:wght@600&family=Saira:ital,wght@1,700&family=Source+Serif+Pro:ital,wght@1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <title>QUẦN ÁO ĐỘI TUYỂN</title>
</head>
<style>
    .text p#title{
        position: absolute;
        top: -12px;
    }
    .menu_icon #slsp span{
    color: white;
    font-size: 16px;
}
.menu_icon #slsp{
    position: absolute;
    top: 8px;
    padding: 4px;
}
#menu_main li a:hover{
    border-bottom: 4px solid rgb(235, 77, 77);
    transition: 0.25s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    width: 30%;
    color: #CD201F;

} 
#cart {
    position: absolute !important;
    top: 23px !important;
    right: 93px !important;
}
#content #check_don_hang a{
    margin-left: 14px;
    font-size: 21px;
}
h3{
    font-size: 29px;
   
}
.footer #address a{
    color: rgb(185, 184, 184);
    font-size: 20px;
    text-decoration: none;
    position: absolute;
    top: 8px;
    right: 19px;
    margin-left: 0px;
}
</style>
<body >
    <?php  include '../pageHeader/header.php'?>
    <H3 style="text-align: center; margin-top: 120px; font-family: 'Abel', sans-serif;
        font-family: 'Dancing Script', cursive;
        font-family: 'Saira', sans-serif;
        font-family: 'Source Serif Pro', serif">TRANG QUẦN ÁO CLB  </H3>


<div style="font-family: 'Abel', sans-serif;
        font-family: 'Dancing Script', cursive;
        font-family: 'Saira', sans-serif;
        font-family: 'Source Serif Pro', serif; margin-top: 300px;" class="products">      <!--  phần này để show các sản phẩm -->
         <!-- sản phẩm thứ 1 -->
        <?php
       
          $sql=" select * from sanpham where maNhom=2";
          $result=executeResult($sql ,true);
        if($result!=null){
              
      
        foreach($result as $item)
        {
            echo '  
                    <div class="product">
                   
            <div class="product_top">
             <img src="'.$item['hinhAnh'].'"  width="350px" height=" auto" class="product_image" > 
                <p class="sale">10%</p>
                <a href="../detail_product/detailProduct.php?id='.$item['id'].'" class="mua"> XEM NGAY</a>
            </div>
           
            <div class="product_bottom">
                <h3 class="title">'.$item['tenHang'].'</h3>
                <div class="product_price">
                    <p class="price_root">'.number_format($item['donGia']).'đ</p>
                    <p style="color:red;" class="price_sale">'.number_format($item['donGia']*0.9).'đ</p>
                </div>
            </div>
        </div>';
        }
    }
        ?>
       
  
    </div>
    
</body>
<?php  include '../footer/footer.php'?>
<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
<script src="../pageHeader/header.js"></script>
</html>