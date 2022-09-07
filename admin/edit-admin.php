<?php
include("header.php");



if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql = "SELECT * FROM admins WHERE id='$id'";

    //echo $sql; die;

    $result = $conn->query($sql);
    if($row = mysqli_fetch_array($result))
    {
        $username 				= $row['username'];
        $full_name 			= $row['full_name'];
        $password 			= $row['password'];
        $id 				= 	$row['id'];
    }

}


if(isset($_POST['update']))
{
    $username 				= $_POST['username'];
    $full_name 			= $_POST['full_name'];
    $password 			= $_POST['password'];
    $id 				= 	$_POST['id'];

    $sql = "UPDATE admins set username='$username', full_name='$full_name', password='$password' WHERE id='$id'";



    $result = $conn->query($sql);

    if($result)
    {
        echo '<h3 class="wrapper" class="col-md-12" style="padding: 30px;"> <span style="color:green"><strong><center>Updated successfully!</center></strong></span> </h3>
    ';
        echo "<meta http-equiv='refresh' content='2;url=admin.php'>";
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
            <h3><i class="fa fa-angle-right"></i> Edit <?php echo($full_name) ?></h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="content-panel">
                        <section id="unseen">
                            <div class="row mt">

                                <!-- form -->
                                <div class="col-lg-12 ">
                                    <div  class="col-md-12" style="padding: 10px;" align="right" >

                                        <form action="edit-admin.php" method="post" role="form" class="contactForm">
                                            <div class=" margintop10 form-group" >
                                                <div  class="form-group">
                                                    <input type="text" name="username" value="<?php echo($username) ?>" class="form-control" required/>
                                                </div>
                                                <div  class="form-group">
                                                    <input type="text" name="full_name" value="<?php echo($full_name) ?>" class="form-control" required/>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="password" value="<?php echo($password) ?>" class="form-control" required/>
                                                    <p class="text-center">
                                                        <input class="btn btn-primary" type="submit" name="update" value="Update" />
                                                        <input type="hidden" name="id" value="<?php  echo $id;  ?>" />
                                                    </p>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                                <!-- form -->

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