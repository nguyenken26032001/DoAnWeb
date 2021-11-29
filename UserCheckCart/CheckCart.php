<?php
session_start();
require_once('../mySql_general/function_helper.php');
require_once('../mySql_general/config_DB.php');
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
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Dancing+Script:wght@600&family=Saira:ital,wght@1,700&family=Source+Serif+Pro:ital,wght@1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../pageHeader/header.css">
    <title>CHECK CART FOR USER</title>
</head>
<style>
         #menu_main li a:hover{
    border-bottom: 4px solid rgb(235, 77, 77);
    transition: 0.25s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    width: 70%;
    color: #CD201F;
        }
        .text p#title {
    position: absolute;
    font-size: 30px;
    color: #111;
    top: 13px;
    text-shadow: 2px 2px 2px #cc0000;
    font-family: 'Open Sans', sans-serif;
    margin-left: 9px;
}
#cart img{
    position: absolute;
    right: -19px;
    top: -4px;
}
#content #check_don_hang a{
    margin-left: 5px;
    font-size: 21px;
        } 
</style>
<body>
 <?php include '../pageHeader/header.php';?>
<div class="panel-body"  style="margin-top: 200px;">
                        <form action="" method="get">
                            <div class="form-group" style="margin-left: 20px;">
                            <label for=""> <strong style="font-size: 23px;"> Kiểm tra đơn hàng </strong> </label>
                                <input type="text" name="checkDonHang" class="form-control"style="width: 300px; "placeholder="Searching........... input PhoneNumber">
                            </div>
                        </form>
                        <div id="wraper">
                          <table class=" table table-bordered table-hover">
                            <thead>
                          <tr>
                                <th width=20px> STT</th>
                                <th width=150px style="text-align: center;">MÃ HĐ</th>
                                <th width=150px style="text-align: center;"> TÊN KHÁCH HÀNG</th>
                                <th width=200px style="text-align: center;"> ĐỊA CHỈ</th>
                                <th width=200px style="text-align: center;"> SỐ ĐIỆN THOẠI</th>
                                <th width=200px style="text-align: center;"> SẢN PHẨM MUA </th>
                                <th width=30px style="text-align: center;"> SL</th>
                                <th width=50px style="text-align: center;">  SIZE</th>
                                <th width=40px style="text-align: center;"> GIÁ </th>
                                <th width=200px style="text-align: center;"> THÀNH TIỀN </th>
                                <th width=60px style="text-align: center;"> NGÀY ĐẶT HÀNG</th>
                                 <th width=60px style="text-align: center;"> TRẠNG THÁI</th>
                                   </tr>
                              </thead>
                              <tbody>
                              <?php
                            /* $user='';
                            if(isset($_SESSION['taikhoan']))
                            {
                                $user=$_SESSION['taikhoan'];
                                $phone=$user['phone'];
                                $sql=mysqli_query($conn,"select * from hoadon where  phoneNumber=$phone");
                                if($sql){
                                    $data=mysqli_fetch_assoc($sql);
                             if($data!=null)   {
                                $maHd=$data['maHd'];
                                $sql= "SELECT donhang.id,hoadon.maHd,hoadon.userName,hoadon.address, hoadon.phoneNumber, donhang.maHang maHang,donhang.slMua sl ,donhang.donGia gia , donhang.size size , donhang.tenHang tenHang, donhang.ngayDatHang ngayDat,donhang.trangThai trangThai  
                                from hoadon,donhang where hoadon.maHd=donhang.idHd and donhang.idHd=$maHd and hoadon.phoneNumber=$phone";
                            $kq=executeResult($sql);
                             var_dump($kq);
                            die();
                        $index=0;
                        foreach($kq as $item){
                        echo '<tr>
                        <td>'.(++$index).'</td>
                        <td style="text-align:center;">'.$item['id'].'</td>
                        <td style="text-align:center;">'.$item['userName'].'</td>
                        <td style="text-align:center;"> '.$item['address'].'</td>
                        <td style="text-align:center;"> '.$item['phoneNumber'].'</td>
                        <td style="text-align:center;"> '.$item['tenHang'].'</td> 
                        <td style="text-align:center;"> '.$item['sl'].'</td> 
                        <td style="text-align:center;"> '.$item['size'].'</td> 
                        <td style="text-align:center;"> '.number_format($item['gia']).'</td> 
                        <td style="text-align:center;"> '.number_format($item['sl']*$item['gia']).'</td>
                        <td> '.date("d/m/Y  H:i:s", strtotime($item['ngayDat'])).'</td>
                        <td style="text-align:center;"> '.$item['trangThai'].'</td>
                        </tr> ';
                    }
                }
            }
          } */
                            $phoneNumber='';
                            if(isset($_GET['checkDonHang']))
                            {
                                $phoneNumber=$_GET['checkDonHang'];
                            $sql=mysqli_query($conn,"select * from hoadon where  phoneNumber=$phoneNumber");
                            if($sql){
                                $data=mysqli_fetch_assoc($sql);
                            }
                            if(!empty($data)){
                                $maHd=$data['maHd'];
                            if(!empty($phoneNumber)){
                                $sql= "SELECT donhang.id,hoadon.maHd,hoadon.userName,hoadon.address, hoadon.phoneNumber, donhang.maHang maHang,donhang.slMua sl ,donhang.donGia gia , donhang.size size , donhang.tenHang tenHang, donhang.ngayDatHang ngayDat,donhang.trangThai trangThai  
                                from hoadon,donhang where  hoadon.maHd=donhang.idHd and hoadon.phoneNumber=$phoneNumber  group by hoadon.maHd";
                                $kq=executeResult($sql);
                               $mahoadon= $kq[0]['maHd'];
                             echo '   <button class="btn btn-outline-danger"  style="float: right; margin-right: 20px; margin-bottom: 20px;" onclick="deleteDonHang('.$mahoadon.')"> HỦY ĐƠN HÀNG</button>';
                             $sql1= "SELECT donhang.id,hoadon.userName,hoadon.address, hoadon.phoneNumber, donhang.maHang maHang,donhang.slMua sl ,donhang.donGia gia , donhang.size size , donhang.tenHang tenHang, donhang.ngayDatHang ngayDat,donhang.trangThai trangThai  
                             from hoadon,donhang where hoadon.maHd=donhang.idHd and donhang.idHd=$maHd and hoadon.phoneNumber=$phoneNumber";
                                  $kq2=executeResult($sql1);
                        $index=0;
                         foreach($kq2 as $item){
                        echo '<tr>
                        <td>'.(++$index).'</td>
                        <td style="text-align:center;">'.$item['id'].'</td>
                        <td style="text-align:center;">'.$item['userName'].'</td>
                        <td style="text-align:center;"> '.$item['address'].'</td>
                        <td style="text-align:center;"> '.$item['phoneNumber'].'</td>
                        <td style="text-align:center;"> '.$item['tenHang'].'</td> 
                        <td style="text-align:center;"> '.$item['sl'].'</td> 
                        <td style="text-align:center;"> '.$item['size'].'</td> 
                        <td style="text-align:center;"> '.number_format($item['gia']).'</td> 
                        <td style="text-align:center;"> '.number_format($item['sl']*$item['gia']).'</td>
                        <td> '.date("d/m/Y  H:i:s", strtotime($item['ngayDat'])).'</td>
                        <td style="text-align:center;"> '.$item['trangThai'].'</td>
                        </tr> ';
                    }
                         }                       
                }             
                else
                echo '<div class="alert alert-success alert-dismissible fade show" style="width: 500px; margin: 0 auto; margin-top:70px; position: absolute; left: 420px;  top:20px;  z-index: 10;" >
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>THÔNG BÁO!</strong> </br>Bạn Không có đơn hàng cho số điện thoại này vui lòng kiểm tra lại.
              </div>';                            
          }                          
                    ?>
                  </tbody>
                    </table>
                    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
<script src="../pageHeader/header.js"> </script>
<script>
function deleteDonHang(maHd){
    var option= confirm("Bạn có chắc chắn muốn xóa đơn hàng này không ?? ")
    if(!option)
    return;
    else
    $.post('../admin/deleteDonHang.php',{

        'maHd':maHd
    },function(data){
        location.reload();
    })
}
</script>
</html>