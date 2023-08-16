<?php
session_start();
if(isset($_POST['submit'])){
    // lay du lieu
    $name = $_POST['name'];
    $password = $_POST['password'];
    $objeuser =array($name, $password);
    $_SESSION['user'] = $objeuser;
    header('location: logined.php');
}


?>

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
        <input type="text" name='name' placeholder='nhap name'>   
        <input type="password" name='password' placeholder='nhap password'>   
        <input type="submit" name='submit' value="submit" >
    </form>
</body>
</html>