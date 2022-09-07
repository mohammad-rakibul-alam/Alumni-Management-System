<?php
include("header.php");



// delete query

if(isset($_GET['id']))
{
    $blog_id = $_GET['id'];

    $sql = "DELETE FROM blogs WHERE id='$blog_id'";
    $conn->query($sql);


}
?>

    <!--Latest News content start-->
    <section id="main-content">

        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Blogs</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="content-panel">
                        <section id="unseen">

                            <table class="table table-bordered table-striped table-condensed">
                                <div  class="col-md-12" style="padding: 10px;" align="right" >
                                    <a class='btn btn-primary' href='add_blog.php' >Add New Blog</a>
                                </div>

                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <?php
                                $sql = "SELECT * FROM blogs ORDER BY id DESC ";
                                $rec = $conn->query($sql);

                                while($row = mysqli_fetch_array($rec))

                                {
                                $image 			    	      = $row['image'];
                                $title			    	      = $row['title'];
                                $description 			      	= $row['description'];
                                $id 			      	= $row['id'];

                                ?>

                                <tbody>
                                <tr>
                                    <td><img src="<?php echo $image; ?>" alt="" height="200px" width="200px"></td>
                                    <td><?php echo $title; ?></td>
                                    <td><?php echo $description; ?></td>

                                    <td>
                                        <a class='btn btn-danger' href='blogs.php?id=<?php echo $id; ?>' onclick="return confirm('Are you sure to delete?')">Delete</a>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                                </tbody>

                            </table>
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
    <!--footer start-->

<?php
include('footer.php');
?>