<?php 
    session_start();

    if(isset($_SESSION['user'])){
        echo 'thong tin khach hang: ' .$_SESSION['user'][0] .'<br>';
        echo 'thong tin mk: ' .$_SESSION['user'][1] .'<br>';
        echo ' quay lai trang login   <a href="delete.php">Click</a>';
    }else  echo ' quay lai trang login   <a href="">Click</a>';

?>