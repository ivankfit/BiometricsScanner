<?php
session_start(); 
include ('conn.php');




$id = $_SESSION["id"];
$pregnant = "";
if (isset($_POST['pregnant'])){
  $pregnant = $_POST['pregnant'];
}

// $surgery_no = $_POST['surgeryno'];
$weight = $_POST['weight'];
$height = $_POST['height'];

$backpains = "";
if (isset($_POST['backpains'])){
  $backpains = $_POST['backpains'];
}
$nervousdisorders = "";
if (isset($_POST['nervousdisorders'])){
  $nervousdisorders = $_POST['nervousdisorders'];
}
$threadveins = "";
if (isset($_POST['threadveins'])){
  $threadveins = $_POST['threadveins'];
}

$varicoseveins = "";
if (isset($_POST['varicoseveins'])){
  $varicoseveins = $_POST['varicoseveins'];
}
$brokencapillaries = "";
if (isset($_POST['brokencapillaries'])){
  $brokencapillaries = $_POST['brokencapillaries'];
}
$reducedreflexes = "";
if (isset($_POST['reducedreflexes'])){
  $reducedreflexes = $_POST['reducedreflexes'];
}
$other = "";
if (isset($_POST['other'])){
  $other = $_POST['other'];
}
$symptoms = $_POST['Symptoms'];

$diag = $backpains." ".$nervousdisorders." ".$threadveins." ".$varicoseveins." ".$brokencapillaries." ".$reducedreflexes." ".$other;



$syntax="INSERT INTO checkups (pregnant, weight, height, syptoms, description, patient_patient_id )
VALUES
('{$pregnant}', '{$weight}', '{$height}', '{$diag}', '{$symptoms}', '{$id}')";





        if(mysqli_query($conn, $syntax)){
    
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>symptoms updated successfully
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
        }else{
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>symptoms updated unsuccessfully
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>'.mysqli_error($conn);
        }

  





?>

