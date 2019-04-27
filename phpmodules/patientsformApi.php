<?php
include ('conn.php');



// $id = $_SESSION["id"];

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
$FingerPrint = $_POST['fingerprint'];


$sql="INSERT INTO patient (fname, lname, mname, dob, sex, address, occupation, email, phone, fathersname, mothersname, nok, nok_phone, fingerprint)

VALUES

('{$fname}', '{$lname}', '{$mname}', '{$dob}',  '{$sex}','{$address}', '{$occupation}', '{$email}', '{$number}', '{$farthersname}', '{$mothersname}', '{$nok}', '{$nok_phone}', '{$FingerPrint}')";



$res = "";
  if(mysqli_query($conn, $sql)){
    
    $res = "Data entered successfully";
    // $lastInsertedPeopleId = $db->insert_id;
    
    $lastInsertedPeopleId = mysqli_insert_id($conn);
    $id = $lastInsertedPeopleId;
    if(file_exists('fingerprint_data.json'))  
           {  

                $current_data = file_get_contents('fingerprint_data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'id'               =>     $id,  
                     'fingerprint'      =>     $_POST['fingerprint'] 
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('fingerprint_data.json', $final_data))  
                { 

                     $message = "File Appended Success fully";  
                }  

           }
           else{
           
            $my_file = 'fingerprint_data.json';
            $handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
           }

  }else{
    $res = "Patient Entry Unsuccessful";
  }


  echo $res;
  echo $message;
  echo mysqli_error($conn);

  
  // $strJsonFileContents = file_get_contents("fingerprint_data.json");
  // echo $strJsonFileContents;
//   function getArray(){
//     return $getJSON('fingerprint_data.json');
// }

//   getArray().done(function(json){
 
//     for (var i = 0; i < json.length; i++){
      
//        var o = json[i];
//        echo o;
//        // {"date":"12/06/2014","day":"Tursday",...}
//        // now perform a check against `o['date']` or `o.date` and return the
//        // matching result
//     }
// });

  // Convert to array 
//   $array1 = json_decode($strJsonFileContents, true);
  // echo "new stuff";
//   var_dump($array);
//  print_r ($array1);
  
  // function CreatFile(){
    
  // }





// }
// else{

//   $feedback = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
//   <strong>Holy guacamole!</strong> Your Passwords do not match.
//   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//     <span aria-hidden="true">&times;</span>
//   </button>
// </div>';
// }

// echo $feedback;


// function checkUser ($Email, $phone){
//   include ('conn.php');
//   $query ="SELECT * FROM users where phonenumber ='{$phone}' AND email ='{$Email}' " ;
//    $result = mysqli_query($conn, $query);
  
//    if(!$result){
//    echo 'user check'.mysqli_error($conn);
//    }else{
//      if(mysqli_num_rows($result)>0){
//        return true;
//      }else{
//        return false;
//      }
//    }
  
//   }



// 
?>

