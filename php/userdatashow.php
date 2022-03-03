<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
require('connection.php');

$sql = "select * from create_account ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>email</th>
    <th>mobile</th>
    <th>address</th>
    <th>gender</th>
    <th>country</th>
    <th>operation</th>
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["id"]. "</td>
        <td>" . $row["name"]. "</td>
        <td>" . $row["email"]. "</td>
        <td>" . $row["mobile"]. "</td>
        <td>" . $row["address"]. "</td>
        <td>" . $row["gender"]. "</td>
        <td>" . $row["country"]. "</td>
        <td><a href='delete.php?id=$row[id]'>DELETE  </a><a href='update.php?id=$row[id]'>UPDATE</a></td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>