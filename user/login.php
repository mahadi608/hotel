<?php 
session_start();
error_reporting(1);

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
  $sql=mysqli_query($conn,"select * from create_account where email='$eid' && password='$pass' ");
    if(mysqli_num_rows($sql))
    {
    $_SESSION['create_account_logged_in']=$eid; 
    $_SESSION['logged']=true;
    header('location:../index.php'); 
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
      <div class="navbar">
          <div class="icon">
              <a href="../index.php">
                  <h2 class="logo">BlueStar</h2>
              </a>
          </div>
          <div class="menu">
              <ul>
                  <li><a href="../index.php">HOME</a></li>
                  <li><a href="#">ABOUT</a></li>
                  <li><a href="#">SERVICE</a></li>
                  <li><a href="#">CONTACT</a></li>
                  <li><a href="signup.php">
                    <button class="btn">SIGNUP</button>
                     </a>
                  </li>
              </ul>
          </div>
      </div>
  <div class="container">
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