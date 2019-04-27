<?php
session_start();
include ('phpmodules/conn.php');
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
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" id="patientsearch" method="post">
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
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
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
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
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
          <div id="printdiag" class="card mb-3">
            <div class="card-header" style="color: #000;display: initial;font-size: 15px;">
              <div class="row">
                <div class="col-md-6">
                <i class="fas fa-table"></i>
              Patients information
              </div>
              
              <div id="top" class="col-md-6">
                
              </div>
            </div>
            <div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>D.O.B</th>
                      <th>Sex</th>
                      <th>Address</th>
                      <th>Occupation</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Father</th>
                      <th>Mother</th>
                      <th>N.O.K</th>
                      <th>N.O.K-phone</th>
                      <th>Edit</th>
                      <th>View</th>
                    </tr>
                  </thead>
                  <tfoot>
                      <tr>
                          <th>Name</th>
                          <th>D.O.B</th>
                          <th>Sex</th>
                          <th>Address</th>
                          <th>Occupation</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Father</th>
                          <th>Mother</th>
                          <th>N.O.K</th>
                          <th>N.O.K-phone</th>
                          <th>Edit</th>
                          <th>View</th>
                        </tr>
                  </tfoot>
                  <tbody id="table">
                    <!-- <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                    </tr> -->
                  </tbody>
                </table>
                <div id="deletemess"></div>
                </div>
              </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
          </div>
          <!-- DataTables -->
        </div>
        <!--javascript-div-edition-->

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer" >
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
    <!-- Logout Modal-->
    <div class="modal fade" id="addpatientModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
  <!-- <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script> -->

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <!-- <script src="js/demo/datatables-demo.js"></script>
  <script src="js/main.js"></script> -->

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
                $('#navbar').append(data[0]+" /");
              $('#navbar1').empty();
                $('#navbar1').append(data[1]+" /");
              $('#navbar2').empty();
                $('#navbar2').append(data[2]);
                
              
    
           
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

      //delete
      function deletefn(id){
        
        console.log(id)
        document.getElementById(id).style.display = "none";
      var data = id;
    $.ajax({
      url: './phpmodules/deleteuserApi.php',
      method: 'POST',
      data: data,
      success: function (response) {

        $('#deletemess').empty();
        $('#deletemess').append("Field has been deleted");

      }

    });  

    }
  

  window.onload = function(e){ 
    
    var user = '<?php echo json_encode($_SESSION["user"]);?>'
    var user2 = '<?php echo json_encode($_SESSION["user"]);?>'



    console.log(user);
    if(user.toString() === user2.toString()){
      console.log("me")
    titlebar();
    tableloader();
    $('#top').empty();
    $('#top').append('<a id="printbtn" class="btn btn-large btn-danger" rel="popover" data-original-title="A Title" style="color:#fff;"><i class="fa fa-print" style="color:#fff;"></i>Report</a>')
    $('#side').empty();
    $('#side').append('<a id="usersbtn" class="nav-link btn"><i class="fas fa-fw fa-user"></i><span>Add user</span></a>');
    $('#side1').empty();
    $('#side1').append('<a id="viewusersbtn" class="nav-link btn"><i class="fas fa-fw fa-table"></i><span>View users</span></a>');

    }else
    {
    titlebar();
    tableloader();
    console.log("window.onload"); 
    }
    
} 

</script>

</html>