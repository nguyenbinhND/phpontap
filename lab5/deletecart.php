<?php 
    session_start();
 
    if(isset($_GET['id'])){
        array_splice($_SESSION['cart'],$_GET['id'],1);
        header('location:viewcart.php');

    }else{
        deleteCart();
    }
    function deleteCart(){
        unset($_SESSION['cart']);
        header('location:sanpham.php');

    }

?>