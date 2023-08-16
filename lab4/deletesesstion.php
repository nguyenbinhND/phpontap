<?php 
session_start();
unsetSession();
header('location: login.php');
function unsetSession(){
    unset($_SESSION['user']);
}

?>