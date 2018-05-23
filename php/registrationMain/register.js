$(document).ready(function() {
	$("#register").click(function() {
		var user = $("#username").val();
		var pass = $("#password").val();
		var pass2 = $("#password2").val();

		if(pass != pass2) {
			document.querySelector('#register_output').innerHTML = '<div style="color: red;">Passwords do not match</div><hr>';
		} else {
			var data = "user=" + user + "&pass=" + pass + "operation=reg";
			$.ajax({
				method: "POST", 
				url: "register.php",
				data: data,
				success: function(data) {
				$("#register_output").html(data);
				}
			});	
		}
	});
});