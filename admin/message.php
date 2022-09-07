<?php
  include("header.php");
?>
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Messages</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <section id="unseen">

                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Subject</th>
                      <th>Messages</th>
                    </tr>
                  </thead>
                  
              <?php
               $sql = "SELECT * FROM contact ORDER BY id DESC";
               $rec = $conn->query($sql);

               while($row = mysqli_fetch_array($rec))
                            
               {
                   $name 			    	= $row['name'];
                   $email 	    		= $row['email'];
                   $subject 		  	= $row['subject'];
                   $message 				= $row['message'];

                   $id 			      	= $row['id'];
                       
              ?>              
  
                  <tbody>
                    <tr>
                      <td><?php echo($name); ?></td>
                      <td><?php echo($email); ?></td>
                      <td><?php echo($subject); ?></td>
                      <td><?php echo($message); ?></td>
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
    <!--main content end-->

<?php
include("footer.php");
?>