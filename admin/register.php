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
  var password=$('#inputPassword').val();
  var passlength=$('#inputPassword').val().length;

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
  if(password=='')                     
  { 
    alert('please Enter password');
    return false;
  }
  if(passlength>=5)
  {
    alert('please Enter password less than 5');
    return false;
  }
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
<form class="form-horizontal" method="post" action="insert_user.php" onsubmit="return formvalidation();">
  <fieldset>
    <legend>Register</legend>
<?php
if(isset($_SESSION['success']))
{
  echo $_SESSION['success'];
  unset($_SESSION['success']);

}

?>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="name" id="inputName" placeholder="Name">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
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
            <input type="radio" name="depart" id="depart" value="Web development" checked="">
            Web development
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="depart" id="depart" value="SEO">
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
            <input type="radio" name="role" id="role" value="admin" checked="">
            admin
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="role" id="role" value="employee">
            employee          
          </label>
        </div>
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
<!--    Register form end -->
</div>
</div>
</div>
</body>
</html>