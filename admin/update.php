<?php
require "connection.php";
$id = $_GET['id'];
$name = $_GET['name'];
$email = $_GET['email'];
$mobile = $_GET['mobile'];
$addr = $_GET['addr'];
$gender = $_GET['gender'];
$country = $_GET['count'];

if (isset($_GET['submit'])) {
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $name = $_GET['name'];
    $email = $_GET['email'];
    $mobile = $_GET['mobil'];
    $addr = $_GET['addr'];
    $country = $_GET['contr'];
    $gender = $_GET['gend'];
    
    $sql="UPDATE create_account SET id = '$id', name = '$name', email = '$email',
     mobile = '$mobile', address = '$addr', gender = '$gender', country = '$country'
      WHERE create_account.id = '$id'";
    $result = $conn->query($sql);
    if($result){
        // echo"Successfully DELETE YOUR RECORD FROM DATABASE";
        header("Location:userdatashow.php");
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
                        <input type="text" class="form-control" name="id" placeholder="name" value="<?php echo "$id" ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="name" value="<?php echo "$name" ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo "$email" ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="mobil" placeholder="mobile" value="<?php echo "$mobile" ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="addr" placeholder="address" value="<?php echo "$addr" ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="contr" placeholder="country" value="<?php echo "$country" ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="gend" placeholder="gender" value="<?php echo "$gender" ?>" required>
                    </div>
                    <input type="submit" value="UPDATE" name="submit" class="btn-ln" required>
                </form><br>
            </div>
        </div><br>
    </div>
    </div>
</body>

</html>