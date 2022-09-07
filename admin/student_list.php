<?php
  include("header.php");



// delete query


if(isset($_GET['stu_id']))
{
    $stu_id = $_GET['stu_id'];

    $sql = "DELETE FROM students WHERE stu_id='$stu_id'";
    $conn->query($sql);
  
    
}


?>


    <!--Latest News content start-->
    <section id="main-content" >
     
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Students List</h3>
        <div class="row mt" >
          <div class="col-lg-12">
            <div class="content-panel" >
              <section id="unseen">

                <table class="table table-bordered table-striped table-condensed">
                <div  class="col-md-12" style="padding: 10px;" align="center" >
                </div>

                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Batch No</th>
                      <th>Session</th>
                      <th>F. Name</th>
                      <th>M. Name</th>
                      <th>DoB</th>
                      <th>Gender</th>
                      <th>Marital Status</th>
                      <th>Religion</th>
                      <th>Occupation</th>
                      <th>Pre.Add</th>
                      <th>Per.Add</th>
                      <th>Contact</th>
                      <th>Email</th>
                      <th>Photo</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  
              <?php
               $sql = "SELECT * FROM students ORDER BY stu_id DESC ";
               $rec = $conn->query($sql);

               while($row = mysqli_fetch_array($rec))
                            
               {
                    $stu_name 			      = $row['stu_name'];
                    $stu_batch_no 	      = $row['stu_batch_no'];
                    $stu_session 	      	= $row['stu_session'];
                    $stu_father_name 	  	= $row['stu_father_name'];
                    $stu_mother_name	  	= $row['stu_mother_name'];
                    $stu_dob         	    = $row['stu_dob'];
                    $stu_gender 	        = $row['stu_gender'];
                    $stu_marital_status 	= $row['stu_marital_status'];
                    $stu_religion 	      = $row['stu_religion'];
                    $stu_occupation 	    = $row['stu_occupation'];
                    $stu_present_address 	= $row['stu_present_address'];
                    $stu_permanent_address= $row['stu_permanent_address'];
                    $stu_contact          = $row['stu_contact'];
                    $stu_email            = $row['stu_email'];
                    $stu_photo            = $row['stu_photo'];

                    $stu_id 			      	= $row['stu_id'];

                       
              ?>              
  
                  <tbody>
                    <tr class='live-search-list'>
                      <td><?php echo($stu_name); ?></td>
                      <td><?php echo($stu_batch_no); ?></td>
                      <td><?php echo($stu_session); ?></td>
                      <td><?php echo($stu_father_name); ?></td>
                      <td><?php echo($stu_mother_name); ?></td>
                      <td><?php echo($stu_dob); ?></td>
                      <td><?php echo($stu_gender); ?></td>
                      <td><?php echo($stu_marital_status); ?></td>
                      <td><?php echo($stu_religion); ?></td>
                      <td><?php echo($stu_occupation); ?></td>
                      <td><?php echo($stu_present_address); ?></td>
                      <td><?php echo($stu_permanent_address); ?></td>
                      <td><?php echo($stu_contact); ?></td>
                      <td><?php echo($stu_email); ?></td>
                      <td>
                        <?php 
                        //echo($stu_photo); 
                        //echo'<img height="50" width="50" src="'.$stu_photo.'">';
                        echo '<img height="100" width="100" src="'.$stu_photo.'" />';
                        ?>
                      </td>
                      
                      <td>
                      <a class='btn btn-primary' href='edit_student.php?stu_id=<?php echo($stu_id) ?>' >Edit</a> |
                      
                      <a class='btn btn-danger' href='student_list.php?stu_id=<?php echo($stu_id) ?>' onclick="return confirm('Are you sure to delete?')">Delete</a>
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