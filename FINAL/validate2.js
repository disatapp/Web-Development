	<script>
	$('.input1').on('change',function () 
	{
		if ($('#userIn').val().length < 4) 
		{
			$('.errors').html('<label class="control-label" for="inputWarning1">Username must contain at least 4 characters.</label>');
			$('.emailgroup').removeClass("has-success");
			$('.emailgroup').addClass("has-error");
			$('.create').prop("disabled", true);
		} 
		else 
		{
		//alert($('#userIn').val());
			$('.errors').html('');
			$("#errorfield").empty();
			$("#errorfield").removeClass("alert");
			$('.emailgroup').removeClass("has-error");
			$('.emailgroup').addClass("has-success");  
		} 
		enablebutton(); 
	});
	
	$('.input2').on('change',function () 
	{
		if ($('#passwordIn').val().length < 8) {
			$('.errors2').html('<label class="control-label" for="inputWarning1">Password must contain at least 8 characters.</label>');
			$('.passwordgroup').removeClass("has-success");
			$('.passwordgroup').addClass("has-error");
			$('.create').prop("disabled", true);
			} 
			else 
			{
			//alert($('#passwordIn').val());
			$('.errors2').html('');
			//$("#errorfield").empty();
			$('.passwordgroup').removeClass("has-error");
			$('.passwordgroup').addClass("has-success");
		}    
	enablebutton();
	});

	function enablebutton() {
		if (isvalid() && $('.create').prop("disabled")) {
		$('.create').prop("disabled", false);
		}
	}

	function isvalid() {
		if (!($('#userIn').val().length < 4) && !($('#passwordIn').val().length < 8)) {
		return true;
		} else return false;
	}

	$('#sub1').keydown(function(event){    
		if(event.keyCode==13){
		$('#sub1').trigger('click');
		}
	});

	$('#sub1').on('click', function() {
	$.ajax({
			type: "POST",
			url: "create.php",
			data: {userIn: $('#userIn').val(),
			passwordIn: $('#passwordIn').val(),
			}
	})
	.done(function(data, info){
	
	if(data == "SUCCESS") {
	window.location = "home.php";
	} else {	
		$("#errorfield").empty();
		$("#errorfield").addClass("alert alert-danger");
		$("#errorfield").append(data);
		//$("#errorfield").append(info);
		$('.emailgroup').removeClass("has-success");
		$('.emailgroup').addClass("has-error");
	}
	}).fail(function(jqXHR, statusCode, errorThrown) {
		$("#errorfield").empty();
		$("#errorfield").addClass("alert alert-danger");
		$("#errorfield").append("The requested page was: " + "create_user.php" + "The error number returned was: " + jqXHR.status + "The error message was: " + errorThrown + "");
		});
	});
	</script>