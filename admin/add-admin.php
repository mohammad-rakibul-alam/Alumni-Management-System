<?php
include("header.php");


if(isset($_POST['save']))
{
    $username	  	= $_POST['username'];
    $password	  	= $_POST['password'];
    $full_name	  	= $_POST['full_name'];

    $sql =  "INSERT into admins (username, password, full_name) values ('$username','$password', '$full_name')";


    $result = $conn->query($sql);


    if($result == 1)

    {
        echo '<h3 class="wrapper" class="col-md-12" style="padding: 30px;"> <span style="color:green"><strong><center>Admin added successfully!</center></strong></span> </h3>
        ';
        echo "<meta http-equiv='refresh' content='2;url=admin.php'>";
    }
    else
    {
        echo '<h3> <span style="color:black"><strong><center>Something Went Wrong! Try Again...</center></strong></span> </h3>
      ';
    }


}
?>

    <!--Latest News content start-->
    <section id="main-content">

        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Add Admin</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="content-panel">
                        <section id="unseen">
                            <div class="row mt">

                                <div class="col-lg-12 ">
                                    <div  class="col-md-12" style="padding: 10px;">

                                        <form action="add-admin.php" method="post" role="form" class="contactForm" enctype="multipart/form-data">
                                            <div class=" margintop10 form-group" >
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label" >Username</label>
                                                    <div >
                                                        <input type="text"  name="username" placeholder="Enter Admin Username" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label" >Full Name</label>
                                                    <div >
                                                        <input type="text"  name="full_name" placeholder="Enter Admin Full Name" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label" >Password</label>
                                                    <div >
                                                        <input type="password"  name="password" required>
                                                    </div>
                                                    <p class="text-center">
                                                        <button class="btn btn-large btn-theme margintop10" type="submit" name="save">Submit</button>
                                                    </p>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
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