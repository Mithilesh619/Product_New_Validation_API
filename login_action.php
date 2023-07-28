<?php

//echo "hi";die();
$con=new PDO("mysql:hostname=localhost;dbname=product","root","") or die("Connecting in Error");
//print_r($_POST);
$email=$_POST['email'];
$password=$_POST['password'];
$encrypt_password=sha1($password);
$sql=$con->prepare("select * from user where email=? and password=?");
$sql->execute([$email,$encrypt_password]);
$result=$sql->fetchAll(PDO::FETCH_ASSOC);
//print_r($result);

$count=count($result);
//print_r($count);die();
if($count=='1')
{
	
	
session_start();
//print_r($_SESSION);die();

$_SESSION['id']=$result[0]['user_id'];
$_SESSION['name']=$result[0]['name'];
	
	//print_r($_SESSION);die();
header('location:product.php');
}
else
{
	//echo "dff";
header('location:register.php');
}



// include 'connect.php';

// print_r($_POST);
// $email=$_POST['email'];
// $password=$_POST['password'];
// $encrypt_password=sha1($password);

// $sql="select * from user where email='$email',password='$encrypt_password'";
// $result[]=mysqli_query($con,$sql);
// //print_r($result);die();
// $count=count($result);	
// //print_r($count);die();
// if($count=='1')
// {
	
	
//  session_start();
// //print_r($_SESSION);die();

//  $_SESSION['id']=$result[0]['user_id'];
//  $_SESSION['name']=$result[0]['name'];
	
//  	print_r($_SESSION);die();
//  header('location:product.php');
// }
// else
// {
// 	//echo "dff";
// header('location:register.php');
// }

?>