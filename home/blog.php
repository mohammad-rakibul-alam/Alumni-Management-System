<?php
include("header.php"); 
?>

    <section id="content" style="padding-top:0px;">
    <div class="container">
        <div class="row">
          <div class="span8">
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
            <article>
              <div class="row">
                <div class="span8">
                  <div class="post-image">
                    <div class="post-heading">
                      <h3><a href="#"><?php echo $title; ?></a></h3>
                    </div>
                    <img src="<?php echo $image; ?>" alt="" />
                  </div>
                  <p>
                      <?php echo $description; ?>
                  </p>
                </div>
              </div>
            </article>
                <?php
            }
            ?>

          </div>
          <div class="span4">
            <aside class="right-sidebar">
<!--              <div class="widget">-->
<!--                <form class="form-search">-->
<!--                  <input placeholder="Type something" type="text" class="input-medium search-query">-->
<!--                  <button type="submit" class="btn btn-square btn-theme">Search</button>-->
<!--                </form>-->
<!--              </div>-->
<!--              <div class="widget">-->
<!--                <h5 class="widgetheading">Categories</h5>-->
<!--                <ul class="cat">-->
<!--                  <li><i class="icon-angle-right"></i><a href="#">Web design</a><span> (20)</span></li>-->
<!--                  <li><i class="icon-angle-right"></i><a href="#">Online business</a><span> (11)</span></li>-->
<!--                  <li><i class="icon-angle-right"></i><a href="#">Marketing strategy</a><span> (9)</span></li>-->
<!--                  <li><i class="icon-angle-right"></i><a href="#">Technology</a><span> (12)</span></li>-->
<!--                  <li><i class="icon-angle-right"></i><a href="#">About finance</a><span> (18)</span></li>-->
<!--                </ul>-->
<!--              </div>-->
<!--              <div class="widget">-->
<!--                <h5 class="widgetheading">Latest posts</h5>-->
<!--                <ul class="recent">-->
<!--                  <li>-->
<!--                    <img src="img/dummies/blog/65x65/thumb1.jpg" class="pull-left" alt="" />-->
<!--                    <h6><a href="#">Lorem ipsum dolor sit</a></h6>-->
<!--                    <p>-->
<!--                      Mazim alienum appellantur eu cu ullum officiis pro pri-->
<!--                    </p>-->
<!--                  </li>-->
<!--                  <li>-->
<!--                    <a href="#"><img src="img/dummies/blog/65x65/thumb2.jpg" class="pull-left" alt="" /></a>-->
<!--                    <h6><a href="#">Maiorum ponderum eum</a></h6>-->
<!--                    <p>-->
<!--                      Mazim alienum appellantur eu cu ullum officiis pro pri-->
<!--                    </p>-->
<!--                  </li>-->
<!--                  <li>-->
<!--                    <a href="#"><img src="img/dummies/blog/65x65/thumb3.jpg" class="pull-left" alt="" /></a>-->
<!--                    <h6><a href="#">Et mei iusto dolorum</a></h6>-->
<!--                    <p>-->
<!--                      Mazim alienum appellantur eu cu ullum officiis pro pri-->
<!--                    </p>-->
<!--                  </li>-->
<!--                </ul>-->
<!--              </div>-->
<!--              <div class="widget">-->
<!--                <h5 class="widgetheading">Popular tags</h5>-->
<!--                <ul class="tags">-->
<!--                  <li><a href="#">Web design</a></li>-->
<!--                  <li><a href="#">Trends</a></li>-->
<!--                  <li><a href="#">Technology</a></li>-->
<!--                  <li><a href="#">Internet</a></li>-->
<!--                  <li><a href="#">Tutorial</a></li>-->
<!--                  <li><a href="#">Development</a></li>-->
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