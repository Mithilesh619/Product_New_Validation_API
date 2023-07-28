<?php
session_start();

//print_r($_SESSION);


//error_reporting(0);
include 'connect.php';
//print_r($_POST);
//if(isset($_FILES)){
if(!empty($_FILES)){
  $product_name=$_POST['name'];
  $sku=$_POST['sku'];
  $product_image=$_FILES['product_image']['name'];
  //print_r($product_image);
  $tmp_name=$_FILES['product_image']['tmp_name'];
  $path="image/".$product_image;
  move_uploaded_file($tmp_name,$path);
  $size=$_POST['size'];
  $price=$_POST['price'];
  //print_r($price);
  $price_new=implode(",",$price);
  //print_r($price_new);
  $quantity=$_POST['quantity'];
  $stock=$_POST['stock'];

  $sql="insert into user_product (product_name,sku,product_img,size,price,quantity,stock)
  values('$product_name','$sku','$product_image','$size','$price_new','$quantity','$stock')";
  $result=mysqli_query($con,$sql);
  if($result)
  {
    //echo "Data inserted Successfully.";
    header('location:display.php');
  }
  else
  {
    die(mysqli_error($con));
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<h1><?php echo "Welcome     ".$_SESSION['name']; ?></h1>
  <body>
    <div class="container my-3">
  <form method="post" enctype="multipart/form-data">
  <h5>Product_Details</h5>
  <div class="mb-3">
    <label class="form-label">Product Name</label>
    <input type="text" class="form-control" name="name" required="">
  <div class="mb-3">
    <label  class="form-label">SKU</label>
    <input type="text" class="form-control" name="sku" required="">
  </div>
  <div class="mb-3">
    <label  class="form-label">Product_image</label>
    <input type="file" class="form-control" name="product_image" required="">
  </div>
  <div class="mb-3">
    <label  class="form-label">Size</label>
    <select name="size">
        <option selected="" hidden="">Select size</option>
        <option value="small">small</option>
        <option value="medium">medium</option>
        <option value="large">large</option>
    </select>
  </div>
   <div class="mb-3">
    <label  class="form-label">Quantity</label>
    <input type="checkbox" name="price[]" value="1">1
    <input type="checkbox" name="price[]" value="2">2
    <input type="checkbox" name="price[]" value="5">5
    <input type="checkbox" name="price[]" value="10">10
  </div>
  <div class="mb-3">
    <label  class="form-label">Price</label>
    <input type="text" class="form-control" name="quantity" required="">
  </div>
  <div class="mb-3">
    <label  class="form-label">Stock</label>
    <input type="radio" name="stock" value="available" required="">available
    <input type="radio" name="stock" value="not available" required="">not available
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
  <br><br>
  
  

<!-- 
  <a href="csv.php"><button type="submit" class="btn btn-primary">Upload CSV</button></a>
 -->
</form>
</div>
<div class="mb-3">
  <form method="POST" action="insert_csv.php" enctype="multipart/form-data">
  <input type="file" name="csvfile">
  <a><input type="submit" class="btn btn-primary" value="Upload CSV"></a>  
  </form>
</div>
  </body>
</html>