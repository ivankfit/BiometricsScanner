
<?php
session_start();
include ('phpmodules/conn.php');

$id = $_SESSION["patient_id"];
$user = $_SESSION['user'];
////// variables 

$fname = "";
$lname = "";
$mname = "";
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

$bloodgroup = "";
$surgery = "";
$hivaids = "";
$surgery_no = "";
$history = "";
$desc = "";

$habit = "";
$habits = "";

$time = "";
$weight = "";
$height = "";
$pregnant = "";
$symptoms = "";
$description = "";

     


$sql1 = "SELECT * FROM patient WHERE patient_id = '{$id}'";
$sql2 = "SELECT * FROM medicalhistory WHERE patient_patient_id = '{$id}'";
$sql3 = "SELECT * FROM habits WHERE patient_patient_id = '{$id}'";
$sql4 = "SELECT * FROM checkups WHERE patient_patient_id = '{$id}'";



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

  <!-- Custom styles for this template-->
  <link href="css/info.css" rel="stylesheet">
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
            <a href="#">Diagonosis</a>
          </li>
          <li class="breadcrumb-item active">Personal medical Information</li>
        </ol>

        <!--Personal-Basic-Information-forms-Row-->
        <div class="row">
                <div class="col-lg-12">
<?php
$result = mysqli_query($conn,$sql1);
if (mysqli_num_rows($result)>0){
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 



                       echo '<div class="card">
                          <div class="card-body app-heading">
                            <div class="row">
                              <div class="col-md-2">
                                <i class="fas fa-user-circle fa-fw" style="font-size: 84px;color: #007bff;"></i>    
                              </div>
                              <div class="col-md-3">
                                <div class="app-title">
                                  <div class="title" id="name"><span class="highlight" style="font-size: 20px;">'.$row['fname'].' '.$row['mname'].' '.$row['lname'].'</span></div>
                                  <div class="description"><i class="icon fa fa-suitcase"></i><span class="highlight"> '.$row['occupation'].'</span></div>
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
                                      <td style="border:0;"><span class="highlight"> '.$row['phone'].'</span>
                                        <br>
                                        <span class="highlight"> '.$row['email'].'</span>
                                      </td>
                                      <td style="border:0;"><i class="icon fa fa-child"></i>
                                        <br><i class="icon fa fa-venus-mars"></i>
                                      </td>
                                      <td style="border:0;"><span class="highlight">'.$row['dob'].'</span>
                                        <br><span class="highlight">'.$row['sex'].'</span>
                                      </td>
                                      <td style="border:0;">
                                        <i class="icon fa fa-map-marker"></i>
                                      </td>
                                      <td style="border:0;"><span class="highlight">'.$row['address'].'</span></td>
                                    </tr>
            
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>';
                    }
?>
           
        </div>
        <!--/.forms-Row-->

        <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-tab" data-spy="scroll" data-target="#syptoms" data-offset="50">
                        <div class="card-body no-padding tab-content">
                            <div role="tabpanel" class="tab-pane active" id="tab1">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                      <div class="section">
                                          <div class="section-title"><i class="icon fa fa-user" aria-hidden="true"></i> Medical
                                          Information</div>
                                          <div class="section-body __indent">
                                            <?php
                                               $result = mysqli_query($conn,$sql2);
                                              if (mysqli_num_rows($result)>0){
                                                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                                                  echo '<p><strong>Blood Group: </strong> '.$row['bloodgroup'].' <strong> HIV / AIDS: </strong> '.$row['hiv'].' 
                                                  <br><strong>Number of Surgeries: </strong> '.$row['surgery_no'].'

                                                  </p>
                                                  <p>'.$row['history'].'</p>
                                                  <p>'.$row['description'].'</p>';
                                              }
                                            ?>
                                          </div>
                                      </div>
                                      <div class="section">
                                          <div class="section-title"><i class="icon fa fa-book" aria-hidden="true"></i> More relevant
                                          information</div>
                                          <div class="section-body __indent">
                                            <?php
                                            $result = mysqli_query($conn,$sql3);
                                            if (mysqli_num_rows($result)>0){
                                            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                                            echo '<p><strong>Habits: </strong> <br>'.$row['habit'].'</p>

                                            <p>'.$row['description'].'</p>';
                                            }
                                            ?>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                      <div class="section">
                                          <div class="section-title">Medical History

                                          </div>
                                            <div class="bs-docs-example" style="padding-bottom: 24px;">

                                            
                                              <form class="form-inline">
                                                  <a data-toggle="modal" data-target="#medModal" class="btn btn-large btn-danger" rel="popover"
                                                  data-original-title="A Title"><i class="fa fa-plus" style="color:#fff;"></i></a>
                                                  <div class="col-md-3">
                                                  <div class="form-label-group">
                                                      <input type="date" id="from" class="form-control" placeholder="From"
                                                      style="display:none;>
                                                      <label for="from">Add diagnosis notes</label>
                                                  </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                  <div class="form-label-group">
                                                      <input type="date" id="to" class="form-control" placeholder="To" style="display:none;>
                                                      <label for="to"></label>
                                                  </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                  <a data-toggle="modal" data-target="#printModal"  class="btn btn-large btn-danger" rel="popover" 
                                                      data-original-title="A Title"><i class="fa fa-print" style="color:#fff;"></i></a> </div>
                                              </form>
                                            </div>
                                            <div id="syptoms" class="section-body">
                                              <?php
                                              $raw_results = mysqli_query($conn,$sql4);
                                                while($results = mysqli_fetch_array($raw_results)){ // if one or more rows are returned do following
                                                
                                                
                                                
                                                // $time = $results['Date_time_saved'];
                                                $time = date("Y-m-d h:iA", strtotime($results['Date_time_saved']));
                                                $weight = $results['weight'];
                                                $height = $results['height'];
                                                $pregnant = $results['pregnant'];
                                                $symptoms = $results['syptoms'];
                                                $description = $results['description'];
                                                $hospitalname = $results["Hospital"];
                                                $name = $results['Doctor'];



                                                echo '<div class="media social-post">
                                                <div class="media-body">
                                                <div class="media-heading">
                                                <h4 class="title">'.$time.'</h4>
                                                <h5 class="timeing">'.$user.' '.$name.' <span class="highlight">-'.$hospitalname.' </span></h5>
                                                </div>
                                                <div class="media-content">
                                                '.$symptoms.'
                                                <p>'.$description.'</p>
                                                </div>
                                                </div>
                                                </div>';
                                              }
                                              ?>

                                            </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            <!--/.rows to display patients data-->
        </div>

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

  <!-- Medical Modal-->
  <div class="modal fade" id="medModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          
        <!--Medical-history-forms-Row-->
          
          <div class="col-md-12" style="margin-bottom: 20px;">
            <div class="card">
              <div class="card-header">
                More relevant Medical Information.
              </div>
              <div class="card-body">

                <form id="symptoms" method="post">
                  <div class="form-group">
                    <div class="form-row">
                      <!-- <div class="col-md-4">
                        <div class="form-label-group">
                          <input type="text" id="surgeryno" name="surgeryno" class="form-control"
                            placeholder="No of Surgeries">
                          <label for="surgeryno">No of Surgeries</label>
                        </div>
                      </div> -->
                      <div class="col-md-6">
                        <div class="form-label-group">
                          <input type="text" id="weight" name="weight" class="form-control" placeholder="Weight">
                          <label for="weight">Weight</label>
                        </div>
                      </div>
                      <div class="col-md-6">
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


                      <div class="col-md-8">
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
                      <div class="col-md-4">
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
                        <div>
                          <div class="checkbox">
                            <input type="checkbox" id="other" value="other" name="other">
                            <label for="other">
                             Other
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
                      <button type="submit" id="patientseditbutton" class="btn btn-primary col-md-12">Save</button>
                    </div>
                  </div>
                </form>
                <div id="messageHandler" class="row">
                  
                </div>
              </div>
            </div>
          </div>
        <!--/.Medical-history-forms-Row-->

        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- print Modal-->
  <div class="modal fade" id="printModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Print View</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          
        <!--Medical-history-forms-Row-->
          
          <div class="col-md-12" style="margin-bottom: 20px;">
            <div class="card">
              <div class="card-body">

                <form id="symptoms" method="post">
                  <div class="row">
                  <div id="printdiag" class="card" style="padding: 25px;">
                  <?php
                                              $raw_results = mysqli_query($conn,$sql4);
                                                while($results = mysqli_fetch_array($raw_results)){ // if one or more rows are returned do following
                                                
                                                
                                                
                                               
                                                $time = date("Y-m-d h:iA", strtotime($results['Date_time_saved']));
                                                $weight = $results['weight'];
                                                $height = $results['height'];
                                                $pregnant = $results['pregnant'];
                                                $symptoms = $results['syptoms'];
                                                $description = $results['description'];
                                                $hospitalname = $results["Hospital"];
                                                $name = $results['Doctor'];



                                                echo '<div class="media social-post">
                                                <div class="media-body">
                                                <div class="media-heading">
                                                <h4 class="title">'.$time.'</h4>
                                                <h5 class="timeing">'.$user.' '.$name.' <span class="highlight">-'.$hospitalname.' </span></h5>
                                                </div>
                                                <div class="media-content">
                                                '.$symptoms.'
                                                <p>'.$description.'</p>
                                                </div>
                                                </div>
                                                </div>';
                                              }
                                              ?>
                  </div>

                  </div>
                  <br>
                  <br>
                    <div class="col-md-12">
                      <button type="submit" id="printbtn" class="btn btn-primary col-md-12">Print</button>
                    </div>
                  </div>
                </form>
                <div id="messageHandler" class="row">
                  
                </div>
              </div>
            </div>
          </div>
        <!--/.Medical-history-forms-Row-->

        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">close</button>
        </div>
      </div>
    </div>
  </div>

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

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <script>

    var patient_id = '<?php echo json_encode($_SESSION["patient_id"]);?>'
    console.log(patient_id);
  
  </script>
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