<?php include('include/header.php'); ?><?php include('include/menus.php'); ?>        <section class="job-breadcrumb">            <div class="container">                <div class="row">                    <div class="col-md-12 col-sm-12 co-xs-12 text-left">                        <div class="bread">                            <ol class="breadcrumb">                                <li><a href="<?php echo base_url(); ?>">Home</a>                                </li>                                <li><a href="<?php echo base_url(); ?>provider/dashboard">Dashboard</a>                                </li>                                <li class="active">Post New Jobs</li>                            </ol>                        </div>                    </div>                </div>            </div>        </section>        <section class="dashboard-body">            <div class="container">                <div class="row">                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">                        <div class="col-md-4 col-sm-4 col-xs-12">                            <div class="panel">                                <div class="dashboard-logo-sidebar center-block">                                     <?php if (@getimagesize($organization['organization_logo'])) { ?>                                    <img src="<?php echo $organization['organization_logo']; ?>" alt="institution" class="img-responsive center-block ">                                    <?php } else { ?>                                	<img src="<?php echo base_url().'assets/images/institution.png'; ?>" alt="institution" class="img-responsive">                                    <?php } ?>                                </div>                                <div class="text-center dashboard-logo-sidebar-title">                                    <h4><?php echo $organization['organization_name']; ?></h4>                                </div>                            </div>                            <!-- dashboard side bar  -->                            <?php include('include/company_dashboard_sidebar.php'); ?>                        </div>                        <div class="col-md-8 col-sm-8 col-xs-12">                            <div class="heading-inner first-heading">                                <p class="title">Post A Job</p>                            </div>                            <?php                             	if(!empty($subscrib_plan)){                            ?>                            <div class="box-panel">                            	<?php echo form_open('provider/postjob', 'id="post_job_form" class="row provider_form"'); ?>                            		<?php 	                                if(isset($error)) :	                                    if($error == 2) {	                                        echo "<p class='val_status val_success db'> <i class='fa fa-check' aria-hidden='true'></i> $post_job_server_msg </p>";	                                    }	                                    else {	                                        echo "<p class='val_status val_error db'> <i class='fa fa-times' aria-hidden='true'></i> $post_job_server_msg </p>";	                                    }	                                else :	                                    echo "<p class='val_status'>  </p>";	                                endif;	                                ?> 									<div class="form-group col-md-12 col-sm-12 col-xs-12"> 										<?php echo form_error('provider_ug_or_pg'); ?>	                                    <div class="form-group">	                                        <label>UG or PG</label> <br>	                                        <div class="col-sm-3"><input id="radio_ug" type="radio" name="provider_ug_or_pg" value="ug" <?php echo  set_radio('provider_ug_or_pg', 'ug',TRUE); ?>> UG</div>	                                        <div class="col-sm-3"><input id="radio_pg" type="radio" name="provider_ug_or_pg" value="pg" <?php echo  set_radio('provider_ug_or_pg', 'pg'); ?>> PG</div>	                                        <div class="col-sm-3"><input id="radio_pg" type="radio" name="provider_ug_or_pg" value="phd" <?php echo  set_radio('provider_ug_or_pg', 'phd'); ?>> PhD</div>	                                    </div>	                          		</div> 	                                <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_job_title');?></div>	                                <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_vacancy');  ?></div>	                                <div class="col-md-6 col-sm-6 col-xs-12"> 	                                    <div class="form-group">	                                        <label>Job Title <span class="alert">*</span></label>	                                        <input id="job_title" maxlength="80" data-name="Job Title" data-minlength="3" type="text" placeholder="Job Title" class="form-control form_inputs" name="provider_job_title" value="<?php if(!isset($post_job_server_msg)) echo  set_value('provider_job_title'); ?>">	                                    </div>	                                </div>	                                 	                                <div class="col-md-6 col-sm-6 col-xs-12">	                                    <div class="form-group">	                                        <label>No. of Vacancy <span class="alert">*</span></label>	                                        <input id="no_of_vacancy" maxlength="8" type="text" placeholder="Total Vacancies" class="form-control form_inputs numeric_value" name="provider_vacancy" value="<?php if(!isset($post_job_server_msg)) echo  set_value('provider_vacancy'); ?>">	                                    </div>	                                </div>	                                	                                 <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_class_level');?></div>	                                 <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_qualification[]');?></div>	                                 <div class="clearfix"> </div>	                                 <div class="col-md-6 col-sm-6 col-xs-12">	                                    <div class="form-group">	                                        <label>Class Level <span class="alert">*</span></label> <br>											<select id="sel_a" class="select-classlevel form-control form_inputs" name="provider_class_level"> 	                                        <option value="">Select a Level</option>	                                        <?php	                                        	foreach ($classlevel as $classlevels) {	                                        		if(!isset($post_job_server_msg)){														echo "<option value='".$classlevels['class_level_id']."' ".set_select('provider_class_level', $classlevels['class_level_id']).">".$classlevels['class_level']."</option>";													}													else{														echo "<option value='".$classlevels['class_level_id']."'>".$classlevels['class_level']."</option>";													}												}                                         	?>                                        	</select>	                                    </div>	                                </div>	                                <div class="col-md-6 col-sm-6 col-xs-12">	                                    <div class="form-group">	                                        <label>Qualification <span class="alert">*</span></label>	                                        <select id="sel_a" class="select-qualification form-control form_inputs" name="provider_qualification[]" multiple=""> 	                                        <?php	                                        	foreach ($qualificatoin as $qualificatoins) {	                                        		if(!isset($post_job_server_msg)){														echo "<option value='".$qualificatoins['educational_qualification_id']."' ".set_select('provider_qualification[]', $qualificatoins['educational_qualification_id']).">".$qualificatoins['educational_qualification']."</option>";													}													else{														echo "<option value='".$qualificatoins['educational_qualification_id']."'>".$qualificatoins['educational_qualification']."</option>";													}												}                                         	?>                                        	</select>	                                    </div>	                                </div>	                                <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_open_date');?></div>	                                 <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_close_date');?></div>	                                 <div class="clearfix"> </div>	                                <div class="col-md-6 col-sm-6 col-xs-12">	                                    <div class="form-group">	                                        <label>Open Date <span class="alert">*</span></label>	                                        <input id="open_date" type="text" placeholder="Job opening date" class="form-control pickdate_act provider_open_date form_inputs"  name="provider_open_date" value="<?php if(!isset($post_job_server_msg)) echo  set_value('provider_open_date'); ?>">	                                    </div>	                                </div>	                                <div class="col-md-6 col-sm-6 col-xs-12">	                                    <div class="form-group">	                                        <label>End Date <span class="alert">*</span></label>	                                        <input id="end_date" type="text" placeholder="Job closing date" class="form-control pickdate_act provider_close_date form_inputs"  name="provider_close_date"  value="<?php if(!isset($post_job_server_msg)) echo  set_value('provider_close_date'); ?>">	                                    </div>	                                </div>	                                <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_interview_start');?></div>	                                 <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_interview_end');?></div>	                                 <div class="clearfix"> </div>	                                <div class="col-md-6 col-sm-6 col-xs-12">	                                    <div class="form-group">	                                        <label>Interview Start Date <span class="alert">*</span></label>	                                        <input id="int_start_date" type="text" placeholder="Interview Starts On" class="form-control pickdate_act provider_start_date form_inputs" id="datepicker" name="provider_interview_start"  value="<?php if(!isset($post_job_server_msg)) echo  set_value('provider_interview_start'); ?>">	                                    </div>	                                </div>	                                <div class="col-md-6 col-sm-6 col-xs-12">	                                    <div class="form-group">	                                        <label>Interview End Date <span class="alert">*</span></label>	                                        <input id="int_end_date" type="text" placeholder="Interview Ends On" class="form-control pickdate_act provider_end_date form_inputs" id="datepicker" name="provider_interview_end" value="<?php if(!isset($post_job_server_msg)) echo set_value('provider_interview_end'); ?>">	                                    </div>	                                </div>	                                <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_subject');?></div>	                                 <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_experience');?></div>	                                 <div class="clearfix"> </div>	                                 <?php if(FALSE){ ?>                                	<div class="col-md-6 col-sm-6 col-xs-12">	                                    <div class="form-group">	                                        <label>Department </label> <br>	                                        <input id="department" type="text" placeholder="Department" class="form-control" name="provider_department"  value="<?php if(!isset($post_job_server_msg)) echo set_value('provider_department'); ?>">	                                    </div>	                                </div>	                                <?php } ?>	                                <div class="col-md-6 col-sm-6 col-xs-12">	                                    <div class="form-group">	                                        <label>Subjects <span class="alert">*</span></label>	                                        <select id="sel_a" class="select-subject form-control form_inputs" name="provider_subject">	                                        	<option value="">Select a subject</option>	                                        	<?php	                                        	foreach ($subjects as $subject) {	                                        		if(!isset($post_job_server_msg)){														echo "<option value='".$subject['subject_id']."' ".set_select('provider_subject', $subject['subject_id']).">".$subject['subject_name']."</option>";													}													else{														echo "<option value='".$subject['subject_id']."'>".$subject['subject_name']."</option>";													}												} 	                                        	?>	                                        </select>	                                    </div>	                                </div>	                                <div class="col-md-6 col-sm-6 col-xs-12">	                                    <div class="form-group">	                                        <label>Experience <span class="alert">*</span></label>	                                        <select id="sel_b" class="select-experience form-control form_inputs" name="provider_experience">	                                        	<option value="">Select a experience</option>	                                            <option value="fresher" <?php if(!isset($post_job_server_msg)) echo  set_select('provider_experience', 'fresher'); ?>>Fresher</option>	                                            <option value="1 year" <?php if(!isset($post_job_server_msg)) echo  set_select('provider_experience', '1 year'); ?>>1 Year</option>	                                            <option value="2 year" <?php if(!isset($post_job_server_msg)) echo  set_select('provider_experience', '2 year'); ?>>2 Years</option>	                                            <option value="3 year" <?php if(!isset($post_job_server_msg)) echo  set_select('provider_experience', '3 year'); ?>>3 Years</option>	                                            <option value="4 year" <?php if(!isset($post_job_server_msg)) echo  set_select('provider_experience', '4 year'); ?>>4 Years</option>	                                            <option value="5 year" <?php if(!isset($post_job_server_msg)) echo  set_select('provider_experience', '5 year'); ?>>5 Years</option>	                                            <option value="6 year" <?php if(!isset($post_job_server_msg)) echo  set_select('provider_experience', '6 year'); ?>>6+ Years</option>	                                        </select>	                                    </div>	                                </div>	                                <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_university');?></div>	                                <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_medium_of_instruction[]');?></div>	                                 <div class="clearfix"> </div>	                                <div class="col-md-6 col-sm-6 col-xs-12">	                                    <div class="form-group">	                                        <label>University <span class="alert">*</span></label> <br>	                                        <select id="sel_a" class="post_job_subjects select-university form-control form_inputs" name="provider_university">	                                        	<option value="">Select a University</option>	                                        	<?php	                                        	foreach ($university as $universities) {	                                        		if(!isset($post_job_server_msg)){	                                        			echo "<option value='".strtolower($universities['education_board_id'])."' ".set_select('provider_university', $universities['education_board_id']).">".$universities['university_board_name']."</option>";		                                        		}													else{														echo "<option value='".strtolower($universities['education_board_id']).">".$universities['university_board_name']."</option>";													}												} 	                                        	?>	                                        </select>	                                    </div>	                                </div>	                                <div class="col-md-6 col-sm-6 col-xs-12">		                                    <div class="form-group">	                                        <label>Medium of Instruction <span class="alert">*</span></label>	                                        <select id="sel_a" class="select-medium form-control form_inputs" name="provider_medium_of_instruction[]" multiple="">	                                        	<option value="">Select a Medium</option>	                                        	<?php	                                        	foreach ($medium as $mediums) {	                                        		if(!isset($post_job_server_msg)){														echo "<option value='".strtolower($mediums['language_id'])."' ".set_select('provider_medium_of_instruction[]', strtolower($mediums['language_id'])).">".$mediums['language_name']."</option>";													}													else{														echo "<option value='".strtolower($mediums['language_id'])."'>".$mediums['language_name']."</option>";													} 												}	                                        	?>	                                        </select>	                                    </div>	                                </div>	                                <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_min_salary');?></div>	                                <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_max_salary');?></div>                                 	<div class="clearfix"> </div>	                                <div class="col-md-6 col-sm-6 col-xs-12">	                                    <div class="form-group">	                                        <label>Minimum Salary <span class="alert">*</span></label>	                                        <input id="minimum_salary_vacancy" type="text" placeholder="Minimum salary" class="form-control form_inputs numeric_value" maxlength="9" data-minlength="4" data-name="Minimum Salary" name="provider_min_salary" value="<?php if(!isset($post_job_server_msg)) echo set_value('provider_min_salary'); ?>">	                                    </div>	                                </div>	                                <div class="col-md-6 col-sm-6 col-xs-12">	                                    <div class="form-group">	                                        <label>Maximum Salary <span class="alert">*</span></label>	                                        <input id="maximum_salary_vacancy" data-minlength="4" maxlength="9" data-name="Maximum Salary" type="text" placeholder="Maximum salary" class="form-control form_inputs numeric_value" name="provider_max_salary"  value="<?php if(!isset($post_job_server_msg)) echo set_value('provider_max_salary'); ?>">	                                    </div>	                                </div>	                                <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_accom_instruction');?></div>                                 	<div class="clearfix"> </div>	                                <div class="col-md-6 col-sm-6 col-xs-12">	                                    <div class="form-group">	                                        <label>Accommodation Information <span class="alert">*</span></label>	                                        <input id="accomadation" maxlength="150" type="text" placeholder="Accommodation" class="form-control form_inputs alpha_value" name="provider_accom_instruction" value="<?php if(!isset($post_job_server_msg)) echo set_value('provider_accom_instruction'); ?>">	                                    </div>	                                </div>	                                <div class="clearfix"> </div>	                                <div class="col-md-6 col-sm-6 col-xs-12"><?php echo form_error('provider_job_instruction');?></div>                                 	<div class="clearfix"> </div>	                                <div class="col-md-12 col-sm-12 col-xs-12">	                                    <div class="form-group">	                                        <label>Job Details &amp; Instructions <span class="alert">*</span></label>	                                        <textarea  data-name="Job Details" data-minlength="50" maxlength="700" name="provider_job_instruction" class="provider_job_instruction form_inputs"><?php if(!isset($post_job_server_msg)) echo set_value('provider_job_instruction'); ?> </textarea>	                                    </div>	                                </div>	                                <div class="col-md-12 col-sm-12 col-xs-12">	                                    <button type="submit" class="btn btn-default pull-right">Publish Job <i class="fa fa-angle-right"></i></button>	                                </div>	                            <?php echo form_close(); ?>                           </div>                            <?php } else { ?>                    			<h2>You are not eligible to post new jobs until subscribe. If you want subscribe <a href="<?php echo base_url().'provider/subscription' ?>">click here...</a></h2>                    		<?php } ?>                       </div>                    </div>                </div>            </div>        </section><?php include('include/footermenu.php'); ?><?php include('include/footer.php'); ?><!--datepicker--><script type="text/javascript" src="<?php echo base_url(); ?>assets/js/zebra_datepicker.js"></script> <?php include('include/footercustom.php'); ?>        <script type="application/javascript">//Date Picker	$('.provider_open_date').Zebra_DatePicker({    	direction: true,        format: 'd/m/Y',        show_icon: true,        pair: $('.provider_close_date'),        onClose: function() {        	 $('.provider_close_date').val('').click();        }    });     $('.provider_close_date').Zebra_DatePicker({    	direction: true,        format: 'd/m/Y',    });    $('.provider_start_date').Zebra_DatePicker({    	direction: true,        format: 'd/m/Y',        show_icon: true,        pair: $('.provider_end_date'),        onClose: function() {        	 $('.provider_end_date').val('').click();        }    });     $('.provider_end_date').Zebra_DatePicker({    	direction: true,        format: 'd/m/Y',    });  </script>

