<?php
include 'connect.php';

//print_r($_FILES['csvfile']);

//if(!empty($_POST)){
	if(!empty($_FILES)){
	$_file=$_FILES['csvfile']['name'];
	$handle=fopen($_file,"r");
	while (($cont=fgetcsv($handle,1000,","))!==false) {
		
		//print_r($cont);die();
		$productname=$cont[0];
		$sku=$cont[1];
		$productimage=$cont[2];
		$size=$cont[3];
		$price=$cont[4];
		$quantity=$cont[5];
		$stock=$cont[6];

		$sql="insert into user_product (product_name,sku,product_img,size,price,quantity,stock)
  		values('$productname','$sku','$productimage','$size','$price','$quantity','$stock')";
  		//echo $sql,"<br>";

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
}


?>