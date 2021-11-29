<?php
require_once("../mySql_general/function_helper.php");
if(isset($_POST)){
    $maHd=$_POST['maHd'];
$sql="UPDATE donhang set trangThai='Đang giao' where idHd=$maHd";
execute($sql);
}

?>

