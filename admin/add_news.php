<?php
include("header.php"); 


if(isset($_POST['save']))
{
	$news 	  	= $_POST['news'];
	$status 	  	= $_POST['status'];
	$expire_date 	  	= $_POST['expire_date'];

	
	
	$sql =  "INSERT into news ( news, status, expire_date) values ('$news', '$status', '$expire_date')";
	
	
	$result = $conn->query($sql);
	
	if($result == 1)
	
    {
        echo '<h3 class="wrapper" class="col-md-12" style="padding: 30px;"> <span style="color:green"><strong><center>News added successfully!</center></strong></span> </h3>
        ';
        echo "<meta http-equiv='refresh' content='2;url=news.php'>";
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
        <h3><i class="fa fa-angle-right"></i> Add News</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <section id="unseen">
              <div class="row mt">
              
          <div class="col-lg-12 ">
            <div  class="col-md-12" style="padding: 10px;" align="right" >
            
              <form action="add_news.php" method="post" role="form" class="contactForm">
               <div class=" margintop10 form-group" >
                 <div>
                 <label > <h3 >Status:</h3></label>
              <input type="hidden" name="status" value="Off" data-toggle="switch"/>
              <input type="checkbox" name="status" value="On" data-toggle="switch"/>
                </div>
                <div class="col-md-4 form-group">
                    <input type="date" name="expire_date" value="<?php echo date('Y-m-d');?>" class="form-control" "/>
                </div>
                <div class="col-md-12 form-group">
                  <textarea class="form-control editor" name="news" rows="5" placeholder="Write the latest news"></textarea>
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