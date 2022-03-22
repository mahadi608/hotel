<?php
require "connection.php";
$id = $_GET['id'];
$room_no = $_GET['room_no'];
$type = $_GET['type'];
$price = $_GET['price'];

if (isset($_GET['submit'])) {
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $room_no = $_GET['room_no'];
    $type = $_GET['type'];
    $price = $_GET['price'];
    
    $sql="UPDATE `rooms` SET `room_no` = '$room_no', `type` = '$type', `price` = '$price' WHERE `rooms`.`id` = $id;";
    $result = $conn->query($sql);
    if($result){
        // echo"Successfully DELETE YOUR RECORD FROM DATABASE";
        header("Location:price.php");
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
                        <input type="text" class="form-control" name="room_no" placeholder="room_no" value="<?php echo "$room_no" ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="type" placeholder="type" value="<?php echo "$type" ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="price" placeholder="price" value="<?php echo "$price" ?>" required>
                    </div>
                    <input type="submit" value="UPDATE" name="submit" class="btn-ln" required>
                </form><br>
            </div>
        </div><br>
    </div>
    </div>
</body>

</html>