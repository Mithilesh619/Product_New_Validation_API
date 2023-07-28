<?php


// include 'connect.php';
// //print_r($_POST);die();
// //if($_POST['name']!='' && $_POST['email']!='' && $_POST['mobile']!='' && $_POST['password']!=''){

// //if(isset($_POST['submit'])){
// //if(!empty($_POST)){
//   if($_POST['is_ajax']==1){
//   $name=$_POST['name'];
//   $email=$_POST['email'];
//   $mobile=$_POST['mobile'];
//   $password=$_POST['password'];
//   $encrypt_password=sha1($password);

//   $sql="insert into user (name,email,mobile,password)values('$name','$email','$mobile','$encrypt_password')";
//   $result=mysqli_query($con,$sql);
//   if($result)
//   {
//     //echo "Registration Successfull.";
//     header('location:login.php');
//   }
// }

//   else
//   {
//     //die(mysqli_error($con));
//    header('location:register.php'); 
//   }







include 'connect.php';
//if($_POST['name']!='' && $_POST['email']!='' && $_POST['mobile']!='' && $_POST['password']!=''){

if(isset($_POST['submit'])){
  //if(!empty($_POST)){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];
  $encrypt_password=sha1($password);

  $sql="insert into user (name,email,mobile,password)values('$name','$email','$mobile','$encrypt_password')";
  $result=mysqli_query($con,$sql);
  if($result)
  {
    //echo "Registration Successfull.";
    header('location:login.php');
  }
}

  else
  {
    //die(mysqli_error($con));
   header('location:register.php'); 
  }

//}


?>
