<?php
include('connection.php');
extract($_REQUEST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = mysqli_query($conn, "select * from create_account where email='$email' ");
    if (mysqli_num_rows($sql)) {
        $msg = "<h2 style='color:red'> account already exists</h2>";
    } else {

        $sql = "insert into create_account(name,email,password,mobile,address,gender,country) 
             values('$name','$email','$pass','$mobil','$addr','$gend','$contr')";
        if (mysqli_query($conn, $sql)) {
            $msg = "<h2 style='color:green'>Signup Successfully</h2>";
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
                <a href="../index.html">
                    <h2 class="logo">BlueStar</h2>
                </a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="logout.php">
                            <button class="btn">Log Out</button>
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
                    <h4>Room Type:</h4>
                    <div class="col-sm-7">
                        <select class="form-control" name="room_type" required>
                            <option>Deluxe Room</option>
                            <option>Luxurious Suite</option>
                            <option>Standard Room</option>
                            <option>Suite Room</option>
                            <option>Twin Deluxe Room</option>
                        </select>
                    </div>
                    <h4>check In Date :</h4>
                    <div class="col-sm-7">
                        <input type="date" name="cdate" class="form-control" required>
                    </div>
                    <h4>Check In Time:</h4>
                    <div class="col-sm-7">
                    <input type="time" name="ctime" class="form-control"required>
                  </div>
                  <h4>Check Out Date :</h4>
                  <div class="col-sm-7">
                  <input type="date" name="codate" class="form-control"required>
                </div>
                <h4 id="top">Occupancy :</h4>
                <div class="col-sm-7">
                  <div class="radio-inline"><input type="radio" value="single" name="Occupancy"required >Single</div>
                  <div class="radio-inline"><input type="radio" value="twin" name="Occupancy" required>Twin</div>
                  <div class="radio-inline"><input type="radio" value="dubble" name="Occupancy" required>Dubble</div>
                </div>
                    <input type="submit" value="Booking" name="login" class="btn-ln" required>
                </form><br>
            </div>
        </div><br>
    </div>
    </div>
</body>

</html>