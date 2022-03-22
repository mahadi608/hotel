<?php
session_start();
error_reporting(1);
include('connection.php');
$eid = $_SESSION['email_logged_in'];
$pass = $_SESSION['pass_logged_in'];

if (isset($_GET['submit'])) {
    $email = isset($_GET['email']) ? $_GET['email'] : '';
    $password = $_GET['password'];
    
    $sql="UPDATE `admin` SET `username` = '$email', `password` = '$password' WHERE `admin`.`id` = 1;";
    $result = $conn->query($sql);
    if($result){
        // echo"Successfully DELETE YOUR RECORD FROM DATABASE";
        header("Location:logout.php");
    }
    else{
        echo"NOT UPDATE YOUR RECORD FROM DATABASE";
    }
}

$conn->close();


?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/userdata.css">
    <link rel="stylesheet" href="../css/feedback.css">
</head>

<body>
    <div class="main">
        <div class="menu">
            <?php
            require "sidebar.php";
            ?>
        </div>
        <div class="data">
            <h2> <u>SETTING</u> </h2><br>
            <form method="GET">
                <div class="row">
                    <div class="col-25">
                        <label for="email">Email</label>
                    </div>
                    <div class="col-75">
                        <input type="email" id="email" name="email" placeholder="<?php echo "$eid" ?>" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="country">password</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="password" placeholder="<?php echo "$pass" ?>" required>
                    </div>
                </div>
                <input type="submit" value="Change">
        </div>
        </form>
        <a href="">logout</a>
    </div>


</body>

</html>