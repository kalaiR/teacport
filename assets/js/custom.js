function provider_inbox_ajax_message_count(url,id,csrf){    var messagecount = $.ajax({        type: "POST",        url: url+"provider/inbox/messagecount",        data : { orgid : id , csrf_token : csrf},        async: false    }).complete(function(){        setTimeout(function(){provider_inbox_ajax_message_count(url,id,csrf);}, 10000);    }).responseText;    $('.provider_message_count .button__badge').text(messagecount);}  // Seeker inbox countfunction seeker_inbox_ajax_message_count(url,id,csrf){    var messagecount = $.ajax({        type: "POST",        url: url+"seeker/inbox/messagecount",        data : { cand_id : id , csrf_token : csrf},        async: false    }).complete(function(){        setTimeout(function(){seeker_inbox_ajax_message_count(url,id,csrf);}, 10000);    }).responseText;    $('.seeker_message_count .button__badge').text(messagecount);}function matchStart (term, text) {			  if (text.toUpperCase().indexOf(term.toUpperCase()) == 0) {			    return true;			  }						  return false;			}						$.fn.select2.amd.require(['select2/compat/matcher'], function (oldMatcher) {			  $(".select-location").select2({			    matcher: oldMatcher(matchStart),			    placeholder: "Select Job Location",			    allowClear: true,			  });			});$(window).load(function(){ 	$('#dashboard_popup_act').modal({backdrop: 'static', keyboard: false}) ; 	$('#dashboard_popup_act').modal('show');}); $(document).ready(function() {    "use strict";        /*--- PRE LOADER JS ---*/    window.onload = function() {        // document.getElementById('spinner').style.display = 'none';        $('#spinner').css({'display':'none'});    };    /*--- ACCORDIAN---*/    // Modeified by siva    $('.panel-heading').click(function(e) {        var parent = $(this).parents('.panel-default');        $('.panel-heading').removeClass('tab-collapsed');        var collapsCrnt = $(this).find('.collapse-controle').attr('aria-expanded');        if (collapsCrnt != 'true') {            $(this).addClass('tab-collapsed');        }        if(!$(this).next('.panel-collapse').hasClass('in')) {            setTimeout(function() {                 $('html,body').animate( { scrollTop : parent.offset().top }, 500 );             },500);        }    });// $('#accordion').on('shown.bs.collapse', function () {//   var panel = $(this).find('.in');//   $('html, body').animate({//         scrollTop: panel.offset().top//   }, 500);// });	/*--- SEACRH FIXED---*/    $(window).scroll(function() {        var scrollTop = $(window).scrollTop();        if (scrollTop > 300) {            $(".search").addClass("navbar-fixed-top");        } else if (scrollTop < 300) {            $(".search").removeClass("navbar-fixed-top");        }    });    $(".select-category ").select2({        placeholder: "Select Job Category",        allowClear: true,        minimumResultsForSearch: Infinity            });    $(".select-experience").select2({        placeholder: "Select Experience",        allowClear: true,            });    $(".select-resume").select2({        placeholder: "Select Job Resume",        allowClear: true,        minimumResultsForSearch: Infinity    });    $(".select-classlevel").select2({        placeholder: "Select Class Level",        allowClear: true,        minimumResultsForSearch: Infinity    });    $(".select-qualification").select2({        placeholder: "Select Qualification",        allowClear: true,        minimumResultsForSearch: Infinity    });    $(".select-department").select2({        placeholder: "Select Department",        allowClear: true,        minimumResultsForSearch: Infinity    });	$(".select-subject").select2({        placeholder: "Select Subject",        allowClear: true,        minimumResultsForSearch: Infinity    });    $(".select-experience").select2({        placeholder: "Select Experience",        allowClear: true,        minimumResultsForSearch: Infinity    });    $(".select-medium").select2({        placeholder: "Select Medium",        allowClear: true,        minimumResultsForSearch: Infinity    });    $(".select-institution").select2({        placeholder: "Select Institution",        allowClear: true,        minimumResultsForSearch: Infinity    });    $(".select-nationality").select2({        placeholder: "Nationality",        allowClear: true,        minimumResultsForSearch: Infinity    });    $(".select-religion").select2({        placeholder: "Select Religion",        allowClear: true,        minimumResultsForSearch: Infinity    });    $(".select-plan").select2({        placeholder: "Select Package",        allowClear: true,        minimumResultsForSearch: Infinity    });    $(".select-mothertongue").select2({        placeholder: "MotherTongue",        allowClear: true,    });    $(".select-community").select2({        placeholder: "Community",        allowClear: true,        minimumResultsForSearch: Infinity    });    $(".select-minsalary").select2({        placeholder: "Salary Minimum",        allowClear: true,        minimumResultsForSearch: Infinity    });    $(".select-maxsalary").select2({        placeholder: "Salary Maximum",        allowClear: true,        minimumResultsForSearch: Infinity    });    $(".select-tet").select2({        placeholder: "TET",        allowClear: true,        minimumResultsForSearch: Infinity    });    $(".select-jobtype").select2({        placeholder: "JobType",        allowClear: true,        minimumResultsForSearch: Infinity    });    $(".select-tags").select2({        placeholder: "Tags",        allowClear: true,        minimumResultsForSearch: Infinity    });    $(".select-university").select2({        placeholder: "University",        allowClear: true,        minimumResultsForSearch: Infinity    });    $(".select-plan").select2({        placeholder: "Select Plan",        allowClear: true,        minimumResultsForSearch: Infinity    });    $(".select-posting").select2({        placeholder: "Select Job Category",        allowClear: true,        minimumResultsForSearch: Infinity    });    $(".select-known-languages").select2({        placeholder: "Select Known Languages",        allowClear: true,        minimumResultsForSearch: Infinity    });    $(".select-postings").select2({        placeholder: "Select Postings",        allowClear: true,        minimumResultsForSearch: Infinity    });    $(".select-subjects").select2({        placeholder: "Select Subjects",        allowClear: true,        minimumResultsForSearch: Infinity    });    $(".select-extracurricular").select2({        placeholder: "Select Extra Curricular",        allowClear: true,        minimumResultsForSearch: Infinity    });    $(".select-tetexam").select2({        placeholder: "TET Status",        allowClear: true,        minimumResultsForSearch: Infinity    });    $(".select-state").select2({        placeholder: "Select State",        allowClear: true,        minimumResultsForSearch: Infinity            });    $(".select-district").select2({        placeholder: "Select District",        allowClear: true,        minimumResultsForSearch: Infinity            });     $(".select-jobtype").select2({        placeholder: "Select Job Type",        allowClear: true,        minimumResultsForSearch: Infinity            });        /*--- MENU---*/        $('.mega-menu').megaMenu({        // MOBILE MODE SETTINGS         mobile_settings: {            collapse: true,            sibling: true,            scrollBar: true,            scrollBar_height: 400,            top_fixed: true,            sticky_header: true,            sticky_header_height: 200        }    });    /*--- SCROLL TO TOP---*/    $(window).scroll(function() {        if ($(this).scrollTop() > 100) {            $('.scrollup').fadeIn();        } else {            $('.scrollup').fadeOut();        }    });    $('.scrollup').click(function() {        $("html, body").animate({            scrollTop: 0        }, 600);        return false;    });        //Home Page search Bar 	$(".search-close").on("click", function() {		$(".set-srch-strip").hide();	  	$("#search-icon").show();	});    	  	$('#search-icon a').on("click", function() {		$('.set-srch-strip').show();	  	$("#search-icon").hide();	});   	   	//Provider Signin & SignUp	$(".loginbox-signup a").on("click", function() {	  	$("#provider-signin").hide();	  	$("#provider-forgotpwd").hide();	  	$("#provider-signup").show();	});		$(".loginbox-signin a").on("click", function() {		$("#provider-signup").hide();	  	$("#provider-forgotpwd").hide();	  	$("#provider-signin").show();	}); 	  	$(".propwd-forgot a").on("click", function(){	 	$("#provider-signin").hide();	  	$("#provider-signup").hide();	  	$("#provider-forgotpwd").show();	  		});		//Seeker Signin & SignUp	$(".loginbox-signup a").on("click", function() {	  	$("#seeker-signin").hide();	  	$("#seeker-forgotpwd").hide();	  	$("#seeker-signup").show();	});		$(".loginbox-signin a").on("click", function() {	  	$("#seeker-signup").hide();	  	$("#seeker-forgotpwd").hide();	    $("#seeker-signin").show();	});		$(".seekerpwd-forgot a").on("click", function(){	  	$("#seeker-signup").hide();	  	$("#seeker-signin").hide();	  	$("#seeker-forgotpwd").show();	});	    //Advanced & Normal Search    $('#btn_advanced_act').click(function() {	  	$('#normalsearch_act').hide();	  	$('#advancedsearch_act').show();	});	  	$('#btn_normal_act').click(function() {	  	$('#advancedsearch_act').hide();	  	$('#normalsearch_act').show();	});		var required_fields = ["instituition_name","address","add_district","register_password","postal-code","first_name","designation_profile","profile_image","logo_image","dob"];	var required_postjob = ["job_title","location","no_of_vacancy","open_date","end_date","qualification","radio_ug","radio_pg","class_level","university","institution","medium_of_instruction","accomadation","int_start_date","int_end_date"];	var required_popup = ["mobile","password","cfpassword"];	var required_select_option = ["sel_a","sel_b","sel_c","sel_d","sel_e",];	var feedback = ["subject","feedbck"];	var required_forget = ["forget_email"];	var forget_email=jQuery("#forget_email");	var errornotice = jQuery("#error");	$('#instituition_name,#designation_profile,#first_name').keydown(function (e) {		if (e.ctrlKey || e.altKey) {	    	e.preventDefault();	    }	    else {	    	var key = e.keyCode;	        if (!((key == 8) || (key == 32) || (key == 46) || (key == 9) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {	        	e.preventDefault();	        }	    }	});   	$("#company_dashboard_form").on('submit',function(e){		e.preventDefault();        for (var i=0;i<required_popup.length;i++) {        	var input = jQuery('#'+required_popup[i]);            if ((input.val() == "")) {                	input.addClass("error_input_field");                    $('.error_test').css('display','block');              }            else {                    input.removeClass("error_input_field");                    $('.error_test').css('display','none');              }		}                   // var phoneNo = document.getElementById('mobile');        var phoneNo = $('#mobile');    	if (phoneNo.value == "" || phoneNo.value == null) {        	$('#mobile').addClass("error_input_field_mobile");            $('.error_mobile').css('display','block');        }        if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {        	$('#mobile').addClass("error_input_field_mobile");            $('.error_mobile').css('display','block');       	}        else{        	$('#mobile').removeClass("error_input_field_mobile");            $('.error_mobile').css('display','none');        }        if ($("#password").val() != $("#cfpassword").val()) {        	alert("Passwords do not match.");        }        //if any inputs on the page have the class 'error_input_field' the form will not submit        if (jQuery(":input").hasClass("error_input_field")  ) {            $('.error_test').css('display','block');            $('.error_mobile').css('display','none');            return false;        }         else {            if(jQuery(":input").hasClass("error_input_field_mobile"))  {                $('.error_test').css('display','none');                $('.error_mobile').css('display','block');                return false;            }            else {                errornotice.hide();                $('.error_test').css('display','none');                $('.error_mobile').css('display','none');                $(this).unbind();                $(this).submit();            }    	}    });        $('#job_title,#accomadation,#location,#qualification,#university,#institution,medium_of_instruction').keydown(function (e) {    	if (e.ctrlKey || e.altKey) {        	e.preventDefault();        }         else {        	var key = e.keyCode;            if (!((key == 8) || (key == 32) || (key == 46) || (key == 9) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {            	e.preventDefault();            }        }    });          $("#no_of_vacancy,#minimum_salary_vacancy,#maximum_salary_vacancy").keypress(function (e) {	    //if the letter is not digit then display error and don't type anything	    if (e.which != 8 && e.which !=46 &&  e.which != 0 && (e.which < 48 || e.which > 57)) {	    	//display error message	        return false;	    }    });        $('.preview_post_ad_image').on('click',function(){		$('.postad_preview').slideToggle();   	});   	   	$('#mobile').keypress(function (e) {		if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {	    // $("#error_test").html("Digits Only").show().fadeOut("slow");	    	return false;	    }	});     	$('#subpack_act').on('change',function(){        var planname = $('option:selected',this).attr('data-name');        var planamount = parseInt($('option:selected',this).attr('data-amount')); 		var planid = $(this).val(); 		$('.subscription_plan').hide(); 		$('.subscription_plan_description #'+planname).slideDown();		$('#payu_amount').val(planamount);		$('#payu_plan').val(planname);		$('#payu_planid').val(planid); 	}); 	 	$('#accept_terms').click(function() {        if ($('#accept_terms').is(':checked')) {        } else {            alert('please check terms & conditions');        }    });    	//Seeker Dashboard - Clone Professional Details - OtherJobs	var cloneValue = $(".other_jobs").length;	    function add(){			$(this).parents(".other_jobs").clone()		        .appendTo(".add_otherjobs")		        .attr("id", "otherjobs_act " +  cloneValue)		        .find("*","input") 		        .val("")		              .on('click', 'button.add', add)		        .on('click', 'button.remov', remov);		    cloneValue++;		}		function remov(){		    $(this).parents(".other_jobs").remove();		}		$("button.add").on("click", add);				$("button.remov").on("click", remov); 			// Seeker - Normal & Advanced Search	$("#advanced_srch_act a").on("click", function() {	  	$('#candidate_nos_act').hide();	  	$('#candidate_ads_act').show();	  });      	$("#normal_srch_act a").on("click", function() {	  	$('#candidate_ads_act').hide();	  	$('#candidate_nos_act').show();	}); 	    //Provider dashboard SideMenu	$(".provider-jobs").click(function(){        $(".submenu").slideToggle("slow");    });	    $(window).load(function(){    	$(".submenu").slideUp();    });      $("#post_select_act").change(function() {    if ($("option:selected", this).val() == "others")        $(this).attr("disabled", true);    if (this.value=='others'){this.form['others'].style.visibility='visible'}else {this.form['other'].style.visibility='hidden'}    })    //Seeker Dashboard - Clone fields for Candidate field     var education_cloneindex = $(".education_clone").length;    var experience_cloneindex = $(".experience_clone").length;    // Education Clone    function education_clone() {        var current_id = "edu_clone_section" +  education_cloneindex;        $(this).parents(".clone_all_fields").find(".education_clone:last").clone()        .attr("id", current_id).insertAfter('.education_clone:last')        .on('click', 'a.edu_clone', education_clone)        .on('click', 'a.edu_remove', education_remove);        education_cloneindex++;        // $('#'+current_id).find('.edit_inputs').val("");        $('#'+current_id).find('input,select').val("");        $('#'+current_id).find('input,select').removeClass('form-field-error');              $(this).addClass('dn');     }    // Education Remove    function education_remove(){        var clone_length = $(".education_clone").length;        var this_parent = $(this).parents(".clone_all_fields");        if(clone_length > 1) {            $(this).parents(".education_clone").remove();        }        else {            alert("Dont Remove it");        }        var id = this_parent.find(".clone_section:last").attr("id");        $('.edu_clone').addClass('dn');        $('#'+id).find('.edu_clone').removeClass('dn');    }    $("a.edu_clone").on("click", education_clone);    $("a.edu_remove").on("click", education_remove);       // Experience Clone    function experience_clone() {        var current_id = "exp_clone_section" +  experience_cloneindex;           $(this).parents(".clone_all_fields").find(".experience_clone:last").clone().insertAfter('.experience_clone:last')        .attr("id", current_id)        .on('click', 'a.exp_clone', experience_clone)        .on('click', 'a.exp_remove', experience_remove);        experience_cloneindex++;        // $('#'+current_id).find('.edit_inputs').val("");        $('#'+current_id).find('input,select').val("");        $('#'+current_id).find('input,select').removeClass('form-field-error');              $(this).addClass('dn');     }    // Experience Remove    function experience_remove(){        var clone_length = $(".experience_clone").length;            var this_parent = $(this).parents(".clone_all_fields");        if(clone_length > 1) {            $(this).parents(".experience_clone").remove();        }        else {            alert("Dont Remove it");        }        var id = this_parent.find(".clone_section:last").attr("id");        $('.exp_clone').addClass('dn');        $('#'+id).find('.exp_clone').removeClass('dn');    }    $("a.exp_clone").on("click", experience_clone);    $("a.exp_remove").on("click", experience_remove);        // Education Remove    function education_clone(){        var clone_length = $(".education_clone").length;        if(clone_length > 1) {            $(this).parents(".education_clone").remove();        }        else {            alert("Please Fill all fields");        }        var id = this_parent.find(".clone_section:last").attr("id");        $('.edu_clone').addClass('dn');        $('#'+id).find('.edu_clone').removeClass('dn');    }            // remove error message when form swapping (registration form, login form and forgot password for both kind of user)    $('.remove_error_message_act').on('click',function(){    	$('*').find('.error').remove();    	$('*').find('.registration_server_msg').remove();    });           // remove disabled attribute in jobprovider when no result and change search creteria		    	$('#company-browse-candidate select').on('change',function(){			 	$(this).parents('form').find('button').removeAttr('disabled');			});		$('.user_login_category').on('change',function(){		if(this.checked == true){			$('.social_login_links_home').removeClass('custom_disabled');			$('.extra_login_menu_submit').removeClass('custom_disabled');			if($(this).val() == 'provider'){				$('.extra_login_menu form').removeAttr('action').attr('action',baseurl+'login/provider');				$('.extra_login_menu_user_name').removeAttr('name').attr('name','registrant_email_id');				$('.extra_login_menu_password').removeAttr('name').attr('name','registrant_password');				$('.social_login_home_facebook').removeAttr('href').attr('href',baseurl+'login/facebook');				$('.social_login_home_twitter').removeAttr('href').attr('href',baseurl+'login/twitter');				$('.social_login_home_google').removeAttr('href').attr('href',baseurl+'login/google');				$('.social_login_home_linkedin').removeAttr('href').attr('href',baseurl+'login/linkedin');			}			else if($(this).val() == 'seeker'){				$('.extra_login_menu form').removeAttr('action').attr('action',baseurl+'login/seeker');				$('.extra_login_menu_user_name').removeAttr('name').attr('name','candidate_email');				$('.extra_login_menu_password').removeAttr('name').attr('name','candidate_password');				$('.social_login_home_facebook').removeAttr('href').attr('href',baseurl+'login/seeker/facebook');				$('.social_login_home_twitter').removeAttr('href').attr('href',baseurl+'login/seeker/twitter');				$('.social_login_home_google').removeAttr('href').attr('href',baseurl+'login/seeker/google');				$('.social_login_home_linkedin').removeAttr('href').attr('href',baseurl+'login/seeker/linkedin');			}		}	});		/* Added by Akila */	// Initialize tooltip    $('[data-toggle="tooltip"]').tooltip({        // placement : 'top'        template : '<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-head"><h3><span class="glyphicon glyphicon-info-sign"></span></h3></div><div class="tooltip-inner"></div></div>'    });    $('.institution_new_jobs').tooltip ({    	placement : 'bottom'    });       $('body').on('click', function(e) {        $('.subs_list_act').each(function() {            // hide any open popovers when the anywhere else in the body is clicked            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {                $(this).popover('hide');            }        });    });    $('[data-toggle="subs_tooltip"]').tooltip();    $("span.subs_edit").css("display", "none");    $('li').on('mouseover mouseout', function() {        $(this).find('.subs_edit').toggle();    });    // Upgrade plan Functionalities	 $('[data-toggle="tooltip1"]').tooltip({        // placement : 'top'        template : '<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-head"><h3><span class="glyphicon glyphicon-envelope"></span></h3></div><div class="tooltip-inner"></div></div>'    });     $('[data-toggle="tooltip2"]').tooltip({        // placement : 'top'        template : '<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-head"><h3><span class="glyphicon glyphicon-share-alt"></span></h3></div><div class="tooltip-inner"></div></div>'    });     $('[data-toggle="tooltip3"]').tooltip({        // placement : 'top'        template : '<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-head"><h3><span class="glyphicon glyphicon-cloud-download"></span></h3></div><div class="tooltip-inner"></div></div>'    });        $("#subs_list_upg_sms").popover({        title: '<h4>Update Plan Subscription</h4>',        container: 'body',        placement: 'right',        html: true,        content: function() {            return $('.popover_form_upg_sms').html();        }    });    $('[data-toggle="sms_tooltip"]').tooltip({        // placement : 'top'        template : '<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-head"><h3><span class="glyphicon glyphicon-comment"></span></h3></div><div class="tooltip-inner"></div></div>'    });          $('[data-toggle="email_tooltip"]').tooltip({        // placement : 'top'        template : '<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-head"><h3><span class="glyphicon glyphicon-envelope"></span></h3></div><div class="tooltip-inner"></div></div>'    });     $('[data-toggle="resume_tooltip"]').tooltip({        // placement : 'top'        template : '<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-head"><h3><span class="glyphicon glyphicon-cloud-download"></span></h3></div><div class="tooltip-inner"></div></div>'    });    var total_price = 0;    var total_sms_price =0;    var total_email_price = 0;    var total_resume_price = 0;    var price= $("#cost_per_sms").text();    var email= $("#cost_per_email").text();    var resume= $("#cost_per_resume").text();            $(document).on('click', '.popover_upg_sms_save', function() {        var popover_input_value = $(this).parents('form').find('.popover_value_upg_sms').val();        $('.subs_input_val_upgact1').show();        $('.subs_reset').show();        $('.sms_block').show();        $('.sms_block i').show();                $('.subs_input_val_upgact2').show();        $('.subs_input_val_upgact3').show();        $('.subs_input_val_upgact1').val(popover_input_value);        total_sms_price = popover_input_value;               var sms_price = price * popover_input_value;        var sms_total =  sms_price + total_price;        //alert(total_price);               total_price = sms_total;               $('#upgrade_total_price').text(sms_total);        });              	 $('#sms_icon').click(function(){        	 	var temp = total_sms_price * price;       	 	 			$('.sms_block').hide(); 			$('.subs_input_val_upgact1').hide(); 			var sms_minus = total_price - temp; 			//alert(sms_minus);  			$('#upgrade_total_price').text(sms_minus);  			total_price = sms_minus;  			});	        	    $("#subs_list_upg_email").popover({	        title: '<h4>Update Plan Subscription</h4>',	        container: 'body',	        placement: 'right',	        html: true,	        content: function() {	            return $('.popover_form_upg_email').html();	        }	    });        $(document).on('click', '.popover_upg_email_save', function() {        var popover_input_value = $(this).parents('form').find('.popover_value_upg_email').val();       		$('.email_block').show();        $('.email_block i').show();        $('.subs_input_val_upgact1').show();        $('.subs_input_val_upgact2').show();        $('.subs_reset').show();        $('.subs_input_val_upgact3').show();        $('.subs_input_val_upgact2').val(popover_input_value);               total_email_price = popover_input_value;        var email1 = email * popover_input_value;        var total_email = email1 + total_price;        total_price = total_email;                //alert(total_price);        $('#upgrade_total_price').text(total_email);           });                    $('#email_icon').click(function(){        	 	var temp = total_email_price * email;       	 	alert(temp); 			$('.email_block').hide(); 			$('.subs_input_val_upgact2').hide(); 			var email_minus = total_price - temp; 			alert(email_minus);  			$('#upgrade_total_price').text(email_minus);  			total_price = email_minus;  			});	                       $("#subs_list_upg_resume").popover({        title: '<h4>Update Plan Subscription</h4>',        container: 'body',        placement: 'right',        html: true,        content: function() {            return $('.popover_form_upg_resume').html();        }    });    $(document).on('click', '.popover_upg_resume_save', function() {        var popover_input_value = $(this).parents('form').find('.popover_value_upg_resume').val();        $('.resume_block').show();        $('.resume_block i').show();        $('.subs_input_val_upgact1').show();        $('.subs_input_val_upgact2').show();        $('.subs_input_val_upgact3').show();        $('.subs_reset').show();        $('.subs_input_val_upgact3').val(popover_input_value);        //alert(total_price);        total_resume_price = popover_input_value;                var resume1 = resume * popover_input_value;        var total_resume = resume1 + total_price;        //total_price = total_email;        //alert(total_resume);        total_price= total_resume;        $('#upgrade_total_price').text(total_resume);      });                 $('#resume_icon').click(function(){        	 	var temp = total_resume_price * resume;       	 	alert(temp); 			$('.resume_block').hide(); 			$('.subs_input_val_upgact3').hide(); 			var resume_minus = total_price - temp; 			alert(resume_minus);  			$('#upgrade_total_price').text(resume_minus);  			total_price = resume_minus;  			});	               $(document).on("keypress keyup", '#popover-value', function(event) {        $(this).val($(this).val().replace(/[^\d].+/, ""));        if ((event.which > 31 && (event.which < 48 || event.which > 57))) {            event.preventDefault();        }    });    $(".subs_reset").on("click", function() {        $(".subs_input_val_upgact1").hide();        $(".subs_input_val_upgact2").hide();        $(".subs_input_val_upgact3").hide();        $('.sms_block').hide();        $('.email_block').hide();        $('.resume_block').hide();        $('#upgrade_total_price').text(0);        total_price = 0;    });    $(document).on('click', '.btn-success', function() {        $(".popover").hide();    });    $(document).on('click', '.subs_reset', function() {        $(".upg_reset").hide();    });    /* Added by Akila */	//Image Centering	$(window).load(function()	{		centerContent();	});		$(window).resize(function()	{		centerContent();	});		function centerContent()	{		$('.centering_images').each(function(){			$(this).css("margin-left", -($(this).width())/2);			$(this).css("margin-top", -($(this).height())/2);	    });	}		/* error popup - added by Akila */	$('.candidate_email').on('click',function() {		$('.success-alert .success-alert span').text();		$('.popup_fade').show();		$('.error_popup_msg').show();		document.body.style.overflow = 'hidden';    });        /* close error popup when click ok button or popupfade - added by Akila*/	$(document).on('click','.alert_btn,.cancel_btn',function(){	  	$('.error_popup_msg').hide();	  	$('.popup_fade').hide();	  	document.body.style.overflow = 'auto';	});		/* error popup message center alignment - added by Akila*/	var height=$('.error_popup_msg').height();    var width=$('.error_popup_msg').width();    $('.error_popup_msg').css({'margin-top': -height / 2 + "px", 'margin-left': -width / 2 + "px"});        /* subscription plan submission*/    $(document).on('click','.subs_button',function() {        var sms = $.trim($(this).parents('.plan_selection').find('.sms_count').val());        var email = $.trim($(this).parents('.plan_selection').find('.email_count').val());        var resume = $.trim($(this).parents('.plan_selection').find('.resume_count').val());        var sub_id = $(this).data('id');        var plan_option = $(this).data('option');        var price = $(this).parents('.plan_selection').find('.price_hidden').val();        var error = 0;        if(plan_option == "upgrade" && (sms!='' || email!='' || resume!='')) {        }        else if(plan_option == "upgrade"){            error = 1;            alert("Please enter sms count or email count or resume count");        }        if(error == 0) {            if((!$.isNumeric(sms) && sms!='' && sms!="undefined") || (!$.isNumeric(email) && email!='' && email!="undefined") || (!$.isNumeric(resume) && resume!='' && resume!="undefined")|| (!$.isNumeric(price) && price!='') || (!$.isNumeric(sub_id)) || sub_id=='' || plan_option=='') {                error = 1;            }            if(error == 1) {                alert("something went wrong. Please try again later.");            }            else {                $('#plan_option').val(plan_option);                $('#payu_planid').val(sub_id);                $('#payu_amount').val(Math.ceil(price).toLocaleString('en-US', {minimumFractionDigits: 2}));                $('#plan_sms').val(sms);                $('#plan_email').val(email);                $('#plan_resume').val(resume);                $('#provider_subscription_form').submit();            }        }    });			}); // end of document ready


