<?php
session_start();
error_reporting(1);
include('connection.php');
$eid=$_SESSION['create_account_logged_in'];
$sql= mysqli_query($conn,"select * from create_account where email='$eid' ");
$result=mysqli_fetch_assoc($sql);
$cid=$result['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Hotel.com</title>
  <link rel="stylesheet" href="../css/userdata.css">
</head>
<body>
  <?php
  include('Menu Bar.php');
  ?>
<div class="container-fluid"><!--Primary Id-->
  <h1 style="text-align: center;">[ Booking Details ]</h1><br>
  <div class="container">
    <div class="row">
        <table class="table table-striped table-bordered table-hover table-responsive"style="height:150px;">
               <tr>
                    <th>Room Type</th>
                    <th>Check In Date</th>
                    <th>Check In Time</th>
                    <th>Check Out Date</th>
                    <th>Occupancy</th>
					<th>Cancel</th>
               </tr>

               <?php
$sql= mysqli_query($conn,"select * from room_booking_details where CustomerID='$cid' ");
while($result=mysqli_fetch_assoc($sql))
{
$oid=$result['id'];
echo "<tr>";
echo "<td>".$result['room_type']."</td>";
echo "<td>".$result['check_in_date']."</td>";
echo "<td>".$result['check_in_time']."</td>";
echo "<td>".$result['check_out_date']."</td>";
echo "<td>".$result['Occupancy']."</td>";
echo "<td><a href='../admin/delete.php?id=$oid & table=room_booking_details & page=order.php' style='color:Red'>Cancel</a></td>";
echo "</tr>";
}
               ?>
          </table>

    </div>
    </div>
  </div>

</body>
</html>
