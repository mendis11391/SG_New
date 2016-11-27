$( document ).ready(function() {
    


});


$(document).on('click', '.userapproval', function(){
    
    var pemail = $(this).parent().parent().find('td:eq(1)').text();


    $.ajax({
        type: "POST",
        url: "updatependinguser.php",
        data: {
            'email': pemail,
            'req': "update"
        },
        cache: false,
        success: function(response){
            alert(response);
            location.reload();
        }
    });
});

$(document).on('click', '.deletepuser', function(){
    
    var pemail = $(this).parent().parent().find('td:eq(1)').text();


    $.ajax({
        type: "POST",
        url: "updatependinguser.php",
        data: {
            'email': pemail,
            'req': "deletereq"
        },
        cache: false,
        success: function(response){
            alert(response);
            location.reload();
        }
    });
});

$(document).on('click', '.deleteuser', function(){
    
    var id = $(this).parent().parent().parent().find('td:eq(0)').text(); //Get the id in the current row
    var string = 'id='+ id ;

    $.ajax({
        type: "POST",
        url: "delete.php",
        data: string,
        cache: false,
        success: function(){
            location.reload();
        }
    });
});

$(document).on('click', '.deletefile', function(){
    
    var id = $(this).parent().parent().parent().find('td:eq(0)').text(); //Get the id in the current row
    var filename = $(this).parent().parent().parent().find('td:eq(1)').text();
    var string = id ;
    var string1 = filename ;

    $.ajax({
        type: "POST",
        url: "uploadfile.php",
        data: {
            'id':string,
            'filename':string1
            },
        cache: false,
        success: function(){
            location.reload();
        }
    });
});

$(".copybatchdetail").on("click", function(){
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(this).text()).select();
    document.execCommand("copy");
    $temp.remove();
    $(".alert").fadeIn(900);
    $(".alert").fadeOut(500);
});

$(document).on('click', '.updatebatch', function(){
    var morningbatchdisplay = "true";
    var eveningbatchdisplay = "true";
    var weekendbatchdisplay = "true";

    if($("#morningbatch").val()==""){
        $("#morningbatch").val("In Progress");
        morningbatchdisplay = "false";
    }

    if($("#eveningbatch").val()==""){
        $("#eveningbatch").val("In Progress");
        eveningbatchdisplay = "false";
    }

    if($("#weekendbatch").val()==""){
        $("#weekendbatch").val("In Progress");
        weekendbatchdisplay = "false";
    }
    
    var morningbatch = $("#morningbatch").val();
    var eveningbatch = $("#eveningbatch").val();
    var weekendbatch = $("#weekendbatch").val();
    
    $.ajax({
        type: "POST",
        url: "newbatchupdate.php",
        data: {
            'morningbatch':morningbatch,
            'eveningbatch':eveningbatch,
            'weekendbatch': weekendbatch,
            'morningbatchdisplay':morningbatchdisplay,
            'eveningbatchdisplay':eveningbatchdisplay,
            'weekendbatchdisplay':weekendbatchdisplay
            },
        cache: false,
        success: function(){
            $("#morningbatch").val("");
            $("#eveningbatch").val("");
            $("#weekendbatch").val("");
            alert("Successfully updated");
        }
    });
});
