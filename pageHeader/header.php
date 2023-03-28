<?php
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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="header.css">
    <title></title>
    <style>
        
#cart{
    position: relative;
    top:28px;
    left: 643px;
}

.menu_icon #account {
    position: absolute;
    right: 138px;
    top: 20px;
    font-size: 20px;
    cursor: pointer;
}
    </style>
</head>
<body>
<div class="header">
             <div class="container_menu">
          <div class="logo">
              <div class="img">
                  <a href="" id="picture"> <img src="../main/img/logo.png" alt="picture_logo" width="90px" height="auto" ></a>
              </div>
              <div class="text">
                  <p id="title"> KENSPORT </p>
              </div>
          </div>
          <nav>
            <ul id="menu_main">
                <li>
                   <i  id="home" class="fad fa-home-lg"></i>
                    <a href="../main/main.php">HOME</a>
               </li>
                <li>
                  
                   <i  id="store"  class="far fa-store-alt"></i>
                    <a href="../main/main.php">SHOP</a>
                   </li>
                <li>
                  
                   <i  id="phone" class="fal fa-phone"></i>
                    <a href="../DichVuKhachHang/contact.php">CONTACT</a>
                   </li>
                <li>
                   <i id="user" class="far fa-user"></i>
                    <a href="../login/login.php">LOGIN</a>
                </li>
            </ul>
            <div class="menu_icon">
                <div id="account">
                  <?php 
                  $user='';
                  if(isset($_SESSION['taikhoan'])){
                    $user=$_SESSION['taikhoan'];
                    echo  $user['user'];// lấy tên tài khoản người dùng làm tên vào hệ thống
                  }
                  else
                  {
                      echo '  <i style="  position: absolute;
                      right: 5px;
                      top: 4px;
                      font-size: 27px;
                      cursor: pointer;" class="far fa-user-circle"></i>';
                  }
                  ?>
                   <div  id="content">
                       <?php
                            $user='';
                        if(isset($_SESSION['taikhoan'])){
                            $user=$_SESSION['taikhoan'];
                            if($user['user']=="Admin"){
                            echo '<div id="admin" style="  position: absolute; top: 10px; left: 10px;  padding: 0px ; ">
                            <a href="../admin"  target="_blank"  style="color: #111;"> Trang Quản trị</a>
                        </div>';
                            }
                  }
                       ?>
                         <div id=check_don_hang>
                                <a href="../UserCheckCart/CheckCart.php"  > Check đơn hàng</a>
                            </div>
                      <a href="../dangxuat/logout.php">   <button id="log_out"> ĐĂNG XUẤT</button></a>
                   </div>
             </div>
<?php
$total=0;
foreach($cart as $item){
    $total+=$item['num'];
}
?>             
             <div id= "slsp">
                <span><?php echo $total ?></span>
            </div>
            <a href="../cart/viewCart.php"><div id="cart">  <img src="../main/img/cart_pricture1.png" alt=""></i></div></a>
            </div>
        </nav>
      </div><!-- div by container_menu -->
    </div><!-- div by header -->
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
<script src="header.js"></script>
</html>