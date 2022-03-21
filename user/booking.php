<?php
session_start();
include('connection.php');
$eid = $_SESSION['create_account_logged_in'];
extract($_REQUEST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "INSERT INTO room_booking_details (Email, room_type, check_in_date, check_in_time, check_out_date, Occupancy) 
                VALUES ('$eid', '$room_type', '$cdate', '$ctime', '$codate', '$Occupancy');";
        if (mysqli_query($conn, $sql)) {
            header('location:order.php');
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
      <?php
      require 'header.php';
      ?>
        <div class="container">
            <div class="row">
                <br>
                <?php echo @$msg; ?>
                <form method="post" class="form">
                    <h4>Room Type:</h4>
                    <div class="col">
                        <select class="form-control" name="room_type" required>
                            <option>Deluxe Room</option>
                            <option>Luxurious Suite</option>
                            <option>Standard Room</option>
                            <option>Suite Room</option>
                            <option>Twin Deluxe Room</option>
                        </select>
                    </div>
                    <h4>check In Date :</h4>
                    <div class="col">
                        <input type="date" name="cdate" class="form-control" required>
                    </div>
                    <h4>Check In Time:</h4>
                    <div class="col">
                    <input type="time" name="ctime" class="form-control"required>
                  </div>
                  <h4>Check Out Date :</h4>
                  <div class="col">
                  <input type="date" name="codate" class="form-control"required>
                </div>
                <h4 id="top">Occupancy :</h4>
                <div class="col">
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