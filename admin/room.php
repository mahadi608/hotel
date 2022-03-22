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
            <h2> <u>ALL ROOM INFORMATION</u> </h2><br>

            <?php
            require('connection.php');

            $sql = "select * from rooms";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table cellpadding=7 cellspacing=7>
                <tr>
                <th>id</th>
                <th>Room_No</th>
                <th>Type</th>
                <th>Details</th>
                <th colspan=2>Operation</th>
                </tr>";

                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
        <td>" . $row["id"] . "</td>
        <td>" . $row["room_no"] . "</td>
        <td>" . $row["type"] . "</td>
        <td>" . $row["details"] . "</td>
        <td>
        <button><a href='delete.php?id=$row[id] & table=rooms'>DELETE </a></button>
        </td>
        <td>
        <button class=update>
        <a href='roomupdate.php?id=$row[id] & room=$row[room_no] & type=$row[type] & details=$row[details]'>UPDATE</a>
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