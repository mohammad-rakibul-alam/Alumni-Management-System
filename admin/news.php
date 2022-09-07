<?php
  include("header.php");



// delete query


if(isset($_GET['news_id']))
{
    $news_id = $_GET['news_id'];

    $sql = "DELETE FROM news WHERE news_id='$news_id'";
    $conn->query($sql);


}


if(isset($_POST['update'])) 
{
	$status 		= $_POST['status'];
	
	$news_id 			= $_POST['news_id'];
	
	$sql = "UPDATE news set status='$status'	WHERE news_id='$news_id'";
			
  $result = $conn->query($sql);
  
	if($result) 
	{
    echo '<h3 class="wrapper" class="col-md-12" style="padding: 30px;"> <span style="color:green"><strong><center>Updated successfully!</center></strong></span> </h3>
    ';
    echo "<meta http-equiv='refresh' content='2;url=news.php'>";
		exit();
	}
}
?>

    <!--Latest News content start-->
    <section id="main-content">
     
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Latest News</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <section id="unseen">

                <table class="table table-bordered table-striped table-condensed">
                <div  class="col-md-12" style="padding: 10px;" align="right" >
                <a class='btn btn-primary' href='add_news.php' >Add News</a> 
                </div>

                  <thead>
                    <tr>
                      <th>News</th>
                      <th>Expire Date</th>
                      <th>Action</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  
              <?php
               $sql = "SELECT * FROM news ORDER BY news_id DESC ";
               $rec = $conn->query($sql);

               while($row = mysqli_fetch_array($rec))
                            
               {
                   $news 			    	      = $row['news'];
                   $status 			    	      = $row['status'];
                    $expire_date 	  	= $row['expire_date'];
                   $news_id 			      	= $row['news_id'];
                       
              ?>              
  
                  <tbody>
                    <tr>
                      <td><?php echo($news); ?></td>
                      <td><?php echo($expire_date); ?></td>

                      <td>
                      <a class='btn btn-primary' href='edit_news.php?news_id=<?php echo($news_id) ?>' >Edit</a> |
                      
                      <a class='btn btn-danger' href='news.php?news_id=<?php echo($news_id) ?>' onclick="return confirm('Are you sure to delete?')">Delete</a>
                      </td> 
                      <td>
                      <form action="news.php" method="post">
                        
                        <select type="text" class="form-control" name="status" placeholder="Status" required>
                        <option selected><?php echo($status) ?></option>
                        <option>On</option>
                        <option>Off</option>
                        </select>
                        <input class="btn btn-primary" type="submit" name="update" value="Change" />
                        <input type="hidden" name="news_id" value="<?php  echo $news_id;  ?>" />

                        </form>
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