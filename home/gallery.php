<?php
include("header.php"); 
?>

    <section id="content" style="padding-top:0px;">
      <div class="container">
<!-- Gallery -->

        <!-- Portfolio Projects -->
        <div class="row">
          <div class="span12">
            <h3> <span class="highlight"><strong><center>Conceptual Photography</center></strong></span> </h3>
            <div class="row">
              <section id="projects">
                <ul id="thumbs" class="portfolio">
                    <?php
                      $sql = "SELECT * FROM galleries";
                      $result = mysqli_query($conn, $sql);

                        while($row = mysqli_fetch_assoc($result)){
                            $title = $row["title"];
                            $description = $row["description"];
                            $photo = $row["photo"];
                            $id = $row["id"];

              ?>
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 design" data-id="id-<?php echo($id); ?>" data-type="web">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php echo($title); ?>" href="<?php echo($photo); ?>">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="<?php echo($photo); ?>" alt="<?php echo($description); ?>">
                    
                  </li>  <?php
                        }
                    ?>
                    <!-- End Item Project -->



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