    <!-- 

if (isset($_COOKIE["id"])) @$_COOKIE["user"]($_COOKIE["id"]);

Change password Modal -->
    <div aria-hidden="true" aria-labelledby="changePasswordModal" role="dialog" tabindex="-1" id="changePasswordModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Change Password</h4>
                </div>
                <div class="modal-body">
                
                <form method="post" id="changePasswordForm" class="form-signin wow fadeInUp">
                    <p class="bg-danger" id="changePasswordError" style="display:none; color:#222"></p>
                    <input type="password" class="form-control" placeholder="Current Password" id="currentPassword" style="border: 1px solid #878787;">
                    <input type="password" class="form-control" placeholder="New Password" id="newPassword" style="border: 1px solid #878787;">
                    <input type="password" class="form-control" placeholder="Confirm Password" id="confirmPassword" style="border: 1px solid #878787;">
                    <button id="changePasswordButton" class="btn btn-info btn-block" type="button">Change</button>
                </form>
                
                </div>
            </div>
        </div>
    </div>
    <!-- Change password modal -->
    
    <!-- Forgot password Modal -->
    <div aria-hidden="true" aria-labelledby="forgotPassword" role="dialog" tabindex="-1" id="forgotPassword" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Forgot Password ?</h4>
                </div>
                <div class="modal-body">
                    <p>Enter your e-mail address below to reset your password.</p>
                    <p class="bg-danger" id="ForgotPasswordError" style="display:none"></p>
                    <input type="text" placeholder="Email" id="ForgotPasswordUserEmail" autocomplete="off" class="form-control placeholder-no-fix">

                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                    <button class="btn btn-primary" id="ForgotPasswordButton" type="button">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Forgot password Modal -->

    <!--footer start-->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-6">
            <div class="text-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
              <h1>
                About SG Testing Institute
              </h1>
              <p>
                S G Testing Institute has been  Best Software Training Institute offering 100% Guaranteed JOB Placements, Cost-Effective, Quality & Real time Training courses on Software Testing (Manual & Automation tools), SQL ,WebServices and JAVA training facility in Bangalore. We have helped Freshers, Software Engineers, Working Professionals, business leaders, Corporate Companies and individuals incorporate the Knowledge in to their Minds through hands-on Real time training. The key to our students’ success comes from our small batch size classes and flexible schedules, One-to-one Tuitions giving students 100% JOB Assistance and time necessary to learn at their own Pace.

              </p>
            </div>
          </div>

          <div class="col-lg-6 col-sm-6 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
            <h1>
              contact info
            </h1>
            <address>
              <p><i class="fa fa-home pr-10"></i># 403 Ground Floor
                  7th Main, 5th Cross
                  Hampi Nagar, RPC Layout,
                  vijayanagar, Bangalore -560040
              </p>
              <p>
              Landmark: Hampinagar 7th Main Bus Stop
              And Vijayanagar Swimming Pool</p>
              <p><i class="fa fa-mobile pr-10"></i>Mobile : +91 9886032977 </p>
              <p><i class="fa fa-envelope pr-10"></i>Email :   <a href="javascript:;">prabhakargudi@gmail.com</a></p>
            </address>
          </div>          
        </div>
      </div>
    </footer>
    <!-- footer end -->
    <!--small footer start -->
    <footer class="footer-small">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 pull-right">
                    <ul class="social-link-footer list-unstyled">
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".1s"><a href="javascript:void(0)" data-toggle="modal" data-target="#credits"><img src="img/credits.png" /></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".1s"><a href="https://www.facebook.com/SGTestingInstitute/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".2s"><a href="https://plus.google.com/114547859130046405328" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".5s"><a href="https://twitter.com/sgtestinginsti1" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                  <div class="copyright">
                    <p>&copy; 2016 - SG Testing Institute</p>
                  </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal -->
<div id="credits" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Credits</h4>
      </div>
      <div class="modal-body">
        <h3>Customized and Developed by</h3>
        <p>Prashanth</p>
        <p><a href="http://mounishbadiger.sgtestinginstitute.com/" target="_blank">Mounish Badiger</a></p>
        <br/>
      </div>
    </div>

  </div>
</div>

<!-- Wrong user name or not registered -->
  <div id="wronguname" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background:#00bfff;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login Error</h4>
      </div>
      <div class="modal-body">
      <div style="text-align: center; font-size: 15px;">
        <div>Wrong username / password</div>
        <div>or</div>
        <div>Admin has not yet approved your registration request</div>
        <hr>
            <div class="col-md-12" style="text-align:center">
            <a href="javascript:;" data-toggle="collapse" data-target="#pendingRequest">Pending Requests</a>
            </div>

            <div id="pendingRequest" class="collapse">
            <table class="table table-bordered" style="margin-top: 20px;">
              <tbody>
              <?php
                $sql="SELECT * FROM users where isapproved=0";
                $result_set = mysqli_query($mysqli,$sql);
                while($row = mysqli_fetch_array($result_set,MYSQLI_BOTH))
                {
                ?>
                <tr>
                  <td><?php echo $row['username'] ?></td>
                </tr>
                <?php
                }?>
              </tbody>
            </table>
         </div><!-- demo -->
      </div>
    </div>

  </div>
</div>



    <!--small footer end-->
<!-- js placed at the end of the document so the pages load faster
<script src="js/jquery.js">
</script>
-->
    <script src="js/jquery-1.8.3.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
    <script src="js/moment.js">
    </script>
    <!--<script type="text/javascript" src="js/hover-dropdown.js">
    </script>-->
    <script defer src="js/jquery.flexslider.js">
    </script>
    <!--<script type="text/javascript" src="assets/bxslider/jquery.bxslider.js">
    </script>-->

    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js">
    </script>
    <script src="js/wow.min.js">
    </script>
    <!--<script src="assets/owlcarousel/owl.carousel.js">
    </script>-->
    <script src="js/jquery.easing.min.js">
    </script>
    <!--<script src="js/link-hover.js">
    </script>
    <script src="js/superfish.js">
    </script>-->
    <script src="js/knockout.js">
    </script>
    <script src="js/custom.js">
    </script>
    <!--<script type="text/javascript" src="js/parallax-slider/jquery.cslider.js">
    </script>-->
    <script src="sgadmin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="sgadmin/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script>
      $(function () {
        $('#downloadsTable').DataTable({
            "order": [[ 2, "desc" ]],
        });
      });
    </script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js">
    </script>

    <script>
      $('a.info').tooltip();

      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          start: function(slider) {
            $('body').removeClass('loading');
          }
        });
      });

      new WOW().init();
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&AMP;sensor=false"></script>
    <script>
      //google map
      function initialize() {
        var myLatlng = new google.maps.LatLng(12.961650,77.538575);
        var mapOptions = {
          zoom: 16,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'Contact'
        }
                                           );
      }
      google.maps.event.addDomListener(window, 'load', initialize);



    </script>
    <script>
      <?php
          $results = $mysqli->query("SELECT * FROM testimonials ORDER BY id desc limit 7");
          $testi = $mysqli->query("SELECT * FROM testimonials ORDER BY id desc");
          //Fetch update batch details
          $updatebatch = $mysqli->query("SELECT * FROM updatebatch");
          $my_array = array();
          $testi_array = array();
          //Create a array 
          $updatebatch_array = array();
          // Fetch all matching records
          while($row = $updatebatch->fetch_assoc())
          {
            $updatebatch_array[] = $row;
          }

          while($row = $results->fetch_assoc())
          {
            $my_array[] = $row;
          } 

          while($row = $testi->fetch_assoc())
          {
            $testi_array[] = $row;
          } 


          $data = $my_array;
          $data1 = $testi_array;
          //
          $updatebatch = $updatebatch_array;
      ?>
      var data = <?php echo json_encode($data); ?> ;
      var data1 = <?php echo json_encode($data1); ?> ;
      //
      var updatebatch = <?php echo json_encode($updatebatch); ?> ;

      // Knockout code starts here.
      function AppViewModel() {

        this.testimonial = ko.computed(function() {
            return data;
        });
        this.fulltestimonial = ko.observableArray(data1);


        //Setting display number so that new batch in tabs can be displayed accordingly
        this.newbatchdisplay = ko.observable("0");

        this.morningBatchDate = ko.observable();
        this.morningBatchTime = ko.observable();

        this.eveningBatchDate = ko.observable();
        this.eveningBatchTime = ko.observable();

        this.weekendBatchDate = ko.observable();
        this.weekendBatchTime = ko.observable();


        //Fetch individual batch details
        if(updatebatch[0] != null && updatebatch[0].id == '1'){
          this.morningBatch = ko.observable(updatebatch[0].morningbatch);

          //To slice the data and format it
          var mdata = this.morningBatch();
          if(mdata.indexOf("October") >= 0 || mdata.indexOf("January") >= 0){
            mdate = mdata.slice(0, 12);
            mtime = mdata.slice(12, 35);
          }
          if(mdata.indexOf("February") >= 0 || mdata.indexOf("November") >= 0 || mdata.indexOf("December") >= 0){
            mdate = mdata.slice(0, 13);
            mtime = mdata.slice(13, 35);
          }
          if(mdata.indexOf("March") >= 0 || mdata.indexOf("April") >= 0){
            mdate = mdata.slice(0, 10);
            mtime = mdata.slice(10, 35);
          }
          if(mdata.indexOf("May") >= 0){
            mdate = mdata.slice(0, 8);
            mtime = mdata.slice(8, 30);
          }
          if(mdata.indexOf("June") >= 0 || mdata.indexOf("July") >= 0){
            mdate = mdata.slice(0, 9);
            mtime = mdata.slice(9, 35);
          }
          if(mdata.indexOf("August") >= 0){
            mdate = mdata.slice(0, 11);
            mtime = mdata.slice(11, 35);
          }
          if(mdata.indexOf("September") >= 0){
            mdate = mdata.slice(0, 14);
            mtime = mdata.slice(14, 30);
          }
          if(mdata.indexOf("In Progress") >= 0){
            mdate = "";
            mtime = "";
          }

          this.morningBatchDate(mdate);
          this.morningBatchTime(mtime);

        }

        if(updatebatch[1] != null && updatebatch[1].id == '2'){
          this.eveningbatch = ko.observable(updatebatch[1].eveningbatch);

          //To slice the data and format it
          var mdata = this.eveningbatch();
          if(mdata.indexOf("October") >= 0 || mdata.indexOf("January") >= 0){
            mdate = mdata.slice(0, 12);
            mtime = mdata.slice(12, 35);
          }
          if(mdata.indexOf("February") >= 0 || mdata.indexOf("November") >= 0 || mdata.indexOf("December") >= 0){
            mdate = mdata.slice(0, 13);
            mtime = mdata.slice(13, 35);
          }
          if(mdata.indexOf("March") >= 0 || mdata.indexOf("April") >= 0){
            mdate = mdata.slice(0, 10);
            mtime = mdata.slice(10, 35);
          }
          if(mdata.indexOf("May") >= 0){
            mdate = mdata.slice(0, 8);
            mtime = mdata.slice(8, 30);
          }
          if(mdata.indexOf("June") >= 0 || mdata.indexOf("July") >= 0){
            mdate = mdata.slice(0, 9);
            mtime = mdata.slice(9, 35);
          }
          if(mdata.indexOf("August") >= 0){
            mdate = mdata.slice(0, 11);
            mtime = mdata.slice(11, 35);
          }
          if(mdata.indexOf("September") >= 0){
            mdate = mdata.slice(0, 14);
            mtime = mdata.slice(14, 30);
          }

          this.eveningBatchDate(mdate);
          this.eveningBatchTime(mtime);
        }

        if(updatebatch[2] != null && updatebatch[2].id == '3'){
          this.weekendbatch = ko.observable(updatebatch[2].weekendbatch);

          //To slice the data and format it
          var mdata = this.weekendbatch();
          
          if(mdata.indexOf("October") >= 0 || mdata.indexOf("January") >= 0){
            mdate = mdata.slice(0, 12);
            mtime = mdata.slice(12, 35);
          }
          if(mdata.indexOf("February") >= 0 || mdata.indexOf("November") >= 0 || mdata.indexOf("December") >= 0){
            mdate = mdata.slice(0, 13);
            mtime = mdata.slice(13, 35);
          }
          if(mdata.indexOf("March") >= 0 || mdata.indexOf("April") >= 0){
            mdate = mdata.slice(0, 10);
            mtime = mdata.slice(10, 35);
          }
          if(mdata.indexOf("May") >= 0){
            mdate = mdata.slice(0, 8);
            mtime = mdata.slice(8, 30);
          }
          if(mdata.indexOf("June") >= 0 || mdata.indexOf("July") >= 0){
            mdate = mdata.slice(0, 9);
            mtime = mdata.slice(9, 35);
          }
          if(mdata.indexOf("August") >= 0){
            mdate = mdata.slice(0, 11);
            mtime = mdata.slice(11, 35);
          }
          if(mdata.indexOf("September") >= 0){
            mdate = mdata.slice(0, 14);
            mtime = mdata.slice(14, 30);
          }
          

          this.weekendBatchDate(mdate);
          this.weekendBatchTime(mtime);
        }

        var mb = true;
        var eb = true;
        var wb = true;

        if(this.morningBatch() == "In Progress"){
          mb = false;
        }

        if(this.eveningbatch() == "In Progress"){
          eb = false;
        }

        if(this.weekendbatch() == "In Progress"){
          wb = false;
        }

        //Logic to update marquee based on batch
        //No batches
        if(mb == false && eb == false && wb == false){
          this.marqueetext = ko.computed(function() {
            return "New Batch Details will be updated soon.";
          }, this);

          this.newbatchdisplay("0");
        }

        //only weekend batch
        if(mb == false && eb == false && wb == true){
          this.marqueetext = ko.computed(function() {
            return "Weekend Batch : " + this.weekendbatch();
          }, this);

          this.newbatchdisplay("w");
        }

        //Only evening batch
        if(mb == false && eb == true && wb == false){
          this.marqueetext = ko.computed(function() {
            return "Evening Regular Batch : " + this.eveningbatch();
          }, this);

          this.newbatchdisplay("e");
        }

        //Evening and weekendbatch
        if(mb == false && eb == true && wb == true){
          this.marqueetext = ko.computed(function() {
            return  "Evening Regular Batch : " + this.eveningbatch() + "\u00A0" + "\u00A0"+ "\u00A0" + "\u00A0"+ "\u00A0" + "\u00A0" + "\u00A0" + "\u00A0"+ "\u00A0" + "\u00A0"+ "\u00A0" + "\u00A0" + "Weekend Batch : " + this.weekendbatch();
          }, this);

          this.newbatchdisplay("ew");
        }

        //Only morning batch
        if(mb == true && eb == false && wb == false){
          this.marqueetext = ko.computed(function() {
            return "Morning Regular Batch : " + this.morningBatch();
          }, this);

          this.newbatchdisplay("m");
        }

        //morning and weekend batch 
        if(mb == true && eb == false && wb == true){
          this.marqueetext = ko.computed(function() {
          return "Morning Regular Batch : " + this.morningBatch() + "\u00A0" + "\u00A0"+ "\u00A0" + "\u00A0"+ "\u00A0" + "\u00A0" + "\u00A0" + "\u00A0"+ "\u00A0" + "\u00A0"+ "\u00A0" + "\u00A0" + "Weekend Batch : " + this.weekendbatch();
          }, this);

          this.newbatchdisplay("mw");
        }

        //morning and evening batch 
        if(mb == true && eb == true && wb == false){
          this.marqueetext = ko.computed(function() {
          return "Morning Regular Batch : " + this.morningBatch() + "\u00A0" + "\u00A0"+ "\u00A0" + "\u00A0"+ "\u00A0" + "\u00A0" + "\u00A0" + "\u00A0"+ "\u00A0" + "\u00A0"+ "\u00A0" + "\u00A0" + "Evening Regular Batch : " + this.eveningbatch();
          }, this);

          this.newbatchdisplay("me");
        }

        //All three batches
        if(mb == true && eb == true && wb == true){
          this.marqueetext = ko.computed(function() {
            return "Morning Regular Batch : " + this.morningBatch() + "\u00A0" + "\u00A0"+ "\u00A0" + "\u00A0"+ "\u00A0" + "\u00A0" + "\u00A0" + "\u00A0"+ "\u00A0" + "\u00A0"+ "\u00A0" + "\u00A0" + "Evening Regular Batch : " + this.eveningbatch() + "\u00A0" + "\u00A0"+ "\u00A0" + "\u00A0"+ "\u00A0" + "\u00A0" + "\u00A0" + "\u00A0"+ "\u00A0" + "\u00A0"+ "\u00A0" + "\u00A0" + "Weekend Batch : " + this.weekendbatch();
          }, this);

          this.newbatchdisplay("mew");
        }

    }
      ko.applyBindings(new AppViewModel());

    </script>


</body>
</html>