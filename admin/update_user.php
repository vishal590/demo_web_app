<?php 
include('../auth/auth.php'); 



//insert query for registration page

if(isset($_REQUEST['name']))
{
  $user_id=$_POST['user_id'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $pass=$_POST['password']; 
  $depart=$_POST['depart'];
  $role=$_POST['role'];


  
    $q="Update `users` set `name`='$name', `email`='$email', `password`='$pass', `department`='$depart', `role`='$role' where `user_id`='$user_id'";
                           
  $res=mysqli_query($conn,$q);

  if($res)
  {
    $_SESSION['success']='Data Updated';
    header('Location:dashboard.php');
    
  }




}



?>