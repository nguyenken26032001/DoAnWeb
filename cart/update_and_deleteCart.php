<?php
session_start();
require_once('../mySql_general/function_helper.php');
// if(isset($_SESSION['cart'])){
//     $cart=$_SESSION['cart'];
//   }
  $cart=(isset($_SESSION['cart']))?$_SESSION['cart']:$cart=[];

     if(!empty($_POST)){
         $id=$_POST['id'];
         $action=$_POST['action'];
        //  $quantity=(isset($_POST['quantity']))? $_POST['quantity']:1;
        //  $size=(isset($_POST['size']))? $_POST['size']:'S';
        $quantity=$_POST['quantity'];
        $size=$_POST['size'];
      
        //  var_dump($_POST);
         
        //  echo"<pre>";
        //  print_r($_SESSION['cart']);
        //  echo "</pre>";
        //  die();
     }

   
    if($action =='delete'){
      unset($_SESSION['cart'][$id]);
      
    }
    /*  if($action == 'update'){
      $_SESSION['cart'][$id]['num']=$quantity;
      $_SESSION['cart'][$id]['size']=$size;
           // $cart[$id]['num']=$quantity;
            // $cart[$id]['size']=$size;
            
            // echo"<pre>";
            // print_r($_SESSION['cart']);
            // echo "</pre>";
          header("location: viewCart.php");
    } */
    ?>