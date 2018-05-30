$(document).ready(function() {
	$("#auth").click(function() {
		var user = $("#username").val();
		var pass = $("#password").val();

		var data = "user=" + user + "&pass=" + pass + "&operation=authorization";
			$.ajax({
				method: "POST", 
				url: "reg_auth.php",
				data: data,
				success: function(data) {
				$("#auth_output").html(data);
				}
			});	
	});
});