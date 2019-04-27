<?php
session_start();
include ('phpmodules/conn.php');

$id = $_GET['id'];
$_SESSION['userid'] = $id;
////// variables 

$firstname = "";
$lastname = "";
$user = "";
$hospital = "";
$password = "";
$email = "";
$phonenumber = "";

     


$sql = "SELECT * FROM users WHERE user_id = '{$id}'";
$raw_results = mysqli_query($conn, $sql) or die(mysqli_error());
$data="";
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
           $results = mysqli_fetch_array($raw_results,MYSQLI_ASSOC);
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
            
            $firstname = $results['firstname'];
            $lastname = $results['lastname'];
            $user = $results['user'];
            $hospital = $results['hospitalname'];
            $password = $results['password'];
            $email = $results['email'];
            $phonenumber = $results['phonenumber'];

          
      
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

  <title>BIRMS - Dashboard</title>

  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

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
        <input type="text" id="query" class="form-control" placeholder="Search for..." name="query" aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" id="search" type="submit">
            <i class="fas fa-search"></i>
          </button> -->
      </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0" style="float:right;">
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
          <!-- <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a> 
          <div class="dropdown-divider"></div>-->
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li id="side" class="nav-item">

      </li>
      <li id="side1" class="nav-item">

      </li>
      <li class="nav-item">
        <a class="nav-link" href="patientsform.html">
          <i class="fas fa-fw fa-user"></i>
          <span>Add patient</span>
        </a>
      </li>
      <li class="nav-item active">
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
          <a class="dropdown-item" data-toggle="modal" data-target="#addpatientModal">Add patient</a>
          <a class="dropdown-item" href="patientsform.html">Add patient</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="testfingerprint.php">
          <i class="fas fa-fw fa-camera"></i>
          <span>Scan</span>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span>
        </a>
      </li> -->
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>


        <!--javascript-div-edition-->
        <div id="messageHandler">
          <!-- DataTables -->
          <div class="card card-register mx-auto mt-5">
            <div class="card-header">Edit a user</div>
            <div class="card-body">
              <form id="formregister">
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-12">
                      <div id="messageHandler">
                        <div>
                          <div> </div>
                        </div>
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-md-3">
                              <div class="dataTables_length" id="dataTable_length"><select id="user" name="user"
                                  aria-controls="dataTable"
                                  class="custom-select custom-select-sm form-control form-control-sm" <option=""
                                  >
                                  <option value="<?php echo $user ?>"><?php echo $user; ?></option>
                                    <option value="Doctor">Doctor</option>
                                  <option value="Receptionist">Receptionist</option>
                                  <option value="Adiministartor">Adiministrator/data clark</option>
                                </select></div>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                              <div class="form-label-group"><input type="text" id="hospitalname" name="hospitalname"
                                  class="form-control" value="<?php echo $hospital; ?>" placeholder="Hospital Name" required="required"
                                  autofocus="autofocus"><label for="hospitalname">Hospital name</label></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-md-6">
                              <div class="form-label-group"><input type="text" id="firstName" name="firstName"
                                  class="form-control" value="<?php echo $firstname; ?>" placeholder="First name" required="required"
                                  autofocus="autofocus"><label for="firstName">First name</label></div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-label-group"><input type="text" id="lastName" name="lastName"
                                  class="form-control" value="<?php echo $lastname; ?>" placeholder="Last name" required="required"> <label
                                  for="lastName">Last name</label></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-md-6">
                              <div class="form-label-group"><input type="email" id="inputEmail" name="email"
                                  class="form-control" value="<?php echo $email; ?>" placeholder="Email address" required="required"><label
                                  for="inputEmail">Email address</label></div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-label-group"><input type="text" id="phonenumber" name="phonenumber"
                                  class="form-control" value="<?php echo $phonenumber; ?>" placeholder="Phone Number" required="required"><label
                                  for="phonenumber">Phone Number</label></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-md-6">
                              <div class="form-label-group"><input type="password" id="inputPassword"
                                  name="inputPassword" class="form-control" value="<?php echo $password; ?>" placeholder="Password"
                                  required="required"><label for="inputPassword">Password</label></div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-label-group"><input type="password" id="confirmPassword"
                                  name="confirmPassword" class="form-control" value="<?php echo $password; ?>" placeholder="Confirm password"
                                  required="required"><label for="confirmPassword">Confirm password</label></div>
                            </div>
                          </div>
                        </div><button class="btn btn-primary btn-block" id="submitButton2">Save</button>
                        <div class="text-center"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- DataTables -->
        </div>
        <!--javascript-div-edition-->

      </div>
      <!-- /.container-fluid -->

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
  <div class="modal fade" id="addpatientModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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

  <!-- Page level plugin JavaScript-->
  <!-- <script src="vendor/chart.js/Chart.min.js"></script>-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script> 

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <!-- <script src="js/demo/datatables-demo.js"></script>-->
  <script src="js/main.js"></script> 

</body>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
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
        $('#navbar').append(data[0] + " /");
        $('#navbar1').empty();
        $('#navbar1').append(data[1] + " /");
        $('#navbar2').empty();
        $('#navbar2').append(data[2]);

        $('#side').empty();
        $('#side').append('<a id="usersbtn" class="nav-link btn"><i class="fas fa-fw fa-user"></i><span>Add user</span></a>');
        $('#side1').empty();
        $('#side1').append('<a id="viewusersbtn" class="nav-link btn"><i class="fas fa-fw fa-table"></i><span>View users</span></a>');



      }

    });

  }

  function tableloader() {

    var data = "";

    $.ajax({
      url: './phpmodules/indexApi.php',
      method: 'POST',
      data: data,
      success: function (response) {

        $('#table').empty();
        $('#table').append(response);

      }

    });

  }

  window.onload = function (e) {

    var user = '"Adiministartor"'
    console.log(user);
    if (user == "Adiministartor") {

      titlebar();
      tableloader();
    } else {
      titlebar();
      tableloader();
      console.log("window.onload");
    }

  }

</script>

</html>