<?php
include("header.php");


if(isset($_POST['save']))
{
    $title	  	= $_POST['title'];
    $description	  	= $_POST['description'];
    $publication_status	  	= $_POST['publication_status'];

    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    $sql =  "INSERT into blogs (image, title, description, publication_status) values ('$target_file','$title', '$description', '$publication_status')";


    $result = $conn->query($sql);

    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
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
    if ($_FILES["image"]["size"] > 500000) {
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
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file))
        {
            echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    if($result == 1)

    {
        echo '<h3 class="wrapper" class="col-md-12" style="padding: 30px;"> <span style="color:green"><strong><center>Blog added successfully!</center></strong></span> </h3>
        ';
        echo "<meta http-equiv='refresh' content='2;url=blogs.php'>";
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
            <h3><i class="fa fa-angle-right"></i> Add Blog</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="content-panel">
                        <section id="unseen">
                            <div class="row mt">

                                <div class="col-lg-12 ">
                                    <div  class="col-md-12" style="padding: 10px;">

                                        <form action="add_blog.php" method="post" role="form" class="contactForm" enctype="multipart/form-data">
                                            <div class=" margintop10 form-group" >
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label" >Title</label>
                                                    <div >
                                                        <input type="text"  name="title" placeholder="Enter Title" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" >Blog Image</label>
                                                    <div class="controls">
                                                        <input type="file" name="image" id="image" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <select name="publication_status" class='form-control'>
                                                        <option value="1">Publish</option>
                                                        <option value="0">Draft</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <textarea class="form-control editor" name="description" rows="5" placeholder="Write the description" required></textarea>
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