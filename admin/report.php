<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/userdata.css">
    <style>
        .row{
            width: 100%;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .card-01{
            background: #03D29F;
            position: relative;
            flex: 1;
            max-width: 300px;
            height: 150px;
            margin: 10px;
            border-radius: 5px;
        }
        .card-01 h2{
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="menu">
            <?php
            require('connection.php');
            require "sidebar.php";
            
       echo '</div>
        <div class="data">
            <h2> <u>ALL REPORT INFORMATION</u> </h2><br>

            <div class="row">
                <div class="card-01">
                    <h2>Total User</h2>';
                    
                     $sql=mysqli_query($conn,"select * from create_account");
                     $row=mysqli_num_rows($sql);
                     echo '<h2> '.$row.' </h2>
                    
                  </div>
                <div class="card-01">
                <h2>Total Room</h2>';
                $sql=mysqli_query($conn,"select * from rooms");
                     $row=mysqli_num_rows($sql);
                     echo '<h2> '.$row.' </h2>

                  </div>
                <div class="card-01">
                <h2>Total Booking</h2>';
                $sql=mysqli_query($conn,"select * from room_booking_details");
                     $row=mysqli_num_rows($sql);
                     echo '<h2> '.$row.' </h2>
                </div>
            </div>'
            ?>

        </div>
    </div>

</body>

</html>