<?php 
    //  khai bao bien client
    session_start();

    // echo var_dump ($_SESSION['cart']);
    // echo var_dump ($_SESSION['cart'][0]);
    // echo '<br> quay lai trang dat hang   <a href="sanpham.php">Click</a>';
    if(isset($_SESSION['cart'])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

td:nth-child(2) {
  width: 15%;
}
table{
  width: 80%;
}
.container{
  width: 100%;
  margin-left: 10%;
}

a{
  font-size: 20px;
}

.link{
  display: flex;
  width: 100%;
  column-gap: 20px;
  margin-top: 20px;
  justify-content: center;
}

.link a{
  padding: 10px;
  background-color: blue;
  color: white;
text-decoration: none;
border-radius: 4px;
}
</style>
</head>

<body>
    
<div class="container" >
  <h1>Danh Sách Đơn Hàng</h1>
<table>
  <tr>
    <th>stt</th>
    <th>Hinh</th>
    <th>Tên sản phẩm</th>
    <th>Đơn giá</th>
    <th>Số lượng</th>
    <th>Thành tiền</th>
    <th> Xóa</th>
  </tr>

  <?php 
     $i=0;
    foreach ($_SESSION['cart'] as $sp ) {
        echo '<tr>
        <td>'.($i).'</td>
        <td>  <img src= '.$sp[1].' style="width:100%"> </td>
        <td>'.$sp[2].'</td>
        <td>'.$sp[3].'</td>
        <td>'.$sp[4].'</td>
        <td>'.$sp[4] * $sp[3].'</td>
       <td> <a href="deletecart.php?id='.$i.'">X</a></td>
      </tr>'; 
      $i++;
    }
  ?>
</table>
</div>
<div class='link'><a href="sanpham.php" >đặt hàng</a>
<a href="deletecart.php">xóa giỏ hàng</a></div>

</body>
</html>

<?php 
}else  echo 'hàng rỗng quay lai trang dat hang   <a href="sanpham.php">Click</a>';
?>
