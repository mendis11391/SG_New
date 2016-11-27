<?php
  $conn = $mysqli;

  /* User count */
  $sql = "SELECT COUNT(*) from users";
  $result = $conn->query($sql);
  $values = mysqli_fetch_array($result); 



  /* list users */
  $sql1 = $mysqli->query("SELECT id,username,email,regyear,phonenum,gender FROM users order by regyear desc, id desc");
  $user_array = array();

  while($row = $sql1->fetch_assoc())
  {
    $user_array[] = $row;
  } 
  $listusers = $user_array;



  /* Male users */
  $sql1 = "SELECT COUNT(*) FROM users where gender='male'";
  $result1 = $conn->query($sql1);
  $maleuser1 = mysqli_fetch_array($result1); 



  /* Female users */
  $sql1 = "SELECT COUNT(*) as femaleuser FROM users where gender='female'";
  $result1 = $conn->query($sql1);
  $femaleusers = mysqli_fetch_array($result1);

  /* other users */
  $sql1 = "SELECT COUNT(*) as tgender FROM users where gender='other'";
  $result1 = $conn->query($sql1);
  $transgender = mysqli_fetch_array($result1);

/* count of users in year 2016*/
  $sql1 = "SELECT COUNT(*) from users where regyear='2016'";
  $result2 = $conn->query($sql1);
  $years = mysqli_fetch_array($result2); 

  /* count of users in year 2017*/
  $sql1 = "SELECT COUNT(*) from users where regyear='2017'";
  $result2 = $conn->query($sql1);
  $year17 = mysqli_fetch_array($result2); 


  /* Downloads count */
  $sql2 = "SELECT COUNT(*) from uploads";
  $result2 = $conn->query($sql2);
  $downloads = mysqli_fetch_array($result2);

  /* approved testimonials count */
  $sql2 = "SELECT COUNT(*) from testimonials";
  $result2 = $conn->query($sql2);
  $atestimonialscount = mysqli_fetch_array($result2);

   /* pending testimonials count */
  $sql2 = "SELECT COUNT(*) from testimonials";
  $result2 = $conn->query($sql2);
  $ptestimonialscount = mysqli_fetch_array($result2);

/* pending user approvals */
  $sqlpu = $mysqli->query("SELECT * from users where isapproved = 0");
  $resultpu = array();

  while($row = $sqlpu->fetch_assoc())
  {
    $resultpu[] = $row;
  } 
  $userapproval = $resultpu;


  $conn->close();
?>

<script>
var count = <?php echo json_encode($values); ?> ;
var users = <?php echo json_encode($listusers); ?> ;
var maleusercount = <?php echo json_encode($maleuser1); ?> ;
var femaleusers = <?php echo json_encode($femaleusers); ?> ;
var transgender = <?php echo json_encode($transgender); ?> ;
var year2016 = <?php echo json_encode($years); ?> ;
var year2017 = <?php echo json_encode($year17); ?> ;
var downloads = <?php echo json_encode($downloads); ?> ;
var atestimonialscount = <?php echo json_encode($atestimonialscount); ?> ;
var ptestimonialscount = <?php echo json_encode($ptestimonialscount); ?> ;
var pusers = <?php echo json_encode($userapproval); ?> ;


// Knockout code starts here.
function AppViewModel() {

this.usercount = ko.observable(count[0]);

this.userlisting = ko.observableArray(users);

this.pendinguserapprovals = ko.observableArray(pusers);

this.maleusers = ko.observable(maleusercount[0]);
this.femaleusers = ko.observable(femaleusers[0]);
this.transgender = ko.observable(transgender[0]);

this.year2016 = ko.observable(year2016[0]);
this.year2017 = ko.observable(year2017[0]);

this.year2017true = ko.observable(true);

this.downloads = ko.observable(downloads[0]);
this.atestimonialscount = ko.observable(atestimonialscount[0]);
this.ptestimonialscount = ko.observable(ptestimonialscount[0]);

if(this.year2017() == '0'){
  this.year2017true(false);
}


}
ko.applyBindings(new AppViewModel());

</script>