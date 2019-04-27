<?php
session_start();

include ('conn.php');



$id = $_SESSION['patient_id'];


$pregnant = "";
if (isset($_POST['pregnant'])){
  $pregnant = $_POST['pregnant'];
}


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

$bloodgroup = $_POST['bloodgroup'];
$surgery = "";
if(isset($_POST['surgery'])){
  $surgery = $_POST['surgery'];
}
$hivaids = "";
if(isset($_POST['hivaids'])){
$hivaids = $_POST['hivaids'];
}
$allergies = "";
if(isset($_POST['allergies']))
{
  $allergies = $_POST['allergies'];
}
$metalpins = "";
if(isset($_POST['metalpins']))
{
  $metalpins = $_POST['metalpins'];
}
$hernias = "";
if(isset($_POST['hernias']))
{
  $hernias = $_POST['hernias'];
}
$circulatory = "";
if(isset($_POST['circulatory']))
{
  $circulatory = $_POST['circulatory'];
}
$injury = "";
if(isset($_POST['injury']))
{
$injury = $_POST['injury'];
}
$liver = "";
if(isset($_POST['liver']))
{
  $liver = $_POST['liver'];
}
$skin = "";
if(isset($_POST['skin']))
{
  $skin = $_POST['skin'];
}
// $pregnant = isset($_POST['pregnant']);
$epilepsy = "";
if(isset($_POST['epilepsy']))
{
  $epilepsy = $_POST['epilepsy'];
}
$medication = "";
if(isset($_POST['medication']))
{
  $medication = $_POST['medication'];
}
$medical_details = $_POST['medical_details'];

$smoke = "";
if(isset($_POST['smoke']))
{
  $smoke = $_POST['smoke']; 
}
$drink = "";
if(isset($_POST['drink']))
{
  $smoke = $_POST['drink'];
}
$drugusage = "";
if(isset($_POST['drugusage']))
{
  $drugusage = $_POST['drugusage'];
}
$habits = "";
if(isset($_POST['habits']))
{
  $habits = $_POST['habits'];
}

$surgery_no = $_POST['surgeryno'];
$weight = $_POST['weight'];
$height = $_POST['height'];

// $backpains = isset($_POST['backpains']);
// $nervousdisorders = isset($_POST['nervousdisorders']);
// $threadveins = isset($_POST['threadveins']);

// $varicoseveins = isset($_POST['varicoseveins']);
// $brokencapillaries = isset($_POST['brokencapillaries']);
// $reducedreflexes = isset($_POST['reducedreflexes']);
$name = $_SESSION['name'];
$hospitalname = $_SESSION["hospitalname"];
$symptoms = $_POST['Symptoms'];

$history = $allergies.' '.$metalpins.' '.$hernias.' '.$circulatory.' '.$injury.' '.$liver.' '.$skin.' '.$epilepsy.' '.$medication;

$diag = $backpains.' '.$nervousdisorders.' '.$threadveins.' '.$varicoseveins.' '.$brokencapillaries.' '.$reducedreflexes.' '.$symptoms;

$habit = $smoke.' '.$drink.' '.$drugusage;

$query="INSERT INTO medicalhistory (bloodgroup, surgery, surgery_no, hiv, history, description, patient_patient_id)
VALUES
('{$bloodgroup}', '{$surgery}', '{$surgery_no}', '{$hivaids}', '{$history}', '{$medical_details}', '{$id}')";



$res = "";
echo $query;
  if(mysqli_query($conn, $query)){
    
    $res = "medicalhistory Data entery successfully";
  
    echo $res;
    $syntax="INSERT INTO checkups (pregnant, weight, height, syptoms, description, patient_patient_id, Doctor, Hospital)
    VALUES
    ('{$pregnant}', '{$weight}', '{$height}', '{$diag}', '{$symptoms}', '{$id}', '{$name}', '{$hospitalname}')";
    echo $syntax;
    
if(mysqli_query($conn, $syntax)){
    
  $res = "checkups Data entery successfully";
  
  echo $res;
  $syntaxh="INSERT INTO habits (habit, description, patient_patient_id)
  VALUES
  ('{$habit}', '{$habits}', '{$id}')";
  echo $syntaxh;
  if(mysqli_query($conn, $syntaxh)){
    
    $res = "habits Data entery successfully";
    echo $res; 
        
  }else{
    $res = "habits Data Entry Unsuccessful";
    echo $res; 
  }
      
}else{
  $res = "checkups Data Entry Unsuccessful";
  echo $res; 
}   
  }else{
    $res = "medicalhistory Data Entry Unsuccessful".mysqli_error($conn);
    echo $res; 
  }

  
?>
