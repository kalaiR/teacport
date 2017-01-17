<?php include('include/header.php'); ?><?php include('include/menus.php'); ?>        <section class="job-breadcrumb">            <div class="container">                <div class="row">                    <div class="col-md-6 col-sm-7 co-xs-12 text-left">                        <h3>Post New Jobs</h3>                    </div>                    <div class="col-md-6 col-sm-5 co-xs-12 text-right">                        <div class="bread">                            <ol class="breadcrumb">                                <li><a href="<?php echo base_url(); ?>">Home</a>                                </li>                                <li><a href="<?php echo base_url(); ?>provider/dashboard">Dashboard</a>                                </li>                                <li class="active">Post New Jobs</li>                            </ol>                        </div>                    </div>                </div>            </div>        </section>        <section class="dashboard-body">            <div class="container">                <div class="row">                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">                        <div class="col-md-4 col-sm-4 col-xs-12">                            <div class="panel">                                <div class="dashboard-logo-sidebar">                                     <?php if (@getimagesize($organization['organization_logo'])) { ?>                                    <img src="<?php echo $organization['organization_logo']; ?>" alt="institution" class="img-responsive center-block ">                                    <?php } else { ?>                                	<img src="<?php echo base_url().'assets/images/institution.png'; ?>" alt="institution" class="img-responsive center-block ">                                    <?php } ?>                                </div>                                <div class="text-center dashboard-logo-sidebar-title">                                    <h4><?php echo $organization['organization_name']; ?></h4>                                </div>                            </div>                            <!-- dashboard side bar  -->                            <?php include('include/company_dashboard_sidebar.php'); ?>                        </div>                        <div class="col-md-8 col-sm-8 col-xs-12">                            <div class="heading-inner first-heading">                                <p class="title">Update Job</p>                            </div>                            <div class="box-panel">                            	<?php echo form_open('provider/updatejob', 'id="post_job_form" class="row provider_form"'); ?>                            		<?php 	                                if($this->session->userdata('error')) :	                                    if($this->session->userdata('error') == 2) {	                                        echo "<p class='val_status val_success db'> <i class='fa fa-check' aria-hidden='true'></i> ".$this->session->userdata('post_job_server_msg')."</p>";	                                    }	                                    else {	                                        echo "<p class='val_status val_error db'> <i class='fa fa-times' aria-hidden='true'></i>".$this->session->userdata('post_job_server_msg')."</p>";	                                    }	                                else :	                                    echo "<p class='val_status'>  </p>";	                                endif;									$this->session->unset_userdata('error');									$this->session->unset_userdata('post_job_server_msg');	                                ?> 									<div class="form-group col-md-12 col-sm-12 col-xs-12"> 										<?php echo form_error('provider_ug_or_pg'); ?>	                                    <div class="form-group">	                                        <label>UG or PG</label> <br>	                                       	<input type="hidden" value="<?php echo $applyjob['vacancies_id']; ?>" name="provider_id"> 	                                        <div class="col-sm-3"><input id="radio_ug" type="radio" name="provider_ug_or_pg" value="ug" <?php if($applyjob['vacancies_course_type'] =='ug') echo "checked"; ?>> UG</div>	                                        <div class="col-sm-3"><input id="radio_pg" type="radio" name="provider_ug_or_pg" value="pg" <?php if($applyjob['vacancies_course_type'] =='pg') echo "checked"; ?>> PG</div>	                                        <div class="col-sm-3"><input id="radio_pg" type="radio" name="provider_ug_or_pg" value="phd" <?php if($applyjob['vacancies_course_type'] =='phd') echo "checked"; ?>> PhD</div>	                                    </div>	                          		</div> 	                                <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_job_title');?></div>	                                <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_vacancy');  ?></div>	                                <div class="col-md-6 col-sm-6 col-xs-12"> 	                                    <div class="form-group">	                                        <label>Job Title <sup class="alert">*</sup></label>	                                        <input id="job_title" maxlength="80" type="text" placeholder="Job Title" class="form-control form_inputs" name="provider_job_title" value="<?php echo $applyjob['vacancies_job_title']; ?>">	                                    </div>	                                </div>	                                 	                                <div class="col-md-6 col-sm-6 col-xs-12">	                                    <div class="form-group">	                                        <label>No. of Vacancy <sup class="alert">*</sup></label>	                                        <input id="no_of_vacancy" maxlength="8" type="text" placeholder="Total Vacancies" class="form-control form_inputs numeric_value" name="provider_vacancy" value="<?php echo $applyjob['vacancies_available']; ?>">	                                    </div>	                                </div>	                                	                                 <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_class_level');?></div>	                                 <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_qualification[]');?></div>	                                 <div class="clearfix"> </div>	                                 <div class="col-md-6 col-sm-6 col-xs-12">	                                    <div class="form-group">	                                        <label>Class Level <sup class="alert">*</sup></label> <br>											<select id="sel_a" class="select-classlevel form-control form_inputs" name="provider_class_level"> 	                                        <option value="">Select a Level</option>	                                        <?php	                                       	                                        	foreach ($classlevel as $classlevels) {	                                        		if($classlevels['class_level_id'] == (int)$applyjob['vacancies_class_level_id']){														echo "<option value='".$classlevels['class_level_id']."' selected>".$classlevels['class_level']."</option>";													}													else{														echo "<option value='".$classlevels['class_level_id']."'>".$classlevels['class_level']."</option>";													}												}                                         	?>                                        	</select>	                                    </div>	                                </div>	                                <div class="col-md-6 col-sm-6 col-xs-12">	                                    <div class="form-group">	                                        <label>Qualification <sup class="alert">*</sup></label>	                                        <select id="sel_a" class="select-qualification form-control form_inputs" name="provider_qualification[]" multiple=""> 	                                        <?php	                                        	$provider_qualifi = explode(',', $applyjob['vacancies_qualification_id']);	                                        	foreach ($qualificatoin as $qualificatoins) {	                                        		if(in_array($qualificatoins['educational_qualification_id'], $provider_qualifi)){														echo "<option value='".$qualificatoins['educational_qualification_id']."' selected>".$qualificatoins['educational_qualification']."</option>";													}													else{														echo "<option value='".$qualificatoins['educational_qualification_id']."'>".$qualificatoins['educational_qualification']."</option>";													}												}                                         	?>                                        	</select>	                                    </div>	                                </div>	                                <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_open_date');?></div>	                                 <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_close_date');?></div>	                                 <div class="clearfix"> </div>	                                <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_subject');?></div>	                                 <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_experience');?></div>	                                 <div class="clearfix"> </div>	                                 <?php if(FALSE){ ?>                                	<div class="col-md-6 col-sm-6 col-xs-12">	                                    <div class="form-group">	                                        <label>Department </label> <br>	                                        <input id="department" type="text" placeholder="Department" class="form-control" name="provider_department"  value="<?php if(!isset($post_job_server_msg)) echo set_value('provider_department'); ?>">	                                    </div>	                                </div>	                                <?php } ?>	                                <div class="col-md-6 col-sm-6 col-xs-12">	                                    <div class="form-group">	                                        <label>Subjects <sup class="alert">*</sup></label>	                                        <select id="sel_a" class="select-subject form-control form_inputs" name="provider_subject">	                                        	<option value="">Select a subject</option>	                                        	<?php	                                        	foreach ($subjects as $subject) {	                                        		if($subject['subject_id'] == $applyjob['vacancies_subject_id']){														echo "<option value='".$subject['subject_id']."' selected>".$subject['subject_name']."</option>";													}													else{														echo "<option value='".$subject['subject_id']."'>".$subject['subject_name']."</option>";													}												} 	                                        	?>	                                        </select>	                                    </div>	                                </div>	                                <div class="col-md-6 col-sm-6 col-xs-12">	                                    <div class="form-group">	                                        <label>Experience <sup class="alert">*</sup></label>	                                        <select id="sel_b" class="select-experience form-control form_inputs" name="provider_experience">	                                        	<option value="">Select a experience</option>	                                            <option value="fresher" <?php if($applyjob['vacancies_experience']=='fresher') echo 'selected'; ?>>Fresher</option>	                                            <option value="1 year" <?php if($applyjob['vacancies_experience']=='1 year') echo 'selected'; ?>>1 Year</option>	                                            <option value="2 year" <?php if($applyjob['vacancies_experience']=='2 year') echo 'selected'; ?>>2 Years</option>	                                            <option value="3 year" <?php if($applyjob['vacancies_experience']=='3 year') echo 'selected'; ?>>3 Years</option>	                                            <option value="4 year" <?php if($applyjob['vacancies_experience']=='4 year') echo 'selected'; ?>>4 Years</option>	                                            <option value="5 year" <?php if($applyjob['vacancies_experience']=='5 year') echo 'selected'; ?>>5 Years</option>	                                            <option value="6 year" <?php if($applyjob['vacancies_experience']=='6 year') echo 'selected'; ?>>6+ Years</option>	                                        </select>	                                    </div>	                                </div>	                                <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_university');?></div>	                                <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_medium_of_instruction[]');?></div>	                                 <div class="clearfix"> </div>	                                <div class="col-md-6 col-sm-6 col-xs-12">	                                    <div class="form-group">	                                        <label>University <sup class="alert">*</sup></label> <br>	                                        <select id="sel_a" class="post_job_subjects select-university form-control form_inputs" name="provider_university">	                                        	<option value="">Select a University</option>	                                        	<?php	                                        	foreach ($university as $universities) {	                                        		if($universities['education_board_id'] == $applyjob['vacancies_university_board_id']){	                                        			echo "<option value='".strtolower($universities['education_board_id'])."' selected>".$universities['university_board_name']."</option>";		                                        		}													else{														echo "<option value='".strtolower($universities['education_board_id']).">".$universities['university_board_name']."</option>";													}												} 	                                        	?>	                                        </select>	                                    </div>	                                </div>	                                <div class="col-md-6 col-sm-6 col-xs-12">		                                    <div class="form-group">	                                        <label>Medium of Instruction <sup class="alert">*</sup></label>	                                        <select id="sel_a" class="select-medium form-control form_inputs" name="provider_medium_of_instruction[]" multiple="">	                                        	<option value="">Select a Medium</option>	                                        	<?php	                                        	$provider_miduem = explode(',', $applyjob['vacancies_medium']);												print_r($provider_miduem);	                                        	foreach ($medium as $mediums) {	                                        		if(in_array($mediums['language_id'], $provider_miduem)){														echo "<option value='".strtolower($mediums['language_id'])."' selected>".$mediums['language_name']."</option>";													}													else{														echo "<option value='".strtolower($mediums['language_id'])."'>".$mediums['language_name']."</option>";													} 												}	                                        	?>	                                        </select>	                                    </div>	                                </div>	                                <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_min_salary');?></div>	                                <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_max_salary');?></div>                                 	<div class="clearfix"> </div>	                                <div class="col-md-6 col-sm-6 col-xs-12">	                                    <div class="form-group">	                                        <label>Minimum Salary <sup class="alert">*</sup></label>	                                        <input id="minimum_salary_vacancy" type="text" placeholder="Minimum salary" class="form-control form_inputs numeric_value" data-minlength="4" data-name="Minimum Salary" name="provider_min_salary" value="<?php echo $applyjob['vacancies_start_salary']; ?>">	                                    </div>	                                </div>	                                <div class="col-md-6 col-sm-6 col-xs-12">	                                    <div class="form-group">	                                        <label>Maximum Salary <sup class="alert">*</sup></label>	                                        <input id="maximum_salary_vacancy" data-minlength="4" data-name="Maximum Salary" type="text" placeholder="Maximum salary" class="form-control form_inputs numeric_value" name="provider_max_salary"  value="<?php echo $applyjob['vacancies_end_salary']; ?>">	                                    </div>	                                </div>	                                <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_accom_instruction');?></div>                                 	<div class="clearfix"> </div>	                                <div class="col-md-6 col-sm-6 col-xs-12">	                                    <div class="form-group">	                                        <label>Accommodation Information <sup class="alert">*</sup></label>	                                        <input id="accomadation" maxlength="150" type="text" placeholder="Accommodation" class="form-control form_inputs alpha_value" name="provider_accom_instruction" value="<?php echo $applyjob['vacancies_accommodation_info']; ?>">	                                    </div>	                                </div>	                                <div class="clearfix"> </div>	                                <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_job_instruction');?></div>                                 	<div class="clearfix"> </div>	                                <div class="col-md-12 col-sm-12 col-xs-12">	                                    <div class="form-group">	                                        <label>Job Details &amp; Instructions <sup class="alert">*</sup></label>	                                        <textarea  data-name="Job Details" data-minlength="50" maxlength="700" name="provider_job_instruction" class="provider_job_instruction form_inputs"><?php echo $applyjob['vacancies_instruction']; ?></textarea>	                                    </div>	                                </div>	                                <div class="col-md-12 col-sm-12 col-xs-12">	                                    <button type="submit" class="btn btn-default pull-right">Update Job <i class="fa fa-angle-right"></i></button>	                                </div>	                            <?php echo form_close(); ?>                           </div>                       </div>                    </div>                </div>            </div>        </section><?php include('include/footermenu.php'); ?><?php include('include/footer.php'); ?><!--datepicker--><script type="text/javascript" src="<?php echo base_url(); ?>assets/js/zebra_datepicker.js"></script> <?php include('include/footercustom.php'); ?>        <script type="application/javascript">//Date Picker	$('.provider_open_date').Zebra_DatePicker({    	direction: true,        format: 'd/m/Y',        show_icon: true,        pair: $('.provider_close_date'),        onClose: function() {        	 $('.provider_close_date').val('').click();        }    });     $('.provider_close_date').Zebra_DatePicker({    	direction: true,        format: 'd/m/Y',    });    $('.provider_start_date').Zebra_DatePicker({    	direction: true,        format: 'd/m/Y',        show_icon: true,        pair: $('.provider_end_date'),        onClose: function() {        	 $('.provider_end_date').val('').click();        }    });     $('.provider_end_date').Zebra_DatePicker({    	direction: true,        format: 'd/m/Y',    });  </script>