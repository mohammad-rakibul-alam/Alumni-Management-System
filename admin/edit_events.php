<?php
include("header.php"); 



if(isset($_GET['event_id'])) 
{
	$event_id = $_GET['event_id'];
	
	$sql = "SELECT * FROM events WHERE event_id='$event_id'";
	
	//echo $sql; die;
	
	$result = $conn->query($sql);
	if($row = mysqli_fetch_array($result)) 
	{
    $event_name 	      	= $row['event_name'];
    $event_organizer 	  	= $row['event_organizer'];
    $event_location 	  	= $row['event_location'];
    $event_start_date	  	= $row['event_start_date'];
    $event_end_date 	    = $row['event_end_date'];
    $status 	            = $row['status'];

    $event_id 			      	= $row['event_id'];
	}
}



if(isset($_POST['update'])) 
{
  $event_name 	      	= $_POST['event_name'];
	$event_organizer 	  	= $_POST['event_organizer'];
	$event_location 	  	= $_POST['event_location'];
	$event_start_date	  	= $_POST['event_start_date'];
	$event_end_date 	    = $_POST['event_end_date'];
	$status 	            = $_POST['status'];
	$event_id 	          = $_POST['event_id'];
	
	$sql = "UPDATE events set event_name='$event_name',
          event_organizer='$event_organizer', 
          event_location='$event_location', 
          event_start_date='$event_start_date', 
          event_end_date='$event_end_date', 
          status='$status'	
          WHERE event_id='$event_id'";
         
	
	
	
	$result = $conn->query($sql);
	
	if($result) 
	{
    echo '<h3 class="wrapper" class="col-md-12" style="padding: 30px;"> <span style="color:green"><strong><center>Updated successfully!</center></strong></span> </h3>
    ';
    echo "<meta http-equiv='refresh' content='2;url=events.php'>";
		exit();
	}
	else {
		echo '<h3> <span style="color:red"><strong><center>Something Went Wrong! Try Again...</center></strong></span> </h3>
      ';
	}
}



?>

    <!--Latest News content start-->
    <section id="main-content">
     
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Edit Event</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <section id="unseen">
                <!--  -->

              <div class="row mt">
                <div class="col-lg-12">
                  <div class="form-panel">
                    <form class="form-horizontal style-form" action="edit_events.php" method="post">
                      <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Event Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="event_name" value="<?php echo($event_name) ?>" placeholder="Write the event name" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Event Organizer</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="event_organizer" value="<?php echo($event_organizer) ?>" placeholder="Write the event organizer" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Event Location</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="event_location" value="<?php echo($event_location) ?>" placeholder="Write the event location" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Start date</label>
                        <div class="col-md-3 col-xs-11">
                          <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2020-01-01" class="input-append date dpYears">
                            <input type="text" readonly="" name="event_start_date" value="<?php echo($event_start_date) ?>" size="16" class="form-control">
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
                            <input  type="text" readonly="" name="event_end_date" value="<?php echo($event_end_date) ?>" size="16" class="form-control">
                            <span class="input-group-btn add-on">
                              <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                              </span>
                          </div>
                          <span class="help-block">Select date</span>
                          <span class="help-block">
                          <div class=" margintop10 form-group" >
                            <div>
                              <label > <h4 >Status:</h4></label>
                                <select type="text" class="form-control" name="status" placeholder="Status" required>
                                <option selected><?php echo($status) ?></option>
                                <option>On</option>
                                <option>Off</option>
                                </select>
                            </div></span>
                            
                          <input class="btn btn-primary" type="submit" name="update" value="Update" />
                          <input type="hidden" name="event_id" value="<?php  echo $event_id;  ?>" />

                        </div>
                      </div>


                    </form>
                  </div>
                </div>
                <!-- col-lg-12-->
              </div>

            

          </div>
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