<?php
include('user/connection.php');
extract($_REQUEST);
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $sql="insert into feedback(name,email,mobile,message) 
          values('$name','$email','$mobil','$massage')";
   if(mysqli_query($conn,$sql))
   {
   $msg= "<h2 style='color:green'>Thanks</h2>";
   header('location:index.php');
   }
}
mysqli_close($conn);
?>


<!DOCTYPE html>    
<html>    
<head>    
<meta name="viewport" content="width=device-width, initial-scale=1">    
<link rel="stylesheet" href="css/feedback.css">
</head>    
<body>
<div class="head-title"><?php echo @$msg ?><h1>FEED BACK</h1></div>    
<div class="container">    
  <form method="POST">    
    <div class="row">    
      <div class="col-25">    
        <label for="fname">Name</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="name" name="name" placeholder="Your name.." required>    
      </div>    
    </div>        
    <div class="row">    
        <div class="col-25">    
          <label for="email">Email</label>    
        </div>    
        <div class="col-75">    
          <input type="email" id="email" name="email" placeholder="Your mail id.." required>    
        </div>    
      </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="country">Phone</label>    
      </div>    
      <div class="col-75">    
       <input type="text" name="mobil" placeholder="Your phone number.." required>
      </div>    
    </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="feed_back">Feed Back</label>    
      </div>    
      <div class="col-75">    
        <textarea id="subject" name="massage" placeholder="Write something.." style="height:200px" required></textarea>    
      </div>    
    </div>    
    <div class="row">    
      <input type="submit" value="Submit">    
    </div>    
  </form>    
</div>    
    
</body>    
</html>    