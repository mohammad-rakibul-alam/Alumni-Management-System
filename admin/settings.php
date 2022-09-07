<?php
include("header.php");



    $id = 1;

    $sql = "SELECT * FROM settings WHERE id='$id'";

    //echo $sql; die;

    $result = $conn->query($sql);
    if($row = mysqli_fetch_array($result))
    {
        $about_us				= $row['about_us'];
        $mission			= $row['mission'];

        $vision				= 	$row['vision'];

        $id				= 	$row['id'];
    }



if(isset($_POST['update']))
{
    $about_us				= $row['about_us'];
    $mission			= $row['mission'];

    $vision				= 	$row['vision'];

    $id				= 	1;

    $sql = "UPDATE settings set about_us='$about_us', mission='$mission', vision='$vision' WHERE id='$id'";

    $result = $conn->query($sql);

    if($result)
    {
        echo '<h3 class="wrapper" class="col-md-12" style="padding: 30px;"> <span style="color:green"><strong><center>Updated successfully!</center></strong></span> </h3>
    ';
        echo "<meta http-equiv='refresh' content='2;url=settings.php'>";
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
            <h3><i class="fa fa-angle-right"></i> Settings</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="content-panel">
                        <section id="unseen">
                            <div class="row mt">

                                <!-- form -->
                                <div class="col-lg-12 ">
                                    <div  class="col-md-12" style="padding: 10px;">

                                        <form action="settings.php" method="post" role="form" class="contactForm">
                                            <div class=" margintop10 form-group" >
                                                <div class="col-md-12 form-group">
                                                    <textarea class="form-control" name="about_us" rows="5" data-rule="required" data-msg="Please write something" placeholder="Write About Us" required><?php echo($about_us) ?></textarea>
                                                </div>
                                                <div class="col-md-12 form-group">


                                                    <textarea class="form-control" name="mission" rows="5" data-rule="required" data-msg="Please write something" placeholder="Write Mission" required><?php echo($mission) ?></textarea>
                                                </div>
                                                <div class="col-md-12 form-group">


                                                    <textarea class="form-control" name="vision" rows="5" data-rule="required" data-msg="Please write something" placeholder="Write Vision" required><?php echo($vision) ?></textarea>
                                                </div>
                                                    <p class="text-center">
                                                        <input class="btn btn-primary" type="submit" name="update" value="Update" />
                                                        <input type="hidden" name="news_id" value="<?php  echo $id;  ?>" />

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