<?php include('../auth/auth.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>

  <link rel="stylesheet" href="../css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  
</head>

<body>
<!------- including header file -------->
<?php include('header.php'); ?>
<!------- end header file -------->

<div class="container">
<h3><?php echo "welcome to admin dashboard"; ?></h3>

<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Sr no</th>
      <th>Name</th>
      <th>Email</th>
      <th>Department</th>
      <th>Role</th>
      <th>Action</th>

    </tr>
  </thead>
  <tbody>
  <?php
  $i=1;
  $q="SELECT * FROM `users`";

  $res=mysqli_query($conn,$q);
  $count=mysqli_num_rows($res);
  if($count>0)
  {
     while($row=mysqli_fetch_array($res))
    {
  ?>
    <tr>
      <td><?php echo $i;  ?></td>
      <td><?php echo $row['name'];  ?></td>
      <td><?php echo $row['email'];  ?></td>
      <td><?php echo $row['department'];  ?></td>
      <td><?php echo $row['role'];  ?></td>
      <td> <a href="edit_user.php?id=<?php echo $row['user_id']; ?>;">Edit</a> | 
      <a href="delete_user.php?id=<?php echo $row['user_id']; ?>">Delete</a></td>

    </tr>
  <?php      $i++;    } }  else{echo "No Record Found"; }       ?>
   
  </tbody>
</table> 


</div>
</body>
</html>