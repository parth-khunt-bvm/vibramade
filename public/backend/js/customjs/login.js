var Login = function(){
    var validation = function(){
        var form = $('#login-form');
        var rules = {
            email: {required: true,email:true},
            password: {required: true},
        };

        var message = {
            email :{
                required : "Please enter your register email address",
                email: "Please enter valid email address"
            },
            password : {
                required : "Please enter password"
            }
        }
        handleFormValidateWithMsg(form, rules,message, function(form) {
            handleAjaxFormSubmit(form,true);
        });

        var form = $('#sign-up-form');
        var rules = {
            first_name: {required: true},
            last_name: {required: true},
            email: {required: true,email:true},
            agree: {required: true}

        };

        var message = {
            first_name : {
                required : "Please enter first name"
            },
            last_name : {
                required : "Please enter last name"
            },
            agree : {
                required : "You must accept the terms and conditions"
            },
            email :{
                required : "Please enter your register email address",
                email: "Please enter valid email address"
            },

        }
        handleFormValidateWithMsg(form, rules,message, function(form) {
            handleAjaxFormSubmit(form,true);
        });
    }




    var vibranade = function(){        
        var form = $('#form-vibramade');
        var rules = {
            name: {required: true},
            email: {required: true,email:true},
            phone: {required: true,number: true},
            subject: {required: true},
            message: {required: true}
        };

        var message = {
            name : {
                required : "Please enter name"
            },
            email :{
                required : "Please enter your email address",
                email: "Please enter valid email address"
            },
            phone : {
                required : "Please enter phone number",
                number : "Please enter a valid phone number"
            },
            subject : {
                required : "Please enter subject"
            },
            message : {
                required : "Please enter text message"
            },
        }
        handleFormValidateWithMsg(form, rules,message, function(form) {
            handleAjaxFormSubmit(form,true);
        });
    }
    
    return {
        init:function(){
            validation();
        },
        form:function(){
            vibranade();
        }
    }


}();

