<?php 
    session_start();
 
    header('location:viewcart.php');
    deleteCart();
    function deleteCart(){
        unset($_SESSION['cart']);
    }

?>