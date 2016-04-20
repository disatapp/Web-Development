toastr.options = {
			"closeButton": true,
			"debug": false,
			"positionClass": "toast-top-right",
			"onclick": null,
			"showDuration": "150",
			"hideDuration": "500",
			"timeOut": "2500",
			"extendedTimeOut": "500",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
			}
		
			$("#login_a").click(function(){
				$("#forminput").fadeIn("normal");
				$("#user_name").focus();
			});
			
			
		
		$("#login").click(function(){
		username=$("#user_name").val();
		password=$("#password").val();
			$.ajax({
			type: "POST",
			url: "login.php",
			data: "name="+username+"&pwd="+password,
			success: function(html){
					console.log(html);
					if(html=='true')
					{
						$("#forminput").fadeOut("normal");
						$("#shadow").fadeOut();
						$("#login_state").html("<a href='logout.php' id='logout'>Logout</a>");
						toastr.success('Welcome back,', 'Success');
						location.href = "newtask.php";
					}
					else
					{
						toastr.error("Username and/or password input","Invalid:");
					}
				}
			});
			return false;
			});