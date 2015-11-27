<?php include 'db.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Title</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
     <div class="container">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="#">Project name</a>
       </div>
       <div id="navbar" class="navbar-collapse collapse">
         <ul class="nav navbar-nav">
           <li class="active"><a href="#">Home</a></li>
           <li><a href="#about">About</a></li>
           <li><a href="#contact">Contact</a></li>
         </ul>
       </div><!--/.nav-collapse -->
     </div>
   </nav>

    <div class="container">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#job">Job</a></li>
        <li><a data-toggle="tab" href="#machine_failure">Machine Failure</a></li>
        <li><a data-toggle="tab" href="#lunch_tea">Lunch/Tea</a></li>
        <li><a data-toggle="tab" href="#precautionary_check">Precautionary Check</a></li>
        <li><a data-toggle="tab" href="#pm">Preventive Maintenance</a></li>
        <li><a data-toggle="tab" href="#setup_change">Set-up Change</a></li>
        <li><a data-toggle="tab" href="#production_stoppage">Production Stoppage</a></li>
        <li><a data-toggle="tab" href="#operator_unavailability">Operator Unavailability</a></li>
    </ul>
    <div class="tab-content">
        <div id="job" class="tab-pane fade in active">
          <h3>Job</h3>
            <form class="form" id="job-form">
            <h4>Select Job Type</h4>
            <div class="btn-group" data-toggle="buttons">
               <label class="btn btn-default active">
                   <input type="radio" id="jt1" name="job_type" value="Normal" checked> Normal
               </label>
               <label class="btn btn-default">
                   <input type="radio" id="jt2" name="job_type" value="Rework" > Rework
               </label>
           </div>
           <h4>Select Component</h4>
           <div class="btn-group" data-toggle="buttons">
              <label class="btn btn-default active">
                  <input type="radio" id="c1" name="component" value="GMI Cam Shaft" checked> GMI Cam Shaft
              </label>
              <label class="btn btn-default">
                  <input type="radio" id="c2" name="component" value="NALT Main Shaft" > NALT Main Shaft
              </label>
              <label class="btn btn-default">
                  <input type="radio" id="c3" name="component" value="GMI Main Shaft" > GMI Main Shaft
              </label>
          </div>
             <button type="button" id ="job-button" class="btn btn-primary btn-lg">Start Event</button>
              <p>Duration : <span id = "job-duration">00:00:00</span></p>
         </form>
      </div>

        <div id="machine_failure" class="tab-pane fade">
            <h3>Machine Failure</h3>
            <form class="form" id="machine_failure-form">
            <h4>Failed Unit</h4>
            <div class="btn-group" data-toggle="buttons">
               <label class="btn btn-default active">
                   <input type="radio"  name="failed_unit" value="Drilling Unit" checked> Drilling Unit
               </label>
               <label class="btn btn-default">
                   <input type="radio"  name="failed_unit" value="Milling Unit" > Milling Unit
               </label>
                <label class="btn btn-default">
               <input type="radio"  name="failed_unit" value="Clamping Unit"> Clamping Unit
            </label>
           <label class="btn btn-default">
               <input type="radio"  name="failed_unit" value="Feed Unit" > Feed Unit
           </label>
           <label class="btn btn-default">
               <input type="radio"  name="failed_unit" value="Power Unit" > Power Unit
           </label>
           </div>
           <h4>Mode of failure</h4>
           <div class="btn-group" data-toggle="buttons">
              <label class="btn btn-default active">
                  <input type="radio" name="failure_mode" value="1" checked> 1
              </label>
              <label class="btn btn-default">
                  <input type="radio" name="failure_mode" value="2" > 2
              </label>
              <label class="btn btn-default">
                  <input type="radio" name="failure_mode" value="3" > 3
              </label>
              <label class="btn btn-default">
                  <input type="radio" name="failure_mode" value="4" > 4
              </label>
              <label class="btn btn-default">
                  <input type="radio" name="failure_mode" value="5" > 5
              </label>
          </div>
             <button type="button" id ="machine_failure-button" class="btn btn-primary btn-lg">Start Event</button>
             <p>Duration : <span id = "machine_failure-duration">00:00:00</span></p>
      </form>
        </div>
            <div id="lunch_tea" class="tab-pane fade">
              <h3>Lunch/Tea</h3>
              <button type="button" id ="lunch_tea-button" class="btn btn-primary btn-lg">Start Event</button>
              <p>Duration : <span id = "lunch_tea-duration">00:00:00</span></p>
            </div>
            <div id="precautionary_check" class="tab-pane fade">
              <h3>Precautionary Check</h3>
              <button type="button" id ="precautionary_check-button" class="btn btn-primary btn-lg">Start Event</button>
              <p>Duration : <span id = "precautionary_check-duration">00:00:00</span></p>
            </div>
            <div id="pm" class="tab-pane fade">
              <h3>Preventive Maintenance</h3>
            <button type="button" id ="pm-button" class="btn btn-primary btn-lg">Start Event</button>
            <p>Duration : <span id = "pm-duration">00:00:00</span></p>
            </div>
            <div id="setup_change" class="tab-pane fade">
              <h3>Setup Change</h3>
              <form class="form" id="machine_failure-form">
              <h4>Old Setup</h4>
              <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default active">
                    <input type="radio" name="old_setup" value="GMI Cam Shaft" checked> GMI Cam Shaft
                </label>
                <label class="btn btn-default">
                    <input type="radio"  name="old_setup" value="NALT Main Shaft" > NALT Main Shaft
                </label>
                <label class="btn btn-default">
                    <input type="radio" name="old_setup" value="GMI Main Shaft" > GMI Main Shaft
                </label>
             </div>
             <h4>New Setup</h4>
             <div class="btn-group" data-toggle="buttons">
               <label class="btn btn-default active">
                   <input type="radio"  name="new_setup" value="GMI Cam Shaft" checked> GMI Cam Shaft
               </label>
               <label class="btn btn-default">
                   <input type="radio"  name="new_setup" value="NALT Main Shaft" > NALT Main Shaft
               </label>
               <label class="btn btn-default">
                   <input type="radio"  name="new_setup" value="GMI Main Shaft" > GMI Main Shaft
               </label>
            </div>
               <button type="button" id ="setup_change-button" class="btn btn-primary btn-lg">Start Event</button>
               <p>Duration : <span id = "setup_change-duration">00:00:00</span></p>
        </form>
          </div>

            <div id="production_stoppage" class="tab-pane fade">
              <h3>Production Stoppage</h3>
              <form class="form" id="machine_failure-form">
              <h4>Cause</h4>
              <div class="btn-group" data-toggle="buttons">
                 <label class="btn btn-default active">
                     <input type="radio"  name="cause" value="Raw Material Unavailable" checked> Raw Material Unavailable
                 </label>
                 <label class="btn btn-default">
                     <input type="radio"  name="cause" value="Tools Unavailable" > Tools Unavailable
                 </label>
                  <label class="btn btn-default">
                 <input type="radio"  name="cause" value="Tool Inspection"> Tool Inspection
              </label>
             <label class="btn btn-default">
                 <input type="radio"  name="cause" value="Tool Change" > Tool Change
             </label>
             <label class="btn btn-default">
                 <input type="radio"  name="cause" value="Coolant Refilling" > Coolant Refilling
             </label>
             <label class="btn btn-default">
                 <input type="radio"  name="cause" value="Air Failure" > Air Failure
             </label>
             <label class="btn btn-default">
                 <input type="radio"  name="cause" value="No Demand" > No Demand
             </label>
             </div>
              <button type="button" id ="production_stoppage-button" class="btn btn-primary btn-lg">Start Event</button>
              <p>Duration : <span id = "production_stoppage-duration">00:00:00</span></p>
            </form>
            </div>
            <div id="operator_unavailability" class="tab-pane fade">
            <h3>Operator Unavailability</h3>
            <form class="form" id="machine_failure-form">
            <h4>Cause</h4>
            <div class="btn-group" data-toggle="buttons">
               <label class="btn btn-default active">
                   <input type="radio"  name="cause" value="Busy with other machine" checked> Busy with other machine
               </label>
               <label class="btn btn-default">
                   <input type="radio"  name="cause" value="Busy with official work" > Busy with official work
               </label>
                <label class="btn btn-default">
               <input type="radio"  name="cause" value="Personal needs"> Personal needs
            </label>
           </div>
            <button type="button" id ="operator_unavailability-button" class="btn btn-primary btn-lg">Start Event</button>
            <p>Duration : <span id = "operator_unavailability-duration">00:00:00</span></p>
          </form>
            </div>

      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
