<?php
include("header.php"); 
?>

    <section id="content" style="padding-top:0px;">
    <div class="container">
        <div class="row">
          <div class="span6">

            <h2>Upcoming <strong>Event</strong></h2>
            <div >

            
            <?php
                      $event_id = $_GET["id"];
                      $sql = "SELECT * FROM events WHERE event_id = '$event_id'";
                      $result = mysqli_query($conn, $sql);
            
                        while($row = mysqli_fetch_assoc($result)){
                            $event_name = $row["event_name"];
                            $event_organizer = $row["event_organizer"];
                            $event_location = $row["event_location"];
                            $event_start_date = $row["event_start_date"];
                            $event_end_date = $row["event_end_date"];
                            $status = $row["status"];
                          
              ?>
            <dl>
              <dt>Event Name: <?php echo($event_name); ?></dt>
              <dd>Organizer: <?php echo($event_organizer); ?></dd>
              <dd>Location: <?php echo($event_location); ?></dd>
              <dt>Start Date: <?php echo($event_start_date); ?></dt>
              <dt>End Date: <?php echo($event_end_date); ?></dt>
              
            </dl>
                  <?php
                        }
                    ?> 
          </div>
          </div>
          
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        
      </div>
    </section>
    <section id="bottom">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="aligncenter">
              <div id="twitter-wrapper">
                <div id="twitter">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

<?php
include("footer.php");
?>