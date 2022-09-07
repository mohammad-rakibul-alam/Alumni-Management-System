<?php
include("header.php");

$query = "SELECT * FROM sliders";

$results = mysqli_query($conn, $query);

$resultImages = mysqli_query($conn, $query);

?>

    <!-- end header -->
    <section id="featured">
      <!-- start slider -->
      <!-- Slider -->
      <div id="nivo-slider">
        <div class="nivo-slider">
        <!-- Slide #3 image -->
            <?php while($sliderImage = mysqli_fetch_assoc($resultImages)) { ?>
        <img src="<?php echo $sliderImage['image']; ?>" alt="" title="#caption-<?php echo $sliderImage['id']; ?>" />
        <?php } ?>
        </div>
        <div class="container">
          <div class="row">
            <div class="span12">
                <?php while($slider = mysqli_fetch_assoc($results)) { ?>
              <!-- Slide #1 caption -->
              <div class="nivo-caption" id="caption-<?php echo $slider['id']; ?>">
                <div>
                  <p>
                    <strong><?php echo $slider['slider_title']; ?></strong> <br>
                      <?php echo $slider['description']; ?>
                  </p>
                  <a href="#" class="btn btn-theme">Read More</a>
                </div>
              </div>
              <?php } ?>

            </div>
          </div>
        </div>

        <?php
        $date = date('Y-m-d');

          $sql = "SELECT * FROM news WHERE status='On' AND expire_date > '$date'";
          $result = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_assoc($result)){
                $news_id = $row["news_id"];
                $news = $row["news"];
                $status = $row["status"];
        ?>
        <marquee behavior="" direction="" style="background-color:orangered; color:white"><strong style="color:black">Latest News: </strong><?php echo($news); ?> </marquee>
        
        <?php
            }
            ?> 

      

      </div>

          
      <!-- end slider -->
    
    <section id="content">
    <div class="container">
        <div class="row">
        <div class="span8">
            <h2>Welcome to <strong>SAADU</strong></h2>
            <?php echo $setting['about_us']; ?>
            <div >
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#one" data-toggle="tab"> Mission</a></li>
                  <li><a href="#two" data-toggle="tab">Vision</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="one">
                      <?php echo $setting['mission']; ?>
                  </div>
                  <div class="tab-pane" id="two">
                      <?php echo $setting['vision']; ?>
                  </div>
                </div>
              </div>
              <div >
<!--                <div class="wrapper" style="padding-top:10px;">-->
<!--                  <div class="testimonial">-->
<!--                    <p class="text">-->
<!--                      <i class="icon-quote-left icon-48"></i> There are many variations of passages of randomised words which don't look even slightly believable. You need to be sure there isn't anything embarrassing of text.-->
<!--                    </p>-->
<!--                    <div class="author">-->
<!--                      <img src="img/dummies/testimonial-author1.png" class="img-circle bordered" alt="" />-->
<!--                      <p class="name">-->
<!--                        Tom Shaun Dealova-->
<!--                      </p>-->
<!--                      <span class="info">MBC Entertainment, <a href="#">www.sitename.com</a></span>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
              </div>
          </div>

          <div class="span4">
            <aside class="right-sidebar">
    <?php
                if (isset($_SESSION['id']) || isset($_SESSION['user_id']))
                { ?>
                <div class="widget">
                    <form method="get" action="search.php" class="form-search">
                        <select name="advance" id="advanceSearch" class="input-medium">
                            <option value="stu_session">Session</option>
                            <option value="stu_batch_no">Batch</option>
                        </select>
                        <input placeholder="Type Name or Phone" name="query" type="text" class="input-medium search-query"><br>
                        <button type="submit" class="btn btn-square btn-theme align-right">Search</button>
                    </form>
                </div>
              <?php } ?>
              <div class="widget">
                <h5 class="widgetheading">UPCOMING EVENTS</h5>
                <ul class="recent" style="margin:0px; padding:0px;">
                    <marquee behavior="scroll" direction="up" scrollamount="1" >
                   <?php

                      $sql = "SELECT * FROM events WHERE status='On'";
                      $result = mysqli_query($conn, $sql);
            
                        while($row = mysqli_fetch_assoc($result)){
                            $event_id = $row["event_id"];
                            $event_name = $row["event_name"];
                            $event_organizer = $row["event_organizer"];
                            $event_location = $row["event_location"];
                            $event_start_date = $row["event_start_date"];
                            $event_end_date = $row["event_end_date"];
                            $status = $row["status"];
                    ?>
                    <strong><a href="upcoming_event.php?id=<?php echo($event_id) ?>"><?php echo($event_name); ?></strong></a><br>

                    <?php
                        }
                    ?>
                    </marquee>
                  
                </ul>
              </div>

<!--              <div class="widget">-->
<!--                <h5 class="widgetheading">Executive Committee</h5>-->
<!--                <ul class="recent" style="margin:0px; padding:0px;">-->
<!--                 -->
<!--                  -->
<!--                  -->
<!--                </ul>-->
<!--              </div>-->
              
            </aside>
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