<?php

require('connection.php');

$id=$_GET['id'];
$table_name = $_GET['table'];

$sql="DELETE FROM $table_name WHERE $table_name.id= '$id'";
$result = $conn->query($sql);

if($result){
    echo"Successfully DELETE YOUR RECORD FROM DATABASE";
    // header("Location:userdatashow.php");
}
else{
    echo"NOT DELETE YOUR RECORD FROM DATABASE";
}

$conn->close();

?>