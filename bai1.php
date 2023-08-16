
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
        <input type="text" name="age" class="age" placeholder="nhap tuoi">
        <input type="submit" name="submit" value="submit" onclick="return check()" >
    </form>
<?php
    // $total = 100000;
    // $wel = '<header>
    // <h1>hello php basic</h1>
    // <h2>'.number_format($total).'</h2>
    // </header>';
    // echo $wel
   
 
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $wel = '<header>
        <h1>hello php basic</h1>
        <h2>'.$name.' - '. $age.'</h2>
        </header>';

        echo  $wel;
    }
?>

</body>
</html>