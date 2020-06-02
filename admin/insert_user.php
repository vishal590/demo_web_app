<?php
 include('../auth/auth.php'); 



//insert query for registration page

if(isset($_REQUEST['name']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $pass=$_POST['password'];
  $depart=$_POST['depart'];
  $role=$_POST['role'];
  $q="INSERT INTO `users`(`user_id`, `name`, `email`, `password`, `department`, `role`) VALUES ('','$name','$email','$pass','$depart','$role')";

  $res=mysqli_query($conn,$q);

  if($res)
  {
    $_SESSION['success']='Data insert';
    header('Location:register.php');
    
  }




}



?>