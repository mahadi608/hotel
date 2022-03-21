<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="navbar">
        <div class="icon">
            <a href="index.php">
                <h2 class="logo">BlueStar</h2>
            </a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">SERVICE</a></li>
                <li><a href="#">CONTACT</a></li>
                <?php
                session_start();
                if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
                    echo '<div class="dropdown">
                    <li>
                    <button class="dropbtn">My Account</button>
                    <div class="dropdown-content">
                    <a href="#">Profile</a>
                    <a href="user/booking.php">Booking</a>
                    <a href="user/order.php">Booking Details</a>
                    <a href="user/logout.php">LogOut</a>
                    </div>
                    </li>
                    </div>';
                } else {
                    echo ' <li class="bot"><a href="user/login.php">
                    <button class="btn">LOGIN</button>
                    </a></li>
                    <li class="bot"><a href="user/signup.php">
                    <button class="btn">SIGNUP</button>
                    </a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</body>

</html>