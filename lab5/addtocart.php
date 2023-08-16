<?php  
// tao bien global phia client:
    session_start();
    $tensp =$_POST['tensp'];
    echo  $tensp ;
    if(isset($_POST['cart'])){

        // lay gia tri
        $img =$_POST['img'];
        $tensp =$_POST['tensp'];
        $gia =$_POST['gia'];
        $id =$_POST['id'];
        $sl =2;
        // tao mang con 
        $sp = array( $id ,$img, $tensp, $gia,$sl);
        // luu gia tri client:

        if(!isset( $_SESSION['cart']) ){
            $_SESSION['cart'] =array();
        }
        array_push( $_SESSION['cart'],$sp ) ;
        header('location:viewcart.php');
    }


?>