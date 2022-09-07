<?php
include("header.php");
$query = $_GET["query"];
$advance = $_GET["advance"];
?>

    <section id="content" style="padding-top:0px;">
        <div class="container">
            <div class="row">
                <div class="span6">

                    <h2>You Search for <strong><?php echo $query;?></strong> From <strong><?php echo ucwords(str_replace('_', ' ', $advance));?></strong></h2>
                    <div >

                        <?php
                        $sql = "SELECT * FROM students  WHERE $advance LIKE '%$query%'";

                        $result = mysqli_query($conn, $sql);

                        if ($result != null)
                            {
                                while($row = mysqli_fetch_assoc($result)){
                                    $student_name = $row["stu_name"];
                                    $stu_batch_no = $row["stu_batch_no"];
                                    $stu_session = $row["stu_session"];
                                    $stu_photo = $row["stu_photo"];
                                    $stu_present_address = $row["stu_present_address"];
                                    $stu_permanent_address = $row["stu_permanent_address"];
                                    $stu_occupation = $row["stu_occupation"];
                                    $stu_marital_status = $row["stu_marital_status"];
                                    $stu_religion = $row["stu_religion"];
                                    $stu_contact = $row["stu_contact"];
                                    ?>
                                    <dl>
                                        <dt><img src="<?php echo($stu_photo); ?>" alt="<?php echo($student_name); ?>" width="100" height="100"></dt>
                                        <dd>Student Name: <?php echo($student_name); ?></dd>
                                        <dd>Student Batch No: <?php echo($stu_batch_no); ?></dd>
                                        <dd>Student Session: <?php echo($stu_session); ?></dd>
                                        <dd>Present Address: <?php echo($stu_present_address); ?></dd>
                                        <dd>Permanent Address: <?php echo($stu_permanent_address); ?></dd>
                                        <dd>Student Occupation: <?php echo($stu_occupation); ?></dd>
                                        <dd>Student Marital: <?php echo($stu_marital_status); ?></dd>
                                        <dd>Student Religion: <?php echo($stu_religion); ?></dd>
                                        <dd>Student Contact Phone: <?php echo($stu_contact); ?></dd>

                                    </dl>
                                    <?php
                                }
                            }else
                        {
                            echo "<h4>Sorry, No matching Found for <strong><?php echo $query;?></strong> From <strong><?php echo ucwords(str_replace('_', ' ', $advance));?></strong>. <a href='index.php'>Try Again</a></h4>";
                        }
                                ?>
                    </div>
                </div>

            </div>
            <!-- divider -->
            <div class="row">
                <div class="span12">
                    <div class="solidline">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="bottom">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="aligncenter">
                        <div id="twitter-wrapper">
                            <div id="twitter">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
include("footer.php");
?>