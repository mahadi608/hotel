<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/userdata.css">
</head>

<body>
    <div class="main">
        <div class="menu">
            <?php
            require "sidebar.php";
            ?>
        </div>
        <div class="data">
            <h2> <u>ALL BOOKING INFORMATION</u> </h2><br>

            <?php
            require('connection.php');

            $sql = "select * from room_booking_details";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table cellpadding=7 cellspacing=7>
    <tr>
    <th>ID</th>
    <th>Email</th>
    <th>room_type</th>
    <th>check_in_date</th>
    <th>check_in_time</th>
    <th>check_out_date</th>
    <th>Occupancy</th>
    <th colspan=2>Operation</th>
    </tr>";
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
        <td>" . $row["id"] . "</td>
        <td>" . $row["Email"] . "</td>
        <td>" . $row["room_type"] . "</td>
        <td>" . $row["check_in_date"] . "</td>
        <td>" . $row["check_in_time"] . "</td>
        <td>" . $row["check_out_date"] . "</td>
        <td>" . $row["Occupancy"] . "</td>
        <td>
        <button><a href='delete.php?id=$row[id] & table=room_booking_details & page=booking.php'>DELETE </a></button>
        </td>
        <td>
        <button class=update>
        <a href='bookingupdate.php?id=$row[id] & email=$row[Email] & room_type=$row[room_type] &
         check_in_date= $row[check_in_date] & check_in_time=$row[check_in_time] & check_out_date=$row[check_out_date] & Occupancy=$row[Occupancy]'>UPDATE</a>
        </button>
        </td>
        </tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>

        </div>
    </div>

</body>

</html>

        <!-- 
             <th>Address</th>
    <th>city</th>
    <th>state</th>
    <th>zip</th>
    <th>contry</th>
        
        <td>" . $row["address"] . "</td>
        <td>" . $row["city"] . "</td>
        <td>" . $row["state"] . "</td>
        <td>" . $row["zip"] . "</td>
        <td>" . $row["contry"] . "</td> -->
        