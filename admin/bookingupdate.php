<?php
require "connection.php";
$id = $_GET['id'];
$email = $_GET['email'];
$room_type = $_GET['room_type'];
$check_in_date = $_GET['check_in_date'];
$check_in_time = $_GET['check_in_time'];
$check_out_date = $_GET['check_out_date'];
$Occupancy = $_GET['Occupancy'];

if (isset($_GET['submit'])) {
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $email = $_GET['email'];
    $room_type = $_GET['room_type'];
    $check_in_date = $_GET['check_in_date'];
    $check_in_time = $_GET['check_in_time'];
    $check_out_date = $_GET['check_out_date'];
    $Occupancy = $_GET['Occupancy'];
   
    
    $sql="UPDATE `room_booking_details` SET `Email` = '$email', `room_type` = '$room_type', `check_in_date` = '$check_in_date', 
    `check_in_time` = '$check_in_time',`check_out_date` = '$check_out_date', `Occupancy` = '$Occupancy' WHERE `room_booking_details`.`id` = $id;";
    $result = $conn->query($sql);
    if($result){
        // echo"Successfully DELETE YOUR RECORD FROM DATABASE";
        header("Location:booking.php");
    }
    else{
        echo"NOT UPDATE YOUR RECORD FROM DATABASE";
    }
}

$conn->close();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Hotel.Com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/update.css">
</head>

<body>
    <div class="hero_update">
        <div class="container_update">
            <div class="row">
                <br>
                <form method="get" class="form">
                <div class="form-group">
                        <input type="text" class="form-control" name="id" placeholder="id" value="<?php echo "$id" ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo "$email" ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="room_type" placeholder="room_type" value="<?php echo "$room_type" ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="check_in_date" placeholder="address" value="<?php echo "$check_in_date" ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="check_in_time" placeholder="check_in_time" value="<?php echo "$check_in_time" ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="check_out_date" placeholder="check_out_date" value="<?php echo "$check_out_date" ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="Occupancy" placeholder="Occupancy" value="<?php echo "$Occupancy" ?>" required>
                    </div>
                    <input type="submit" value="UPDATE" name="submit" class="btn-ln" required>
                </form><br>
            </div>
        </div><br>
    </div>
    </div>
</body>

</html>