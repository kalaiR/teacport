$(document).ready(function() {    // $personnal_logo['allowed_types']        = 'jpg|png|jpeg';    //                 $personnal_logo['max_size']             = '2048';    //                 $personnal_logo['max_width']            = '1024';    //                 $personnal_logo['max_height']           = '768';    //                  var width = this.width,    //         height = this.height,    //         imgsrc = this.src;    // Upload preview    $(document).on('change','.image_upload_holder',function()  {        var fileUpload = $(this).val();        var img_prev = $(this).parents('.image-preview').siblings().find('.image_upload_profile');        var file_name = $(this).parents('.image-preview').find('.image-preview-filename');        var error_msg = $(this).parents('form').find('.val_status');        var form = $(this).parents('form');        var clear = $(this).parents('.image-preview').find('.image-preview-clear');        //Check whether the file is valid Image.        var ext = fileUpload.substr((fileUpload.lastIndexOf('.') + 1));        // Check file extension        if ((ext == "jpg" || ext == "png" || ext == "jpeg") && ext != "undefined") {            var file_size = $(this)[0].files[0].size;            // Check file size            if(file_size < 2097152) {                // Initiate the FileReader object.                var reader = new FileReader();                reader.readAsDataURL(this.files[0]);                reader.onload = function (e) {                    // Initiate the JavaScript Image object.                    var image = new Image();                    image.src = e.target.result;                    image.onload = function () {                        // Determine the Height and Width.                        var height = this.height;                        var width = this.width;                        // Check height and width                        if (height > 768 || width > 1024) {                            error_msg.removeClass('val_success');                            error_msg.addClass('val_error');                            $('html,body').animate({scrollTop : form.offset().top }, 500);                            error_msg.html('<i class="fa fa-times" aria-hidden="true"></i> Height and Width must not exceed 768px and 1024px.').fadeIn(350);                            return false;                        }                        error_msg.removeClass('val_error');                        error_msg.addClass('val_success');                        clear.show();                        $('html,body').animate({scrollTop : form.offset().top }, 500);                        error_msg.html('<i class="fa fa-check" aria-hidden="true"></i> File added successfully.').fadeIn(350);                        img_prev.attr('src',image.src);                        file_name.val(fileUpload);                        return true;                      };                }            }            else {                error_msg.removeClass('val_success');                error_msg.addClass('val_error');                $('html,body').animate({scrollTop : form.offset().top }, 500);                error_msg.html('<i class="fa fa-times" aria-hidden="true"></i> File size must contain less than 2MB.').fadeIn(350);                return false;            }        }        else {            error_msg.removeClass('val_success');            error_msg.addClass('val_error');            $('html,body').animate({scrollTop : form.offset().top }, 500);            error_msg.html('<i class="fa fa-times" aria-hidden="true"></i> Invalid file only files with extension. jpg or png or jpeg are accepted.').fadeIn(350);            return false;        }    });    // Upload clear    $(document).on('click','.image-preview-clear',function()  {        var error_msg = $(this).parents('form').find('.val_status');        var preview = $(this).parents('.image-preview').siblings().find('.image_upload_profile');        $(this).hide();        $(this).parents('.image-preview').find('.image-preview-filename').val('');        $(this).parents('.image-preview').find('.image_upload_holder').val('');        preview.attr('src',preview.data('href'));        error_msg.removeClass('val_error');        error_msg.addClass('val_success');        $('html,body').animate({scrollTop : $(this).parents('form').offset().top }, 500);        error_msg.html('<i class="fa fa-check" aria-hidden="true"></i> File Removed successfully.').fadeIn(350);    });    $("#provider_editprofile").submit(function(){                     var error_msg = $(this).find('.val_status');        var error = '';        $(this).find('.form_inputs').each(function(){            var tag_name = $(this).prop("tagName").toLowerCase();            if($(this).val() == '') {                error = 1;                $(this).addClass('form-field-error');                if(tag_name == "select") {                    $(this).siblings('span').find('.select2-selection').addClass('form-field-error');                }            }            else {                $(this).removeClass('form-field-error');                if(tag_name == "select") {                    $(this).siblings('span').find('.select2-selection').removeClass('form-field-error');                }            }        });        /* Validate Checkbox */        var checkbox = [];        $(this).find('.form_checkbox').each(function () {            var cname = $(this).attr('name');            if ($.inArray(cname, checkbox) == -1) checkbox.push(cname);        });        $.each(checkbox, function (i, name) {            if ($('input[name="' + name + '"]:checked').length == 0) {                error = 1;                $('input[name="' + name + '"]').first().addClass('form-field-error');                $('input[name="' + name + '"]').first().parents('p').addClass('form-label-error');            }            else {                $('input[name="' + name + '"]').first().removeClass('form-field-error');                $('input[name="' + name + '"]').first().parents('p').removeClass('form-label-error');            }        });        if($(this).find('input,select').hasClass('form-field-error')) {            if(error == 1) {                error_msg.removeClass('val_success');                error_msg.addClass('val_error');                $('html,body').animate({scrollTop : $(this).offset().top }, 500);                error_msg.html('<i class="fa fa-times" aria-hidden="true"></i> Please Enter Valid Information! ').fadeIn(350);            }            else {                // error_msg.html('<i class="fa fa-times" aria-hidden="true"></i> <i class="fa fa-check" aria-hidden="true"></i> Please fill out all mandatory fields').fadeIn(350);                error_msg.html('').fadeOut(350);            }            return false;        }        else {        }            });});