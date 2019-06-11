$(document).ready(function(){

    (function($) {
        "use strict";


    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                subject: {
                    required: true,
                    minlength: 4
                },
                phone: {
                    required: true,
                    minlength: 9
                },
                email: {
                    required: true,
                    email: true
                },
                branch: {
                    required: true,
                },
                ma: {
                    required: true,
                },
                days: {
                    required: true,
                },
                time: {
                    required: true,
                },
                age: {
                    required: true,
                    minlength:1
                },
                package: {
                    required: true,
                },
                sibling: {
                    required: true,
                },
                note: {
                    required: false,
                    minlength: 20
                }
            },
            messages: {
                name: {
                    required: "Please enter your name",
                    minlength: "your name must consist of at least 2 characters"
                },
                subject: {
                    required: "Please enter the subject",
                    minlength: "your subject must consist of at least 4 characters"
                },
                phone: {
                    required: "Please enter your phone number",
                    minlength: "your Number must consist of at least 5 characters"
                },
                email: {
                    required: "Please enter your email id"
                },
                branch: {
                    required: "Please select branch"
                },
                ms: {
                    required: "Please select Martial Arts"
                },
                days: {
                    required: "Please select days"
                },
                time: {
                    required: "Please select time"
                },
                age: {
                    required: "Please enter your age"
                },
                package: {
                    required: "Please select a package"
                },
                sibling: {
                    required: "Please select one option"
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"registration_process.php",
                    success: function() {
                        $('#contactForm :input').attr('disabled', 'disabled');
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#success').fadeIn()
                            $('.modal').modal('hide');
		                	$('#success').modal('show');
                        })
                    },
                    error: function() {
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $('#error').fadeIn()
                            $('.modal').modal('hide');
		                	$('#error').modal('show');
                        })
                    }
                })
            }
        })
    })

 })(jQuery)
})
