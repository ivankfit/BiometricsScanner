<?php
session_start(); 
include ('conn.php');
# read up on session.auto_start



$id = $_SESSION["id"];
$sex = $_POST['sex'];
$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$mname = $_POST['middleName'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$occupation = $_POST['occupation'];
$email = $_POST['email1'];
$number = $_POST['phonenumber'];
$farthersname = $_POST['farthersname'];
$mothersname = $_POST['mothersname'];
$nok = $_POST['nok'];
$nok_phone = $_POST['nokno'];

$sql = "UPDATE patient SET fname='{$fname}', lname='{$lname}', mname='{$mname}', dob='{$dob}', sex='{$sex}', address='{$address}', occupation='{$occupation}', email='{$email}', phone='{$number}', fathersname='{$farthersname}', mothersname='{$mothersname}', nok='{$nok}', nok_phone='{$nok_phone}' WHERE patient_id='{$id}'";

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