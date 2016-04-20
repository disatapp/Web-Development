$('#regForm').validate();

$('#loginModal').modal('show');

toastr.options.positionClass = "toast-top-full-width";

$('#regForm').validate();
$('#loginModal').modal('show');
function modaltoggle() {
    var r = $('#regModal');
    var l = $('#loginModal');

    r.modal('toggle');
    l.modal('toggle');
}

function tryLogin(){

    $.post('/login', $('#loginForm').serialize())
        .done(function()
				{ window.location = window.location.protocol + "//" + window.location.host + "/ahome";})
        .fail(function(jqXHR, StatusMsg, error){
            toastr.error('bad username or password');
        });
}

function tryRegister(){

    var form = $('#regForm');
    if (form.valid()) {
        $.post('/register', form.serialize())
            .done(processRegister)
            .fail(function (jqXHR, StatusMsg, error) 
			{
                toastr.error(error);
            });
    }
}

var processRegister = function (data) {
    //if fail, show error message toast, and don't toggle modal
    if(data.success){
        //if success, show toast + toggle modal
        toastr.success('Registration Successful.  Hooray!');
        modaltoggle();

    } else {
        console.log(data);

        toastr.error(data.error.message);
    }

    console.log(data);

};

function logoutMsg(){
    var tmsg = 'You have been logged out!';
    var msg = 'See you again soon'
    toastr.success(msg, tmsg);
}