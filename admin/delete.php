<?php

require('connection.php');

$id=$_GET['id'];

$sql="DELETE FROM create_account WHERE create_account.id= '$id'";
$result = $conn->query($sql);

if($result){
    // echo"Successfully DELETE YOUR RECORD FROM DATABASE";
    header("Location:userdatashow.php");
}
else{
    echo"NOT DELETE YOUR RECORD FROM DATABASE";
}

$conn->close();

?>