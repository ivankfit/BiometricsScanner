<?php

session_start();

include ('conn.php');
$feedback = "";

$user = $_SESSION['user'];

         $sql = "SELECT * FROM patient";
         $raw_results = mysqli_query($conn, $sql) or die(mysqli_error());
             
   

        if(mysqli_num_rows($raw_results) > 0){ 
            // if one or more rows are returned do following
            if ($user == "Adiministartor"){
                
            while($results = mysqli_fetch_array($raw_results,MYSQLI_ASSOC)){
                // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
            
               
                // magic happens
                echo '
                    <tr>
                      <td>'.$results['fname'].' '.$results['mname'].' '.$results['lname'].'</td>
                      <td>'.$results['dob'].'</td>
                      <td>'.$results['sex'].'</td>
                      <td>'.$results['address'].'</td>
                      <td>'.$results['occupation'].'</td>
                      <td>'.$results['email'].'</td>
                      <td>'.$results['phone'].'</td>
                      <td>'.$results['fathersname'].'</td>
                      <td>'.$results['mothersname'].'</td>
                      <td>'.$results['nok'].'</td>
                      <td>'.$results['nok_phone'].'</td>
                      <td><a href="editpatients.php?id='.$results['patient_id'].'"><button class="btn" style="padding: 2px;text-align: center;vertical-align: middle;color: #007bff;background-color: #fff;"><i class="fa fa-edit"></i></button></a></td>
                      <td></td>
                    </tr>\n
                 
                
                <!-- Bootstrap core JavaScript-->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
              
                <!-- Core plugin JavaScript-->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
              
                <!-- Page level plugin JavaScript-->
                <script src="vendor/datatables/jquery.dataTables.js"></script>
                <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
              
                <!-- Custom scripts for all pages-->
                <script src="js/sb-admin.min.js"></script>
              
                <!-- Demo scripts for this page-->
                <script src="js/demo/datatables-demo.js"></script>
                <script src="js/main.js"></script>

                <!--patient-basic-data-table-->

                
                ';
            }
        }else if($user == "Doctor"){
            while($results = mysqli_fetch_array($raw_results,MYSQLI_ASSOC)){
                // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
            
               
                // magic happens
                echo '
                    <tr>
                      <td>'.$results['fname'].' '.$results['mname'].' '.$results['lname'].'</td>
                      <td>'.$results['dob'].'</td>
                      <td>'.$results['sex'].'</td>
                      <td>'.$results['address'].'</td>
                      <td>'.$results['occupation'].'</td>
                      <td>'.$results['email'].'</td>
                      <td>'.$results['phone'].'</td>
                      <td>'.$results['fathersname'].'</td>
                      <td>'.$results['mothersname'].'</td>
                      <td>'.$results['nok'].'</td>
                      <td>'.$results['nok_phone'].'</td>
                      <td><a href="data.php?id='.$results['patient_id'].'"><button class="btn" style="padding: 2px;text-align: center;vertical-align: middle;color: #007bff;background-color: #fff;"><i class="fa fa-edit"></i></button></a></td>
                      <td><a href="diagnosis.php?id='.$results['patient_id'].'"><button class="btn" style="padding: 2px;text-align: center;vertical-align: middle;color: #007bff;background-color: #fff;"><i class="fa fa-eye"></i></button></a></td>
                    </tr>\n
                 
                
                <!-- Bootstrap core JavaScript-->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
              
                <!-- Core plugin JavaScript-->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
              
                <!-- Page level plugin JavaScript-->
                <script src="vendor/datatables/jquery.dataTables.js"></script>
                <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
              
                <!-- Custom scripts for all pages-->
                <script src="js/sb-admin.min.js"></script>
              
                <!-- Demo scripts for this page-->
                <script src="js/demo/datatables-demo.js"></script>
                <script src="js/main.js"></script>

                <!--patient-basic-data-table-->

                
                ';
            }
        }else if($user == "Receptionist"){
            while($results = mysqli_fetch_array($raw_results,MYSQLI_ASSOC)){
                // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
            
               
                // magic happens
                echo '
                    <tr>
                      <td>'.$results['fname'].' '.$results['mname'].' '.$results['lname'].'</td>
                      <td>'.$results['dob'].'</td>
                      <td>'.$results['sex'].'</td>
                      <td>'.$results['address'].'</td>
                      <td>'.$results['occupation'].'</td>
                      <td>'.$results['email'].'</td>
                      <td>'.$results['phone'].'</td>
                      <td>'.$results['fathersname'].'</td>
                      <td>'.$results['mothersname'].'</td>
                      <td>'.$results['nok'].'</td>
                      <td>'.$results['nok_phone'].'</td>
                      <td><a href="editpatients.php?id='.$results['patient_id'].'"><button class="btn" style="padding: 2px;text-align: center;vertical-align: middle;color: #007bff;background-color: #fff;"><i class="fa fa-edit"></i></button></a></td>
                      <td><a><button class="btn" style="padding: 2px;text-align: center;vertical-align: middle;color: #007bff;background-color: #fff;"><i class="fa fa-eye"></i></button></a></td>
                    </tr>\n
                 
                
                <!-- Bootstrap core JavaScript-->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
              
                <!-- Core plugin JavaScript-->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
              
                <!-- Page level plugin JavaScript-->
                <script src="vendor/datatables/jquery.dataTables.js"></script>
                <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
              
                <!-- Custom scripts for all pages-->
                <script src="js/sb-admin.min.js"></script>
              
                <!-- Demo scripts for this page-->
                <script src="js/demo/datatables-demo.js"></script>
                <script src="js/main.js"></script>

                <!--patient-basic-data-table-->

                
                ';
            }
        }

            // echo json_encode($dataperson);
            //  echo $feedback;
        }

        
        else{ // if there is no matching rows do following
            echo "No results";
        }
    

?>