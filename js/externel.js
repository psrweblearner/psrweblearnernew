$(document).ready(function(){
// slider();	
$("#submit").click(function(){
var name = $("#name").val();
var email = $("#email").val();
var subject = $("#subject").val();
var message = $("#message").val();
var regexemail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
if(name == ""){
$(".error-name").html("**Please Fill Your Name!");
$(".error-name").css("color","red");
$("#name").css("border","1px solid red");
$("#name").focus();
$("#name").on("keypress", function(){
$("#name").css("border","");
$(".error-name").html("");
$(".error").html("");
});
}
else if(!name.match('^[a-zA-Z ]{3,30}$')){
$(".error-name").html("**Please Enter Valid Name!");
$(".error-name").css("color","red");
$("#name").css("border","1px solid red");
}

else if(email == ""){
$(".error-email").html("**Please Fill Your Email!");
$(".error-email").css("color","red");
$("#email").css("border","1px solid red");
$("#email").focus();
$("#email").on("keypress", function(){
$("#email").css("border","");
$(".error-email").html("");
$(".error").html("");
});
}
else if(!regexemail.test(email)){
$(".error-email").html("**Please Enter Valid Email!");
$(".error-email").css("color","red");
$("#email").css("border","1px solid red");
}
else if(subject == ""){
$(".error-subject").html("**Please Fill Your Subject!");
$(".error-subject").css("color","red");
$("#subject").css("border","1px solid red");
$("#subject").focus();
$("#subject").on("keypress", function(){
$("#subject").css("border","");
$(".error-subject").html("");
$(".error").html("");
});
}
else if(!subject.match('^[a-zA-Z ]*$')){
$(".error-subject").html("**Please Enter Valid Subject!");
$(".error-subject").css("color","red");
$("#subject").css("border","1px solid red");	
}
else if(message == ""){
$(".error-message").html("**Please Fill Your Message!");
$(".error-message").css("color","red");
$("#message").css("border","1px solid red");
$("#message").focus();
$("#message").on("keypress", function(){
$("#message").css("border","");
$(".error-message").html("");
$(".error").html("");
});
}
else{
    
$.ajax({
	type: "POST",
	url: "includes/mail.php",
	data:{oper:"CONTACT_SUBMIT",name:name,email:email,subject:subject,message:message},
	success : function(text){
		if(text == "success"){
$(".error").html("You Have Successfully Send a Message!");
$(".error").css("color","lightgreen");
$("#name").val("");
$("#email").val("");
$("#subject").val("");
$("#message").val("");
		}
		else{
			$(".error").html("Message Not Send! Try again");
			$(".error").css("color","red");
			$("#name").val("");
			$("#email").val("");
			$("#subject").val("");
			$("#message").val("");
			$("#name").focus();
		}
	}
	
});
}
});

$(".nav a").filter(function(){
return this.href==location.href}).parent().addClass('active').siblings().removeClass('active');
$(".nav a").click(function(){
	$(this).parent().addClass('active').siblings().removeClass('active')
});


});

// function slider(){
// $.ajax({
//    url:"includes/mail.php",
//    method:"POST",
//    data: "oper=GET_SLIDER",
//    success:function(data)
//    {
//     alert("done!");
//    }
//   });
// }