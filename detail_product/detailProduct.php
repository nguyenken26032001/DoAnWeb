<?php
session_start();
  require_once('../mySql_general/function_helper.php');
        if(!empty($_GET)){
            if(isset($_GET)){
                $id=$_GET['id'];
                $kq=get_memberProduct($id);
            }
        }
        if(isset($_SESSION['cart'])){
            $cart=$_SESSION['cart'];
          }
          else
          $cart=[];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="chiTietSanPham.css">
   <link rel="stylesheet" href="../header/phanHeader.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="../pageHeader/header.css">
    <link rel="stylesheet" href="../footer/footer.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title> SHOW CHI TIẾT SẢN PHẨM</title>
</head>
<style>
     .text p#title{
    position: absolute;
    font-size: 30px;
    color: #111;
    top: -12px;
    text-shadow: 2px 2px 2px #cc0000;
    font-family: 'Open Sans', sans-serif;
    margin-left: 9px;
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
    #gioHang{
        position: relative;
        top:-100px;
        right: -230px;
        width: 200px;
    }
        #gioHang i{
     position: absolute;
    top: 65px;
    left: 13px;
    color: #fff;
    font-size: 20px;
  
            }
    #carts{
    height: 50px;
    width: 200px;
    color: #fff;;
    background-color:#CD201F;
    border: 1px solid rgb(104, 101, 101);
    margin-top: 50px;
                }
#carts:hover{
    background-color: #f73c3c;
}
    .menu_icon #slsp{
    position: absolute;
    top: 8px;
    right:90px;
    background-color: #ec3d3d;
    border-radius: 50%;
    padding:3px;
    box-shadow: #f18286 0px 2px 2px 0px;
    color: white; 
    z-index: 1;
} 
.menu_icon #slsp span{
    color: white;
    font-size: 15px;
}
#dialog{
    position: absolute;
    top:250px;
    width: 320px;
    height: 130px;
    background: transparent; /* transparen màu trong suốt */
    background: rgba(0,0,0,0.8); 
    border-radius: 2px;
    display: none;
   
}
#dialog i{
    position: absolute;
    top: 20px;
    left: 132px;
    font-size: 40px;
  color: aqua;
  
 
}
#dialog p{
 position: absolute;
 top: 50px;
 left: 10px;
color: #fff;}

.content_bottom #title {
    position: absolute;
    top: 16px;
    left: -475px;
    margin-bottom: 5px;
    font-size: 20px;
    color: rgb(240, 238, 238);
}
.footer #address a{
    color: rgb(185, 184, 184);
    font-size: 20px;
    text-decoration: none;
    position: absolute;
    top: 8px;
    right: 10px;
    margin-left: 0px;
}
.container{
    margin-top: 120px;
    margin-bottom: 300px;
}
</style>
<body >
<div class="container">
   <?php  include '../pageHeader/header.php'?>
<!-- phần hiển thị hình ảnh -->
    <div class="pricture_detail">
        <img src="<?php echo $kq['hinhAnh'] ?>" alt="ảnh áo đá bóng" width="450px" height="auto">
        <p id="sale"> 10%</p>
    </div>
    <div class="content">
        <p id="title"> <?php echo $kq['tenHang'] ?></p>

        <div class="price">
                <p id="pirce_root"> <?php echo number_format( $kq['donGia']) ?> đ</p>
                 <p id="pirce_sale">  <?php echo number_format( $kq['donGia']*0.9 )?>đ</p>
        </div>
        <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">MÔ TẢ :</p>
        <div class="mo_ta">
            <p> <?php echo  $kq['moTa'] ?> </p>
        </div>
        <div class="choose">
            <div class="slsp">
                <p>Số Lượng:</p>
    <form action="../thanhtoan/thanhtoan.php" method="POST" name="frm_detailProduct" onsubmit=" return checkInformation()">
                <div class="block">
                    <input type="number" id="quantity"  name="quantity"  value="1"  min="1">
                    <input type="hidden" id="sltk" name="sltk" value="<?php echo $kq['soLuong']?>"> 
                    <input type="hidden" id="productName" name="productName" value="<?php echo $kq['tenHang']?>"> 
                    <input type="hidden" id="price" name="price" value="<?php echo $kq['donGia']?>"> 
                    <input type="hidden" id="thumbnail" name="thumbnail" value="<?php echo $kq['hinhAnh']?>"> 
                    <input type="hidden" id="thumbnail" name="id" value="<?php echo $kq['id']?>"> 
                </div>
            </div>
            <div id="form_size" > 
                <label >Kích cỡ:</label>
                <select id="size" name="size">
                <option value="S" selected>S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL" >XL</option>
                </select>
            </div>
            <div id= "status">
                <p>Trạng thái:</p>
                <p id="name_status">còn hàng</p>
            </div>
        </div>
        <!-- <div class="buy_or_cart">   -->
            <a href="../thanhtoan/thanhtoan.php">
                <button id="buy" name="buy" style="background-color: #f14725; border: none;">Mua Ngay </button>
                </a>
            </form>
          <form action="../cart/cart.php" name="addToCart" id="addToCart" method="POST" onsubmit=" return checkCart()">
            <div id="dialog">
                <i class="fal fa-check-circle"></i>
                    <p>Sản Phẩm đã được thêm vào giỏ hàng </p>
                </div>
            <div id="gioHang">
                    <input type="hidden" id="thumbnail" name="id" value="<?php echo $kq['id']?>"> 
                    <input type="hidden" id="sltk" name="sltk" value="<?php echo $kq['soLuong']?>">
                    <input type="hidden" id="numInCart" name="numInCart" value="<?php 
                    if(isset($_SESSION['cart'])){
                       echo $cart[$id]['num'];
                    }
                    else
                    echo 0;
                    ?>">          
               <!--  <a href="../cart/cart.php"> -->
            <i class="fal fa-shopping-cart"></i>
            <button type="submit" id="carts" name="cart" style="background-color: #28a745; border: none; cursor: pointer;"> Thêm vào giỏ hàng</button>
          <!--   </a> -->
            </div>
            </form>
      <!--   </div> -->  
    </div>
</div> 
</body>
<?php  include '../footer/footer.php'?>
<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
<script src="../pageHeader/header.js"></script>
<script src="../detail_product/detail.js"></script>
<script>
    function checkInformation(){
        var slht;
        var sltk;
        if (slht == null)
        {
        slht = document.frm_detailProduct.quantity.value;
        sltk = document.frm_detailProduct.sltk.value;
        
    if (parseInt(sltk)<parseInt(slht))
     { 
       alert(" Vui Lòng nhập số lượng hàng ít hơn "+sltk +" sản phẩm !!!");
        return false;
    }
    }
    return true;
       
       
    }
    function checkCart(){
        var sltk;
        var soLuongTrongCart;
        if(sltk == null){
            sltk = document.addToCart.sltk.value;
            soLuongTrongCart=document.addToCart.numInCart.value;
       
        if(parseInt(soLuongTrongCart) >= parseInt(sltk)){
            alert(" Số Lương trong kho không đủ để thêm vào giỏ hàng!!!");
            return false;
        }
    }
    else
    {
        return true;
    }
}
        $(function(){
            $("#carts").click(function() {
                var sltk;
                var soLuongTrongCart;
                document.getElementById("dialog").style.display = 'block';
                setTimeout(function() {
                    $('#dialog').fadeOut('5000');
                    }, 20000);
                //  $("#dialog").delay(10000).hide(500);
        if(sltk == null){
            sltk = document.addToCart.sltk.value;
            soLuongTrongCart=document.addToCart.numInCart.value;
        if(parseInt(soLuongTrongCart) >= parseInt(sltk)){
            document.getElementById("dialog").style.display = 'none';
        }
    }
        });
        });
</script>
</html>