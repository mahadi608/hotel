<?php
session_start();
error_reporting(1);
include('connection.php');
$eid = $_SESSION['create_account_logged_in'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Online Hotel.com</title>
  <link rel="stylesheet" href="../css/userdata.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div class="hero3">
    <?php
    include('header.php');
    ?>
    <div class="container-fluid">
      <h1 class="bok">Booking Details</h1><br>
      <div class="container">
        <div class="row">
          <table style="height:150px;">
            <tr>
              <th>Room Type</th>
              <th>Check In Date</th>
              <th>Check In Time</th>
              <th>Check Out Date</th>
              <th>Occupancy</th>
              <th>Cancel</th>
            </tr>

            <?php
            $sql = mysqli_query($conn, "select * from room_booking_details where Email='$eid' ");
            while ($result = mysqli_fetch_assoc($sql)) {
              $oid = $result['id'];
              echo "<tr>";
              echo "<td>" . $result['room_type'] . "</td>";
              echo "<td>" . $result['check_in_date'] . "</td>";
              echo "<td>" . $result['check_in_time'] . "</td>";
              echo "<td>" . $result['check_out_date'] . "</td>";
              echo "<td>" . $result['Occupancy'] . "</td>";
              echo "<td><a href='../admin/delete.php?id=$oid & table=room_booking_details & page=../user/order.php' style='color:Red'>Cancel</a></td>";
              echo "</tr>";
            }
            ?>
          </table>

        </div>
      </div>
    </div>

  </div>
</body>

</html>