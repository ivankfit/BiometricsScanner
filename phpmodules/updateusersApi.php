<?php
session_start(); 
include ('conn.php');


$id = $_SESSION['userid'] ;


$User = $_POST['user'];
$HospitalName = $_POST['hospitalname'];
$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$Email = $_POST['email'];
$number = $_POST['phonenumber'];
$pass = $_POST['inputPassword'];
$conpass = $_POST['confirmPassword'];

$sql = "UPDATE users SET user='{$User}', hospitalname='{$HospitalName}', firstname='{$fname}', lastname='{$lname}', email='{$Email}', phonenumber='{$number}', password='{$pass}' WHERE user_id='{$id}'";

 if(mysqli_query($conn, $sql)){
    
     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Record updated successfully</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
 } else {
     echo "Error updating record: " . $conn->error;
 }
 


?>