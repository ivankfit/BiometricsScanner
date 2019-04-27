/////js to handle all functionalities 



(function($) {
    "use strict"; // Start of use strict
  
    // Toggle the side navigation
    $("#submitButton").on('click',function(e) {
      e.preventDefault();

    if(validation()){
        var data = $('#formregister').serialize();
        console.log("send data") 
        $.ajax({
            url: './phpmodules/registerApi.php',
            method: 'POST',
            data: data,
            success: function (response) {
              console.log(response) 
              ///$('#messageHandler').empty();
              $('#messageHandler').append(response);
              location.href = "./login.html"

           
            }
           
        });
    }else{
        console.log("validation failed") 

    }

    });

        // edit user
        $("#submitButton2").on('click',function(e) {
            e.preventDefault();
      
          if(validation()){
              var data = $('#formregister').serialize();
              console.log("send data") 
              $.ajax({
                  url: './phpmodules/updateusersApi.php',
                  method: 'POST',
                  data: data,
                  success: function (response) {
                    console.log(response) 
                    ///$('#messageHandler').empty();
                    location.href = "./home.php"
      
                 
                  }
                 
              });
          }else{
              console.log("validation failed") 
      
          }
      
          });
    ///////// validation
    function validation () {
        var valid = true;
        var user = document.getElementById("user").value;
        var hospitalname = document.getElementById("hospitalname").value;
        var firstName = document.getElementById("firstName").value;
        var lastName = document.getElementById("lastName").value;
        var Email = document.getElementById("inputEmail").value;
        var phone = document.getElementById("phonenumber").value;
        var password = document.getElementById("inputPassword").value;
        var password2 = document.getElementById("confirmPassword").value;

        
        if (user == "none"){
           valid = false;
            console.log("Enter password");
            document.getElementById("user").style.borderColor="red";
            document.getElementById("user").style.borderStyle="solid";
        }
    
        // if (number != "" && number.match(/\d/g).length===10){
           
        //     valid = false;
        //     document.getElementById("number2").style.borderColor="red";
        //     document.getElementById("number2").style.borderStyle="solid";
        //     console.log("Enter number");
            
        // }
    
        if (hospitalname == ""){
            valid = false;
            console.log("Enter confirm hospitl name");
            document.getElementById("hospitalname").style.borderColor="red";
            document.getElementById("hospitalname").style.borderStyle="solid";
        }

        if (firstName == ""){
            valid = false;
            console.log("Enter confirm first name");
            document.getElementById("firstName").style.borderColor="red";
            document.getElementById("firstName").style.borderStyle="solid";
        }

        if (lastName == ""){
            valid = false;
            console.log("Enter confirm lastname");
            document.getElementById("lastName").style.borderColor="red";
            document.getElementById("lastName").style.borderStyle="solid";
        }

        if (Email == ""){
            valid = false;
            console.log("Enter confirm email");
            document.getElementById("inputEmail").style.borderColor="red";
            document.getElementById("inputEmail").style.borderStyle="solid";
        }else if (!((Email.indexOf(".") > 0) && (Email.indexOf("@") > 0)) || /[^a-zA-Z0-9.@_-]/.test(Email))
        {
            valid = false;
            console.log("Enter confirm email");
            document.getElementById("inputEmail").style.borderColor="red";
            document.getElementById("inputEmail").style.borderStyle="solid";
        }
        if (phone == ""){
            valid = false;
            console.log("Enter confirm phone");
            document.getElementById("phonenumber").style.borderColor="red";
            document.getElementById("phonenumber").style.borderStyle="solid";
        }

        if (password  == ""){
            valid = false;
            console.log("Enter confirm pasword");
            document.getElementById("inputPassword").style.borderColor="red";
            document.getElementById("inputPassword").style.borderStyle="solid";
        }
        if (password2  == ""){
            valid = false;
            console.log("Enter confirm pasword2");
            document.getElementById("confirmPassword").style.borderColor="red";
            document.getElementById("confirmPassword").style.borderStyle="solid";
        }
    
        if(password !== password2){
    
            valid = false;
            document.getElementById("inputPassword").style.borderColor="red";
            document.getElementById("inputPassword").style.borderStyle="solid";
            document.getElementById("confirmPassword").style.borderColor="red";
            document.getElementById("confirmPassword").style.borderStyle="solid";
        }
    
     
      return valid;
    
    }

    ///////// patientsformvalidation
    function patientsformvalidation () {
        var valid = true;
        
        var firstName = document.getElementById("firstName").value;
        var lastName = document.getElementById("lastName").value;
        var sex = document.getElementById("sex").value;
        var dob = document.getElementById("dob").value;
        var address = document.getElementById("address").value;
        var occupation = document.getElementById("occupation").value;
        var Email = document.getElementById("inputEmail").value;
        var phone = document.getElementById("phonenumber").value;
        var farthersname = document.getElementById("farthersname").value;
        var mothersname = document.getElementById("mothersname").value;
        var nok = document.getElementById("nok").value;
        var nokno = document.getElementById("nokno").value;

        
       

        if (sex == "Sex"){
            valid = false;
             console.log("select sex");
             document.getElementById("sex").style.borderColor="red";
             document.getElementById("sex").style.borderStyle="solid";
         }

        // if (number != "" && number.match(/\d/g).length===10){
           
        //     valid = false;
        //     document.getElementById("number2").style.borderColor="red";
        //     document.getElementById("number2").style.borderStyle="solid";
        //     console.log("Enter number");
            
        // }

        if (firstName == ""){
            valid = false;
            console.log("Enter confirm first name");
            document.getElementById("firstName").style.borderColor="red";
            document.getElementById("firstName").style.borderStyle="solid";
        }

        if (lastName == ""){
            valid = false;
            console.log("Enter confirm lastname");
            document.getElementById("lastName").style.borderColor="red";
            document.getElementById("lastName").style.borderStyle="solid";
        }

        if (dob == ""){
            valid = false;
            console.log("Enter confirm date of birth");
            document.getElementById("dob").style.borderColor="red";
            document.getElementById("dob").style.borderStyle="solid";
        }

        if (address == ""){
            valid = false;
            console.log("Enter confirm address");
            document.getElementById("address").style.borderColor="red";
            document.getElementById("address").style.borderStyle="solid";
        }

        if (occupation == ""){
            valid = false;
            console.log("Enter confirm occupation");
            document.getElementById("occupation").style.borderColor="red";
            document.getElementById("occupation").style.borderStyle="solid";
        }

        if (farthersname == ""){
            valid = false;
            console.log("Enter confirm farthersname");
            document.getElementById("farthersname").style.borderColor="red";
            document.getElementById("farthersname").style.borderStyle="solid";
        }

        if (mothersname == ""){
            valid = false;
            console.log("Enter confirm mothersname");
            document.getElementById("mothersname").style.borderColor="red";
            document.getElementById("mothersname").style.borderStyle="solid";
        }

        if (nok == ""){
            valid = false;
            console.log("Enter confirm next of keen");
            document.getElementById("nok").style.borderColor="red";
            document.getElementById("nok").style.borderStyle="solid";
        }

        if (nokno == ""){
            valid = false;
            console.log("Enter confirm next of keen Number");
            document.getElementById("nokno").style.borderColor="red";
            document.getElementById("nokno").style.borderStyle="solid";
        }

        if (Email == ""){
            valid = false;
            console.log("Enter confirm email");
            document.getElementById("inputEmail").style.borderColor="red";
            document.getElementById("inputEmail").style.borderStyle="solid";
        }else if (!((Email.indexOf(".") > 0) && (Email.indexOf("@") > 0)) || /[^a-zA-Z0-9.@_-]/.test(Email))
        {
            valid = false;
            console.log("Enter confirm email");
            document.getElementById("inputEmail").style.borderColor="red";
            document.getElementById("inputEmail").style.borderStyle="solid";
        }
        if (phone == ""){
            valid = false;
            console.log("Enter confirm phone");
            document.getElementById("phonenumber").style.borderColor="red";
            document.getElementById("phonenumber").style.borderStyle="solid";
        }

    
     
      return valid;
    
    }


    ///////login
    $("#loginButton").on('click',function(e) {
      e.preventDefault();

    
          var data = $('#formlogin').serialize();
          $.ajax({
              url: './phpmodules/loginApi.php',
              method: 'POST',
              data: data,
              success: function (response) {
              var data = JSON.parse(response);
                if(data[0] == "noneexist"){
                $('#messageHandler').append('<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Holy guacamole!</strong> user not found.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> </div>');
                }else{
                    location.href = "./home.php"
                }
               /// console.log(data[0].email)
                // console.log(response["user_id"])
                // $('#messageHandler').append(response.hospitalname);
            //location.href = "./home.php"
              }
             
          });
     
  
      });

    //delete
    function deletefn(){
        var id;
        console.log("gdhgshgdshg")
    }
      
     ///////patientsform 
     $("#patientsformbutton").on('click',function(e) {
        e.preventDefault();
        
      if(patientsformvalidation()){
          console.log(base64data);
        var fingerprint = base64data.toString(); 
        console.log(fingerprint);

        var data = $('#patientsbasicinfo').serialize();
        var data2 = $('#contacts').serialize();

          var data3 = 'fingerprint='+fingerprint;
          console.log(data3); 
          var finaldata = data+'&'+data2+'&'+data3;
          console.log(finaldata); 

          $.ajax({
              url: './phpmodules/patientsformApi.php',
              method: 'POST',
              data: finaldata,
              success: function (response) {
                console.log(response) 
                if(response == "Patient Entry Unsuccessful"){
                    $('#feedback').append('<div class="alert alert-danger alert-dismissible fade show" role="alert">Patient Entry Unsuccessful<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> </div>');
                    }else{
                        location.href = "./home.php"
                    }
                $('#messageHandler').empty();
                $('#messageHandler').append('<div class="alert alert-danger alert-dismissible fade show" role="alert">Patient updated successful<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> </div>');
                // location.href = "./login.php"
  
             
              }
             
          });
      }else{
          console.log("validation failed") 
          $('#feedback').append("please fill in the red highlighted fields to save the patients data.")
  
      }
  
      });

    //   printonclick
    $("#printbtn").on('click',function(e)
    {

    
            var printContents = document.getElementById("printdiag").innerHTML;
            var originalContents = document.body.innerHTML;
       
            document.body.innerHTML = printContents;
       
            window.print();
       
            document.body.innerHTML = originalContents;

    });

           ///////patientsform 
     $("#medformbutton").on('click',function(e) {
        e.preventDefault();
         
      
        var data3 = $('#medicalhistory').serialize();
        var data4 = $('#more').serialize();

        //   console.log(data3+'&'+data4)
          var finaldata = data3+'&'+data4 
        //   console.log(finaldata)
          $.ajax({
              url: './phpmodules/medhistoryApi.php',
              method: 'POST',
              data: finaldata,
              success: function (response) {
                console.log(response) 
                if(response == "Data Entry Unsuccessful"){
                     
                    $('#messageHandler').append('<div class="alert alert-danger alert-dismissible fade show" role="alert">Patient Entry Unsuccessful<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> </div>');
                    }else{
                        // location.href = "./home.php"
                        window.location.href="/biometrics/updated.php"
                        console.log("elsepart") 
                    }
                // $('#messageHandler').empty();
                // $('#messageHandler').append(response);
                // location.href = "./login.php"
  
             
              }
             
          });
      
  
      });

    //   function medhistoryval (){
    //     var valid = true;
    //     var bloodgroup = document.getElementById("bloodgroup").value;
    //     if (bloodgroup == "Blood Group Type"){
    //       valid = false;
    //        console.log("select bloodgroup");
    //        document.getElementById("bloodgroup").style.borderColor="red";
    //        document.getElementById("bloodgroup").style.borderStyle="solid";
    //    }
    // }

         ///////search 
     $("#search").on('click',function(e) {
        e.preventDefault();
        var patient = document.getElementById("query").value;
        var name = document.getElementById("name");
        var data = $('#patientsearch').serialize();
        console.log(data) 

        $.ajax({
                      url: './phpmodules/infoApi.php',
                      method: 'POST',
                      data: data,
                      success: function (response) {
                       /////// location.href = "./info.html"
                    $('#messageHandler').empty();
                    $('#messageHandler').append(response);
                    //   var res = JSON.parse(response);
                    //     console.log(res)
                        
                      }
                     
                  });


    
  
      });
               ///////edit 
     $("#update").on('click',function(e) {
        e.preventDefault();
        console.log("clicked");
        
        var data = $('#patientsbasicinfo').serialize();
        var data2 = $('#contacts').serialize(); 
        var formdata = data+'&'+data2

        $.ajax({
                      url: './phpmodules/updateApi.php',
                      method: 'POST',
                      data: formdata,
                      success: function (response) {
                    $('#messagehandler').empty();
                    $('#messagehandler').append(response);
                    //   var res = JSON.parse(response);
                    //     console.log(res)
                    location.href = "./home.php"

                        
                      }
                     
                  });


    
  
      });

     ///////patientsform 
     $("#patientseditbutton").on('click',function(e) {
        e.preventDefault();
        console.log("CLICKED") 
        var data = $('#symptoms').serialize();
        console.log(data)
        $.ajax({
            url: './phpmodules/editmedical.php',
            method: 'POST',
            data: data,
            success: function (response) {
              console.log(response) 
              $('#messageHandler').empty();
              $('#messageHandler').append(response);
             

           
            }
           
        });
  
      });

       ///////usersbtn 
     $("#usersbtn").on('click',function(e) {
        e.preventDefault();
        console.log("usersbtn") 
        $('#messageHandler').empty();
        $('#messageHandler').append('<div class="card card-register mx-auto mt-5"><div class="card-header">Add a user</div><div class="card-body"><form id="formregister" action="register.php" method="post"><div class="form-group"><div class="form-row"><div class="col-md-12"><div id="messageHandler"><div><div> </div></div><div class="form-group"><div class="form-row"><div class="col-md-3"><div class="dataTables_length" id="dataTable_length"><select id="user" name="user" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"<option value="none">Select User</option><option value="Doctor">Doctor</option><option value="Receptionist">Receptionist</option><option value="Adiministartor">Adiministrator/data clark</option></select></div></div><div class="col-md-3"></div><div class="col-md-6"><div class="form-label-group"><input type="text" id="hospitalname" name="hospitalname" class="form-control" placeholder="Hospital Name" required="required" autofocus="autofocus"><label for="hospitalname">Hospital name</label></div></div></div></div><div class="form-group"><div class="form-row"><div class="col-md-6"><div class="form-label-group"><input type="text" id="firstName" name="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus"><label for="firstName">First name</label></div></div><div class="col-md-6"><div class="form-label-group"><input type="text" id="lastName" name="lastName" class="form-control" placeholder="Last name" required="required"> <label for="lastName">Last name</label></div></div></div></div><div class="form-group"><div class="form-row"> <div class="col-md-6"><div class="form-label-group"><input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="required"><label for="inputEmail">Email address</label></div></div><div class="col-md-6"><div class="form-label-group"><input type="text" id="phonenumber" name="phonenumber" class="form-control" placeholder="Phone Number" required="required"><label for="phonenumber">Phone Number</label></div></div></div></div><div class="form-group"><div class="form-row"><div class="col-md-6"><div class="form-label-group"><input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required="required"><label for="inputPassword">Password</label></div></div><div class="col-md-6"><div class="form-label-group"><input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirm password" required="required"><label for="confirmPassword">Confirm password</label></div></div></div></div><button class="btn btn-primary btn-block" name="submit" id="submitButton" type="submit" value="Submit">Save</button></form><div class="text-center"></div></div></div>');
  
      });

         ///////viewusersbtn 
     $("#viewusersbtn").on('click',function(e) {
        e.preventDefault();
        console.log("viewusersbtn") 
        $('#messageHandler').empty();
        $('#messageHandler').append(' <div id="printdiag" class="card mb-3"><div class="card-header" style="color: #000;display: initial;font-size: 15px;"><div class="row"><div class="col-md-6"><i class="fas fa-table"></i> System users</div><div class="col-md-6"><form class="form-inline pull-right"><a id="printbtn" class="btn btn-large btn-danger" rel="popover" data-original-title="A Title" style="color:#fff;"><i class="fa fa-print" style="color:#fff;"></i>Report</a></form></div></div></div><div class="card-body"><div class="table-responsive"><table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"><thead><tr><th>Name</th><th>User</th><th>Hospital</th><th>Email</th><th>Phone</th><th>Password</th><th>last login</th><th>Edit</th><th>Delete</th></tr></thead><tfoot><tr><th>Name</th><th>User</th><th>Hospital</th><th>Email</th><th>Phone</th><th>Password</th><th>last login</th><th>Edit</th><th>Delete</th></tr></tfoot><tbody id="table"></tbody></table></div></div><div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div></div></div>');
        var data = '';
        $.ajax({
            url: './phpmodules/viewusers.php',
            method: 'POST',
            data: data,
            success: function (response) {
              console.log(response) 
              $('#table').empty();
              $('#table').append(response);
             

           
            }
           
        });
        // $('#messageHandler').empty();
        // $('#messageHandler').append('<div class="card card-register mx-auto mt-5"><div class="card-header">Add a user</div><div class="card-body"><form id="formregister" action="register.php" method="post"><div class="form-group"><div class="form-row"><div class="col-md-12"><div id="messageHandler"><div><div> </div></div><div class="form-group"><div class="form-row"><div class="col-md-3"><div class="dataTables_length" id="dataTable_length"><select id="user" name="user" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"<option value="none">Select User</option><option value="Doctor">Doctor</option><option value="Receptionist">Receptionist</option><option value="Adiministartor">Adiministrator/data clark</option></select></div></div><div class="col-md-3"></div><div class="col-md-6"><div class="form-label-group"><input type="text" id="hospitalname" name="hospitalname" class="form-control" placeholder="Hospital Name" required="required" autofocus="autofocus"><label for="hospitalname">Hospital name</label></div></div></div></div><div class="form-group"><div class="form-row"><div class="col-md-6"><div class="form-label-group"><input type="text" id="firstName" name="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus"><label for="firstName">First name</label></div></div><div class="col-md-6"><div class="form-label-group"><input type="text" id="lastName" name="lastName" class="form-control" placeholder="Last name" required="required"> <label for="lastName">Last name</label></div></div></div></div><div class="form-group"><div class="form-row"> <div class="col-md-6"><div class="form-label-group"><input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="required"><label for="inputEmail">Email address</label></div></div><div class="col-md-6"><div class="form-label-group"><input type="text" id="phonenumber" name="phonenumber" class="form-control" placeholder="Phone Number" required="required"><label for="phonenumber">Phone Number</label></div></div></div></div><div class="form-group"><div class="form-row"><div class="col-md-6"><div class="form-label-group"><input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required="required"><label for="inputPassword">Password</label></div></div><div class="col-md-6"><div class="form-label-group"><input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirm password" required="required"><label for="confirmPassword">Confirm password</label></div></div></div></div><button class="btn btn-primary btn-block" name="submit" id="submitButton" type="submit" value="Submit">Save</button></form><div class="text-center"></div></div></div>');
  
      });

       ///////usereditbtn 
     $("#usersbtn").on('click',function(e) {
        e.preventDefault();
        console.log("usersbtn") 

        $('#messageHandler').empty();
        $('#messageHandler').append('<div class="card card-register mx-auto mt-5"><div class="card-header">Add a user</div><div class="card-body"><form id="formregister" action="register.php" method="post"><div class="form-group"><div class="form-row"><div class="col-md-12"><div id="messageHandler"><div><div> </div></div><div class="form-group"><div class="form-row"><div class="col-md-3"><div class="dataTables_length" id="dataTable_length"><select id="user" name="user" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"<option value="none">Select User</option><option value="Doctor">Doctor</option><option value="Receptionist">Receptionist</option><option value="Adiministartor">Adiministrator/data clark</option></select></div></div><div class="col-md-3"></div><div class="col-md-6"><div class="form-label-group"><input type="text" id="hospitalname" name="hospitalname" class="form-control" placeholder="Hospital Name" required="required" autofocus="autofocus"><label for="hospitalname">Hospital name</label></div></div></div></div><div class="form-group"><div class="form-row"><div class="col-md-6"><div class="form-label-group"><input type="text" id="firstName" name="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus"><label for="firstName">First name</label></div></div><div class="col-md-6"><div class="form-label-group"><input type="text" id="lastName" name="lastName" class="form-control" placeholder="Last name" required="required"> <label for="lastName">Last name</label></div></div></div></div><div class="form-group"><div class="form-row"> <div class="col-md-6"><div class="form-label-group"><input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="required"><label for="inputEmail">Email address</label></div></div><div class="col-md-6"><div class="form-label-group"><input type="text" id="phonenumber" name="phonenumber" class="form-control" placeholder="Phone Number" required="required"><label for="phonenumber">Phone Number</label></div></div></div></div><div class="form-group"><div class="form-row"><div class="col-md-6"><div class="form-label-group"><input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required="required"><label for="inputPassword">Password</label></div></div><div class="col-md-6"><div class="form-label-group"><input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirm password" required="required"><label for="confirmPassword">Confirm password</label></div></div></div></div><button class="btn btn-primary btn-block" name="submit" id="submitButton" type="submit" value="Submit">Save</button></form><div class="text-center"></div></div></div>');
  
      });

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



   
 
  
  })(jQuery); // End of use strict

