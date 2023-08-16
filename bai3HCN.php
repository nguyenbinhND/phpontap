
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script>
 function check() {
    var name = document.querySelector(".name");
      if (name.value == '') {
        alert(" chua nhap ten");
        name.focus();
        return false;
      } else if (Number(name.value)) {
        alert(" ten chua ky tu");
        name.focus();
        return false;
      }
      return true;
    }

</script>
<body>
    <form action="" method="POST">
        <input type="text" name="name" class="name" placeholder="nhap ten">
        <input type="text" name="a" class="canha" placeholder="nhap canh a: ">
        <input type="text" name="b" class="canhb" placeholder="nhap canh b:">
        <input type="submit" name="submit" value="submit" onclick="return check()" >
    </form>

    
<?php
   
    if(isset($_POST['submit'])){
    // lay du lieu
        $name = $_POST['name'];
        $a = $_POST['a'];
        $b = $_POST['b'];
        // $kq ='';
    // xu ly du lieu 
    if( $a ===   $b){
        $kq = " hinh vuong";
    }else   $kq = " hinh chu nhat";
   

    // out put
        $wel =  '<div class="">
        <p>Ho va ten : '. $name.'</p>
        <p>canh a : '.$a.'</p>
        <p>canh b : '.$b.'</p>
        <p>ket luan:'.$kq.'</p>
      </div>';

        echo  $wel;
    }
?>

</body>
</html>