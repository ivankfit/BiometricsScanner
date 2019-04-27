<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>BIRMS - Autheticaton</title>


    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>


<body >

		<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

				<a class="navbar-brand mr-1" href="home.php">BIOMETRIC IDENTIFICATION AND RECORDS MANAGEMENT SYSTEM</a>
		  
				<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
				  <i class="fas fa-bars"></i>
				</button>
		  
				<!-- Navbar Search -->
				<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
				  <div class="input-group">
					<input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
					<div class="input-group-append">
					  <button class="btn btn-primary" type="button">
						<i class="fas fa-search"></i>
					  </button>
					</div>
				  </div>
				</form>
		  
				<!-- Navbar -->
				<ul class="navbar-nav ml-auto ml-md-0">
				  <li class="nav-item dropdown no-arrow mx-1">
					<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
					<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
      <li class="nav-item active">
        <a class="nav-link" href="testfingerprint.php">
          <i class="fas fa-fw fa-camera"></i>
          <span>Scan</span>
        </a>
      </li>
					</ul>

			  <div id="content-wrapper">

					<div class="container-fluid">
			
					  <!-- Breadcrumbs-->
					  <ol class="breadcrumb">
						<li class="breadcrumb-item">
						  <a href="home.php">Dashboard</a>
						</li>
						<li class="breadcrumb-item active">Patint Fingerprint Authentication</li>
					  </ol>		  

<!-- InstanceBeginEditable name="EditRegion1" -->
<!-- <table width="1012" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr bgcolor="#848487">
    <td height="83" class="download_title" align="center"  >
</td>
  </tr>
</table> -->




    <table width="1012" border="0" align="center" cellpadding="0" cellspacing="0">
      

        <tr>
            <!-- <..images/fingerprint.png> -->
            <td class="style3" align="left"><span class="download_href"> 
               <center>
							 <div class="card" style="width: 230px;height: 320px;padding: 10px;">
				<img border="2" id="FPImage1" alt="Fingerpint Image" height=300 width=210 src="" >
		</div>
		<!-- <input type="button" value="Click to Scan" onclick="captureFP()">  -->
		<br>
		<input type="button" class="btn btn-primary" value="Autheticate Fingerprint" onclick="MatchFP()"> 
		<br>
		

	<input type="textbox" id="tmplval" value="" style="display:none;">

		

		<br>
		<div style=" color:black; padding:20px;">
		<p id="result"> </p>
		</div>
		</center>
.</span></td>
            <td>
                &nbsp;</td>
        </tr>
    
  
      
        <tr>
            <td class="auto-style2">
                &nbsp;</td>
            <td class="style3">&nbsp;</td>
            <td>
                &nbsp;</td>
        </tr>
       
     
    </table>

<script src="jquery.min.js"></script>

 <script>
		
		
		function Jsonp_Callback(json) {
			if (json.Error != null) {
				console.log(json.Message);
			}
		}

		function crossDomainAjax (url, callback) {
			// IE8 & 9 only Cross domain JSON GET request
			if ('XDomainRequest' in window && window.XDomainRequest !== null) {
				var xdr = new XDomainRequest(); // Use Microsoft XDR
				xdr.open('get', url);
				xdr.onload = function () {
					var dom  = new ActiveXObject('Microsoft.XMLDOM'),
						JSON = $.parseJSON(xdr.responseText);                                                             
					dom.async = false;
					if (JSON == null || typeof (JSON) == 'undefined') {
						JSON = $.parseJSON(data.firstChild.textContent);
					}
					callback(JSON);
				};
				xdr.onerror = function() {
					_result = false; 
				};
				xdr.send();
			}
			// IE7 doesn't support cross domain request at all! :( :)
			// jQuery AJAX for other browsers         
			else {
				$.support.cors = true;
				$.ajax({
					url: url,
					crossDomain: true,
					contentType: 'text/plain',
					cache: false,
					dataType: 'jsonp',
					type: 'GET',
					async: false, // must be set to false
					jsonpCallback: "Jsonp_Callback",
					success: function (data, success) {
						callback(data);
						
						console.log(data);
					},
					error: function(jqXHR, exception) {
						if (jqXHR.status === 0) {
							console.log('Not connect.\n Verify Network.');
						} else if (jqXHR.status == 404) {
							console.log('Requested page not found. [404]');
						} else if (jqXHR.status == 500) {
							console.log('Internal Server Error [500].');
						} else if (exception === 'parsererror') {
							console.log('Requested JSON parse failed.');
						} else if (exception === 'timeout') {
							console.log('Time out error.');
						} else if (exception === 'abort') {
							console.log('Ajax request aborted.');
						} else {
							console.log('Uncaught Error.\n' + jqXHR.responseText);
						}
					}
				});
			}
		}

		function captureFP() {
			crossDomainAjax("http://localhost:8090/FM220/gettmpl?callback=?",
				  function (result) {
					SuccessFunc(result);
				  });
	
		} 
		var start = 0;
            var limit = 1;
            var reachedMax = false;      
				var i;

    function MatchFP() {
			if (reachedMax)
           return;

        $.ajax({
            url:  './phpmodules/crappyApi.php',
            method: 'POST',
						dataType: 'text',
                   data: {
                       getData: 1,
                       start: start,
                       limit: limit
                   },
            
            success:function (response) {
							if (response == "reachedMax")
                            reachedMax = true;
                        else {
												
                           

							var res = JSON.parse(response);
			
							if(testtwo (res[0].fingerprint,res[0].patient_id)){
								
				document.getElementById("FPImage1").src = "data:image/bmp;base64," + res[0].fingerprint;
								console.log('one down')
							}
												}

						
            }
        });
    }

     	async function testtwo (res,id){
				await	await crossDomainAjax("http://localhost:8090/FM220/GetMatchResult?MatchTmpl="+encodeURIComponent(res.toString())+"&callback=?",
    						function (result) {
					
								SuccessMatch(result,id);
								testthree (res,id)
							  
							});
}

async function testthree (res,id){
	await await crossDomainAjax("http://localhost:8090/FM220/GetMatchResult?MatchTmpl="+encodeURIComponent(res.toString())+"&callback=?",
							function (result) {
								start += limit;
							SuccessMatch(result,id);
							MatchFP()
							
						});
}




		
		function jsonp(url, callback) {
			// create a unique id
			var id = "_" + (new Date()).getTime();

			// create a global callback handler
			window[id] = function (result) {
					// forward the call to specified handler                                       
					if (callback)
						callback(result);
								
					// clean up: remove script and id
					var sc = document.getElementById(id);
					sc.parentNode.removeChild(sc);
					window[id] = null;
				}

			url = url.replace("callback=?", "callback=" + id);
						
			// create script tag that loads the 'JSONP script' 
			// and executes it calling window[id] function                
			var script = document.createElement("script");
			script.setAttribute("id", id);
			script.setAttribute("src", url);
			script.onerror=ErrorFunc;
			script.setAttribute("type", "text/javascript");
			document.body.appendChild(script);
		}

        /* 
            This functions is called if the service sucessfully returns some data in JSON object
         */
        function SuccessFunc(result) {
            if (result.errorCode == 0) {
							document.getElementById("FPImage1").src = "data:image/bmp;base64," + result.bMPBase64;
                /* 	Display BMP data in image tag
                    BMP data is in base 64 format 
                */
                if (result != null && result.bMPBase64.length > 0) {
                    document.getElementById("FPImage1").src = "data:image/bmp;base64," + result.bMPBase64;
                }
								// document.getElementById("tmplval").value=result.templateBase64;
                var tbl = "<table border=1>";
                tbl += "<tr>";
                tbl += "<td> Serial Number of device </td>";
                tbl += "<td> <b>" + result.serialNumber + "</b> </td>";
                tbl += "</tr>";
                tbl += "<tr>";
                tbl += "<td> Image Height</td>";
                tbl += "<td> <b>" + result.imageHeight + "</b> </td>";
                tbl += "</tr>";
                tbl += "<tr>";
                tbl += "<td> Image Width</td>";
                tbl += "<td> <b>" + result.imageWidth + "</b> </td>";
                tbl += "</tr>";
                tbl += "<tr>";
                tbl += "<td> Image Resolution</td>";
                tbl += "<td> <b>" + result.imageDPI + "</b> </td>";
                tbl += "</tr>";                tbl += "<tr>";
                tbl += "<td> NFIQ (1-5)</td>";
                tbl += "<td> <b>" + result.nFIQ + "</b> </td>";
                tbl += "</tr>";
                tbl += "<tr>";
                tbl += "<td> Template(base64)</td>";
                tbl += "<td> <b> <textarea rows=8 cols=50>" + result.templateBase64 + "</textarea></b> </td>";
                tbl += "</tr>";
                tbl += "</table>";
                document.getElementById('result').innerHTML = tbl;
            }
            else {
				document.getElementById('result').innerHTML ="";
                console.log("Fingerprint Capture ErrorCode " + result.errorCode + "Desc :-"+result.status);
            }
        }

		/* 
            This functions is called if the service sucessfully returns some data in JSON object
         */
        function SuccessMatch(result,id) {
            if (result.errorCode == 0) {
                /* 	Display BMP data in image tag
                    BMP data is in base 64 format 
                */
								document.getElementById("FPImage1").src = "data:image/bmp;base64," + result.bMPBase64;
                if (result != null && result.bMPBase64.length > 0) {
                    document.getElementById("FPImage1").src = "data:image/bmp;base64," + result.bMPBase64;
                }
                var tbl = "<table border=1>";
                tbl += "<tr>";
                tbl += "<td> Serial Number of device </td>";
                tbl += "<td> <b>" + result.serialNumber + "</b> </td>";
                tbl += "</tr>";
                tbl += "<tr>";
				if (result.matchSuccess) {

                    window.location.href="/biometrics/diagnosis.php?id="+id+""

                tbl += "<td> Match Result</td>";
                tbl += "<td> <b> <textarea rows=2 cols=50> Matching Success. Match Score is :- "+result.matchScore.toString()+"</textarea></b> </td>";
				} else {
				tbl += "<td> Match Result</td>";
                tbl += "<td> <b> <textarea rows=2 cols=50> Matching Failed. Match Score is :- "+result.matchScore.toString()+"</textarea></b> </td>";
				}
                tbl += "</tr>";
                tbl += "</table>";
                document.getElementById('result').innerHTML = tbl;
            }
            else {
				document.getElementById('result').innerHTML ="";
                console.log("Fingerprint Capture ErrorCode " + result.errorCode + "Desc :-"+result.status+result.matchScore.toString());
            }
        }

        function ErrorFunc(id) {
			var sc = document.getElementById(id);
			if (sc != null) {
			sc.parentNode.removeChild(sc);
			window[id] = null;
			}
            /* 	
                If you reach here, user is probabaly not running the 
                service. Redirect the user to a page where he can download the
                executable and install it. 
            */
            console.log("Check if ACPL FM220 service is running ");

        }


</script>
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

<!-- InstanceEndEditable -->
<!-- Sticky Footer -->
<footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © 2019</span>
          </div>
        </div>
      </footer>

</body>

   
<!-- InstanceEnd -->
</html>
