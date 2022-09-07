<?php
include("header.php"); 



if(isset($_GET['stu_id'])) 
{
	$stu_id = $_GET['stu_id'];
	
	$sql = "SELECT * FROM students WHERE stu_id='$stu_id'";
	
	//echo $sql; die;
	
	$result = $conn->query($sql);
	if($row = mysqli_fetch_array($result)) 
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
    $stu_password         = $row['stu_password'];
    $stu_photo            = $row['stu_photo'];

    $stu_id 			      	= $row['stu_id'];
	}
}



if(isset($_POST['update'])) 
{ 
  $stu_name 	      	= $_POST['stu_name'];
	$stu_batch_no 	  	= $_POST['stu_batch_no'];
	$stu_session     		= $_POST['stu_session'];
	$stu_father_name    = $_POST['stu_father_name'];
	$stu_mother_name    = $_POST['stu_mother_name'];
	$stu_dob            = $_POST['stu_dob'];
	$stu_gender         = $_POST['stu_gender'];
	$stu_marital_status = $_POST['stu_marital_status'];
	$stu_religion       = $_POST['stu_religion'];
	$stu_occupation     = $_POST['stu_occupation'];
	$stu_present_address  = $_POST['stu_present_address'];
	$stu_permanent_address  = $_POST['stu_permanent_address'];
	$stu_contact            = $_POST['stu_contact'];
	$stu_email              = $_POST['stu_email'];
  $stu_password           = $_POST['stu_password'];  
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["stu_photo"]["name"]);

  $stu_id 	          = $_POST['stu_id'];
  
	
	$sql = "UPDATE students set stu_name='$stu_name',
          stu_batch_no='$stu_batch_no', 
          stu_session='$stu_session', 
          stu_father_name='$stu_father_name', 
          stu_mother_name='$stu_mother_name', 
          stu_dob='$stu_dob', 
          stu_gender='$stu_gender', 
          stu_religion='$stu_religion', 
          stu_occupation='$stu_occupation', 
          stu_present_address='$stu_present_address', 
          stu_permanent_address='$stu_permanent_address', 
          stu_contact='$stu_contact', 
          stu_email='$stu_email', 
          stu_password='$stu_password',
          stu_photo='$target_file'

          WHERE stu_id='$stu_id'";         
	
	
  $result = $conn->query($sql);
  




  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["stu_photo"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["stu_photo"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }
  
  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
  
  // Check file size
  if ($_FILES["stu_photo"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["stu_photo"]["tmp_name"], $target_file)) 
    {
      echo "The file ". basename( $_FILES["stu_photo"]["name"]). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
   







	
	if($result) 
	{
    echo '<h3 class="wrapper" class="col-md-12" style="padding: 30px;"> <span style="color:green"><strong><center>Updated successfully!</center></strong></span> </h3>
    ';
    echo "<meta http-equiv='refresh' content='2;url=student_list.php'>";
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
        <h3><i class="fa fa-angle-right"></i> Edit Student</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <section id="unseen">
                <!--  -->

              <div class="row mt">
                <div class="col-lg-12">
                  <div class="form-panel">
                    <form class="form-horizontal style-form" action="edit_student.php" method="post" enctype="multipart/form-data">
                      
                      
                  <div class="form-group">
                    <label class="col-sm-2 control-label" >Name</label>
                    <div >
                      <input type="text"  name="stu_name" value="<?php  echo $stu_name;  ?>" placeholder="Enter your name" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2 " >Batch Number</label>
                    <div class="controls">
                      <input type="text" name="stu_batch_no" value="<?php  echo $stu_batch_no;  ?>" placeholder="Enter your batch number" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" >Session</label>
                    <div class="controls">
                      <input type="text" name="stu_session" value="<?php  echo $stu_session;  ?>" placeholder="Enter your session" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="control-label col-sm-2" >Father's Name</label>
                    <div class="controls">
                      <input type="text" name="stu_father_name" value="<?php  echo $stu_father_name;  ?>" placeholder="Enter your father's name" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="control-label col-sm-2" >Mother's Name</label>
                    <div class="controls">
                      <input type="text" name="stu_mother_name" value="<?php  echo $stu_mother_name;  ?>" placeholder="Enter your mother's name" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" >Date of Birth</label>
                    <div class="controls"  data-date-format="yyyy-mm-dd" data-date="2020-01-01" >
                      <input type="date" name="stu_dob" value="<?php  echo $stu_dob;  ?>" data-date-format="yyyy-mm-dd" data-date="2020-01-01" required>
                      
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="stu_gender" >Gender</label>
                    <div class="controls">
                      <input type="radio"  name="stu_gender" value="Male" checked="checked"> Male 
                      <input type="radio"  name="stu_gender" value="Female"> Female
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="control-label col-sm-2" >Marital Status</label>
                    <div class="controls">
                    
                    <select id="stu_marital_status" name="stu_marital_status" required> 
                      <option selected ><?php  echo $stu_marital_status;  ?></option>
                      <option  value="Married">Married</option>
                      <option value="Unmarried">Unmarried</option>
                      <option value="Single">Single</option>
                      <option value="Divorced">Divorced</option>
                    </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" >Religion</label>
                    <div class="controls">
                    
                    <select id="stu_religion" name="stu_religion"  required> 
                      <option selected ><?php  echo $stu_religion;  ?></option>
                      <option  value="Islam">Islam</option>
                      <option value="Hinduism">Hinduism</option>
                      <option value="Christian">Christian</option>
                      <option value="Buddhism">Buddhism</option>
                      <option value="Others">Others</option>
                    </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" >Current Occupation</label>
                    <div class="controls">
                      <input type="text" name="stu_occupation" value="<?php  echo $stu_occupation;  ?>" placeholder="Enter your current occupation" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" >Present Address</label>
                    <div class="controls">
                      <input type="text" name="stu_present_address" value="<?php  echo $stu_present_address;  ?>" placeholder="Enter present address" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" >Permanent Address</label>
                    <div class="controls">
                      <input type="text" name="stu_permanent_address" value="<?php  echo $stu_permanent_address;  ?>" placeholder="Enter permanent address" required>
                    </div>
                  </div>               
                  
                  <div class="form-group">
                    <label class="control-label col-sm-2" >Contact</label>
                    <div class="controls">
                      <input type="text" name="stu_contact" value="<?php  echo $stu_contact;  ?>" placeholder="Enter your contact number" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class=" col-sm-2 col-sm-2 control-label " >Email</label>
                    <div class="controls">
                      <input type="text" name="stu_email" value="<?php  echo $stu_email;  ?>" placeholder="Enter your email id" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="inputSignupPassword">Password</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword" name="stu_password" value="<?php  echo $stu_password;  ?>" placeholder="Password" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" >Photo</label>
                    <div class="controls">
                      <input type="file" name="stu_photo" alue="<?php  echo $stu_photo;  ?>" id="stu_photo">
                    </div>
                  </div>
                      
                      <div class="form-group ">                      
                          <div class="control-label col-sm-2">                              
                          <input class="btn btn-primary" type="submit" name="update" value="Update" />
                          <input type="hidden" name="stu_id" value="<?php  echo $stu_id;  ?>" />
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