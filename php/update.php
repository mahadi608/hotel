<?php

require('connection.php');

$id=$_GET['id'];

$sql="DELETE FROM create_account WHERE create_account.id= '$id'";
$result = $conn->query($sql);

if($result){
    echo"Successfully UPDATE YOUR RECORD FROM DATABASE";
}
else{
    echo"NOT UPDATE YOUR RECORD FROM DATABASE";
}

$conn->close();

?>