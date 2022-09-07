<?php
include("header.php"); 



 
if(isset($_POST['submit']))
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
  $target_dir = "../uploads/";
  $target_file = $target_dir . basename($_FILES["stu_photo"]["name"]);


	
	
	
	$sql =  "INSERT into students ( stu_name, 
  stu_batch_no, 
  stu_session, 
  stu_father_name, 
  stu_mother_name, 
  stu_dob, 
  stu_gender, 
  stu_marital_status,
  stu_religion,
  stu_occupation,
  stu_present_address,
  stu_permanent_address,
  stu_contact,
  stu_email, 
  stu_password,
  stu_photo) 
  values ('$stu_name', 
  '$stu_batch_no', 
  '$stu_session', 
  '$stu_father_name', 
  '$stu_mother_name', 
  '$stu_dob',
  '$stu_gender',
  '$stu_marital_status',
  '$stu_religion',
  '$stu_occupation',
  '$stu_present_address',
  '$stu_permanent_address',
  '$stu_contact',
  '$stu_email', 
  '$stu_password',
  '$target_file'  )";
	
  //echo $sql; die;
  
	$result = $conn->query($sql);
  
  

  $target_dir = "../uploads/";
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
   




	if($result == 1)
	
    {
        echo '<h3 style="color:green; height:300px;"> <span ><strong><center>Congratulations! You have successfully created your account</center></strong></span> </h3>';

        echo "<meta http-equiv='refresh' content='2;url=index.php'>";
    }
    else
    {
      echo '<h3> <span style="color:black"><strong><center>Something Went Wrong! Try Again...</center></strong></span> </h3>
      ';
        echo "<meta http-equiv='refresh' content='2;url=index.php'>";
    }

    
}


?>

<?php
include("footer.php");
?>