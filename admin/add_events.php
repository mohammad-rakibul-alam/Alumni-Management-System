<?php
include("header.php"); 


if(isset($_POST['save']))
{
	$event_name 	      	= $_POST['event_name'];
	$event_organizer 	  	= $_POST['event_organizer'];
	$event_location 	  	= $_POST['event_location'];
	$event_start_date	  	= $_POST['event_start_date'];
	$event_end_date 	    = $_POST['event_end_date'];
	$status 	            = $_POST['status'];
	
	
	
  $sql =  "INSERT into events ( event_name, event_organizer, event_location, event_start_date, event_end_date, status 	) values ('$event_name', '$event_organizer', '$event_location', '$event_start_date', '$event_end_date',  '$status')";
  
	
	
	$result = $conn->query($sql);
	
	if($result == 1)
	
    {
        echo '<h3 class="wrapper" class="col-md-12" style="padding: 30px;"> <span style="color:green"><strong><center>Event added successfully!</center></strong></span> </h3>
        ';
        echo "<meta http-equiv='refresh' content='2;url=events.php'>";
    }
    else
    {
      echo '<h3 class="wrapper" class="col-md-12" style="padding: 30px;"> <span style="color:black"><strong><center>Something Went Wrong! Try Again...</center></strong></span> </h3>
      ';
    }

    
}
?>

    <!--Latest News content start-->
    <section id="main-content">
     
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Add Event</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <form class="form-horizontal style-form" action="add_events.php" method="post">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Event Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  name="event_name" placeholder="Write the event name" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Event Organizer</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="event_organizer" placeholder="Write the event organizer" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Event Location</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="event_location" placeholder="Write the event location" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Start date</label>
                  <div class="col-md-3 col-xs-11">
                    <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2020-01-01" class="input-append date dpYears">
                      <input type="text" readonly="" name="event_start_date" value="2020-01-01" size="16" class="form-control">
                      <span class="input-group-btn add-on">
                        <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                    </div>
                    <span class="help-block">Select date</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">End date</label>
                  <div class="col-md-3 col-xs-11">
                    <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2020-01-01" class="input-append date dpYears">
                      <input  type="text" readonly="" name="event_end_date" value="2020-01-01" size="16" class="form-control">
                      <span class="input-group-btn add-on">
                        <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                    </div>
                    <span class="help-block">Select date</span>
                    <span class="help-block">
                    <div class=" margintop10 form-group" >
                      <div>
                        <label > <h4 >Status:</h4></label>
                        <input type="hidden" name="status" value="Off" data-toggle="switch"/>
                        <input type="checkbox" name="status" value="On" data-toggle="switch"/>

                      </div></span>


                    <button class="btn btn-large btn-theme margintop10" type="submit" name="save">Submit</button>

                  </div>
                </div>


              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
              </section>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
        </div>
       

        
      </section>
    </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
  
<?php
  include('footer.php');
?>