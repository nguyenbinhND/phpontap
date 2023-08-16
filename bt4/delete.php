<?php 
    session_start();
    header('location: dangnhap.php');
    function delete(){
        unset($_SESSION['user']);
    }
?>