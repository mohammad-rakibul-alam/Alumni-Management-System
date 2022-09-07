<!DOCTYPE html>
<html lang="en">

<?php
include("connection.php");


$q = "SELECT * FROM settings";

$settings = mysqli_query($conn, $q);

$setting = mysqli_fetch_assoc($settings);

?>

<head>
  <meta charset="utf-8">
  <title>Sociology Alumni Association</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="css/jcarousel.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="skins/default.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />

  <!-- =======================================================
    Author: MD Masud Sikdar
    Author URL: https://mdmasudsikdar.com
  ======================================================= -->
</head>

<body>
  <div id="wrapper">
    
    <!-- start header -->
    <header>
      <div class="container ">
        
        <div class="row nomargin">
          <div class="span12">
            <div class="headnav ">
              <ul>
                <?php
                session_start();
                if (!isset($_SESSION['id']) && !isset($_SESSION['user_id']))
                {
                    ?>
                  <li><a href="#mySignup" data-toggle="modal"><i class="icon-user"></i> Sign up</a></li>
                  <li><a href="#mySigninUser" data-toggle="modal">Sign in</a></li>
                  <li><a href="#mySignin" data-toggle="modal">Admin Login</a></li>
               <?php } else
                {
                    if (isset($_SESSION['id']))
                    {
                ?>
                        <li><a href="../admin"><i class="icon-dashboard"></i>Dashboard</a></li>
                        <?php } ?>
                  <li><a href="../admin/logout.php"><i class="icon-dashboard"></i>Logout</a></li>
                  <?php }
                  ?>
              </ul>
            </div>
            <!-- Signup Modal -->
            <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">Create an <strong>account</strong></h4>
              </div>
              <div class="modal-body">

                <form class="form-horizontal" action="signup_action.php" method="post" enctype="multipart/form-data">
                
                  <div class="control-group">
                    <label class="control-label" >Name</label>
                    <div class="controls">
                      <input type="text"  name="stu_name" placeholder="Enter your name" required>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" >Batch Number</label>
                    <div class="controls">
                      <input type="text" name="stu_batch_no" placeholder="Enter your batch number" required>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" >Session</label>
                    <div class="controls">
                      <input type="text" name="stu_session" placeholder="Enter your session" required>
                    </div>
                  </div>
                  
                  <div class="control-group">
                    <label class="control-label" >Father's Name</label>
                    <div class="controls">
                      <input type="text" name="stu_father_name" placeholder="Enter your father's name" required>
                    </div>
                  </div>
                  
                  <div class="control-group">
                    <label class="control-label" >Mother's Name</label>
                    <div class="controls">
                      <input type="text" name="stu_mother_name" placeholder="Enter your mother's name" required>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" >Date of Birth</label>
                    <div class="controls"  data-date-format="yyyy-mm-dd" data-date="2020-01-01" >
                      <input type="date" name="stu_dob" value="2020-01-01" data-date-format="yyyy-mm-dd" data-date="2020-01-01" required>
                      
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="stu_gender" >Gender</label>
                    <div class="controls">
                      <input type="radio"  name="stu_gender" value="Male" checked="checked"> Male 
                      <input type="radio"  name="stu_gender" value="Female"> Female
                    </div>
                  </div>
                  
                  <div class="control-group">
                    <label class="control-label" >Marital Status</label>
                    <div class="controls">
                    
                    <select id="stu_marital_status" name="stu_marital_status" required> 
                      <option selected >---Select Marital Status---</option>
                      <option  value="Married">Married</option>
                      <option value="Unmarried">Unmarried</option>
                      <option value="Single">Single</option>
                      <option value="Divorced">Divorced</option>
                    </select>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" >Religion</label>
                    <div class="controls">
                    
                    <select id="stu_religion" name="stu_religion" required> 
                      <option selected >---Select Religion---</option>
                      <option  value="Islam">Islam</option>
                      <option value="Hinduism">Hinduism</option>
                      <option value="Christian">Christian</option>
                      <option value="Buddhism">Buddhism</option>
                      <option value="Others">Others</option>
                    </select>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" >Current Occupation</label>
                    <div class="controls">
                      <input type="text" name="stu_occupation" placeholder="Enter your current occupation" required>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" >Present Address</label>
                    <div class="controls">
                      <input type="text" name="stu_present_address" placeholder="Enter present address" required>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" >Permanent Address</label>
                    <div class="controls">
                      <input type="text" name="stu_permanent_address" placeholder="Enter permanent address" required>
                    </div>
                  </div>               
                  
                  <div class="control-group">
                    <label class="control-label" >Contact</label>
                    <div class="controls">
                      <input type="text" name="stu_contact" placeholder="Enter your contact number" required>
                    </div>
                  </div>
                  
                  <div class="control-group">
                    <label class="control-label" >Email</label>
                    <div class="controls">
                      <input type="text" name="stu_email" placeholder="Enter your email id" required>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword">Password</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword" name="stu_password" placeholder="Password" required>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label" >Photo</label>
                    <div class="controls">
                      <input type="file" name="stu_photo" id="stu_photo">
                    </div>
                  </div>
                  
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn btn-theme" name="submit">Sign up</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signup modal -->
            <!-- Sign in Modal -->
            <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" action="login.php" method="post" autocomplete="off">
                  <div class="control-group">
                    <label class="control-label" for="inputText">Username</label>
                    <div class="controls">
                      <input type="text" id="inputText" name="username" placeholder="Username">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSigninPassword">Password</label>
                    <div class="controls">
                      <input type="password" name="password" id="inputSigninPassword" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" name="btn" class="btn">Sign in</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Forgot password? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signin modal -->
            <!-- Sign in Modal -->
            <div id="mySigninUser" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninUserModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySigninUserModalLabel">Login to your <strong>account</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" action="login_user.php" method="post" autocomplete="off">
                  <div class="control-group">
                    <label class="control-label" for="inputText">Email</label>
                    <div class="controls">
                      <input type="text" id="inputText" name="stu_email" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSigninPassword">Password</label>
                    <div class="controls">
                      <input type="password" name="password" id="inputSigninPassword" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" name="btn" class="btn">Sign in</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Forgot password? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signin modal -->
            <!-- Reset Modal -->
            <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputResetEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputResetEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Reset password</button>
                    </div>
                    <p class="aligncenter margintop20">
                      We will send instructions on how to reset your password to your inbox
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end reset modal -->
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="index.php"><img src="img/sociology-logo.PNG" alt="" class="logo" /></a>
              <h1>Alumni Association</h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown active">
                      <a href="index.php">Home</a>
                    </li>
                    <li class="dropdown">
                      <a href="about.php">About Us </a>
                      
                    </li>
                   
                    <li class="dropdown">
                      <a href="gallery.php">Gallery</a>
                    </li>
                    <li class="dropdown">
                      <a href="blog.php">Blog </a>
                      
                    </li>
                    <li>
                      <a href="contact.php">Contact </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
