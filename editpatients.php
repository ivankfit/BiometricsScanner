
<?php
session_start();
include ('phpmodules/conn.php');
$id = $_GET['id'];

$_SESSION["id"] = $id;
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



$sql = "SELECT * FROM patient WHERE (`patient_id` LIKE '%".$id."%')";
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
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
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
            <a href="#">Add patients</a>
          </li>
          <li class="breadcrumb-item active">Add - Edit patients</li>
        </ol>

        <!--Personal-Basic-Information-forms-Row-->
        <div class="row">

          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                Patients Basic Information
              </div>
              <div class="card-body">
                <form id="patientsbasicinfo" method="post">
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-6">
                        <div class="form-label-group">
                          <input type="text" id="firstName" name="firstName" class="form-control"
                            placeholder="First Name" value="<?php echo $fname; ?>" required="required" autofocus="autofocus">
                          <label for="firstName">First Name</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-label-group">
                          <input type="text" id="lastName" name="lastName" class="form-control" value="<?php echo $lname; ?>" placeholder="Last Name"
                            required="required" autofocus="autofocus">
                          <label for="lastName">Last name</label>
                        </div>
                      </div>


                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-6">
                        <div class="form-label-group">
                          <input type="text" id="middleName" name="middleName" value="<?php echo $mname; ?>" class="form-control"
                            placeholder="Middle name" required="required">
                          <label for="middleName">Middle Name</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-label-group">
                          <input type="date" id="dob" name="dob" value="<?php echo $dob; ?>" class="form-control" placeholder="Date of Birth"
                            required="required">
                          <label for="dob">Date of Birth</label>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="dataTables_length" id="dataTable_length">
                          <select id="sex" name="sex" aria-controls="dataTable"
                            class="custom-select custom-select-sm form-control form-control-sm">
                            <option name="sex" value="<?php echo $sex; ?>" ><?php echo $sex; ?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-6">
                        <div class="form-label-group">
                          <input type="text" id="address" name="address" value="<?php echo $address; ?>" class="form-control" placeholder="Address"
                            required="required">
                          <label for="address">Address</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-label-group">
                          <input type="text" id="occupation" name="occupation" value="<?php echo $occupation; ?>" class="form-control"
                            placeholder="Occupation" required="required">
                          <label for="occupation">Occupation</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                Contacts
              </div>
              <div class="card-body">

                <form id="contacts" method="post">
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-6">
                        <div class="form-label-group">
                          <input type="text" id="inputEmail" name="email1" value="<?php echo $email; ?>" class="form-control" placeholder="Email"
                            required="required" autofocus="autofocus">
                          <label for="inputEmail">Email</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-label-group">
                          <input type="text" id="phonenumber" name="phonenumber" value="<?php echo $phone; ?>" class="form-control"
                            placeholder="Phone Number" required="required">
                          <label for="phonenumber">Phone Number</label>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-6">
                        <div class="form-label-group">
                          <input type="text" id="farthersname" name="farthersname" value="<?php echo $fathersname ?>" class="form-control"
                            placeholder="Farthers Name" required="required">
                          <label for="farthersname">Farthers Name</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-label-group">
                          <input type="text" id="mothersname" name="mothersname" value="<?php echo $mothersname; ?>" class="form-control"
                            placeholder="Mothers Name" required="required">
                          <label for="mothersname">Mothers Name</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-6">
                        <div class="form-label-group">
                          <input type="text" id="nok" name="nok" value="<?php echo $nok; ?>" class="form-control" placeholder="Next of Kean-Name"
                            required="required">
                          <label for="nok">Next of Kin</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-label-group">
                          <input type="text" id="nokno" name="nokno" value="<?php echo $nok_no; ?>" class="form-control"
                            placeholder="Next of Kean-Phone Number" required="required">
                          <label for="nokno">Next of Kin-PhoneNumber</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
        </div>
          </div>
        <div class="row">
                <button id="update" class="btn btn-danger" style="margin-left:45%">Up date</button>
              </div>
        <div id="messagehandler">
        </div>
        <!--/.forms-Row-->

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

</body>

</html>