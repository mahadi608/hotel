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
            require "sidebar.php";
            ?>
        </div>
        <div class="data">
            <h2> <u>ALL REPORT INFORMATION</u> </h2><br>

            <div class="row">
                <div class="card-01">
                    <h2>Total User</h2><h2>75</h2>
                </div>
                <div class="card-01">
                <h2>Total Room</h2><h2>7</h2>
                </div>
                <div class="card-01">
                <h2>Total Booking</h2><h2>25</h2>
                </div>
            </div>

        </div>
    </div>

</body>

</html>