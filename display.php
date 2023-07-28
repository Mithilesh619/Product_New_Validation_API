<div align="right" style="margin-top: 15px;margin-right: 15px;">
<a href="logout.php"><input type="button" class="btn btn-primary" value="Logout"></a>
</div>
<!-- 
<a href="logout.php"><button type="button" class="btn btn-primary">LOGOUT</button></a>
 -->
<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Product ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">SKU</th>
      <th scope="col">Product_image</th>
      <th scope="col">Size</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Stock</th>
      <!-- <th scope="col">Operation</th> -->
    </tr> 
  </thead>
  <tbody>
  <?php

  $sql="select * from user_product";
  $result=mysqli_query($con,$sql);
  if($result){
    $sr=0;
    while($row=mysqli_fetch_assoc($result)){
      $sr=$sr+1;
      $product_id=$row['product_id'];
      $product_name=$row['product_name'];
      $sku=$row['sku'];
      $product_image=$row['product_img'];
      $size=$row['size'];
      $price=$row['price'];
      $quantity=$row['quantity'];
      $stock=$row['stock'];
      echo '<tr>
      <th scope="row">'.$sr.'</th>
      <td>'.$product_name.'</td>
      <td>'.$sku.'</td>
      <td><img src="image/'.$product_image.'" height="50px" width="50px"></td>
      <td>'.$size.'</td>
      <td>'.$price.'</td>
      <td>'.$row['quantity'].'</td>

      <td>'.$stock.'</td>
      <td>
      <a  href="update.php?updateid='.$product_id.'" class="text-light"><button class="btn btn-primary">Update</button></a>
      <a  href="delete.php?deleteid='.$product_id.'" class="text-light"><button class="btn btn-danger">Delete</button></a>
      </td>

      </tr>';
    }

  }

  ?>
  
</tbody>
</table>
</div>
</body>
</html>