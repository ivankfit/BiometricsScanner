<?php
include ('conn.php'); 

$sql = "SELECT patient_id, fingerprint FROM patient";
$results = mysqli_query($conn, $sql);
$number=mysqli_num_rows($results);

$i;
$data = array();
for($i=1;$i<=$number; ){
      $sql = "SELECT patient_id, fingerprint FROM patient WHERE patient_id=$i";	
      $results = mysqli_query($conn, $sql);
      $row= mysqli_fetch_array ($results,MYSQLI_ASSOC);
      $data[]=$row;
      // fingerprintdata($row['fingerprint']);
      $i++;
      
    }

echo json_encode($data);


?>