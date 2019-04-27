<?php
session_start();
include ('phpmodules/conn.php');
$_SESSION['patient_id'] = $_GET['id'];


////// variables 

$fname = "";
$lname = "";
$sex = "";
$dob = "";
$address = "";
$occupation = "";
$email = "";
$phone = "";
$fathersname = "";
$mothersname = "";
$nok = "";
$nok_no = "";



$sql = "SELECT * FROM patient WHERE (`patient_id` LIKE '%".$_SESSION['patient_id']."%')";
$raw_results = mysqli_query($conn, $sql) or die(mysqli_error());
$data="";

        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
           $results = mysqli_fetch_array($raw_results,MYSQLI_ASSOC);
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
            
            $fname = $results['fname'];
            $lname = $results['lname'];
            $mname = $results['mname'];
            $dob = $results['dob'];
            $sex = $results['sex'];
            $address = $results['address'];
            $occupation = $results['occupation'];
            $email = $results['email'];
            $phone = $results['phone'];
            $fathersname = $results['fathersname'];
            $mothersname = $results['mothersname'];
            $nok = $results['nok'];
            $nok_no = $results['nok_phone'];

          
      
          }
          
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BIRMS - Add Patient</title>

  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="home.php">BIOMETRIC IDENTIFICATION AND RECORDS MANAGEMENT SYSTEM</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" id="patientsearch"
      method="post">
      <!-- <div class="input-group">
        <input type="text" id="query" class="form-control" placeholder="Search for..." name="query" aria-label="Search"
          aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" id="search" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div> -->
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
    <li class="nav-item dropdown no-arrow">
        <a id="navbar" class="nav-link">
        </a>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a id="navbar1" class="nav-link">
        </a>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a id="navbar2" class="nav-link">
        </a>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="patientsform.html">
          <i class="fas fa-fw fa-user"></i>
            <span>Add patient</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="home.php">
            <i class="fas fa-fw fa-table"></i>
              <span>View patients</span>
            </a>
        </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="index.html">Login</a>
          <a class="dropdown-item" href="register.html">Register</a>
          <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item active" href="blank.html">Add Patient</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="testfingerprint.php">
          <i class="fas fa-fw fa-camera"></i>
          <span>Scan</span>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li> -->
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Medical form</a>
          </li>
          <li class="breadcrumb-item active">Medical information</li>
        </ol>

        <!--Personal-Basic-Information-forms-Row-->
        <div class="row">
                <div class="col-lg-12">
                        <div class="card">
                          <div class="card-body app-heading">
                            <div class="row">
                              <div class="col-md-2">
                              <i class="fas fa-user-circle fa-fw" style="font-size: 84px;color: #007bff;"></i>    
                            </div>
                              <div class="col-md-3">
                                <div class="app-title">
                                  <div class="title" id="name"><span class="highlight" style="font-size: 20px;"><?php echo $fname; ?> <?php echo $mname; ?> <?php echo $lname; ?></span></div>
                                  <div class="description"><i class="icon fa fa-suitcase"></i><span class="highlight"> <?php echo $occupation; ?></span></div>
                                </div>
                              </div>
                              <div class="col-md-7">
                                <table id="info" class="table">
                                  <tbody>
                                    <tr>
                                      <th scope="row" style="border:0;"><i class="icon fa fa-phone"></i>
                                        <br>
                                        <i class="icon fa fa-envelope"></i>
                                      </th>
                                      <td style="border:0;"><span class="highlight"> <?php echo $phone; ?></span>
                                        <br>
                                        <span class="highlight"> <?php echo $email; ?></span>
                                      </td>
                                      <td style="border:0;"><i class="icon fa fa-child"></i>
                                        <br><i class="icon fa fa-venus-mars"></i>
                                      </td>
                                      <td style="border:0;"><span class="highlight"><?php echo $dob; ?></span>
                                        <br><span class="highlight"><?php echo $sex; ?></span>
                                      </td>
                                      <td style="border:0;">
                                        <i class="icon fa fa-map-marker"></i>
                                      </td>
                                      <td style="border:0;"><span class="highlight"><?php echo $address; ?></span></td>
                                    </tr>
            
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
           
        </div>
        <!--/.forms-Row-->

        <!--Medical-history-forms-Row-->
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                Medical History
              </div>
              <div class="card-body">

                <form id="medicalhistory" method="post">
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-6">
                        <div class="dataTables_length" id="dataTable_length">
                          <select id="bloodgroup" name="bloodgroup" aria-controls="dataTable"
                            class="custom-select custom-select-sm form-control form-control-sm">
                            <option name="bloodgroup">Blood Group Type</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                          </select>
                        </div>
                        <div>
                          <div class="checkbox">
                            <input type="checkbox" id="surgery" name="surgery" value="surgery">
                            <label for="surgery">
                              Any surgery within last 5 years
                            </label>
                          </div>
                          <div class="checkbox">
                            <input type="checkbox" id="allergies" name="allergies" value="allergies">
                            <label for="allergies">
                              Allergies
                            </label>
                          </div>
                        </div>
                        <div>
                          <div class="checkbox">
                            <input type="checkbox" id="metal" name="metalpins" value="metal-pin/plate">
                            <label for="metal">
                              Any metal pins or
                            </label>
                            plates as a result of surgery
                          </div>
                        </div>
                        <div>
                          <div class="checkbox">
                            <input type="checkbox" id="hernias" name="hernias" value="Hernia">
                            <label for="hernias">
                              Any Hernias known
                            </label>
                          </div>
                          <div class="checkbox">
                            <input type="checkbox" id="circulatory" name="circulatory" value="circulatory">
                            <label for="circulatory">
                              Any circulatory problems,
                            </label>
                            Thrombosis etc
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div>
                          <div class="checkbox">
                            <input type="checkbox" id="injury" name="injury" value="Major-Illness/injury">
                            <label for="injury">
                              Major Illness / injury
                            </label>
                          </div>
                          <div class="checkbox">
                            <input type="checkbox" id="liver" name="liver" value="Liver/Kidney-ailments">
                            <label for="liver">
                              Liver / Kidney ailments
                            </label>
                          </div>
                        </div>
                        <div>
                          <div class="checkbox">
                            <input type="checkbox" id="skin" name="skin" value="Skin-Diseases/disorders">
                            <label for="skin">
                              Skin Diseases / disorders
                            </label>
                          </div>
                          <div class="checkbox">
                            <input type="checkbox" id="hivaids" name="hivaids" value="Positive">
                            <label for="hivaids">
                              HIV / AIDS positive
                            </label>
                          </div>
                        </div>
                        <div>
                          <div class="checkbox">
                            <input type="checkbox" id="epilepsy" name="epilepsy" value="Epilepsy">
                            <label for="epilepsy">
                              Epilepsy
                            </label>
                          </div>
                          <div class="checkbox">
                            <input type="checkbox" id="medication" name="medication" value="On Medication">
                            <label for="medication">
                              Are you currently taking
                            </label>
                            any form of medication
                          </div>
                        </div>
                      </div>


                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-12">

                        <label for="middlename">Please give further details of you have ticked any of the above:</label>
                        <div class="form-group">
                          <textarea name="medical_details" rows="3" class="form-control"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="form-row">

                      <div class="col-md-12">

                        <label>Habits</label>
                        <hr>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-4">
                        <div>
                          <div class="checkbox">
                            <input type="checkbox" id="smoke" value="Smoking" name="smoke">
                            <label for="smoke">
                              Smoke
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div>
                          <div class="checkbox">
                            <input type="checkbox" id="drink" value="Drinking" name="drink">
                            <label for="drink">
                              Drink
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div>
                          <div class="checkbox">
                            <input type="checkbox" id="drugusage" value="Drug Usage-other" name="drugusage">
                            <label for="drugusage">
                              Any other Usage
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-12">

                        <label>Please give further details of you have ticked any of the above:</label>
                        <div class="form-group">
                          <textarea name="habits" rows="3" class="form-control"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-6" style="margin-bottom: 20px;">
            <div class="card">
              <div class="card-header">
                More relevant Medical Information.
              </div>
              <div class="card-body">

                <form id="more" method="post">
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-4">
                        <div class="form-label-group">
                          <input type="text" id="surgeryno" name="surgeryno" class="form-control"
                            placeholder="No of Surgeries">
                          <label for="surgeryno">No of Surgeries</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-label-group">
                          <input type="text" id="weight" name="weight" class="form-control" placeholder="Weight">
                          <label for="weight">Weight</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-label-group">
                          <input type="text" id="height" name="height" class="form-control" placeholder="Height">
                          <label for="height">Height</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="form-row">

                      <div class="col-md-12">

                        <label>Symptoms</label>
                        <hr>
                        <label>Do you suffer from any of the following: (please tick)</label>
                        <hr>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="form-row">


                      <div class="col-md-6">
                        <div>
                          <div class="checkbox">
                            <input type="checkbox" id="pregnant" name="pregnant" value="Pregnant">
                            <label for="pregnant">
                              Pregnant
                            </label>
                          </div>
                          <div class="checkbox">
                            <input type="checkbox" id="backpains" value="Back-pains" name="backpains">
                            <label for="backpains">
                              Back pains
                            </label>
                          </div>
                          <div class="checkbox">
                            <input type="checkbox" id="nervousdisorders" value="Nervous-disorders"
                              name="nervousdisorders">
                            <label for="nervousdisorders">
                              Nervous disorders
                            </label>
                          </div>
                        </div>
                        <div>
                          <div class="checkbox">
                            <input type="checkbox" id="threadveins" value="Thread-veins" name="threadveins">
                            <label for="threadveins">
                              Thread veins
                            </label>
                          </div>
                        </div>
                        <div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div>
                          <div class="checkbox">
                            <input type="checkbox" id="varicoseveins" value="Varicose-veins" name="varicoseveins">
                            <label for="varicoseveins">
                              Varicose veins
                            </label>
                          </div>
                          <div class="checkbox">
                            <input type="checkbox" id="brokencapillaries" value="Broken-capillaries"
                              name="brokencapillaries">
                            <label for="brokencapillaries">
                              Broken capillaries
                            </label>
                          </div>
                        </div>
                        <div>
                          <div class="checkbox">
                            <input type="checkbox" id="reducedreflexes" value="Reduced reflexes" name="reducedreflexes">
                            <label for="reducedreflexes">
                              Reduced reflexes
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-12">

                        <label>Please give further details of you have ticked any of the above:</label>
                        <div class="form-group">
                          <textarea name="Symptoms" rows="3" class="form-control"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">

                      <div class="col-md-12">

                        <label>Save,</label>

                        <label>Please check and confirm if its the right information and save.</label>
                        <hr>
                      </div>
                    </div>
                  </div>
                  <div id="save" class="form-group">
                    <div class="col-md-12">
                      <button type="" id="medformbutton" class="btn btn-primary col-md-12">Save</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--/.Medical-history-forms-Row-->
          <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="index.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>
  <script src="./js/main.js"></script>
  <script>
function titlebar() {
        console.log("working")
        var data = "";
        $.ajax({
            url: './phpmodules/sessionsApi.php?',
            method: 'POST',
            data: data,
            success: function (response) {
              var data = JSON.parse(response);
              $('#navbar').empty();
                $('#navbar').append(data[0]+" /");
              $('#navbar1').empty();
                $('#navbar1').append(data[1]+" /");
              $('#navbar2').empty();
                $('#navbar2').append(data[2]);
    
           
            }
           
        });
    
    }


  window.onload = function(e){ 
    titlebar();
    console.log("window.onload"); 
}
</script> 

</body>

</html>