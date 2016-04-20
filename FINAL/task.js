$('.logout').click(function()
{
return confirm("Are you sure you want to Logout?");
})

var counter = 0;
$(function(){
$('#add_field').click(function(){
	counter += 1;
	$('#container').append(
	'<strong> Order # ' + counter + '</strong><br />' 
	+ '<textarea class="form-control" id="field_' + counter + '" name="box[]' + '"></textarea><br />' );	 
});
});