

	$("#commentForm").validate();
	

	
    $("#rbutton'+i+'").attr("disabled","disabled");
	}
	$("#signupForm").validate({
		rules: {
			firstname: "required",
			lastname: "required",
			username: {
				required: true,
				minlength: 4,
				remote:"account.php"
			},
			password: {
				required: true,
				minlength: 8
			},
			confirm_password: {
				required: true,
				minlength: 8,
				equalTo: "#password"
			},
		},
		messages: {
			firstname: "Required: Please enter your firstname",
			lastname: "Required: Please enter your lastname",
			username: {
				required: "Required: Missing a username",
				minlength: "Your username must consist of at least 4 characters",
				remote:"Username already in uses"
			},
			password: {
				required: "Required: Missing a password",
				minlength: "Your password must be at least 7 characters"
			},
			confirm_password: {
				required: "Required: Missing a password",
				minlength: "Your password must be at least 7 characters",
				equalTo: "Please enter the same password as above"
			}
		}
		});
	
	$("#username").focus(function() {
		var firstname = $("#firstname").val();
		var lastname = $("#lastname").val();
		if(firstname && lastname && !this.value) {
			this.value = firstname + "." + lastname;
		}
	});
	
	
var $username = $("input[name=username]");
var $firstname = $("input[name=firstname]");
var $lastname = $("input[name=lastname]");
var $password = $("input[name=password]");
	
$("#signup").on('click', function(e){
	e.preventDefault();
	$.ajax({
	type: "POST",
	url: "signupsuccess.php",
	data: {username: $username.val(), password: $password.val(), firstname: $firstname.val(), lastname: $lastname.val()},
	dataType: 'text',
	success: function(d){
			if($('#signupForm').valid() && (d == "true"))
			{
				toastr.success("Account created","Success:");
				location.href = "main.php";
			}
			else
			{
				toastr.error("Fail to create account.","Invalid:");
			}
		}
	});
	return false;
	});
	
	$.validator.setDefaults({
	submitHandler: function() { alert("submitted!"); }
	});
	
	