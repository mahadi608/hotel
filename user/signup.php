<?php
include('connection.php');
extract($_REQUEST);
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $sql= mysqli_query($conn,"select * from create_account where email='$email' ");
  if(mysqli_num_rows($sql))
  {
  $msg= "<h2 style='color:red'> account already exists</h2>";    
  }
  else
  {

      $sql="insert into create_account(name,email,password,mobile,address,gender,country) 
             values('$name','$email','$pass','$mobil','$addr','$gend','$contr')";
   if(mysqli_query($conn,$sql))
   {
   $msg= "<h2 style='color:green'>Signup Successfully</h2>";
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
  <link rel="stylesheet" href="../css/signup.css">
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
                  <li><a href="login.php">
                    <button class="btn">LOGIN</button>
                     </a>
                  </li>
              </ul>
          </div>
      </div>
  <div class="container">
    <div class="row">
      <br>
          <?php echo @$msg; ?>
          <form method="post" class="form">
          <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="name" autocomplete="off"required >
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email" autocomplete="off"required >
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="mobil" placeholder="mobile" autocomplete="off"required >
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="addr" placeholder="address" autocomplete="off"required >
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="contr" placeholder="country" autocomplete="off"required >
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="gend" placeholder="gender" autocomplete="off"required >
              </div>
            <div class="form-group">
                <input type="password" class="form-control"name="pass"placeholder="Password" autocomplete="off"required>
            </div>
          <input type="submit" value="Signup" name="login" class="btn-ln" required>
      	</form><br>
        </div>
    </div><br>
  </div>
</div>
</body>
</html>
