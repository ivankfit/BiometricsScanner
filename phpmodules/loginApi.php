<?php
session_start();
include ('conn.php');
$res = array();


$email = $_POST['email'];
$pass = $_POST['password'];

$dataperson = array();
$query = "SELECT * from users where email='{$email}' AND password  ='{$pass}'";

$result = mysqli_query($conn,$query);
if(!$result){
    $res[] = 'an error'.mysqli($conn);
}else{
    if (mysqli_num_rows($result)>0){
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $_SESSION["hospitalname"] = $row['hospitalname'];
        $_SESSION["user"] = $row['user'];
        $_SESSION["name"] = $row['firstname'].' '.$row['lastname'];
        $dataperson[] = $row;
        $res = $dataperson;
     

    }else {
        $res[] =  'noneexist'; 
    }

 echo json_encode($res);
}

?>