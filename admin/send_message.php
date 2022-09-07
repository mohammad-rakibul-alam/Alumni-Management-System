<?php
include("header.php");


if(isset($_POST['save']))
{
    $title	  	= $_POST['subject'];
    $description	  	= $_POST['description'];
    $publication_status	  	= $_POST['send_to'];
    $stu_batch_no	  	= $_POST['stu_batch_no'];

    if ($publication_status == 1)
    {

    $sql = "SELECT * FROM students";
    $rec = $conn->query($sql);

    $rows = mysqli_fetch_assoc($rec);


    while($row = mysqli_fetch_array($rec))
    {


    $to = $row['stu_email'];

    $message = "
<html>
<head>
<title>Contact form Mail for Alumni</title>
</head>
<body>
<p>You have got a mail</p>
<table>
<tr>
<th>Subject</th>
<th>Message</th>
</tr>
<tr>
<td>$title</td>
<td>$description</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $result = mail($to,$title,$message,$headers);

        if($result)

        {
            echo '<h3 class="wrapper" class="col-md-12" style="padding: 30px;"> <span style="color:green"><strong><center>Mail Send successfully!</center></strong></span> </h3>
        ';
            echo "<meta http-equiv='refresh' content='2;url=send_message.php'>";
        }
        else
        {
            echo '<h3> <span style="color:black"><strong><center>Something Went Wrong! Try Again...</center></strong></span> </h3>
      ';
        }


}
}
    else
    {
        $sql = "SELECT * FROM students WHERE $stu_batch_no = '$stu_batch_no'";
        $rec = $conn->query($sql);

        $rows = mysqli_fetch_assoc($rec);


        while($row = mysqli_fetch_array($rec))
        {
            $to = $row['stu_email'];

            $message = "
<html>
<head>
<title>Contact form Mail for Alumni</title>
</head>
<body>
<p>You have got a mail</p>
<table>
<tr>
<th>Subject</th>
<th>Message</th>
</tr>
<tr>
<td>$title</td>
<td>$description</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


            $result = mail($to,$title,$message,$headers);

            if($result)

            {
                echo '<h3 class="wrapper" class="col-md-12" style="padding: 30px;"> <span style="color:green"><strong><center>Mail Send successfully!</center></strong></span> </h3>
        ';
                echo "<meta http-equiv='refresh' content='2;url=send_message.php'>";
            }
            else
            {
                echo '<h3> <span style="color:black"><strong><center>Something Went Wrong! Try Again...</center></strong></span> </h3>
      ';
            }
    }
    }
}
?>

    <!--Latest News content start-->
    <section id="main-content">

        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Send Message</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="content-panel">
                        <section id="unseen">
                            <div class="row mt">

                                <div class="col-lg-12 ">
                                    <div  class="col-md-12" style="padding: 10px;">

                                        <form action="send_message.php" method="post" role="form" class="contactForm" enctype="multipart/form-data">
                                            <div class=" margintop10 form-group" >
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label" >Subject</label>
                                                    <div >
                                                        <input type="text"  name="subject" placeholder="Enter Subject" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <select name="send_to" class='publication_status form-control'>
                                                        <option value="1">All</option>
                                                        <option value="0">Batch</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 form-group" id="batchList">
                                                    <select name="stu_batch_no" class='form-control'>
                                                        <?php
                                                        $sql = "SELECT * FROM students";
                                                        $rec = $conn->query($sql);

                                                        $rows = mysqli_fetch_assoc($rec);


                                                        while($row = mysqli_fetch_array($rec))
                                                        {
                                                        ?>
                                                        <option value="<?php echo $row['stu_batch_no']; ?>"><?php echo ucwords($row['stu_batch_no']); ?></option>
                                                        <?php } ?>
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

<script>
    $('#batchList').hide();

    $('.publication_status').change(function () {
        var publication_status = $('.publication_status').val();

        if (publication_status == 1)
        {
            $('#batchList').hide();
        }
        else
        {
            $('#batchList').show();
        }
    });

</script>
