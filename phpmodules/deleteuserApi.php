<?php
session_start(); 
include ('conn.php');

$id = $_SESSION['userid'] ;

$sql = "DELETE FROM users WHERE users.user_id = '{$id}'";
if(mysqli_query($conn, $sql)){
    
    echo "deleting successful";
} else {
    echo "Error updating record: " . $conn->error;
}


?>