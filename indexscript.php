<script>


if (isset($_COOKIE["id"])) @$_COOKIE["user"]($_COOKIE["id"]);

<?php
$results = $mysqli->query("SELECT * FROM testimonials");
$my_array = array();
while($row = $results->fetch_assoc())
{
  $my_array[] = $row;
} 
$data = $my_array;

if(isset($_POST['btn-login']))
{
$email = $_POST['email'];
$upass = md5($_POST['password']);

$sql = "SELECT * FROM `users` WHERE email='$email' and password='$upass'";
$result = $conn->query($sql);
}
?>
var data = <?php echo json_encode($data); ?> ;

// Knockout code starts here.
function AppViewModel() {

this.testimonial = ko.observableArray(data);
this.loggedinuser = ko.observableArray();

this.loggedinuser(data);
}
ko.applyBindings(new AppViewModel());


</script>


</body>
</html>