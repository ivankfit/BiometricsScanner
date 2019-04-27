<?php
include ('conn.php');
$feedback = "";


$User = $_POST['user'];
$HospitalName = $_POST['hospitalname'];
$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$Email = $_POST['email'];
$number = $_POST['phonenumber'];
$pass = $_POST['inputPassword'];
$conpass = $_POST['confirmPassword'];


$sql="INSERT INTO users (user, hospitalname, firstname, lastname, password, email, phonenumber)

VALUES

('{$User}', '{$HospitalName}', '{$fname}', '{$lname}',  '{$pass}','{$Email}', '{$number}')";

if ($pass == $conpass){
  
  if(checkUser ($Email,$number)){

    $feedback = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> User exists.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';

  }else{
    if (mysqli_query($conn, $sql)) {
      $feedback =  " New record created successfully";
      
    } else {
      $feedback = "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

  }



}
else{

  $feedback = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> Your Passwords do not match.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}

echo $feedback;


function checkUser ($Email, $phone){
  include ('conn.php');
  $query ="SELECT * FROM users where phonenumber ='{$phone}' AND email ='{$Email}' " ;
   $result = mysqli_query($conn, $query);
  
   if(!$result){
   echo 'user check'.mysqli_error($conn);
   }else{
     if(mysqli_num_rows($result)>0){
       return true;
     }else{
       return false;
     }
   }
  
  }



?>

