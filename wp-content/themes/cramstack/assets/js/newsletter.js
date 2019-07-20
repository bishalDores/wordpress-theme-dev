
$(document).ready(function () {
    $('#newsletter').submit(e=>{
        e.preventDefault();
        var email = $('#newsletterInput').val();
        var validatedEmail = isEmail(email);

        if(!validatedEmail){
            alert('Incorrect Email Address');
            return
        }
        console.log(validatedEmail)
    })


});

function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}