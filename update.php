<?php
//error_reporting(0);
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from user_product where product_id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$product_id=$row['product_id'];
$product_name=$row['product_name'];
$sku=$row['sku'];
$product_image=$row['product_img'];
$size=$row['size'];
$price=$row['price'];
//print_r($price);
$price_new=explode(",",$price);
$quantity=$row['quantity'];
$stock=$row['stock'];
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

  $sql="update user_product set product_name='$product_name', sku='$sku', product_img='$product_image', size='$size',
  price='$price_new',quantity='$quantity',stock='$stock' where product_id='$id'";
  $result=mysqli_query($con,$sql);
  if($result)
  {
    //echo "Updated Successfully.";
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
  <body>
    <div class="container my-3">
  <form method="post" enctype="multipart/form-data">
  <h5>Product_Details</h5>
  <div class="mb-3">
    <label class="form-label">Product Name</label>
    <input type="text" class="form-control" name="name" value="<?php echo $product_name; ?>">
  <div class="mb-3">
    <label  class="form-label">SKU</label>
    <input type="text" class="form-control" name="sku" value=<?php echo $sku; ?>>
  </div>
  <div class="mb-3">
    <label  class="form-label">Product_image</label>
    <input type="file" class="form-control" name="product_image" value=<?php echo $product_image; ?>>
  </div>
  <div class="mb-3">
    <label  class="form-label">Size</label>
    <select name="size" value=<?php echo $size; ?>>
        <option>Select size</option>
        <option value="640*480" <?php  if($size=='640*480') echo "selected";  ?>>640*480</option>
        <option value="1024*786" <?php  if($size=='1024*786') echo "selected";  ?>>1024*786</option>
        <option value="1920*1080" <?php  if($size=='1920*1080') echo "selected";  ?>>1920*1080</option>
    </select>
  </div>
   <div class="mb-3">
    <label  class="form-label">Price</label>
    <input type="checkbox" name="price[]" value="500" <?php if(in_array("500",$price_new))  { echo "checked"; } ?>>500
    <input type="checkbox" name="price[]" value="1000" <?php if(in_array("1000",$price_new)){ echo "checked"; } ?>>1000
    <input type="checkbox" name="price[]" value="2000" <?php if(in_array("2000",$price_new)){ echo "checked"; } ?>>2000
    <input type="checkbox" name="price[]" value="5000" <?php if(in_array("5000",$price_new)){ echo "checked";} ?>>5000
  </div>
  <div class="mb-3">
    <label  class="form-label">Quantity</label>
    <input type="text" class="form-control" name="quantity" value=<?php echo $quantity; ?>>
  </div>
  <div class="mb-3">
    <label  class="form-label">Stock</label>
    <input type="radio" name="stock" value="Available" <?php  if($stock=='Available') echo "checked";  ?>>Available
    <input type="radio" name="stock" value="Not Available" <?php if($stock=='Not Available') echo "checked" ?>>Not Available
  </div>


  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
  </body>
</html>