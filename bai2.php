<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="a" placeholder="nhap gia tri a">
        <input type="text" name="b" placeholder="nhap gia tri b">
        <input type="submit" name="submit" value="submit">
    </form>
  
    <?php
    if(isset($_POST['submit']) && $_POST['submit'] && $_POST['a'] && $_POST['b']){
        // lay du lieu
        $a = $_POST['a'];
        $b = $_POST['b'];
        // xu ly
        $pt = $a.'X + ' . $b .'= 0' ;
        if($b == 0) $nghiem = "pt vo nghiem" ;
        else $nghiem = "pt co nghiem :" .-$b/$a;
        //output
        $kq = '
        <div>
        <h2>Ket qua phuong trinh</h2>
        <div>
            <span>phuong trinh da nhap : '.$pt.'</span>
        </div>
        <div><span>ket qua phuong trinh :'.$nghiem.'</span></div>
    </div>
        ';

        // hien thi
        echo $kq;
    }
    ?>
</body>
</html>