<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/sidebar.css">
    <title>Document</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo">
            <h2 class="logo">BlueStar</h2>
        </div>
        <ul>
            <li>
                <a href="report.php">Reports</a>
            </li>
            <hr>
            <li>
                <a href="userdatashow.php">Costumers</a>
            </li>
            <hr>
            <li>
                <a href="room.php">Room</a>
            </li>
            <hr>
            <li>
                <a href="booking.php">Booking</a>
            </li>
            <hr>
            <li>
                <a href="price.php">Price</a>
            </li>
            <hr>
            <li>
                <a href="setting.php">Setting</a>
            </li>
        </ul>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(".sidebar ul li a").filter(function() {
            return this.href == location.href.replace(/#.*/, "");
        }).parents("li").addClass("active");
    </script>
</body>

</html>