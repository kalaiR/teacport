$(document).ready(function() {    // Upload preview with validation    $(document).on('change','.image_upload_holder',function()  {        var fileUpload = $(this).val();        var img_prev = $(this).parents('.image-preview').siblings().find('.image_upload_profile');        var file_name = $(this).parents('.image-preview').find('.image-preview-filename');        var error_msg = $(this).parents('form').find('.val_status');        var form = $(this).parents('form');        var clear = $(this).parents('.image-preview').find('.image-preview-clear');        //Check whether the file is valid Image.        var ext = fileUpload.substr((fileUpload.lastIndexOf('.') + 1));        // Check file extension        if ((ext == "jpg" || ext == "png" || ext == "jpeg") && ext != "undefined") {            var file_size = $(this)[0].files[0].size;            // Check file size            if(file_size < 2097152) {                // Initiate the FileReader object.                var reader = new FileReader();                reader.readAsDataURL(this.files[0]);                reader.onload = function (e) {                    // Initiate the JavaScript Image object.                    var image = new Image();                    image.src = e.target.result;                    image.onload = function () {                        // Determine the Height and Width.                        var height = this.height;                        var width = this.width;                        // Check height and width                        if (height > 768 || width > 1024) {                            error_msg.removeClass('val_success');                            error_msg.addClass('val_error');                            $('html,body').animate({scrollTop : form.offset().top }, 500);                            error_msg.html('<i class="fa fa-times" aria-hidden="true"></i> Height and Width must not exceed 768px and 1024px.').fadeIn(350);                            return false;                        }                        error_msg.removeClass('val_error');                        error_msg.addClass('val_success');                        clear.show();                        $('html,body').animate({scrollTop : form.offset().top }, 500);                        error_msg.html('<i class="fa fa-check" aria-hidden="true"></i> File added successfully.').fadeIn(350);                        img_prev.attr('src',image.src);                        file_name.val(fileUpload);                        return true;                      };                }            }            else {                error_msg.removeClass('val_success');                error_msg.addClass('val_error');                $('html,body').animate({scrollTop : form.offset().top }, 500);                error_msg.html('<i class="fa fa-times" aria-hidden="true"></i> File size must contain less than 2MB.').fadeIn(350);                return false;            }        }        else {            error_msg.removeClass('val_success');            error_msg.addClass('val_error');            $('html,body').animate({scrollTop : form.offset().top }, 500);            error_msg.html('<i class="fa fa-times" aria-hidden="true"></i> Invalid file only files with extension. jpg or png or jpeg are accepted.').fadeIn(350);            return false;        }    });    // Upload file with validation    $(document).on('change','.file_upload_holder',function()  {        var fileUpload = $(this).val();        var file_name = $(this).parents('.image-preview').find('.image-preview-filename');        var error_msg = $(this).parents('form').find('.val_status');        var form = $(this).parents('form');        var clear = $(this).parents('.image-preview').find('.image-preview-clear');        //Check whether the file is valid Image.        var ext = fileUpload.substr((fileUpload.lastIndexOf('.') + 1));        // Check file extension        if ((ext == "pdf" || ext == "doc") && ext != "undefined") {            var file_size = $(this)[0].files[0].size;            // Check file size            if(file_size < 1048576) {                error_msg.removeClass('val_error');                error_msg.addClass('val_success');                clear.show();                $('html,body').animate({scrollTop : form.offset().top }, 500);                error_msg.html('<i class="fa fa-check" aria-hidden="true"></i> File added successfully.').fadeIn(350);                file_name.val(fileUpload);                return true;              }            else {                error_msg.removeClass('val_success');                error_msg.addClass('val_error');                $('html,body').animate({scrollTop : form.offset().top }, 500);                error_msg.html('<i class="fa fa-times" aria-hidden="true"></i> File size must contain less than 1MB.').fadeIn(350);                return false;            }        }        else {            error_msg.removeClass('val_success');            error_msg.addClass('val_error');            $('html,body').animate({scrollTop : form.offset().top }, 500);            error_msg.html('<i class="fa fa-times" aria-hidden="true"></i> Invalid file only files with extension. pdf or doc are accepted.').fadeIn(350);            return false;        }    });    // Upload clear    $(document).on('click','.image-preview-clear',function()  {        var error_msg = $(this).parents('form').find('.val_status');        var preview = $(this).parents('.image-preview').siblings().find('.image_upload_profile');        $(this).hide();        $(this).parents('.image-preview').find('.image-preview-filename').val('');        $(this).parents('.image-preview').find('.image_upload_holder').val('');        preview.attr('src',preview.data('href'));        error_msg.removeClass('val_error');        error_msg.addClass('val_success');        $('html,body').animate({scrollTop : $(this).parents('form').offset().top }, 500);        error_msg.html('<i class="fa fa-check" aria-hidden="true"></i> File Removed successfully.').fadeIn(350);    });    $(".provider_form").submit(function() {                     var error_msg = $(this).find('.val_status');        var error = '';        var message = '';        $(this).find('.form_inputs').each(function(){            var tag_name = $(this).prop("tagName").toLowerCase();            var this_val = $.trim($(this).val());                                        if(this_val == '') {                error = 1;                message ="Please Provide Valid Information!";                $(this).addClass('form-field-error');                if(tag_name == "select") {                    $(this).siblings('span').find('.select2-selection').addClass('form-field-error');                }            }            else {                $(this).removeClass('form-field-error');                if(tag_name == "select") {                    $(this).siblings('span').find('.select2-selection').removeClass('form-field-error');                }            }        });        /* Validate Checkbox */        // var checkbox = [];        // $(this).find('.form_checkbox').each(function () {        //     var cname = $(this).attr('name');        //     if ($.inArray(cname, checkbox) == -1) checkbox.push(cname);        // });        // if(error == '')  {        //     $.each(checkbox, function (i, name) {        //         if ($('input[name="' + name + '"]:checked').length == 0) {        //             message ="Please Accept Declaration!";        //             error = 1;        //             $('input[name="' + name + '"]').first().addClass('form-field-error');        //             $('input[name="' + name + '"]').first().parents('p').addClass('form-label-error');        //         }        //         else {        //             $('input[name="' + name + '"]').first().removeClass('form-field-error');        //             $('input[name="' + name + '"]').first().parents('p').removeClass('form-label-error');        //         }        //     });        // }        /* Validate Declaration */        if(error == '')  {            $('.form_dec').each(function() {                if($(this).is(':checked')) {                    $(this).removeClass('form-field-error');                    $(this).parents('p').removeClass('form-label-error');                }                else {                    error = 1;                    message ="Please Accept Declaration!";                    $(this).addClass('form-field-error');                    $(this).parents('p').addClass('form-label-error');                }            });        }        /* Validate minlength field */        // if(error == '') {                              // }        if($(this).find('input,select').hasClass('form-field-error')) {            error_msg.removeClass('val_success');            error_msg.addClass('val_error');            $('html,body').animate({scrollTop : $(this).offset().top }, 500);            error_msg.html('<i class="fa fa-times" aria-hidden="true"></i> '+message+' ').fadeIn(350);            return false;          }        else {            // error_msg.html('<i class="fa fa-times" aria-hidden="true"></i> <i class="fa fa-check" aria-hidden="true"></i> Please fill out all mandatory fields').fadeIn(350);            error_msg.html('').fadeOut(350);            return true;        }            });    /*  ===========        Seeker Feedback Form & Change Password Validation Start     ===================   */    $(document).on('submit','.seeker_form',function(e) {        var error = '';        var error_msg = $(this).find('.val_status');        var message = '';        /* Validate Input and Select element */        $(this).find('.form_inputs').each(function() {            var this_val = $.trim($(this).val());             if(this_val == '') {                error = 1;                message ="Please Provide Valid Information!";                $(this).addClass('form-field-error');            }            else {                $(this).removeClass('form-field-error');            }        });        /* Validate minlength for input fields */        if(error == '') {            $(this).find('.form_inputs').each(function() {                var this_val = $.trim($(this).val());                 var data_min = parseInt($(this).data('minlength'));                var data_max = parseInt($(this).attr('maxlength'));                var data_name = $(this).data('name');                if(this_val.length < data_min) {                    error = 1;                    message = data_name + " must containes atleast "+data_min+" characters";                    $(this).addClass('form-field-error');                    return false;                }                else if(this_val.length > data_max) {                     error = 1;                    message = data_name + " must containes maximum "+data_max+" characters";                    $(this).addClass('form-field-error');                    return false;                }                else {                    $(this).removeClass('form-field-error');                }            });        }        // Validate Password comparison        if(error == '' ) {            if($("#new_pass").is(':visible') && $("#confirm_pass").is(':visible')) {                if($("#new_pass").val() != $("#confirm_pass").val()) {                    error = 1;                    message = "Confirm password didnot match with new password";                    $("#confirm_pass").addClass("form-field-error");                }                else {                   $("#confirm_pass").removeClass("form-field-error");                 }             }        }                   /* Check whether the input and select element has error or not */        if($('input,select,textarea').hasClass('form-field-error')) {            if(message == '') {                message ="Please Provide Valid Information!";            }            error_msg.removeClass('val_success');            error_msg.addClass('val_error');            $('html,body').animate({scrollTop : $(this).offset().top }, 500);            error_msg.html('<i class="fa fa-times" aria-hidden="true"></i> '+message+' ').fadeIn(350);            return false;        }        else {            error = 0;            error_msg.html('').fadeOut('fast');            return true;        }    }); // Submit End    /*  ===========        Seeker Feedback Form & Change Password Validation End     ===================   */    /*  ===========        Seeker Popup Form Validation Start     ===================   */    $(document).on('submit','.seeker_popup_form',function(e) {        var error = '';        var error_msg = $(this).find('.val_status');        var message = '';        /* Validate Input and Select element */        $(this).find('.form_inputs').each(function() {            if($(this).is(':visible')) {                var tag_name = $(this).prop("tagName").toLowerCase();                var this_val = $.trim($(this).val());                 if(this_val == '') {                    error = 1;                    message ="Please Provide Valid Information!";                    $(this).addClass('form-field-error');                    if(tag_name == "select") {                        $(this).siblings('span').find('.select2-selection').addClass('form-field-error');                    }                }                else {                    $(this).removeClass('form-field-error');                    if(tag_name == "select") {                        $(this).siblings('span').find('.select2-selection').removeClass('form-field-error');                    }                }            }        });        /* Validate minlength for input fields */        if(error == '') {            $(this).find('.form_inputs').each(function() {                if($(this).is(':visible')) {                    var this_val = $.trim($(this).val());                     var data_min = parseInt($(this).data('minlength'));                    var data_max = parseInt($(this).attr('maxlength'));                    var data_name = $(this).data('name');                    if(this_val.length < data_min) {                        error = 1;                        message = data_name + " must containes atleast "+data_min+" characters";                        $(this).addClass('form-field-error');                        return false;                    }                    else if(this_val.length > data_max) {                         error = 1;                        message = data_name + " must containes maximum "+data_max+" characters";                        $(this).addClass('form-field-error');                        return false;                    }                    else {                        $(this).removeClass('form-field-error');                    }                }            });        }        // Validate Password comparison        if(error == '' ) {            if($("#new_pass").is(':visible') && $("#confirm_pass").is(':visible')) {                if($("#new_pass").val() != $("#confirm_pass").val()) {                    error = 1;                    message = "Confirm password didnot match with new password";                    $("#confirm_pass").addClass("form-field-error");                }                else {                   $("#confirm_pass").removeClass("form-field-error");                 }             }        }                   /* Check whether the input and select element has error or not */        if($('input,select').hasClass('form-field-error')) {            if(message == '') {                message ="Please Provide Valid Information!";            }            error_msg.removeClass('val_success');            error_msg.addClass('val_error');            $('#dashboard_popup_act').animate({scrollTop : $(this).offset().top }, 500);            error_msg.html('<i class="fa fa-times" aria-hidden="true"></i> '+message+' ').fadeIn(350);            return false;        }        else {            error = 0;            error_msg.html('').fadeOut(350);            return true;        }    }); // Submit End    /*  ===========        Seeker Popup Form Validation End     ===================   */    /*  ===========        Seeker and Provider Registration and Login Form Validation Start     ===================   */    $(document).on('submit','.reg_login_form',function(e) {        var error = '';        var error_msg = $(this).find('.val_status');        var message = '';        $('.error').css('display','none');        /* Validate Input and Select element */        $(this).find('.form_inputs').each(function() {            var tag_name = $(this).prop("tagName").toLowerCase();            var this_val = $.trim($(this).val());             if(this_val == '') {                error = 1;                message ="Please Provide Valid Information!";                $(this).addClass('form-field-error');                if(tag_name == "select") {                    $(this).siblings('span').find('.select2-selection').addClass('form-field-error');                }            }            else {                $(this).removeClass('form-field-error');                if(tag_name == "select") {                    $(this).siblings('span').find('.select2-selection').removeClass('form-field-error');                }            }        });        /* Validate email */        if(error == '') {            var email = $(this).find('.email_value');            if (!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email.val())) {                error = 1;                message = "Enter Valid Email Address!";                email.addClass("form-field-error");            }            else {                email.removeClass("form-field-error");            }        }        /* Validate minlength for input fields */        if(error == '') {            $(this).find('.form_inputs').each(function() {                var this_val = $.trim($(this).val());                 var data_min = parseInt($(this).data('minlength'));                var data_max = parseInt($(this).attr('maxlength'));                var data_name = $(this).data('name');                if(this_val.length < data_min) {                    error = 1;                    message = data_name + " must containes atleast "+data_min+" characters";                    $(this).addClass('form-field-error');                    return false;                }                else if(this_val.length > data_max) {                     error = 1;                    message = data_name + " must containes maximum "+data_max+" characters";                    $(this).addClass('form-field-error');                    return false;                }                else {                    $(this).removeClass('form-field-error');                }            });        }        /* Validate Declaration */        if(error == '')  {            $(this).find('.form_dec').each(function() {                if($(this).is(':checked')) {                    $(this).removeClass('form-field-error');                    $(this).parents('label').removeClass('form-label-error');                }                else {                    error = 1;                    message ="Please Accept Declaration!";                    $(this).addClass('form-field-error');                    $(this).parents('label').addClass('form-label-error');                }            });        }                   /* Check whether the input and select element has error or not */        if($(this).find('input,select').hasClass('form-field-error')) {            if(message == '') {                message ="Please Provide Valid Information!";            }            error_msg.removeClass('val_success');            error_msg.addClass('val_error');            $('html,body').animate({scrollTop : $(this).offset().top }, 500);            error_msg.html('<i class="fa fa-times" aria-hidden="true"></i> '+message+' ').fadeIn(350);            return false;        }        else {            error = 0;            error_msg.html('').fadeOut(350);            return true;        }    }); // Submit End    /*  ===========        Seeker and Provider Registration and Login Form Validation End     ===================   */}); // End document