<?php
  include("header.php");



// delete query


if(isset($_GET['event_id']))
{
    $event_id = $_GET['event_id'];

    $sql = "DELETE FROM events WHERE event_id='$event_id'";
    $conn->query($sql);
  
    
}


if(isset($_POST['update'])) 
{
	$status 		= $_POST['status'];
	
	$event_id 			= $_POST['event_id'];
	
	$sql = "UPDATE events set status='$status'	WHERE event_id='$event_id'";
			
  $result = $conn->query($sql);
  
	if($result) 
	{
    echo '<h3 class="wrapper" class="col-md-12" style="padding: 30px;"> <span style="color:green"><strong><center>Status Changed!</center></strong></span> </h3>
    ';
    echo "<meta http-equiv='refresh' content='2;url=events.php'>";
		exit();
	}
}
?>

    <!--Latest News content start-->
    <section id="main-content">
     
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Events</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <section id="unseen">

                <table class="table table-bordered table-striped table-condensed">
                <div  class="col-md-12" style="padding: 10px;" align="right" >
                <a class='btn btn-primary' href='add_events.php' >Add Event</a> 
                </div>

                  <thead>
                    <tr>
                      <th>Event Name</th>
                      <th>Event Organizer</th>
                      <th>Event Location</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Action</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  
              <?php
               $sql = "SELECT * FROM events ORDER BY event_id DESC ";
               $rec = $conn->query($sql);

               while($row = mysqli_fetch_array($rec))
                            
               {
                    $event_name 			    = $row['event_name'];
                    $event_name 	      	= $row['event_name'];
                    $event_organizer 	  	= $row['event_organizer'];
                    $event_location 	  	= $row['event_location'];
                    $event_start_date	  	= $row['event_start_date'];
                    $event_end_date 	    = $row['event_end_date'];
                    $status 	            = $row['status'];

                    $event_id 			      	= $row['event_id'];

                       
              ?>              
  
                  <tbody>
                    <tr>
                      <td><?php echo($event_name); ?></td>
                      <td><?php echo($event_organizer); ?></td>
                      <td><?php echo($event_location); ?></td>
                      <td><?php echo($event_start_date); ?></td>
                      <td><?php echo($event_end_date); ?></td>
                      
                      <td>
                      <a class='btn btn-primary' href='edit_events.php?event_id=<?php echo($event_id) ?>' >Edit</a> |
                      
                      <a class='btn btn-danger' href='events.php?event_id=<?php echo($event_id) ?>' onclick="return confirm('Are you sure to delete?')">Delete</a>
                      </td> 
                      <td>
                      <form action="events.php" method="post">
                        
                        <select type="text" class="form-control" name="status" placeholder="Status" required>
                        <option selected><?php echo($status) ?></option>
                        <option>On</option>
                        <option>Off</option>
                        </select>
                        <input class="btn btn-primary" type="submit" name="update" value="Change" />
                        <input type="hidden" name="event_id" value="<?php  echo $event_id;  ?>" />

                        </form>
                      </td>                    
                    </tr>
                    <?php
                    }
                   ?>
                  </tbody>
                 
                </table>
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
    <!--footer start-->
    
<?php
  include('footer.php');
?>