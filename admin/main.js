//accepted residents to call api
$(document).on("click", "#accept", function() {
    var email = $(this).parent().siblings(".email").text();
    console.log(email);

    $.ajax({
        type: "post",
        url: "api.php",
        data: { acceptedEmail: email },
        success: function(reply) {
            alert(reply);

            // $(this).parent().parent().css("display", "none");
        }
    });
});

//declined residents to call api
$(document).on("click", "#decline", function() {
    var email = $(this).parent().siblings(".email").text();
    console.log(email);

    $.ajax({
        type: "post",
        url: "api.php",
        data: { declinedEmail: email },
        success: function(reply) {
            alert(reply);
            // $(this).parent().parent().css("display", "none");

        }
    });
});


function refresh() {
    location.reload();
}
function fp(){
 var fpemail = $('#email').val();

 var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

 if (!fpemail.match(mailformat) || fpemail === "") {
    alert("Please confirm you entered the right entry and no field should be empty!");
} else {
    $.ajax({
        type: "post",
        url: "api.php",
        data: {fpemail: fpemail},
        success: function(reply) {
             if ($.trim(reply) == "Message has been sent. Check your mail for a verification code!") {
                alert(reply);
                enterVerificationCode();
            } else {
                alert(reply);
                $("#email").val("");
            }
        }
    });
}
}

// function enterVerificationCode(){
//     $('#form1').css("display","none");
//     $('#form2').css("display","block");
//     $('#form3').css("display","none");
// }

// function vc(){
//     var code = $('#code').val();
//     $.ajax({
//         type:"post",
//         url: "api.php",
//         data: {code:code},
//         success: function(reply){
//             if ($.trim(reply) == "You can now change your password!") {
//                 alert(reply);
//                 changeYourPassword();
//             } else {
//                 alert(reply);
//                 $(".verifycode").val("");
//             }
//         }
//     });
// }

// function changeYourPassword(){
//     $('#form1').css("display","none");
//     $('#form2').css("display","none");
//     $('#form3').css("display","block");
// }

// function np(){
//     var newpassword = $('#newpassword').val();
//     var newpasswordEmail = $('#newpasswordEmail').val();

//     $.ajax({
//         type: "post",
//         url: "api.php",
//         data: {newpassword:newpassword, newpasswordEmail:newpasswordEmail},
//         success: function(reply){
//             alert(reply);
//         }
//     });
// }


function close(){
    $('#email').val("");
    $('#code').val("");
    $('#newpasswordEmail').val("");
    $('#newpassword').val("");    
}