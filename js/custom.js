$(document).ready(function(){

var year = moment().format("YYYY");
$("#currentyear").val(year);    

if($(".getusername1").text() != ""){
// Code for getting user first letter for profile pic
$(".userLetter").text($(".getusername1").text()[0].toUpperCase() + $(".getusername1").text()[1]);

var usernameval = $(".getusername1").text()[0].toUpperCase() + $(".getusername1").text().substr(1,20);

$(".getusername").append("&nbsp;" + usernameval);

$("#testimonialgender").val($(".getusergender").text());
}

});

$(document).on('click', '#submitcontactform', function(event){
event.preventDefault();
    var fname = $("#fname").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var message = $("#message").val();

    if($("#fname").val()!="" && $("#email").val()!="" && $("#message").val()!="" ){
        $.ajax({
        type: "POST",
        url: "email.php",
        data: {
            'fname' : fname,
            'email' : email,
            'phone' : phone,
            'message' : message,
        },
        cache: false,
        success: function(){
            $("#fname").val("");
            $("#email").val("");
            $("#phone").val("");
            $("#message").val("");

			$('#msg').html("Thank you. We will get in touch with you soon!").fadeIn('slow');
			$('#msg').delay(5000).fadeOut('slow');
        }
        });
    }
    else{
        $('#errmsg').html("Please fill all the required fields.").fadeIn('slow');
		$('#errmsg').delay(3000).fadeOut('slow');
    }   
});

$(document).on('click', '.userlogin', function(event){
event.preventDefault();
    var email = $("#email").val();
    var password = $("#password").val();

    if($("#email").val()!="" && $("#password").val()!="" ){
        $.ajax({
        type: "POST",
        url: "login_ajax.php",
        data: {
            'email' : email,
            'password' : password
        },
        cache: false,
        success: function(response){
            if(response == 'wrong'){
                $("#loginrequired").hide();
                $('#wronguname').modal('show');
            }
            else{
                window.location = "index.php";
            }
        }
        });
    }
    else{
        $("#loginrequired").show();
    }   
});

$(document).on('click', '#changePasswordButton', function(event){
event.preventDefault();
    var currentPassword = $("#currentPassword").val();
    var newPassword = $("#newPassword").val();
    var confirmPassword = $("#confirmPassword").val();

    if($("#currentPassword").val()!="" && $("#newPassword").val()!="" && $("#confirmPassword").val()!=""){
        if($("#newPassword").val() == $("#confirmPassword").val()){
            $.ajax({
            type: "POST",
            url: "changePassword.php",
            data: {
                'currentPassword' : currentPassword,
                'newPassword' : newPassword,
                'confirmPassword' : confirmPassword
            },
            cache: false,
            success: function(response){
                $("#changePasswordError").text(response);
                $("#changePasswordError").show();
                if(response != "Current Password is not correct"){
                    setTimeout(function(){ window.location = "logout.php"; }, 5000);
                }
            }
            });
        }
        else{
            $("#changePasswordError").text("Passwords do not match");
            $("#changePasswordError").show();
        }
    }
    else{
        $("#changePasswordError").text("Please fill all the fields");
        $("#changePasswordError").show();
    }   
});

$(document).on('click', '#ForgotPasswordButton', function(event){
event.preventDefault();
    var email = $("#ForgotPasswordUserEmail").val();
    var generatedPassword = "";
    var alphabets = ["A", "B", "C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
    var values = [1,3,3,2,1,4,2,4,1,8,4,2,3,1,1,3,2,1,1,1,1,4,3,8,2,10];

    function random(){
        var x = Math.floor((Math.random() * 26) + 1);
        return x-1;
    }

    for(var i=0; i <= 3; i++){
        var value = random();
        var a = alphabets[value];
        generatedPassword += a;
    }

    for(var i=0; i <= 2; i++){
        var value = random();
        var b = values[value];
        generatedPassword += b;
    }

    if($("#ForgotPasswordUserEmail").val()!=""){
            $.ajax({
            type: "POST",
            url: "forgotPassword.php",
            data: {
                'email' : email,
                'generatedPassword' : generatedPassword
            },
            cache: false,
            success: function(response){
                $("#ForgotPasswordError").text(response);
                $("#ForgotPasswordError").show();
                if(response == "New password has been sent to your email."){
                    setTimeout(function(){ window.location = "login.php"; }, 4000);
                }
            }
            });
    }
    else{
        $("#ForgotPasswordError").text("Please enter the email.");
        $("#ForgotPasswordError").show();
    }   
});

$(document).on("input", "#phone", function() {
    this.value = this.value.replace(/[^0-9\.]/g,'');
});