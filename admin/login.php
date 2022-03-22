<?php
session_start(); 
require('connection.php');
extract($_REQUEST);
if(isset($login))
{
  if($eid=="" || $pass=="")
  {
  $error= "<h4 style='color:red'>fill all details</h4>"; 
  }   
  else
  {
  $sql=mysqli_query($conn,"select * from admin where username='$eid' && password='$pass' ");
    if(mysqli_num_rows($sql))
    {
    $_SESSION['email_logged_in']=$eid;
    $_SESSION['pass_logged_in']=$pass;
    header('location:report.php'); 
    }
    else
    {
    $error= "<h4 style='color:red'>Invalid login details</h4>"; 
    } 
  }
  
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Hotel.Com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="hero_in">
  <div class="container">
      <div class="admin">
          <br>
          <h2>Admin Login</h2>
      </div>
    <div class="row">
      <br>
          <?php echo @$error; ?>
          <form method="post" class="form">
              <div class="form-group">
                <input type="text" class="form-control" name="eid" placeholder="Email Id" autocomplete="off"required >
              </div>
            <div class="form-group">
                <input type="password" class="form-control"name="pass"placeholder="Password" autocomplete="off"required>
            </div>
          <input type="submit" value="Login" name="login" class="btn-ln" required>
          <div class="form-group forget">
                <a href="Forgot_account.php">Forget Account</a>
            </div>
      	</form><br>
        </div>
    </div><br>
  </div>
</div>
</body>
</html>