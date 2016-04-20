function run(d){
    input = d.id;
    value = d.value;
	$.ajax({
	url: "saveinfo.php",
	type: "post",
	data: {input: input, value: value};,
	success: function(data)
		{
			toastr.success('Successfully retireved text');
		},
		error:function(){
			toastr.error('Fail to retireve text');
		}   
    }); 
}
 
function getcheck(e){
    input = e.id;
    value = e.checked;
    if(e == true) 
		{
		$("."+id).prop('disabled', true).attr('style','text-decoration:line-through');
		} else {
		$("."+id).prop('disabled', false).attr('style','text-decoration:none');
		}
		url: "saveinfo.php",
		type: "post",
		data: {input: input, value: value};,
		success: function(data){
			toastr.success('Done');
		},
		error:function(){
			toastr.error('Undo');
		}   
    }); 
}


$('.delete').on('click', function(){
	toastr.error('Deleted');
});