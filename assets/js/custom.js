/*Template Name: Opportunities A Mega Job Board TemplateAuthor: ScriptsBundleVersion: 1.0Designed and Development by: ScriptsBundle====================================[ CSS TABLE CONTENT ]------------------------------------            1.0 - Pre Loader    2.0 - Counter Up    3.0 - OUR CLIENTS CAROUSEL    4.0 - TESTIMONIAL 1    5.0 - TESTIMONIAL 2    6.0 - ACCORDIAN    7.0 - FOOTER REVEAL    8.0 - SEACRH FIXED    9.0 - MENU    10.0 - SCROLL TO TOP    11.0 - FILE UPLOADER        -------------------------------------[ END CSS TABLE CONTENT ]=====================================*//*Added by thangam*//*Js functionalities for login and registration*///     $(document).ready(function() {//               var required_login = ["email", "password"];//               var required_register = ["username","email","register_password","confirm_password"];//                var reg_email=jQuery("#email");//                var test=jQuery("#test");//                var errornotice = jQuery("#error");//                //option A//             $(".provider_login_form").on('submit',function(e){//                 e.preventDefault();//                 for (var i=0;i<required_login.length;i++) {//                 var input = jQuery('#'+required_login[i]);//             if ((input.val() == "")) //                 {//                     input.addClass("error_input_field");//                     $('.error_test').css('display','block');  //                 } else {//                     input.removeClass("error_input_field");//                     $('.error_footer').css('display','none');  //                 }//             }//             if (!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(reg_email.val())) {//             reg_email.addClass("error_input_field");//             // $('.error_email').css('display','block');//                 }//                 else {//                     reg_email.removeClass("error_input_field");//                     // $('.error_email').css('display','none');//             }            //             //if any inputs on the page have the class 'error_input_field' the form will not submit//             if (jQuery(":input").hasClass("error_input_field")  ) {//                 $('.error_test').css('display','block');//                 $('.error_email').css('display','none');//                 return false;//             } //             else {//                 if(jQuery(":input").hasClass("error_input_field"))  {//                 $('.error_test').css('display','none');//                 $('.error_email').css('display','block');//                 return false;//                 }//             else {//                 errornotice.hide();//                 $('.error_test').css('display','none');//                 $('.error_email').css('display','none');//                 $(this).unbind();//                 $(this).submit();//             }//         }//             });//             $(".provider_register_form").on('submit',function(e){//                 e.preventDefault();//                 for (var i=0;i<required_register.length;i++) {//             var input = jQuery('#'+required_register[i]);//             if ((input.val() == "")) //                 {//                     input.addClass("error_input_field");//                     $('.error_test').css('display','block'); //                 } else {//                     input.removeClass("error_input_field");//                     $('.error_test').css('display','none'); //                 }//             }//             if (!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(reg_email.val())) {//             reg_email.addClass("error_input_field");//                 $('.error_email').css('display','block');//                 }//                 else {//                     reg_email.removeClass("error_input_field");//                      $('.error_email').css('display','none');//             }    //             //if any inputs on the page have the class 'error_input_field' the form will not submit//             if (jQuery(":input").hasClass("error_input_field")  ) {//                 $('.error_test').css('display','block'); //                 $('.error_email').css('display','none'); //                 return false;//             } //             else {//                 if(jQuery(":input").hasClass("error_input_field"))  {//                 $('.error_test').css('display','none');//                 $('.error_email').css('display','block');//                 return false;//                 }//             else {//                 errornotice.hide();//                 $('.error_test').css('display','none'); //                 $('.error_email').css('display','none');//                 $(this).unbind();//                 $(this).submit();//             }//         }//             });//             $("#seeker_login_form").on('submit',function(e){//                 e.preventDefault();//                 for (i=0;i<required_login.length;i++) {//             var input = jQuery('#'+required_login[i]);//             if ((input.val() == "")) //                 {//                     input.addClass("error_input_field");//                     $('.error_test').css('display','block');//                 } else {//                     input.removeClass("error_input_field");//                     $('.error_test').css('display','none');//                 }//             }//             if (!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(reg_email.val())) {//             reg_email.addClass("error_input_field");//                 $('.error_email').css('display','block');//                 }//                 else {//                     reg_email.removeClass("error_input_field");//                      $('.error_email').css('display','none');//             }    //             //if any inputs on the page have the class 'error_input_field' the form will not submit//             if (jQuery(":input").hasClass("error_input_field")  ) {//                 $('.error_test').css('display','block');//                 return false;//             } else {//                 errornotice.hide();//                 $('.error_test').css('display','none');//                 return true;//             }//             });//             $("#seeker_register_form").on('submit',function(e){//                 e.preventDefault();//                 for (var i=0;i<required_register.length;i++) {//             var input = jQuery('#'+required_register[i]);//             if ((input.val() == "")) //                 {//                     input.addClass("error_input_field");//                 } else {//                     input.removeClass("error_input_field");//                 }//             }    // if (!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(reg_email.val())) {//             reg_email.addClass("error_input_field");//             // $('.error_email').css('display','block');//                 }//                 else {//                     reg_email.removeClass("error_input_field");//                     // $('.error_email').css('display','none');//             }            //             //if any inputs on the page have the class 'error_input_field' the form will not submit//             if (jQuery(":input").hasClass("error_input_field")  ) {//                 $('.error_test').css('display','block');//                 $('.error_email').css('display','none');//                 return false;//             } //             else {//                 if(jQuery(":input").hasClass("error_input_field"))  {//                 $('.error_test').css('display','none');//                 $('.error_email').css('display','block');//                 return false;//                 }//             else {//                 errornotice.hide();//                 $('.error_test').css('display','none');//                 $('.error_email').css('display','none');//                 $(this).unbind();//                 $(this).submit();//             }//         }//     });               // });    /*ended by thangam*/(function($) {    "use strict";        /*--- PRE LOADER JS ---*/    window.onload = function() {        document.getElementById('spinner').style.display = 'none';    };    /*--- Counter Up---*/    $('.counter').counterUp({        delay: 10,        time: 2000    });    /*--- OUR CLIENTS CAROUSEL---*/        $(".clients-list").owlCarousel({        autoPlay: true,        slideSpeed: 2000,        pagination: false,        navigation: false,        loop: true,        items: 6,        itemsDesktop: [1199, 4],        itemsDesktopSmall: [980, 3],        itemsTablet: [768, 4],        itemsTabletSmall: false,        itemsMobile: [479, 2],    });    /*--- TESTIMONIAL 1---*/        $("#owl-testimonial").owlCarousel({        navigation: false, // Show next and prev buttons        slideSpeed: 600,        paginationSpeed: 700,        autoPlay: 5000,        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],        pagination: false,        responsive: true,        loop: true,        // "singleItem:true" is a shortcut for:        items: 2    });/*--- TESTIMONIAL 2---*/    $(".owl-testimonial-2").owlCarousel({        autoPlay: true,        slideSpeed: 2000,        pagination: false,        navigation: false,        loop: true,        items: 3,        itemsDesktop: [1199, 3],        itemsDesktopSmall: [980, 2],        itemsTablet: [768, 2],        itemsTabletSmall: false,        itemsMobile: [479, 1]    });    /*--- ACCORDIAN---*/    $('.panel-heading').click(function(e) {        $('.panel-heading').removeClass('tab-collapsed');        var collapsCrnt = $(this).find('.collapse-controle').attr('aria-expanded');        if (collapsCrnt != 'true') {            $(this).addClass('tab-collapsed');        }    });    /*--- FOOTER REVEAL---*/        // $('.fixed-footer').footerReveal({        // shadow: false,        // zIndex: -101    // });    /*--- SEACRH FIXED---*/        $(window).scroll(function() {        var scrollTop = $(window).scrollTop();        if (scrollTop > 300) {            $(".search").addClass("navbar-fixed-top");        } else if (scrollTop < 300) {            $(".search").removeClass("navbar-fixed-top");        }    });    $(".questions-category").select2({        placeholder: "Select Post Category",        allowClear: true,        maximumSelectionLength: 3,    });    $(".select-category ").select2({        placeholder: "Select Job Category",        allowClear: true,        maximumSelectionLength: 3,    });    $(".select-location ").select2({        placeholder: "Select Job Location",        allowClear: true,        maximumSelectionLength: 3,    });    $(".select-resume").select2({        placeholder: "Select Job Resume",        allowClear: true,    });    /*--- MENU---*/        $('.mega-menu').megaMenu({        // MOBILE MODE SETTINGS         mobile_settings: {            collapse: true,            sibling: true,            scrollBar: true,            scrollBar_height: 400,            top_fixed: true,            sticky_header: true,            sticky_header_height: 200        }    });    /*--- SCROLL TO TOP---*/        $(document).ready(function() {        $(window).scroll(function() {            if ($(this).scrollTop() > 100) {                $('.scrollup').fadeIn();            } else {                $('.scrollup').fadeOut();            }        });        $('.scrollup').click(function() {            $("html, body").animate({                scrollTop: 0            }, 600);            return false;        });    });    /*--- FILE UPLOADER---*/    /*added by thangam(dont remove the code)*/            $('.image-preview-clear').click(function() {        $('.image-preview-filename').val("");        $('.image-preview-clear').hide();        $('#image_upload_profile_preview').hide();        $('.image-preview-input input:file').val("");        $(".image-preview-input-title").text("Browse");    });        $('.image-preview-clear-your-image').click(function() {        $('.image-preview-filename-your-image').val("");        $('.image-preview-clear-your-image').hide();        $('#image_upload_your_image_preview').hide();        $('.image-preview-input input:yourfile').val("");        $(".image-preview-input-title").text("Browse");    });    // Create the preview image    $(".image-preview-input input:file").change(function() {        var file = this.files[0];        var parentss = $(this).parents('.image-preview');        var reader = new FileReader();        // Set preview image into the popover data-content        reader.onload = function(e) {            organizationlogo(e.target.result,file.name);        };        reader.readAsDataURL(file);        function organizationlogo(src,filename){        	parentss.find(".image-preview-input-title").text("Change");            parentss.find(".image-preview-clear").show();            parentss.find(".image-preview-filename").val(filename);        }            });    $(".image-preview-input input:file").change(function() {        var file = this.files[0];        var parentss = $(this).parents('.image-preview');        var reader = new FileReader();        // Set preview image into the popover data-content        reader.onload = function(e) {            organizationlogo(e.target.result,file.name);        };        reader.readAsDataURL(file);        function organizationlogo(src,filename){            parentss.find(".image-preview-input-title").text("Change");            parentss.find(".image-preview-clear-your-image").show();            parentss.find(".image-preview-filename-your-image").val(filename);        }            });    /*Ended by thangam(dont remove the code)*/     })(jQuery); //end of document.ready function//Job Provider and Job seeker Dashboard Popup $(window).load(function(){     $('#dashboard_popup_act').modal({backdrop: 'static', keyboard: false}) ;    $('#dashboard_popup_act').modal('show');    });       $(document).ready(function() {        // DATE-PICKER    $('input.datepicker').Zebra_DatePicker();    //$('.pickdate_act').Zebra_DatePicker();    $('.provider_open_date').Zebra_DatePicker({    	direction: true,        format: 'd/m/Y',        show_icon: true,        pair: $('.provider_close_date'),        onClose: function() {        	 $('.provider_close_date').val('').click();        }    });     $('.provider_close_date').Zebra_DatePicker({    	direction: true,        format: 'd/m/Y',    });    $('.provider_start_date').Zebra_DatePicker({    	direction: true,        format: 'd/m/Y',        show_icon: true,        pair: $('.provider_end_date'),        onClose: function() {        	 $('.provider_end_date').val('').click();        }    });     $('.provider_end_date').Zebra_DatePicker({    	direction: true,        format: 'd/m/Y',    });                  // Display Subscription option based on Plan Select for Company Dashboard        $("select").change(function(){        $(this).find("option:selected").each(function(){            if($(this).attr("value") == "basic"){                 $(".subplan_act").not(".basic").hide();                $("#basic_plan_act").show();            }            else if ($(this).attr("value") == "premium"){                 $(".subplan_act").not(".premium").hide();                $("#premium_plan_act").show();            }            else if ($(this).attr("value") == "standard"){                 $(".subplan_act").not(".standard").hide();                $("#standard_plan_act").show();            }            else {                $(".subplan_act").hide();            }        });                  }).change();      });       //Normal & Advanced Search for JobProvider Dashboard  $('#btn_advanced_act').click(function() {    $('#normalsearch_act').hide();    $('#advancedsearch_act').show();  });           $('#btn_normal_act').click(function() {    $('#advancedsearch_act').hide();    $('#normalsearch_act').show();  });    /*---Addes by Thangam---*//*File uploader with validation for Edit profile*/$(document).ready(function() {    function readURL(input) {        if (input.files && input.files[0]) {            var reader = new FileReader();            reader.onload = function (e) {                $('#image_upload_profile_preview').attr('src', e.target.result);            }            reader.readAsDataURL(input.files[0]);        }        if (input.files && input.files[0]) {            var reader = new FileReader();            reader.onload = function (e) {                $('#image_upload_your_image_preview').attr('src', e.target.result);            }            reader.readAsDataURL(input.files[0]);        }    }        $("#file").change(function () {                readURL(this);                    $('#image_upload_profile_preview').show();        });        $("#yourfile").change(function () {                readURL(this);                    $('#image_upload_your_image_preview').show();        });            var orig_src = $('#image_upload_profile_preview').prop('src');          $('#image_upload_profile_preview').click(function () {                $('#file').replaceWith($('#file').clone(true));                  $('#image_upload_profile_preview').not('.selected').hide();                $('#image_upload_profile_preview.selected').prop('src', orig_src).removeClass('selected');            });          var orignal_src = $('#image_upload_your_image_preview').prop('src');          $('#image_upload_your_image_preview').click(function () {                $('#yourfile').replaceWith($('#yourfile').clone(true));                  $('#image_upload_your_image_preview').not('.selected').hide();                $('#image_upload_your_image_preview.selected').prop('src', orignal_src).removeClass('selected');            });          var required_fields = ["instituition_name","address","add_district","register_password","postal-code","first_name","designation_profile","profile_image","logo_image","dob"];          var required_postjob = ["job_title","location","no_of_vacancy","open_date","end_date","qualification","radio_ug","radio_pg","class_level","university","institution","medium_of_instruction","accomadation","int_start_date","int_end_date"];          var required_popup = ["mobile","password","cfpassword"];          var required_select_option = ["sel_a","sel_b","sel_c","sel_d","sel_e",];          var feedback = ["subject","feedbck"];          var required_forget = ["forget_email"];          forget_email=jQuery("#forget_email");           // var reg_email=jQuery("#email");           // var test=jQuery("#test");           var errornotice = jQuery("#error");        $('#instituition_name,#designation_profile,#first_name').keydown(function (e) {          if (e.ctrlKey || e.altKey) {              e.preventDefault();          } else {              var key = e.keyCode;              if (!((key == 8) || (key == 32) || (key == 46) || (key == 9) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {                  e.preventDefault();              }          }       });           //option A           jQuery("#form-school").submit(function(){                         for (var i=0;i<required_fields.length;i++) {            var input = jQuery('#'+required_fields[i]);        if ((input.val() == ""))             {                input.addClass("error_input_field");                $('.error_test').css('display','block');                  $('.error_image,.error_extension').css('display','none');            } else {                input.removeClass("error_input_field");                $('.error_test').css('display','none');              }        }                //  select field         for (var i=0;i<required_select_option.length;i++) {            var input = jQuery('#'+required_select_option[i]);        if ((input.val() == ""))             {                input.addClass("error_input_field");                $('.error_test').css('display','block');              } else {                input.removeClass("error_input_field");                $('.error_test').css('display','none');              }        }                    //if any inputs on the page have the class 'error_input_field' the form will not submit        if (jQuery(":input").hasClass("error_input_field")  ) {            $('.error_test').css('display','block');            return false;        } else if (jQuery("#profile_image").hasClass("error_input_field")){            return false;        }        else {            errornotice.hide();            $('.error_test').css('display','none');            $(this).unbind();            $(this).submit();            }        });        /*End of File uploader with validation for Edit profile*/        /*Post job validation*/     $('#job_title,#accomadation,#location,#qualification,#university,#institution,medium_of_instruction').keydown(function (e) {          if (e.ctrlKey || e.altKey) {              e.preventDefault();          } else {              var key = e.keyCode;              if (!((key == 8) || (key == 32) || (key == 46) || (key == 9) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {                  e.preventDefault();              }          }      });            $("#no_of_vacancy").keypress(function (e) {             //if the letter is not digit then display error and don't type anything             if (e.which != 8 && e.which !=46 &&  e.which != 0 && (e.which < 48 || e.which > 57)) {                //display error message                       return false;                 }            });            $(document).ready(function () {           //called when key is pressed in textbox          $('#mobile').keypress(function (e) {             //if the letter is not digit then display error and don't type anything             if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {                //display error message                // $("#error_test").html("Digits Only").show().fadeOut("slow");                return false;            }           });        });            $("#post_job_form").on('submit',function(e){                e.preventDefault();                for (var i=0;i<required_postjob.length;i++) {                var input = jQuery('#'+required_postjob[i]);            if ((input.val() == ""))                 {                    input.addClass("error_input_field");                    $('.error_test').css('display','block');                  } else {                    input.removeClass("error_input_field");                    $('.error_footer').css('display','none');                  }            }                for (var i=0;i<required_select_option.length;i++) {                var input = jQuery('#'+required_select_option[i]);            if ((input.val() == ""))                 {                    input.addClass("error_input_field");                    $('.error_test').css('display','block');                  } else {                    input.removeClass("error_input_field");                    $('.error_test').css('display','none');                  }            }                  //if any inputs on the page have the class 'error_input_field' the form will not submit            if (jQuery(":input").hasClass("error_input_field")  ) {                $('.error_test').css('display','block');                return false;            }             else {                errornotice.hide();                $('.error_test').css('display','none');                $(this).unbind();                $(this).submit();            }        });            /*End of Post job validation*/           /*Popup validation for company dashboard*/        $("#company_dashboard_form").on('submit',function(e){                e.preventDefault();                for (var i=0;i<required_popup.length;i++) {                var input = jQuery('#'+required_popup[i]);            if ((input.val() == ""))                 {                    input.addClass("error_input_field");                    $('.error_test').css('display','block');                  } else {                    input.removeClass("error_input_field");                    $('.error_test').css('display','none');                  }            }                        var phoneNo = document.getElementById('mobile');            if (phoneNo.value == "" || phoneNo.value == null) {                    $('#mobile').addClass("error_input_field_mobile");                    $('.error_mobile').css('display','block');                }                if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {                    $('#mobile').addClass("error_input_field_mobile");                    $('.error_mobile').css('display','block');                }                else{                    $('#mobile').removeClass("error_input_field_mobile");                    $('.error_mobile').css('display','none');                }                if ($("#password").val() != $("#cfpassword").val()) {                  alert("Passwords do not match.");              }            //if any inputs on the page have the class 'error_input_field' the form will not submit            if (jQuery(":input").hasClass("error_input_field")  ) {                $('.error_test').css('display','block');                $('.error_mobile').css('display','none');                return false;            } else {            if(jQuery(":input").hasClass("error_input_field_mobile"))  {                $('.error_test').css('display','none');                $('.error_mobile').css('display','block');                return false;            }            else {                errornotice.hide();                $('.error_test').css('display','none');                $('.error_mobile').css('display','none');                $(this).unbind();                $(this).submit();            }        }        });        /*End of Popup validation for company dashboard*/        /*Job seeker feedback*/        $("#provider_feedback_form").on('submit',function(e){                e.preventDefault();                for (var i=0;i<feedback.length;i++) {                var input = jQuery('#'+feedback[i]);            if ((input.val() == ""))                 {                    input.addClass("error_input_field");                    $('.error_test').css('display','block');                  } else {                    input.removeClass("error_input_field");                    $('.error_test').css('display','none');                  }            }                 if($("#feedbck").val().trim().length < 1)            {                alert("Please Enter Your feedback...");                return;             }                 //if any inputs on the page have the class 'error_input_field' the form will not submit            if (jQuery(":input").hasClass("error_input_field")  ) {                $('.error_test').css('display','block');                return false;            }            else {                errornotice.hide();                $('.error_test').css('display','none');                $(this).unbind();                $(this).submit();            }        });        /*job seeker feedback*/        /*Provider forgot password*/    //     jQuery("#forgotpass-form").submit(function(){    //     var input = jQuery('#'+required_forget);    //     if ((input.val() == ""))     //     {    //         input.addClass("error_input_field");    //     } else {    //         input.removeClass("error_input_field");    //     }    //     // Validate the e-mail.    //     if (!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(forget_email.val())) {    //         forget_email.addClass("error_input_field");    //         $('.error_test').css('display','block');    //     }    //     else {    //         forget_email.removeClass("error_input_field");    //         $('.error_test').css('display','none');    //     }    //     //if any inputs on the page have the class 'error_input_field' the form will not submit    //     if (jQuery(":input").hasClass("error_input_field") ) {    //         return false;    //     } else {    //         errornotice.hide();    //         return true;    //     }    // });        /*Provider forgot password*/    /* added by muthu */       });         /*---Ended by Thangam---*/ 
function provider_inbox_ajax_message_count(url,id,csrf){	    var messagecount = $.ajax({	        type: "POST",	        url: url+"provider/inbox/messagecount",	        data : { orgid : id , csrf_token : csrf},	        async: false	    }).complete(function(){	        setTimeout(function(){provider_inbox_ajax_message_count(url,id,csrf);}, 10000);	    }).responseText;	    $('.provider_message_count .button__badge').text(messagecount);}