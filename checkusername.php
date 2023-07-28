<?php
// error_reporting(0);
$con=new PDO("mysql:hostname=localhost;dbname=product","root","") or die("error in connecting Database");
$email=$_POST['duplicate_email'];
$sql=$con->prepare("select email from user where email = ? ");
$sql->execute([$email]);

$result=$sql->fetchAll(PDO::FETCH_ASSOC);


if(!empty($result))
{
	$response=1;
}
else
{
	$response=0;
}
echo $response;
//echo 1;


?>

