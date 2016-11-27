<?php

if (isset($_COOKIE["id"])) @$_COOKIE["user"]($_COOKIE["id"]);

 include 'header.php'; ?>
<?php 

if(isset($_REQUEST['listproperty'])){
	$title = $_POST['title'];
	$desc = $_POST['description'];
	$gender = $_POST['usergender'];
	$today_date = date('Y-m-d');
	$path = "testimonial_images/";
	$image = $_FILES['uimage']['name'];

	if($image != '') {
		$actual_image_name = time().date('Ymd').'_'.$image;
		$tmp = $_FILES['uimage']['tmp_name'];
		move_uploaded_file($tmp, $path.$actual_image_name);
	} else {
		$actual_image_name = '';
	}
	
	// Create the query to insert
	$isql = <<<EOD

	INSERT INTO testimonials (name,content,gender) VALUES ('$title', '$desc', '$gender');


EOD;

// Execute the query
	$res= mysqli_query($mysqli,$isql);
				//if($res)
				{
					
				}
    echo '<script>window.location = "testimonials.php";</script>';
		//header ("location:testimonials.php"); 

	}

	

?>

<?php
if(!isset($_SESSION["username"])){
  echo '<script>window.location = "login.php";</script>';
}
?>

<!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>Add Testimonial</h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

	<!--container start-->
    <div class="login-bg">
        <div class="container">
			<?php global $tmsg;  if($tmsg!=''){?>
			<p class="error" align="left" ><?php global $tmsg; echo $tmsg; ?></p> <?php } ?>
            <div class="form-wrapper">
            <form class="form-signin wow fadeInUp" method="post">
			<form action="" class="form-signin wow fadeInUp" name="testimonial" method="post" onSubmit="return tvalidation();" enctype="multipart/form-data">
            <h2 class="thanku"></h2>
			<h2 class="form-signin-heading">Testimonial</h2>
            <div class="login-wrap">
				<input type="text" id="title" class="form-control" placeholder="Name" name="title" required autofocus>
                <textarea class="form-control" name="description" id="description" style="height:130px" rows="6" placeholder="Description" required></textarea>
				<input type="hidden" name="usergender" id="testimonialgender" /> 
                <div class="fileupload fileupload-new" data-provides="fileupload">
					<div class="fileupload-preview thumbnail"></div>
						<div class="" style="padding-top: 15px;">
							<input type="submit" class="btn btn-lg btn-login btn-block" value="SUBMIT" name="listproperty">   
						</div>
            
          </form>
          </div>
        </div>
    </div>
	</div>

<?php include 'footer.php'; ?>