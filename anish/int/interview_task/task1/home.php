

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Addasone | Environment Setting</title>
  
  <link rel="icon" href="demo_icon.gif" type="image/gif" sizes="16x16">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- open sansarif -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Reset CSS -->
  <link rel="stylesheet" href="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/addasone.css" rel="stylesheet">
  <link rel="stylesheet" href="css/responsive.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  
</head>

<body id="main-wrapper">

    <div class="start_alert">
        <div class="cover"></div>
        <div class="car_modal car_alert " style="display:block;">
          <div class="m_header">
            <strong>Notice</strong>
          </div>
          <div class="m_body">
            <div class="alert_info_txt">
              <p>This screen is designed for a full screen size of 1920x1080.</p>
            </div>
          </div>
          <div class="m_footer">
            <button type="button" class="btn_confirm" onclick="fullConfirm();">
                View full screen</button>
            <button type="button" class="btn_confirm" onclick="fullCancel();">cancel</button>
          </div>
        </div>
      </div> 


  <!-- header -->
  <header>
      <!-- title bar and logo -->
      <div id="titlebar">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2 logbg">
                <a class="navbar-brand" href="#"><img src="img/logo/addasone.png" alt="addasone"></a>
            </div>
            <div class="col-md-8 titlebg">
              <h3 class="titletext">Autonomus Vehicle Safety Control System(ASCS)</h3>
            </div>
            <div class="col-md-2 logoutbg">
              <a href="#" class="btn btn-danger float-right logoutbtn">logout</a>
            </div>
          </div>
        </div>
          
       
        
      </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light addasonemenu">
     
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- navigation starts from here -->
      <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="home.html">Environment Setting <span class="sr-only">(current)</span></a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link" href="status.html" class="status">Autonomus Driving Status Monitoring</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="path.html" class="path">Path and Layout Setting</a>
              </li>
              <li class="nav-item">
                      <a class="nav-link" href="vehiclestatus.html" class="vehiclestatus">Vehicle Status Check</a>
                    </li>
                    <li class="nav-item">
                          <a class="nav-link" href="diagnosis.html" class="diagnosis">Self Diagnosis Setting</a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link" href="history.html" class="history">History Inquiry</a>
                            </li>
            </ul>
        
      </div>
    </nav>  
  
   </header>
 <!-- end header -->

 <!-- main-body -->
  <!--tab container  -->
 <div id="tab-container">
    <!--tabs -->
    <!-- Classic tabs -->
    <div class="container-fluid">
        <div class="classic-tabs mx-2">

          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12">
                      <ul class="nav tabs-cyan z-depth-5" id="myClassicTabShadow" role="tablist">
      
                          <li class="nav-item">
                            <a class="nav-link waves-light active show" id="profile-tab-classic-shadow" data-toggle="tab" href="#profile-classic-shadow"
                              role="tab" aria-controls="profile-classic-shadow" aria-selected="true">Autonomus Vehicle Management</a>
                          </li>
                          <div class="vline"></div>
                          <li class="nav-item">
                            <a class="nav-link waves-light" id="follow-tab-classic-shadow" data-toggle="tab" href="#follow-classic-shadow"
                              role="tab" aria-controls="follow-classic-shadow" aria-selected="false">Mobile Authorization Setting</a>
                          </li>
                          <div class="vline"></div>
                          <!-- <div class="vline"></div> -->
                          <li class="nav-item">
                            <a class="nav-link waves-light" id="awesome-tab-classic-shadow" data-toggle="tab" href="#awesome-classic-shadow"
                              role="tab" aria-controls="awesome-classic-shadow" aria-selected="false">Traffic Signal Control Setting control Setting on transportation vehicle entry area</a>
                          </li>
                        </ul>
                      
                  </div>  
                </div>  
                
          </div>
          
          
            <div class="tab-content card" id="myClassicTabContentShadow">

              
              <!-- Vehicle Mangagement -->
              <div class="tab-pane fade active show" id="profile-classic-shadow" role="tabpanel" aria-labelledby="profile-tab-classic-shadow">
               <form action="" id="EnvironmentSetForm" method="POST">
                <div class="row">
                  <div class="col-md-3">
        
                     <div class="form-group row">
                                        <label for="vehicleName" class="col-md-6 col-form-label text-md-right">Vehicle Name</label>
                                        <div class="col-md-6">
                                            <input type="text" id="VehicleName" class="form-control"  name="vehicleName" value="No.1"required  autofocus>
                                        </div>
                                    </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group row">
                          <label for="vehicleModel" class="col-md-6 col-form-label text-md-right">Vehicle Model</label>
                          <div class="col-md-6">
                              <input type="text" id="VehicleModel" class="form-control" name="vehicleModel" value="Santafe"required  autofocus>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                            <label for="horsePower" class="col-md-6 col-form-label text-md-right">Horsepower</label>
                            <div class="col-md-6">
                                <input type="text" id="HorsePower" class="form-control" name="horsePower" value="200"required  autofocus>
                            </div>
                        </div> 
                      </div>
                      <div class="col-md-3">
                          <div class="form-group row">
                              <label for="transportationVehicleQ" class="col-md-6 col-form-label text-md-right">Transportation Vehicle Quality</label>
                              <div class="col-md-6">
                                  <input type="text" id="TransportationVehicleQ" class="form-control" name="transportationVehicleQ" value="3"required  autofocus>
                              </div>
                          </div> 
                        </div>
        
                </div>
                <div class="row">
                    <div class="col-md-3">
          
                       <div class="form-group row">
                                          <label for="vehicleNumber" class="col-md-6 col-form-label text-md-right">Vehicle Number</label>
                                          <div class="col-md-6">
                                              <input type="text" id="vehicleNumber" class="form-control" name="vehicleNumber" value="G9A879"required  autofocus>
                                          </div>
                                      </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                            <label for="productionYear" class="col-md-6 col-form-label text-md-right">Production Year</label>
                            <div class="col-md-6">
                                <input type="text" id="ProductionYear" class="form-control" name="productionYear" value="2018"required  autofocus>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                          <div class="form-group row">
                              <label for="fuelType" class="col-md-6 col-form-label text-md-right">FuelType</label>
                              <div class="col-md-6">
                                  <input type="text" id="FuelType" class="form-control" name="fuelType" value="Diesel"required  autofocus>
                              </div>
                          </div> 
                        </div>
                        <div class="col-md-3">
                             
                          </div>
                   
                  </div>
                  <div class="row">
                      <div class="col-md-3">
            
                         <div class="form-group row">
                                            <label for="vehicleIP" class="col-md-6 col-form-label text-md-right">Vehicle IP</label>
                                            <div class="col-md-6">
                                                <input type="text" id="VehicleIP" class="form-control" name="vehicleIP" value="55.101.22.122"required  autofocus>
                                            </div>
                                        </div>
                      </div>
                      <div class="col-md-3">
                          <div class="form-group row">
                              <label for="displacement" class="col-md-6 col-form-label text-md-right">Displacement</label>
                              <div class="col-md-6">
                                  <input type="text" id="Displacement" class="form-control" name="displacement" value="1998cc"required  autofocus>
                              </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label for="maximumTarque" class="col-md-6 col-form-label text-md-right">Maximum Tarque</label>
                                <div class="col-md-6">
                                    <input type="text" id="MaximumTarque" class="form-control" name="maximumTarque" value="45.0Kgm"required  autofocus>
                                </div>
                            </div> 
                          </div>
                          <div class="col-md-3">
                               
                            </div>
                     
                    </div>
                    <div class="float-right">
                      <ul class="buttonlist">
                        <li><button type="submit" name="submit" value="Submit" class="btn btn-info btn-md flat-info">Submit</button></li>
                        <li><button type="button" name="submit" value="delete" class="btn btn-info btn-md flat-info" onclick="del()">Delete</button></li>
                        <li><a href="#" class="btn btn-primary btn-md flat-primary"><i class="fas fa-search"></i>View</a></li>
                      </ul>
        
                    </div>
              </form>
              <?php
                $con=mysqli_connect("localhost","root","root","ani");
               if(isset($_POST['submit']))
               {
                extract($_POST);

                if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
               $sql = "insert into aa values('$vehicleName','$vehicleModel','$horsePower','$transportationVehicleQ','$vehicleNumber','$productionYear','$fuelType','$vehicleIP','$displacement','$maximumTarque');";   

               $result = mysqli_query($con,$sql);
              }
?>
              <div id="table-container" class="style-6">

                  <div class="table-title text-center  font-weight-bold">Autonomus Driving Vehicle List</div>
                <table class="table" id="maintable">
                      <thead>
                        <tr>
                          <th scope="col">Range</th>
                          <th scope="col">Name</th>
                          <th scope="col">Model</th>
                          <th scope="col">Number</th>
                          <th scope="col">IP</th>
                          <th scope="col">Transportation Vehicle Quentity</th>
                          <th scope="col">Fuel</th>
                          <th scope="col">Year</th>
                          <th scope="col">Maximum Torque</th>
                          <th scope="col">Horse Power</th>
                          <th scope="col">Displacement</th>
                        </tr>
                      </thead>
<tbody>
<?php
  $con1=mysqli_connect("localhost","root","root","ani");

                if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql1 ="select * from aa;";
                 $result1 = mysqli_query($con1,$sql1);
                       
                       while ($row = mysqli_fetch_array($result1)) {
                         echo " <tr>";
                         echo "<td>1</td>";
                          echo "<td class='mclass' id='$row[vehicleName]'>$row[vehicleName]</td>";
                          echo "<td class='mclass' id='$row[vehicleName]'>$row[vehicleModel]</td>";
                          echo "<td class='mclass' id='$row[vehicleName]'>$row[horsepower]</td>";
                          echo "<td class='mclass' id='$row[vehicleName]'>$row[transportVQ]</td>";
                          echo "<td class='mclass' id='$row[vehicleName]'>$row[vehicleNumber]</td>";
                          echo "<td class='mclass' id='$row[vehicleName]'>$row[productionYear]</td>";
                          echo "<td class='mclass' id='$row[vehicleName]'>$row[fuelType]</td>";
                          echo "<td class='mclass' id='$row[vehicleName]'>$row[vehicleIp]</td>";
                          echo "<td class='mclass' id='$row[vehicleName]'>$row[displacement]</td>";
                          echo "<td class='mclass' id='$row[vehicleName]'>$row[maximumTorque]</td>"; 
                      echo "</tr>";
                      }
                      
?>
                      </tbody>
                    </table>
  
                </div>
              

              </div>

              <!-- Mobile authetication setting -->
              <div class="tab-pane fade" id="follow-classic-shadow" role="tabpanel" aria-labelledby="follow-tab-classic-shadow">
                  <form action="" id="MAutform">
                      <div class="row">
                        <div class="col-md-3">
              
                           <div class="form-group row">
                                              <label for="mobilName" class="col-md-6 col-form-label text-md-right">Mobile Name</label>
                                              <div class="col-md-6">
                                                  <input type="text" id="MobileName" class="form-control"  name="mobileName" value="Monitoring"required  autofocus>
                                              </div>
                                          </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label for="user" class="col-md-6 col-form-label text-md-right">User</label>
                                <div class="col-md-6">
                                    <input type="text" id="User" class="form-control" name="user" value="Smith"required  autofocus>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                              <div class="form-group row">
                                  <label for="useagePermission" class="col-md-6 col-form-label text-md-right">Usage Permission</label>
                                  <div class="col-md-6">
                                      <input type="text" id="UseagePermission" class="form-control" name="useagePermission" value="General Manger"required  autofocus>
                                  </div>
                              </div> 
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                      <div class="row">
                          <div class="col-md-3">
                
                             <div class="form-group row">
                                                <label for="terminalIP" class="col-md-6 col-form-label text-md-right">Terminal IP</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="TerminalIP" class="form-control" name="terminalIP" value="55.22.22.101"required  autofocus>
                                                </div>
                                            </div>
                          </div>
                          <div class="col-md-3">
                              <div class="form-group row">
                                  <label for="affiliatedTeam" class="col-md-6 col-form-label text-md-right">Affiliated Team</label>
                                  <div class="col-md-6">
                                      <input type="text" id="affiliatedTeam" class="form-control" name="AffiliatedTeam" value="Sales Team"required  autofocus>
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row">
                                    <label for="usageloc" class="col-md-6 col-form-label text-md-right">Usage Location</label>
                                    <div class="col-md-6">
                                        <input type="text" id="Usageloc" class="form-control" name="usageloc" value="location"required  autofocus>
                                    </div>
                                </div> 
                              </div>
                              </div>
                      
                          <div class="float-right">
              
                              <ul class="buttonlist">
                                  <li><a href="#" class="btn btn-primary btn-md flat-primary"><i class="fas fa-plus"></i>Add</a></li>
                                  <li><a href="#" class="btn btn-danger btn-md flat-danger"><i class="fas fa-minus"></i>Delete</a></li>
                                  <li><a href="#" class="btn btn-primary btn-md flat-primary"><i class="fas fa-search"></i>View</a></li>
                                </ul>
      
              
                          </div>
                          
                    </form>


                    <div id="scrollabletable" class="style-6">
                      <div class="table-title text-center  font-weight-bold">Autonomus Driving Vehicle List</div>
                      
                      
                      <table class="table" id="maintable">
                            <thead>
                              <tr>
                                <th scope="col">Range</th>
                                <th scope="col">Name</th>
                                <th scope="col">Model</th>
                                <th scope="col">Number</th>
                                <th scope="col">IP</th>
                                <th scope="col">Transportation Vehicle Quentity</th>
                                <th scope="col">Fuel</th>
                                <th scope="col">Year</th>
                                <th scope="col">Maximum Torque</th>
                                <th scope="col">Horse Power</th>
                                <th scope="col">Displacement</th>
                                <th scope="col">Date of Registration</th>
                              </tr>
                            </thead>
                            <tbody>
                              </tr>
                               -->
                              
                              
                            </tbody>
                          </table>
        
                      </div>
              </div>

              <!-- Transportation entry area -->
              <div class="tab-pane fade" id="awesome-classic-shadow" role="tabpanel" aria-labelledby="awesome-tab-classic-shadow">
                  <form action="" id="transportationentryarea">
                      <div class="row">
                        <div class="col-md-3">
              
                           <div class="form-group row">
                                              <label for="targetItem" class="col-md-6 col-form-label text-md-right">Target Item</label>
                                              <div class="col-md-6">
                                                  <input type="text" id="TargetItem" class="form-control"  name="targetItem" value="No.1"required  autofocus>
                                              </div>
                                          </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label for="sensorDervice" class="col-md-6 col-form-label text-md-right">Sensor Signal Reciving Dervice</label>
                                <div class="col-md-6">
                                    <input type="text" id="SensorDervice" class="form-control" name="sensorDervice" value="55.101.101.22"required  autofocus>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                              <div class="form-group row">
                                  <label for="memoryLocation" class="col-md-6 col-form-label text-md-right">Memory Location</label>
                                  <div class="col-md-6">
                                      <input type="text" id="MemoryLocation" class="form-control" name="memoryLocation" value="0x07"required  autofocus>
                                  </div>
                              </div> 
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row">
                                    <label for="conditionValue" class="col-md-6 col-form-label text-md-right"><i class="fa fa-exclamation-circle text-info" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Condition Value</label>
                                    <div class="col-md-6">
                                        <input type="text" id="ConditionValue" class="form-control" name="transportationVehicleQ" value="1"required  autofocus>
                                    </div>
                                </div> 
                              </div>
              
                      </div>
                      <div class="row">
                          <div class="col-md-3">
                
                             <div class="form-group row">
                                                <label for="breakPoisition" class="col-md-6 col-form-label text-md-right">Break Position(Latitude)</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="BreakPoisition" class="form-control" name="breakPoisition" value="G9A879"required  autofocus>
                                                </div>
                                            </div>
                          </div>
                          <div class="sensorIndictor"></div>
                          <div class="col-md-3">
                              <div class="form-group row">
                                  <label for="breakObject" class="col-md-6 col-form-label text-md-right">Break Acttion ObjectIP</label>
                                  <div class="col-md-6">
                                      <input type="text" id="BreakObject" class="form-control" name="breakObject" value="55.101.101.26"required  autofocus>
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row">
                                    <label for="memoryLocation" class="col-md-6 col-form-label text-md-right">Memory Location</label>
                                    <div class="col-md-6">
                                        <input type="text" id="MemoryLocation" class="form-control" name="memoryLocation" value="0x09"required  autofocus>
                                    </div>
                                </div> 
                              </div>
                              <div class="col-md-3">
                                  <div class="form-group row">
                                      <label for="inputValue" class="col-md-6 col-form-label text-md-right">Input Value</label>
                                      <div class="col-md-6">
                                          <input type="text" id="InputValue" class="form-control" name="inputValue" value="2"required  autofocus>
                                      </div>
                                  </div>
                                </div>
                         
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                  
                               <div class="form-group row">
                                                  <label for="breakPoisition" class="col-md-6 col-form-label text-md-right">Break Poisition(Longitude)</label>
                                                  <div class="col-md-6">
                                                      <input type="text" id="BreakPoisition" class="form-control" name="breakPoisition" value="55.101.22.121"required  autofocus>
                                                  </div>
                                              </div>
                            </div>
                            <div class="sensormessage"><i class="fa fa-exclamation-circle text-info" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Break action target when converging the <span class="text-info"> condition value</span></div>
                            
                          </div>
                          <a href="#" class="btn btnposition" data-toggle="modal" data-target="#centralModalSuccess">Position Setting</a> 
                          <div class="float-right">
              
                            <ul class="buttonlist">
                              <li><a href="#" class="btn btn-primary btn-md flat-primary"><i class="fas fa-plus"></i>Add</a></li>
                              <li><a href="#" class="btn btn-danger btn-md flat-danger"><i class="fas fa-minus"></i>Delete</a></li>
                              <li><a href="#" class="btn btn-primary btn-md flat-primary"><i class="fas fa-search"></i>View</a></li>
                            </ul>
      
              
                          </div>
                          
                    </form>
                    <div id="table-container" class="style-6">
                        <div class="table-title text-center  font-weight-bold">Sensor sign based break action list</div>
                        
                        
                        <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Range</th>
                                  <th scope="col">Target Item</th>
                                  <th scope="col">Latitude</th>
                                  <th scope="col">Longitude</th>
                                  <th scope="col">Sensor Signal Reciving Device</th>
                                  <th scope="col">Memory</th>
                                  <th scope="col">Action Value</th>
                                  <th scope="col">Break Action ObjectIP</th>
                                  <th scope="col">Memory Add</th>
                                  <th scope="col">Memory Action Value</th>
                                  <th scope="col">Date of Registration</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Intersection section #1</td>
                                  <td>55.101.22.121</td>
                                  <td>129.3902</td>
                                  <td>55.101.22.121</td>
                                  <td>0x07</td>
                                  <td>1</td>
                                  <td>55.101.22.121</td>
                                  <td>0x07</td>
                                  <td>2</td>
                                  <td>2018-11-21/12:22:12</td>
                                </tr>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Intersection section #1</td>
                                  <td>55.101.22.121</td>
                                  <td>129.3902</td>
                                  <td>55.101.22.121</td>
                                  <td>0x07</td>
                                  <td>1</td>
                                  <td>55.101.22.121</td>
                                  <td>0x07</td>
                                  <td>2</td>
                                  <td>2018-11-21/12:22:12</td>
                                </tr>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Intersection section #1</td>
                                  <td>55.101.22.121</td>
                                  <td>129.3902</td>
                                  <td>55.101.22.121</td>
                                  <td>0x07</td>
                                  <td>1</td>
                                  <td>55.101.22.121</td>
                                  <td>0x07</td>
                                  <td>2</td>
                                  <td>2018-11-21/12:22:12</td>
                                </tr>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Intersection section #1</td>
                                  <td>55.101.22.121</td>
                                  <td>129.3902</td>
                                  <td>55.101.22.121</td>
                                  <td>0x07</td>
                                  <td>1</td>
                                  <td>55.101.22.121</td>
                                  <td>0x07</td>
                                  <td>2</td>
                                  <td>2018-11-21/12:22:12</td>
                                </tr>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Intersection section #1</td>
                                  <td>55.101.22.121</td>
                                  <td>129.3902</td>
                                  <td>55.101.22.121</td>
                                  <td>0x07</td>
                                  <td>1</td>
                                  <td>55.101.22.121</td>
                                  <td>0x07</td>
                                  <td>2</td>
                                  <td>2018-11-21/12:22:12</td>
                                </tr>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Intersection section #1</td>
                                  <td>55.101.22.121</td>
                                  <td>129.3902</td>
                                  <td>55.101.22.121</td>
                                  <td>0x07</td>
                                  <td>1</td>
                                  <td>55.101.22.121</td>
                                  <td>0x07</td>
                                  <td>2</td>
                                  <td>2018-11-21/12:22:12</td>
                                </tr>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Intersection section #1</td>
                                  <td>55.101.22.121</td>
                                  <td>129.3902</td>
                                  <td>55.101.22.121</td>
                                  <td>0x07</td>
                                  <td>1</td>
                                  <td>55.101.22.121</td>
                                  <td>0x07</td>
                                  <td>2</td>
                                  <td>2018-11-21/12:22:12</td>
                                </tr>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Intersection section #1</td>
                                  <td>55.101.22.121</td>
                                  <td>129.3902</td>
                                  <td>55.101.22.121</td>
                                  <td>0x07</td>
                                  <td>1</td>
                                  <td>55.101.22.121</td>
                                  <td>0x07</td>
                                  <td>2</td>
                                  <td>2018-11-21/12:22:12</td>
                                </tr>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Intersection section #1</td>
                                  <td>55.101.22.121</td>
                                  <td>129.3902</td>
                                  <td>55.101.22.121</td>
                                  <td>0x07</td>
                                  <td>1</td>
                                  <td>55.101.22.121</td>
                                  <td>0x07</td>
                                  <td>2</td>
                                  <td>2018-11-21/12:22:12</td>
                                </tr>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Intersection section #1</td>
                                  <td>55.101.22.121</td>
                                  <td>129.3902</td>
                                  <td>55.101.22.121</td>
                                  <td>0x07</td>
                                  <td>1</td>
                                  <td>55.101.22.121</td>
                                  <td>0x07</td>
                                  <td>2</td>
                                  <td>2018-11-21/12:22:12</td>
                                </tr>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Intersection section #1</td>
                                  <td>55.101.22.121</td>
                                  <td>129.3902</td>
                                  <td>55.101.22.121</td>
                                  <td>0x07</td>
                                  <td>1</td>
                                  <td>55.101.22.121</td>
                                  <td>0x07</td>
                                  <td>2</td>
                                  <td>2018-11-21/12:22:12</td>
                                </tr>  <tr>
                                  <th scope="row">1</th>
                                  <td>Intersection section #1</td>
                                  <td>55.101.22.121</td>
                                  <td>129.3902</td>
                                  <td>55.101.22.121</td>
                                  <td>0x07</td>
                                  <td>1</td>
                                  <td>55.101.22.121</td>
                                  <td>0x07</td>
                                  <td>2</td>
                                  <td>2018-11-21/12:22:12</td>
                                </tr>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Intersection section #1</td>
                                  <td>55.101.22.121</td>
                                  <td>129.3902</td>
                                  <td>55.101.22.121</td>
                                  <td>0x07</td>
                                  <td>1</td>
                                  <td>55.101.22.121</td>
                                  <td>0x07</td>
                                  <td>2</td>
                                  <td>2018-11-21/12:22:12</td>
                                </tr>

                              
                                  </tbody>
                            </table>

                            <!-- POPUP MODEL -->
                  <!-- Central Modal Medium Success -->
                          <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                              aria-hidden="true">
                              <div class="modal-dialog modal-notify " role="document">
                                <!--Content-->
                                <div class="modal-content modalbg">
                                  <!--Header-->
                                  <div class="modal-header">
                                    <p class="heading">Location Verification Screen</p>
                                </div>

                                  <!--Body-->
                                  <div class="modal-body modalbg">
                                    <div class="container-fluid">
                                      <div class="row">
                                        <div class="col-md-5">
                                          <div class="google-screen" id="map"></div>
                                            <div class="screenshow">Mouse Position (35.5339, 129.39902)</div>
                                          </div>
                                        <div class="col-md-7">
                                          <div class="info-container" id="ModalForm">
                                              <div class="form-group row">
                                                  <label for="latitude" class="col-md-6 col-form-label">Break Position(Latitude)</label>
                                                  <div class="col-md-6">
                                                      <input type="text" id="Latitude" class="form-control" name="latitude" value="55.101.101.26"required  autofocus>
                                                  </div>
                                              </div>
                                              <div class="form-group row">
                                                  <label for="Langitude" class="col-md-6 col-form-label">Break Position(Langitude)</label>
                                                  <div class="col-md-6">
                                                      <input type="text" id="langitude" class="form-control" name="langitude" value="55.101.101.26"required  autofocus>
                                                  </div>
                                              </div>
                                              
                                              <div class="row">
                                                <p class="text-info">*Latitude / Longitude extraction is available when selecting the map location </p>
                                              
                                                <a href="#" class="btn btn-primary btn-corner">Location Update</a>
                                              </div>
                                              <div class="row">
                                                  <ul class="modalbutton">
                                                      <li><a href="#" class="btn btn-primary btn-lg flat-primary">Save</a></li>
                                                      <li><a href="#" class="btn btn-danger btn-lg flat-danger">Cancel</a></li>
                                                    </ul>
                                              </div>

                                          </div>
                                        </div>
                                      </div>
                                    </div>  
                                  </div>
                                  </div>
                                <!--/.Content-->
                              </div>
                              </div>
                    <!-- Central Modal Medium Success-->


          
                        </div>
              </div>
              
            </div>
          
          </div>
          <!-- Classic tabs -->
            <!-- tabs end -->

            
    </div>
 
  </div>


  

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- custom javascripts -->
  
  <script src="js/addasone.js"></script>

    <!-- Jquery Freezer Plugin -->
    <script type="text/javascript" src="js/freeze-table.js"></script>
    <!-- google Api  -->
  
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACnkFSbZ5ETSTrn7zk2wHGbNSt95_S694&callback=initMap" async defer></script>

  
   <script>
      function initMap() {
    // The location of Uluru
    var uluru = {lat: 12.9919826, lng: 77.536412};
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 10, center: uluru});
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: uluru, map: map});
  }
</script>
<script>
  $(document).ready(function()
  {
    $("#table-container").freezeTable({
    'scrollable' : true,
   }),
  
   $("#scrollabletable").freezeTable({
    'scrollable' : true,
   });

  });
</script>


    
</body>

</html>
<script>
  var id ;
  $(".mclass").click(function(){
       id = $(this).prop('id');
     alert(id);
    });
  function del(){
    alert("delete");
    $.ajax({
      type:"POST",
      url: "del.php",
      data: {id:id},
      success:function(data){
        alert(data);
      }
    });
  }
</script>