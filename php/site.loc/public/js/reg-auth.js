$(document).ready(function() {
	$("#register").click(function() {
		var username = $("#username").val();
		var password = $("#password").val();
		var password2 = $("#password2").val();
		var errors = [];

		if(username == '') {
			errors.push('Enter login');
		} 
		if(password == '') {
			errors.push('Enter password');
		} 
		if(password != password2) {
			errors.push('Passwords do not match');
		}
		if (errors.length !== 0) {
			document.querySelector('#register_output').innerHTML = '<div style="color: red;">' + errors.shift() + '</div><hr>';
		} else {
			var data = "username=" + username + "&password=" + password + "&operation=register";
			$.ajax({
				method: 'POST', 
				url:'Auth\RegisterController@postRegister',
				headers: {
        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    			},
				success: function(data) {
				$("#register_output").html(data);
				}
			});	
		}
	});
});
$(document).ready(function() {
	$("#login").click(function() {
		var username = $("#username").val();
		var password = $("#password").val();

		var data = "username=" + username + "&password=" + password + "&operation=authorization";
			$.ajax({
				method: 'POST', 
				url: 'Auth\LoginController@postLogin',
				headers: {
        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    			},
				success: function(data) {
				$("#auth_output").html(data);
				}
			});	
	});
});
