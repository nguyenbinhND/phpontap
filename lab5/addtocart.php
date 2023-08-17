<?php  
// tao bien global phia client:
    session_start();
    $tensp =$_POST['tensp'];

    if(!isset( $_SESSION['cart']) ){
        $_SESSION['cart'] =array();
    }
    if(isset($_POST['cart'])){
        // lay gia tri
        $img =$_POST['img'];
        $tensp =$_POST['tensp'];
        $gia =$_POST['gia'];
        $id =$_POST['id'];
        $sl =1;
        $fg = 0;

        // them so luong san pham
        $i = 0;
        if($_SESSION['cart'] && count($_SESSION['cart']) > 0){
           foreach ($_SESSION['cart']as $sp) {
           if($sp[0] === $id) {
            $sl += $sp[4];
            $fg = 1;
        // cap nhat so luong vao gio hang
         $_SESSION['cart'][$i][4] =$sl;
         break;
           }
           $i++;
           }
        }

        if( $fg == 0){
               // tao mang con 
        $sp = array( $id ,$img, $tensp, $gia,$sl);
        // luu gia tri client:
        array_push( $_SESSION['cart'],$sp ) ;
        }
     
        header('location:viewcart.php');
    }


?>