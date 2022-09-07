<?php
include("header.php");


if(isset($_POST['save']))
{
    $title	  	= $_POST['title'];
    $description	  	= $_POST['description'];

    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);

    $sql =  "INSERT into galleries (photo, title, description) values ('$target_file','$title', '$description')";


    $result = $conn->query($sql);

    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
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
    if ($_FILES["photo"]["size"] > 500000) {
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
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file))
        {
            echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    if($result == 1)

    {
        echo '<h3 class="wrapper" class="col-md-12" style="padding: 30px;"> <span style="color:green"><strong><center>Gallery Photo added successfully!</center></strong></span> </h3>
        ';
        echo "<meta http-equiv='refresh' content='2;url=galleries.php'>";
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
            <h3><i class="fa fa-angle-right"></i> Add Gallery</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="content-panel">
                        <section id="unseen">
                            <div class="row mt">

                                <div class="col-lg-12 ">
                                    <div  class="col-md-12" style="padding: 10px;">

                                        <form action="add-gallery.php" method="post" role="form" class="contactForm" enctype="multipart/form-data">
                                            <div class=" margintop10 form-group" >
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label" >Name</label>
                                                    <div >
                                                        <input type="text"  name="title" placeholder="Enter Gallery Title" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" >Photo</label>
                                                    <div class="controls">
                                                        <input type="file" name="photo" id="photo">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <label>
                                                        <textarea class="form-control editor" name="description" rows="5" data-rule="required" placeholder="Write the description"></textarea>
                                                    </label>
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