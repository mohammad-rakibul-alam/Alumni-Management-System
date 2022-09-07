<?php
include("header.php");



// delete query


if(isset($_GET['id']))
{
    $id = $_GET['id'];

    if ($_SESSION['id'] != $id)
    {
        $sql = "DELETE FROM admins WHERE id='$id'";
        $conn->query($sql);
    }



}

?>

    <!--Latest News content start-->
    <section id="main-content">

        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Admins List</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="content-panel">
                        <section id="unseen">

                            <table class="table table-bordered table-striped table-condensed">
                                <div  class="col-md-12" style="padding: 10px;" align="right" >
                                    <a class='btn btn-primary' href='add-admin.php' >Add Admin</a>
                                </div>

                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Full Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <?php
                                $sql = "SELECT * FROM admins ORDER BY id DESC ";
                                $rec = $conn->query($sql);

                                while($row = mysqli_fetch_array($rec))

                                {
                                $id 			    	      = $row['id'];
                                $username 			    	      = $row['username'];
                                $full_name 	  	= $row['full_name'];

                                ?>

                                <tbody>
                                <tr>
                                    <td><?php echo($id); ?></td>
                                    <td><?php echo($username); ?></td>
                                    <td><?php echo($full_name); ?></td>

                                    <td>
                                        <a class='btn btn-primary' href='edit-admin.php?id=<?php echo($id) ?>' >Edit</a> |

                                        <a class='btn btn-danger' href='admin.php?id=<?php echo($id) ?>' onclick="return confirm('Are you sure to delete?')">Delete</a>
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