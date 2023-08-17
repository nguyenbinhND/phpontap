<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3 row col">
<div class="container mt-3">
  <div class="card" style="width:400px">
  <form action="addtocart.php" method="post">
     <img class="card-img-top" src="https://images.unsplash.com/photo-1626379625260-7111605463e8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Card image" style="width:100%">
     <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Gia
        <span>17.000</span>
      </p>
    <input  type='hidden' name='img' value="https://images.unsplash.com/photo-1626379625260-7111605463e8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80"> 
    <input  type='hidden' name='tensp' value="John Doe"> 
      <input  type='hidden' name='gia' value="17000"> 
      <input  type='hidden' name='id' value="1"> 
      <input  name='cart' type='submit' class="btn btn-primary" value='dat hang'>
    </div>
    </form>
  </div>
  <br>
</div>

<div class="container mt-3">
  <div class="card" style="width:400px">
  <form action="addtocart.php" method="post">
     <img class="card-img-top" src="https://plus.unsplash.com/premium_photo-1669644856868-6613f6683346?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1032&q=80" alt="Card image" style="width:100%">
     <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Gia
        <span>17.000</span>
      </p>
    <input  type='hidden' name='img' value="https://plus.unsplash.com/premium_photo-1669644856868-6613f6683346?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1032&q=80"> 
    <input  type='hidden' name='tensp' value="John Doe"> 
      <input  type='hidden' name='gia' value="17000"> 
      <input  type='hidden' name='id' value="2"> 
      <input  type='submit' name='cart' class="btn btn-primary" value='dat hang'>
    </div>
    </form>
  </div>
  <br>
</div>
</div>
</body>
</html>
