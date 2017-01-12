 <?php include('include/header.php'); ?> <?php include('include/menus.php'); ?>        <section class="job-breadcrumb">            <div class="container">                <div class="row">                    <div class="col-md-6 col-sm-7 co-xs-12 text-left">                        <h3>Inbox</h3>                    </div>                    <div class="col-md-6 col-sm-5 co-xs-12 text-right">                        <div class="bread">                            <ol class="breadcrumb">                                <li><a href="<?php echo base_url(); ?>">Home</a>                                </li>                                <li><a href="<?php echo base_url(); ?>provider/dashboard">Dashboard</a>                                </li>                                <li class="active">Inbox</li>                            </ol>                        </div>                    </div>                </div>            </div>        </section>        <section class="dashboard-body">            <div class="container">                <div class="row">                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">                        <div class="col-md-4 col-sm-4 col-xs-12">                            <div class="panel">                                <div class="dashboard-logo-sidebar center-block">                                    <?php if (@getimagesize($organization['organization_logo'])) { ?>                                    <img src="<?php echo $organization['organization_logo']; ?>" alt="institution" class="img-responsive center-block ">                                    <?php } else { ?>                                	<img src="<?php echo base_url().'assets/images/institution.png'; ?>" alt="" class="img-responsive">                                    <?php } ?>                                </div>                                <div class="text-center dashboard-logo-sidebar-title">                                    <h4><?php echo $organization['organization_name']; ?></h4>                                </div>                            </div>                             <!--include left panel menu-->                            <?php include('include/company_dashboard_sidebar.php'); ?>                        </div>                        <div class="col-md-8 col-sm-8 col-xs-12">                            <div class="heading-inner first-heading">                                <p class="title">Your Inbox</p>                                <?php if(!empty($message)) {                                	echo "<input type='hidden' class='provider_inbox_last_id' value='".$message[0]['inbox_id']."'>";                                }								?>                            </div>                            <div class="resume-list">                                <div class="table-responsive">                                                               	<?php if(!empty($message)) {?>                            		 <table class="table table-striped" id="provider_inbox_data">                                        <thead class="thead-inverse">                                            <tr>                                                <th><input type="checkbox"/></th>                                                <th>Applicant Name</th>                                                <th>Message</th>                                                <th>Date</th>                                            </tr>                                        </thead>                                        <tbody>                                        	                                        	<?php	                                        		foreach ($message as $messages) {													$meassage_received_date_time = $messages['inbox_created_date'];													$meassage_received_date = date("d/m/Y h:i a", strtotime($meassage_received_date_time));                                        	?>                                            <tr data-candidate-id='<?php echo $messages['inbox_candidate_id']; ?>' data-vacancy-id='<?php echo $messages['inbox_vacancy_id']; ?>'>                                                <td><input type="checkbox" class="provider_inbox_id" data-msg-id ="<?php echo $messages['inbox_id']; ?>" /></td>                                                <td data-toggle="modal" data-target="#applicant_msg_act" data-backdrop="static" data-keyboard="false" class="clickable_act <?php if($messages['is_viewed'] == 0) echo 'bold'; ?>"><?php echo $messages['candidate_name']; ?></td>                                                <td data-toggle="modal" data-target="#applicant_msg_act" data-backdrop="static" data-keyboard="false" class="clickable_act  <?php if($messages['is_viewed'] == 0) echo 'bold'; ?>">Hi, I wish to apply for <?php echo $messages['vacancies_job_title']; ?>.</td>                                                <td data-toggle="modal" data-target="#applicant_msg_act" data-backdrop="static" data-keyboard="false" class="clickable_act  <?php if($messages['is_viewed'] == 0) echo 'bold'; ?>"> <?php echo $meassage_received_date; ?> </td>                                            </tr>                                            <?php                                            }                                             ?>                                        </tbody>                                     </table>                                     <button class="btn btn-small del_provdbd_mail">Delete</button>                                    <?php } else { ?>                                    	<h2> No message received ! </h2>                                    <?php } ?>                                                                   </div>                            </div>	                      <!--Popup Message for Inbox message-->						  <div class="modal fade" id="applicant_msg_act" role="dialog">						    <div class="modal-dialog">						      <!-- Modal content-->						      <div class="modal-content">						      	<div class="modal-header">						          <button type="button" class="close" data-dismiss="modal">&times;</button>						          <h4 class="modal-title">Message</h4>						        </div>						         <div class="modal-body">						          	<div id="pro_inbox_msg">						          		<!--Personal Profile-->		     							 <div>		     							 	<h5> Personal Profile</h5>			                           	 	<div class="display_seeker_details">			                           	 		<span class="col-sm-4">Name of the Candidate</span>			                           	 		<span class="col-sm-1"> : </span>												<div class="col-sm-7 candidate_name inbox_popup_data"></div>											</div>																						<div class="display_seeker_details">												<span class="col-sm-4">Gender </span>												<span class="col-sm-1"> : </span>												<span class="col-sm-7 candidate_gender inbox_popup_data"></span>											</div>											<div class="display_seeker_details">												<span class="col-sm-4">Date of Birth </span>												<span class="col-sm-1"> : </span>												<div class="col-sm-7 candidate_date_of_birth "></div>											</div>											<div class="display_seeker_details">												<span class="col-sm-4">Father's Name </span>												<span class="col-sm-1"> : </span>												<span class="col-sm-7 candidate_father_name inbox_popup_data"></span>											</div>											<div class="display_seeker_details">												<span class="col-sm-4">Marital Status </span>												<span class="col-sm-1"> : </span>												<span class="col-sm-7 candiate_marital inbox_popup_data"></span>											</div>											<div class="display_seeker_details">												<span class="col-sm-4">Native District  </span>												<span class="col-sm-1"> : </span>												<span class="col-sm-7 candidate_live inbox_popup_data"></span>											</div>											<div class="display_seeker_details">												<span class="col-sm-4">Mother Tongue</span>												<span class="col-sm-1"> : </span>												<span class="col-sm-7 candidate_mothertongue inbox_popup_data"></span>											</div>											<div class="display_seeker_details">												<span class="col-sm-4">Nationality  </span>												<span class="col-sm-1"> : </span>												<span class="col-sm-7 candidate_nationality inbox_popup_data"></span>											</div>											<div class="display_seeker_details">												<span class="col-sm-4">Religion </span>												<span class="col-sm-1"> : </span>												<span class="col-sm-7 candidate_religion inbox_popup_data"></span>											</div>											<div class="display_seeker_details">												<span class="col-sm-4">Communal Category </span>												<span class="col-sm-1"> : </span>												<span class="col-sm-7 candidate_community inbox_popup_data"></span>											</div>											<div class="display_seeker_details">												<span class="col-sm-4">Physically Handicapped Person</span>												<span class="col-sm-1"> : </span>												<span class="col-sm-7 candidate_physical inbox_popup_data"></span>											</div>										</div> <br> <!---End personal profile-->											<!--Post Preference-->		     							 <div>		     							 	<h5>Candidate Preference</h5>			                           	 	<div class="display_seeker_details">			                           	 		<span class="col-sm-4">Applying For</span>			                           	 		<span class="col-sm-1"> : </span>												<div class="col-sm-7 candidate_applied_for"></div>											</div>																						<div class="display_seeker_details">												<span class="col-sm-4">Expected Monthly Salary</span>												<span class="col-sm-1"> : </span>												<span class="col-sm-7 candidate_expect_salary"></span>											</div>											<div class="display_seeker_details">												<span class="col-sm-4">Wish to Work in District </span>												<span class="col-sm-1"> : </span>												<div class="col-sm-7 candiate_willing_district"></div>											</div>											<div class="display_seeker_details">												<span class="col-sm-4">Wish to take Classes For </span>												<span class="col-sm-1"> : </span>												<span class="col-sm-7 candidate_willing_class"></span>											</div>										</div> <br> <!---End Post Preference-->											<!--Educatinaol Profile-->		     							 <div>		     							 	<h5>Educational Profile</h5>			                           	 	<div class="table-responsive">												<table class="table seeker_edu-details">													<thead>														<th>Qualification</th>														<th>Year of Passing </th>														<th>Medium Of Instruction</th>														<th>Board/University</th>														<th>% of Marks</th>													</thead>													<tbody class="candidate_qualification">														<!--  content will addby jquery.See bottom of this page -->													</tbody>												</table>											</div> <!--.table-responsive-->											<div class="display_seeker_details">			                           	 		<span class="col-sm-4">TET Exam Status</span>			                           	 		<span class="col-sm-1"> : </span>												<div class="col-sm-7 candidate_tet_exam_status"></div>											</div>											<div class="display_seeker_details">			                           	 		<span class="col-sm-4">Extra Curricular Skills </span>			                           	 		<span class="col-sm-1"> : </span>												<div class="col-sm-7 candidate_extra_curricular"></div>											</div>											<div class="display_seeker_details">			                           	 		<span class="col-sm-4">Is experienced </span>			                           	 		<span class="col-sm-1"> : </span>												<div class="col-sm-7 candidate_is_experienced"></div>											</div>											</div> <br>										<!---End Educational Profile -->										<!--Professional Profile-->		     							 <div class="candidate_professional_details dn">		     							 	<h5>Professional Profile</h5>											<div class="table-responsive">												<table class="table">													<thead>														<th>Level</th>														<th>Board </th>														<th>No. of Years</th>													</thead>													<tbody class="candidate_experience">													</tbody>												</table>											 </div> <!--.table-responsive-->										  </div> <br> <!---End Professional Profile-->										  <!--Communication Information-->		     							 <div>		     							 	<h5>Communication Information</h5>			                           	 	<div class="display_seeker_details">			                           	 		<span class="col-sm-4">Door No.</span>			                           	 		<span class="col-sm-1"> : </span>												<div class="col-sm-7 candidate_address1"></div>											</div>																						<div class="display_seeker_details">												<span class="col-sm-4">Post/Village/Taluk</span>												<span class="col-sm-1"> : </span>												<span class="col-sm-7 candidate_address2"></span>											</div>											<div class="display_seeker_details">												<span class="col-sm-4">District</span>												<span class="col-sm-1"> : </span>												<div class="col-sm-7 candidate_live_district"></div>											</div>											<div class="display_seeker_details">												<span class="col-sm-4">State</span>												<span class="col-sm-1"> : </span>												<span class="col-sm-7 candidate_state"></span>											</div>											<div class="display_seeker_details">												<span class="col-sm-4">Pin-Code</span>												<span class="col-sm-1"> : </span>												<span class="col-sm-7 candidate_pincode"></span>											</div>											<div class="display_seeker_details">												<span class="col-sm-4">Email ID</span>												<span class="col-sm-1"> : </span>												<span class="col-sm-7 candidate_email"></span>											</div>											<div class="display_seeker_details">												<span class="col-sm-4">Mobile No</span>												<span class="col-sm-1"> : </span>												<span class="col-sm-7 candidate_mobile"></span>											</div>										</div> <br> <!---Communication Information-->												 </div> <!--#pro_inbox_msg-->						    	</div> <!--.modal-body-->						        <div class="modal-footer"></div>						     </div> <!--.modal-content-->						  </div> <!--.modal-dialog-->					   </div>  <!--.modal-->					    <!--End of Popup Message for Inbox message-->                   </div>                 </div>             </div>        </section><?php include('include/footermenu.php'); ?><?php include('include/footer.php'); ?><script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script><?php include('include/footercustom.php'); ?><script type="text/javascript">jQuery.fn.dataTable.Api.register('row.addByPos()', function(data, index) {         var currentPage = this.page();    //insert the row     this.row.add(data);	//move added row to desired index	var rowCount = this.data().length-1,		insertedRow = this.row(rowCount).data(),		tempRow;	for (var i=rowCount;i>=index;i--) {		tempRow = this.row(i-1).data();		this.row(i).data(tempRow);		this.row(i-1).data(insertedRow);	}     	//refresh the current page	this.page(currentPage).draw(false);});	var provider_inbox_message;$(document).ready(function(){		provider_inbox_message = $('#provider_inbox_data').DataTable( {		"aaSorting": [],		"ordering": false,    	"pagingType": "full_numbers"	});	provider_inbox_ajax_message('<?php echo base_url(); ?>','<?php echo $organization['organization_id'] ?>','<?php echo $this->security->get_csrf_hash(); ?>');		$('#provider_inbox_data tbody .clickable_act').on('click',function(){		var candidate = $(this).parent('tr').attr('data-candidate-id');    	var vacancyid =$(this).parent('tr').attr('data-vacancy-id');    	var inbox_id = $(this).parent('tr').find('.provider_inbox_id').attr('data-msg-id');    	$(this).find('td').removeClass('bold');    	var csrf = '<?php echo $this->security->get_csrf_hash(); ?>';    	provider_inbox_full_data(candidate,vacancyid,inbox_id,csrf);    });        $('.del_provdbd_mail').on('click',function(){    	var provider_inbox_msg_id = '';    	$('#provider_inbox_data .provider_inbox_id:checked',document).each(function(){			provider_inbox_msg_id += $(this).attr('data-msg-id')+', ';    	});    	var csrf = '<?php echo $this->security->get_csrf_hash(); ?>';    	var trimmed_id = provider_inbox_msg_id.slice(0,-2);    	var url = '<?php echo base_url(); ?>';    	$.ajax({	       type: "POST",	       url: url+"provider/inbox/removedata",	       data:{ inbox_id:trimmed_id, csrf_token : csrf},	       cache: false,	       async: false,	       success: function(data) {	       		location.reload();	       }	   });    });});function provider_inbox_full_data(candidate,vacancyid,inbox_id,csrf){	var url = '<?php echo base_url(); ?>';	$.ajax({       type: "POST",       url: url+"provider/inbox/fulldata",       data:{ candidate_id : candidate ,vacancy : vacancyid,inbox_id:inbox_id, csrf_token : csrf},       cache: false,       async: false,       success: function(data) {       		var candidate_data = $.parseJSON(data);			$('#applicant_msg_act .candidate_name').text(candidate_data.personnal.candidate_name);			$('#applicant_msg_act .candidate_gender').text(candidate_data.personnal.candidate_gender);  			$('#applicant_msg_act .candidate_date_of_birth').text(mysql_date_format_to_javascript_format(candidate_data.personnal.candidate_date_of_birth));			$('#applicant_msg_act .candidate_father_name').text(candidate_data.personnal.candidate_father_name); 			$('#applicant_msg_act .candiate_marital').text(candidate_data.personnal.candidate_marital_status); 			$('#applicant_msg_act .candidate_live').text(candidate_data.personnal.living_district);			$('#applicant_msg_act .candidate_mothertongue').text(candidate_data.personnal.language_name);			$('#applicant_msg_act .candidate_nationality').text(candidate_data.personnal.candidate_nationality);			$('#applicant_msg_act .candidate_religion').text(candidate_data.personnal.candidate_religion);			$('#applicant_msg_act .candidate_community').text(candidate_data.personnal.candidate_community);			$('#applicant_msg_act .candidate_physical').text(candidate_data.personnal.candidate_is_physically_challenged);			$('#applicant_msg_act .candidate_applied_for').text(candidate_data.vacancy.vacancies_job_title+' ('+candidate_data.vacancy.vacancies_id+')');			$('#applicant_msg_act .candidate_expect_salary').text(candidate_data.preferance.candidate_expecting_start_salary+' to '+candidate_data.preferance.candidate_expecting_end_salary);			$('#applicant_msg_act .candiate_willing_district').text(candidate_data.personnal.willing_district);			var willing_class = '';			$.each(candidate_data.willingclass, function(i){				willing_class += candidate_data.willingclass[i].class_level+', ';	    	});			$('#applicant_msg_act .candidate_willing_class').text(willing_class.slice(0,-2));			var candidate_qualification ='';			$.each(candidate_data.education, function(i){				candidate_qualification += '<tr><td>'+candidate_data.education[i].qualification+'</td><td>'+candidate_data.education[i].passedout+'</td><td>'+candidate_data.education[i].medium+'</td><td>'+candidate_data.education[i].boardname+'</td><td>'+candidate_data.education[i].percentage+'</td><tr>';	    	});	    	$('#applicant_msg_act .candidate_qualification').html(candidate_qualification);	    	if(candidate_data.personnal.candidate_tet_exam_status == '1'){	    		$('#applicant_msg_act .candidate_tet_exam_status').text('Pass');	    	}	    	else{	    		$('#applicant_msg_act .candidate_tet_exam_status').text('Nil');	    	}	    	var extracurricular = '';	    	$.each(candidate_data.extracurricular, function(i){				extracurricular += candidate_data.extracurricular[i].extra_curricular+', ';	    	});	    	$('#applicant_msg_act .candidate_extra_curricular').text(extracurricular.slice(0,-2));	    	var experience = '';	    	if(candidate_data.personnal.candidate_is_fresher != '1'){	    			    		$('#applicant_msg_act .candidate_is_experienced').text('Yes');	    		$('#applicant_msg_act .candidate_professional_details').show();		    	$.each(candidate_data.experience, function(i){					experience += '<tr><td>'+candidate_data.experience[i].classlevel+'</td><td>'+candidate_data.experience[i].experienceboard+'</td><td>'+candidate_data.experience[i].experienceyear+'</td><tr>';		    	});		    }		    else{		    	$('#applicant_msg_act .candidate_is_experienced').text('No, I am a Fresher');		    }	    	$('#applicant_msg_act .candidate_experience').html(experience);	    	$('#applicant_msg_act .candidate_address1').text(candidate_data.personnal.candidate_address_1);	    	$('#applicant_msg_act .candidate_address2').text(candidate_data.personnal.candidate_address_2);	    	$('#applicant_msg_act .candidate_live_district').text(candidate_data.personnal.living_district);	    	$('#applicant_msg_act .candidate_state').text(candidate_data.personnal.livestate);	    	$('#applicant_msg_act .candidate_pincode').text(candidate_data.personnal.candidate_pincode);	    	$('#applicant_msg_act .candidate_email').text(candidate_data.personnal.candidate_email);	    	$('#applicant_msg_act .candidate_mobile').text(candidate_data.personnal.candidate_mobile_no);       }   });}function mysql_time_to_javascript_time(mysqltime){	var datetimesplit = mysqltime.split(" ");	var datesplit = datetimesplit[0].split('-');	var timesplit = datetimesplit[1].split(':');	var hour;	var meridian;	if(parseInt(timesplit[0]) > 12)	{		hour = parseInt(timesplit[0])-12;		meridian = 'pm';	}	else	{		hour = parseInt(timesplit[0]);		meridian = 'pm';	}	return datesplit[2]+'/'+datesplit[1]+'/'+datesplit[0]+' '+hour+':'+timesplit[1]+' '+meridian}function mysql_date_format_to_javascript_format(date){	var datesplit = date.split('-');	return datesplit[2]+'/'+datesplit[1]+'/'+datesplit[0]}function provider_inbox_ajax_message(url,id,csrf){		var lastmessageid = $('.provider_inbox_last_id').length > 0 ? parseInt($(document).find('.provider_inbox_last_id').val()):0;	    var message = $.ajax({	        type: "POST",	        url: url+"provider/inbox/message",	        data : { orgid : id , csrf_token : csrf,lastid: lastmessageid},	        dataType: 'json',	        async: false	    }).complete(function(){	        setTimeout(function(){provider_inbox_ajax_message(url,id,csrf);}, 10000);	    }).responseText;	    var json_data = $.parseJSON(message);	    var retrivedatacount = json_data.length;	    if(retrivedatacount > 0){	    	$.each(json_data, function(i){	    		var inbox_id_increase = parseInt(lastmessageid)+1;	    		var converted_time = mysql_time_to_javascript_time(json_data[i].inbox_created_date);	    		provider_inbox_message.row.addByPos(['<input type="checkbox" class="provider_inbox_id" data-msg-id ="'+inbox_id_increase+'">',json_data[i].candidate_name,'Hi, I wish to apply for '+json_data[i].vacancies_job_title,converted_time],1);	    	});      		provider_inbox_message.draw();      		$(document).find('.provider_inbox_last_id').val(lastmessageid+retrivedatacount);	    }	}</script>