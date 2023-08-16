<?php

session_start();
if(isset( $_SESSION['user'])){
    echo "Ten dang nhap :" . $_SESSION['user'][0] ."<br>";
    echo "Password dang nhap :". $_SESSION['user'][1] ."<br>";
    echo ' quay lai trang login   <a href="deletesesstion.php">Click</a>';
    
}else   echo ' quay lai trang login   <a href="deletesesstion.php">Click</a>';

 
?>