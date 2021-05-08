$(document).ready(function(){
	$("#hideLogin").click(function(){
		//console.log("Login is Pressed");
		$("#loginForm").hide();
		$("#registerForm").show();
	});

	$("#hideRegister").click(function(){
		$("#loginForm").show();
		$("#registerForm").hide();
	});
});