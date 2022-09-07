<?php
include("header.php"); 



if(isset($_GET['news_id'])) 
{
	$news_id = $_GET['news_id'];
	
	$sql = "SELECT * FROM news WHERE news_id='$news_id'";
	
	//echo $sql; die;
	
	$result = $conn->query($sql);
	if($row = mysqli_fetch_array($result)) 
	{
		$news 				= $row['news'];
		$status 			= $row['status'];
		$expire_date 			= $row['expire_date'];
		$news_id 				= 	$row['news_id'];
	}

}


if(isset($_POST['update'])) 
{
	$news 			= $_POST['news'];
	$status 		= $_POST['status'];
    $expire_date 			= $_POST['expire_date'];
	$news_id 			= $_POST['news_id'];
	
	$sql = "UPDATE news set news='$news', status='$status', expire_date='$expire_date' WHERE news_id='$news_id'";
	
	
	
	$result = $conn->query($sql);
	
	if($result) 
	{
    echo '<h3 class="wrapper" class="col-md-12" style="padding: 30px;"> <span style="color:green"><strong><center>Updated successfully!</center></strong></span> </h3>
    ';
    echo "<meta http-equiv='refresh' content='2;url=news.php'>";
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
        <h3><i class="fa fa-angle-right"></i> Latest News</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <section id="unseen">
              <div class="row mt">
              
            <!-- form -->
            <div class="col-lg-12 ">
            <div  class="col-md-12" style="padding: 10px;" align="right" >
            
              <form action="edit_news.php" method="post" role="form" class="contactForm">
               <div class=" margintop10 form-group" >
                 <div  class="col-md-2 " style="padding: 10px;">
                 <label > <h3 >Status:</h3></label>
                  
                    <select type="text" class="form-control" name="status" placeholder="Status" required>
                    <option selected><?php echo($status) ?></option>
                    <option>On</option>
                    <option>Off</option>
                    </select>
                     <input type="date" name="expire_date" value="<?php echo($expire_date) ?>" class="form-control" style="margin-top: 10px;"/>
                </div>
                <div class="col-md-12 form-group">
                  <textarea class="form-control editor" name="news" rows="5" placeholder="Write the latest news"/><?php echo($news) ?></textarea>
                  <p class="text-center">
                    <input class="btn btn-primary" type="submit" name="update" value="Update" />
                    <input type="hidden" name="news_id" value="<?php  echo $news_id;  ?>" />

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