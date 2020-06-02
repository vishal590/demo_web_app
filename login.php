<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>

  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>
  function formvalidation(){
  
  var email=$('#inputEmail').val();   
  var password=$('#inputPassword').val();
  var passlength=$('#inputPassword').val().length;
  

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
<header>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">EMS</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php">Login</a></li>
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container">
<div class="col-xs-6 col-xs-push-3 well">

<!------      login form      ------------>
<form class="form-horizontal" method="post" action="login_account.php" onsubmit="return formvalidation();">
  <fieldset>
    <legend>Login</legend>
<?php                            //print msg login successfully by session on that same login 
if(isset($_SESSION['error']))     //page
{
  echo $_SESSION['error'];
  unset($_SESSION['error']);
}

if(isset($_SESSION['success']))
{
  echo $_SESSION['success'];
  unset($_SESSION['success']);
}

?>
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
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </div>
  </fieldset>
</form>
<!--    login end -->
</div>
</div>
</div>
</body>
</html>