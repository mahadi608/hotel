<!DOCTYPE html>
<html>

<head>
    <style>
        table,
        td,
        th {
            border: 1px solid;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        button {
            background-color: red;
            width: 100px;
            height: 30px;
        }

        .update {
            background-color: green;
            width: 100px;
            height: 30px;
        }

        a {
            text-decoration: none;
            color: #fff;
        }
    </style>
</head>

<body>

    <?php
    require('connection.php');

    $sql = "select * from create_account ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table cellpadding=7 cellspacing=7>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>email</th>
    <th>mobile</th>
    <th>address</th>
    <th>gender</th>
    <th>country</th>
    <th colspan=2>operation</th>
    </tr>";
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
        <td>" . $row["id"] . "</td>
        <td>" . $row["name"] . "</td>
        <td>" . $row["email"] . "</td>
        <td>" . $row["mobile"] . "</td>
        <td>" . $row["address"] . "</td>
        <td>" . $row["gender"] . "</td>
        <td>" . $row["country"] . "</td>
        <td>
        <button><a href='delete.php?id=$row[id]'>DELETE </a></button>
        </td>
        <td>
        <button class=update>
        <a href='update.php?id=$row[id] & name=$row[name] & email=$row[email] & mobile=$row[mobile] 
        & addr=$row[address] & gender=$row[gender] & count=$row[country]'>UPDATE</a>
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

</body>

</html>