function postMessage(e) {
    e.preventDefault();

    var form = $("#msg-form");

    var loading = form.find('.loading');
    var errMsg = form.find('.error-message');
    var successMsg = form.find('.sent-message');
    errMsg.slideUp();
    successMsg.slideUp();
    loading.slideDown();

    var formData = {
        'name': $('#name').val(),
        'email': $('#email').val(),
        'subject': $('#subject').val(),
        'message': $('#message').val()
    };

    axios.post('http://bell3.sebd.co/api/web/postMessage.se', formData)
        .then(res => {
            //console.log(res)
            var data = res.data;
            var message = data.msg;
            loading.slideUp();
            if (data.success) {
                successMsg.slideDown().html(message);
            } else {
                errMsg.slideDown().html(message);
            }
        })
        .catch(err =>{
            loading.slideUp();
            errMsg.slideDown().html("Sorry, Something Went Wrong. Please try again later or try other contact methods");
        })

}

/*$(function () {
    $("#msg-form").validate({
            rules: {
                name: {
                    required: "Please enter your name",
                    minlength: 3
                },
                email: {
                    required: "Please enter your email",
                    email: true
                },
                subject: {
                    required: "Please add a subject",
                    minlength: 4
                },
                message: {
                    required: "Please write something for us",
                    minlength: 4
                }
            }
        }
    )
})*/
/*$(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='msg-form']").validate({
        // Specify validation rules
        rules: {
            name: "required",
            email: {
                required: true,
                email: true
            }
        },
        // Specify validation error messages
        messages: {
            name: "Please enter your firstname",
            email: "Please enter a valid email address"
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) { // <- pass 'form' argument in
            $(".submit").attr("disabled", true);
            form.submit(); // <- use 'form' argument here.
        }
    });
});*/

