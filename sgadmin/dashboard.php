<?php
session_start();
if(!isset($_SESSION["adusername"])){
  header("Location: index.php");
}
?>

<?php include 'header.php' ?>

<?php include 'sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <section class="content">

    <!-- Total Users -->
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-aqua">
          <div class="inner">
            <h3 data-bind="text:usercount">0</h3>
            <p>Registered Users</p>
          </div>
          <div class="icon">
            <i class="fa fa-users" style="color:#fff"></i>
          </div>
          <a href="#" class="small-box-footer">
          </a>
      </div>
    </div><!--End of Total Users -->

    <!-- Downloads -->
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-aqua">
          <div class="inner">
            <h3 data-bind="text:downloads">0</h3>
            <p>Downloads</p>
          </div>
          <div class="icon">
            <i class="fa fa-download" style="color:#fff"></i>
          </div>
          <a href="#" class="small-box-footer">
          </a>
      </div>
    </div><!--End of Downloads -->

    <!-- Testimonials -->
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-aqua">
          <div class="inner">
            <h3 data-bind="text:atestimonialscount">0</h3>
            <p>Testimonials</p>
          </div>
          <div class="icon">
            <i class="fa fa-align-justify fa-4" style="color:#fff"></i>
          </div>
          <a href="#" class="small-box-footer">
          </a>
      </div>
    </div><!--End of Testimonials -->

    <!-- Male Users 
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-male"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Male Students</span>
          <span class="info-box-number"><h3 data-bind="text:maleusers">20</h3></span>
        </div>
      </div>
    </div><!--End of Male Users 

    <!-- Female Users 
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-female"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Female Students</span>
          <span class="info-box-number"><h3 data-bind="text:femaleusers">20</h3></span>
        </div>
      </div>
    </div><!--End of Female Users 

    <!-- Other Users 
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa fa-transgender"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Transgender</span>
          <span class="info-box-number"><h3 data-bind="text:transgender">20</h3></span>
        </div>
      </div>
    </div><!--End of Other Users -->

    <!-- User registrations in year 2016-->
    <div class="row">
    
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3 data-bind="text:year2016">0</h3>

          <p>Registrations in 2016</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">
        </a>
      </div>
    </div>
    <!-- User registrations in year 2017 -->
    <div class="col-lg-3 col-xs-6" data-bind="if: year2017true">
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3 data-bind="text:year2017">0</h3>

          <p>Registrations in 2017</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">
        </a>
      </div>
    </div>

    </div><!--end of row -->


    </section>
  </div><!-- /. Main content-wrapper -->
  

<?php include 'footer.php' ?>
<?php include 'usercount.php' ?>