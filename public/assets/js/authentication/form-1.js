$(document).ready( function(){

	var togglePassword = document.getElementById("toggle-password");
	let err = $('#error').val();

	console.log(err.trim());

	if (togglePassword) {
		togglePassword.addEventListener('click', function() {
		var x = document.getElementById("password");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
		});
	}

	if( err ){
		$.blockUI({
			message: $('.blockui-growl-message'), 
			fadeIn: 700, 
			fadeOut: 700, 
			timeout: 6000, //unblock after 3 seconds
			showOverlay: false, 
			centerY: false, 
			css: { 
				width: '250px',
				backgroundColor: '#dc3545',
				top: '12px',
				left: 'auto',
				right: '15px',
				border: 0,
				opacity: .95,
				zIndex: 1200,
			} 
		});
	} 


});

