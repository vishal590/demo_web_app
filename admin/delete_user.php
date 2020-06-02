<?php
 include('../auth/auth.php'); 


  $user_id=$_GET['id'];

  
  $q="DELETE FROM `users` WHERE `user_id`='$user_id'";

  $res=mysqli_query($conn,$q);

  if($res)
  {
    $_SESSION['success']='Data delete';
    header('Location:dashboard.php');
    
  }








?>