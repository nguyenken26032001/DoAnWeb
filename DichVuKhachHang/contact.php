<?php
session_start();
include '../pageHeader/header.php';

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>thông tin liên hệ</title>
</head>
<style>
    #menu_main li a:hover{
    border-bottom: 4px solid rgb(235, 77, 77);
    transition: 0.25s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    width: 70%;
    color: #CD201F;

} 
#cart {
    position: absolute !important;
    top: 20px !important;
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
.menu_icon #account {
    position: absolute;
    right: 138px;
    top: 20px;
    font-size: 20px;
    cursor: pointer;
}
#content #check_don_hang a {
    margin-left: 4px;
    font-size: 20px;
}
</style>
<body style="margin-top: 80px;  background-image: url('https://minhhaisport.vn/wp-content/themes/metro/assets/img/banner.jpg');">
<div class="row">
    <div class="col-md-6">
    <h2 style="margin-left: 100px;">Thông tin liên hệ</h3>
    <h3>số điện thoại: 0825871266</h4>
  <div class="row">
  <h3>facebook: </h4>
    <a href="https://www.facebook.com/tranvannguyen26032001" style="margin-top: 8px;">https://www.facebook.com/tranvannguyen26032001 </a>
  </div>
    </div>
    <div class="col-md-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.8450129219405!2d105.60586171439799!3d18.535904673544007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139c92aca736c17%3A0xa41e4f359ce1be83!2zVGjDtG4gWcOqbiBN4bu5IHjDoyBMacOqbiBNaW5oIMSQ4bupYyBUaOG7jSBIw6AgVMSpbmg!5e0!3m2!1svi!2s!4v1635411346465!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>


</body>
<?php include '../footer/footer.php'?>
<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
<script src="../pageHeader/header.js"></script>
</html>