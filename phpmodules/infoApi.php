<?php

include ('conn.php');
$feedback = "";
// $query = $_GET['query']; 
//     // gets value sent over search form
     
    $min_length = 3;
//     // you can set minimum length of the query if you want
     
    $query = $_POST['query'];

    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        // $query = htmlspecialchars($query); 
        // // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysqli_real_escape_string($conn, $query);
        // makes sure nobody uses SQL injection
         $sql = "SELECT * FROM patient WHERE (`fname` LIKE '%".$query."%') OR (`lname` LIKE '%".$query."%')";
        $raw_results = mysqli_query($conn, $sql) or die(mysqli_error());
             
          
$dataperson = array();
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($raw_results,MYSQLI_ASSOC)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
            $dataperson[] = $results;
                // echo "<p><h3>".$results['fname']."</h3>".$results['lname']."</p>";
                // 
               
                // magic happens
                $feedback = '
            <!--rows to display patients data-->

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
                                    </br>
                                    <i class="icon fa fa-envelope"></i>
                                </th>
                                <td style="border:0;"><span class="highlight">'.$results['phone'].'</span>
                                    
                                    </br>
                                    <span class="highlight">'.$results['email'].'</span>
                                </td>
                                <td style="border:0;"><i class="icon fa fa-child"></i>
                                    </br><i class="icon fa fa-venus-mars"></i>
                                </td>
                                <td style="border:0;"><span class="highlight">'.$results['dob'].'</span>
                                    </br><span class="highlight">'.$results['sex'].'</span>
                                </td>
                                <td style="border:0;">
                                    <i class="icon fa fa-map-marker"></i>
                                </td>
                                <td style="border:0;"><span class="highlight">'.$results['address'].'</span></td>
                                </tr>

                            </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
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
                                    '.$results['fname'].' </div>
                                </div>
                                <div class="section">
                                    <div class="section-title"><i class="icon fa fa-book" aria-hidden="true"></i> More relevant
                                    information</div>
                                    <div class="section-body __indent">Computer Engineering, Khon Kaen University</div>
                                </div>
                                </div>
                                <div class="col-md-8 col-sm-12">
                                <div class="section">
                                    <div class="section-title">Medical History

                                    </div>
                                    <div class="bs-docs-example" style="padding-bottom: 24px;">

                                    
                                    <!--form class="form-inline">
                                        <button href="#" class="btn btn-large btn-danger" rel="popover"
                                        data-original-title="A Title"><i class="fa fa-plus"></i></button>
                                        <div class="col-md-3">
                                        <div class="form-label-group">
                                            <input type="date" id="from" class="form-control" placeholder="From"
                                            >
                                            <label for="from">From</label>
                                        </div>
                                        </div>
                                        <div class="col-md-3">
                                        <div class="form-label-group">
                                            <input type="date" id="to" class="form-control" placeholder="To">
                                            <label for="to">To</label>
                                        </div>
                                        </div>
                                        <div class="col-md-3">
                                        <button href="#" class="btn btn-large btn-danger" rel="popover" 
                                            data-original-title="A Title"><i class="fa fa-print"></i></button> </div>
                                    </form-->
                                    </div>
                                    <div id="syptoms" class="section-body">
                                    <div class="media social-post">
                                        <div class="media-body">
                                        <div class="media-heading">
                                            <h4 class="title">20 mins ago</h4>
                                            <h5 class="timeing">Dr Scott White <span class="highlight">-Mbarara Referal
                                                Hospital</span></h5>
                                        </div>
                                        <div class="media-content">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                            scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at,
                                            tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate.</div>

                                        </div>
                                    </div>
                                    <div class="media social-post">
                                        <div class="media-body">
                                        <div class="media-heading">
                                            <h4 class="title">20 mins ago</h4>
                                            <h5 class="timeing">Dr Scott White <span class="highlight">-Mbarara Referal
                                                Hospital</span></h5>
                                        </div>
                                        <div class="media-content">
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                            sollicitudin commodo.</p>

                                        </div>
                                        </div>
                                    </div>
                                    <div class="media social-post">
                                        <div class="media-body">
                                        <div class="media-heading">
                                            <h4 class="title">20 mins ago</h4>
                                            <h5 class="timeing">Dr Scott White <span class="highlight">-Mbarara Referal
                                                Hospital</span></h5>
                                        </div>
                                        <div class="media-content">
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                            sollicitudin commodo.</p>

                                        </div>
                                        </div>
                                    </div>
                                    <div class="media social-post">
                                        <div class="media-body">
                                        <div class="media-heading">
                                            <h4 class="title">20 mins ago</h4>
                                            <h5 class="timeing">Dr Scott White <span class="highlight">-Mbarara Referal
                                                Hospital</span></h5>
                                        </div>
                                        <div class="media-content">
                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                            sollicitudin commodo.</p>

                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab3">
                            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nullaip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nullaip ex ea commodo consequat. Duis
                            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab4">
                            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nullaip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nullaip ex ea commodo consequat. Duis
                            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

            <!--/.rows to display patients data-->
            ';
            }
            

            // echo json_encode($dataperson);
             echo $feedback;
        }

        
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }

?>