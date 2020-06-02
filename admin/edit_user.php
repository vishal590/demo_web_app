<?php include('../auth/auth.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>

  <link rel="stylesheet" href="../css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>
  function formvalidation(){
  var name=$('#inputName').val();  //by returning 'return false' page is not refresh but if we  
  var email=$('#inputEmail').val();    // return true it means page refresh
 

  if(name=='')                      
  {   
    alert('please Enter Name');
    return false;
  }  
  if(email=='')                      
  { 
    alert('please Enter email');
    return false;
  }  

 
  </script>
</head>
<body>
<!------- including header file -------->
<?php include('header.php'); ?>
<!------- end header file -------->


<div class="container">
<div class="col-xs-6 col-xs-push-3 well">

<!------       Register form      ------------>
<form class="form-horizontal" method="post" action="update_user.php" onsubmit="return formvalidation();">
  <fieldset>
    <legend>Edit User Details</legend>
<?php
if(isset($_SESSION['success']))
{
  echo $_SESSION['success'];
  unset($_SESSION['success']);

}

?>


<?php
$user_id=$_GET['id'];       //get value of id
$q="SELECT * FROM `users` WHERE `user_id`='$user_id'";
$res=mysqli_query($conn,$q);
$data=mysqli_fetch_array($res);
?>


    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="name" id="inputName" placeholder="Name" value="<?php echo $data['name']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" value="<?php echo $data['email']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">

      </div>
    </div>
   
    <div class="form-group">
      <label class="col-lg-2 control-label">Department</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="depart" id="depart" value="Web development" 
            <?php if($data['department']=='admin'){echo "checked";} ?> >
            Admin
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="depart" id="depart" value="Web development" 
            <?php if($data['department']=='Web development'){echo "checked";} ?> >
            Web development
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="depart" id="depart" value="SEO"
            <?php if($data['department']=='SEO'){echo "checked";} ?>>
            SEO          
          </label>
        </div>
      </div>
    </div>


    <div class="form-group">
      <label class="col-lg-2 control-label">Role</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="role" id="role" value="admin" 
            <?php if($data['role']=='admin'){echo "ckecked";} ?>>
            admin
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="role" id="role" value="employee"
            <?php if($data['role']=='employee'){echo "checked";} ?>>
            employee          
          </label>
        </div>
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>
  </fieldset>
</form>
<!--  Register form end --> 
</div>
</div>
</div>
</body>
</html>