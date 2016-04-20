		$("#login_a").click(function()
		{
			$("#shadow").fadeIn("normal");
			$("#login_form").fadeIn("normal");
			$("#user_name").focus();
		});
		
				function modaltoggle() 
		{
			var r = $('#SignupModal');
			var l = $('#loginModal');

			r.modal('toggle');
			l.modal('toggle');
		}
		
		$("#login_a").click(function()
		{
			$('#SignupModal').modal('show');
		}
		
		$("#cancel_hide").click(function()
		{
			modaltoggle();
		});
	