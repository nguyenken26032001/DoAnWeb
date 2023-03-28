<?php
require_once("../mySql_general/function_helper.php");
if(isset($_POST)){
    $maHd=$_POST['maHd'];
    $mahoadon=$_POST['mahoadon'];
$sql="UPDATE donhang set trangThai='Đang giao' where idHd=$maHd";
execute($sql);
$sql1="UPDATE donhang set trangThai='Đã lấy hàng' where idHd=$mahoadon";
execute($sql1);
$sql2="insert into donhangdaban  select * from donhang where trangThai='Đã lấy hàng'";
execute($sql2);
$sql3= "DELETE from donhang where idHd=$mahoadon";
execute($sql3);


}

?>

