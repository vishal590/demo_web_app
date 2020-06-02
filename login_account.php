<?php
session_start();

$host="localhost";
$username="root";
$pass="";
$db="ems";

$conn=mysqli_connect($host,$username,$pass,$db);

if(!$conn){
  die("Data connection error");
}

//login account process

if(isset($_POST['email']))
{
  $email=$_POST['email'];
  $pass=$_POST['password'];

  $q="SELECT * FROM `users` WHERE `email`='$email' AND `password`='$pass'";

  $res=mysqli_query($conn,$q);
  $count=mysqli_num_rows($res);
  $row=mysqli_fetch_array($res);

  if($count==1)
  {                                     //set session to check user is already log in or not
    $session_id=session_id();
    $_SESSION['auth']=$session_id;

    $role=$row['role'];
    if($role=='admin'){
      header('Location:admin/dashboard.php');
      $_SESSION['success']="Login successfully";
    }
    elseif($role=='employee'){
      header('Location:employee/dashboard1.php');
      $_SESSION['success']="Login successfully";
    }
  
  }
  else{
    $_SESSION['error']="Email or password wrong";
    header('Location:login.php');
  }
}

?>