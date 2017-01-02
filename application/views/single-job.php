<?php include('include/header.php'); ?><?php include('include/menus.php'); // echo "<pre>"; print_r($applyjob); echo "</pre>";//It will returns home as output$user_data =$this->session->userdata('login_session');?> <section class="job-breadcrumb">    <div class="container">        <div class="row">            <div class="col-md-6 col-sm-7 co-xs-12 text-left">                <h3> <?php if(!empty($applyjob)) echo $applyjob['vacancies_job_title']; ?></h3>            </div>            <div class="col-md-6 col-sm-5 co-xs-12 text-right">                <div class="bread">                    <ol class="breadcrumb">                        <li><a href="<?php echo base_url();?>">Home</a> </li>                        <li><a href="<?php echo base_url(); ?>job_seeker/dashboard">Dashboard</a> </li>                        <li class="active">Job Details</li>                    </ol>                </div>            </div>        </div>    </div></section><section class="single-job-section">    <div class="container">        <div class="row">            <p class="success_server_msg"><?php if(isset($post_job_server_msg)) echo $post_job_server_msg; ?></p>            <?php            if(!empty($applyjob)) :            ?>            <div class="col-md-12 col-sm-12 col-xs-12 nopadding">                <?php echo form_open('seeker/applynow/'.$current_jobvacancy_id, 'id="post_job_form" class="row"'); ?>                        <div class="col-md-8 col-sm-8 col-xs-12">                            <div class="single-job-page">                                <div class="job-short-detail">                                    <div class="heading-inner">                                        <p class="title">Job Details</p>                                    </div>                                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">                                        <dl>                                            <dt>No. of Vacancies :</dt>                                            <dd><?php echo $applyjob['vacancies_available']; ?></dd>                                            <dt>Job Experience :</dt>                                            <dd><?php echo $applyjob['vacancies_experience']; ?></dd>                                                                                        <dt>Interview Start Date :</dt>                                            <dd><?php echo date('d M Y',strtotime($applyjob['vacancies_interview_start_date'])); ?></dd>                                            <dt>Interview End Date :</dt>                                            <dd><?php echo date('d M Y',strtotime($applyjob['vacancies_end_date'])); ?></dd>                                            <dt>Job Posted On :</dt>                                            <dd><?php echo date('d M Y g:i A',strtotime($applyjob['vacancies_created_date'])); ?> </dd>                                            <?php                                            $qua_array = explode(',',$applyjob['vacancies_qualification_id']);                                            if(!empty($qualification) && !empty($qua_array)) :                                            ?>                                            <dt> Job Qualification :</dt> <dd>                                            <?php                                            foreach ($qualification as $qua_val) :                                            if(in_array($qua_val['educational_qualification_id'],$qua_array)) {                                                echo $qua_val['educational_qualification']." ";                                            }                                            endforeach;                                            ?>                                            </dd>                                            <?php                                            endif;                                            ?>                                            <?php                                            $med_array = explode(',',$applyjob['vacancies_medium']);                                            if(!empty($medium) && !empty($med_array)) :                                            ?>                                            <dt> Medium Of Instruction :</dt> <dd>                                            <?php                                            foreach ($medium as $med_val) :                                            if(in_array($med_val['language_id'],$med_array)) {                                                echo $med_val['language_name']." ";                                            }                                            endforeach;                                            ?>                                            </dd>                                            <?php                                            endif;                                            ?>                                            <dt>Job Salary Range(s):</dt>                                            <dd><?php echo $applyjob['vacancies_start_salary'];?> - <?php echo $applyjob['vacancies_end_salary'];?></dd>                                        </dl>                                    </div>                                </div>                                <div class="heading-inner">                                    <p class="title">Job Description</p>                                </div>                                <div class="job-desc job-detail-boxes">                                    <p>                                        <?php echo $applyjob['vacancies_instruction'];?>                                    </p>                                </div>                            </div>                        </div>                        <div class="col-md-4 col-sm-4 col-xs-12">                            <aside>                                <div class="apply-job">                                    <!-- <a class="btn btn-default" data-toggle="modal" data-target="#myModal"><i class="fa fa-upload"></i>Apply For Position</a> -->                                    <?php                                     if($user_data['user_type'] !='provider' ){                                    if(isset($post_job_server_msg) || $this->uri->segment(2)=='jobsapplieddetails' || $applied_status != 0)                                    {                                    ?>                                    <a class="disabled btn btn-default"> Applied <i class="fa fa-upload"></i></a>                                    <?php                                    }                                    else {                                                                    	?>                                    <button type="submit" class="btn btn-default"> Apply For Position <i class="fa fa-upload"></i></button>                                    <?php                                    }}                                    ?>                                    <!--  <a class="btn btn-default bookmark"><i class="fa fa-star"></i> Bookmark This Job</a> -->                                </div>                                <div class="company-detail">                                    <div class="company-img">                                        <img src="<?php echo $applyjob['organization_logo']; ?>" class="img-responsive" alt="">                                    </div>                                    <div class="company-contact-detail">                                        <table>                                            <tr>                                                <th>Name:</th>                                                <td><?php echo $applyjob['organization_name']; ?></td>                                            </tr>                                            <tr>                                                <th>Email:</th>                                                <td> <?php echo $applyjob['registrant_email_id']; ?> </td>                                            </tr>                                            <tr>                                                <th>Phone:</th>                                                <td> <?php echo $applyjob['registrant_mobile_no']; ?> </td>                                            </tr>                                            <?php                                             if(!empty($applyjob['organization_address_1']) || !empty($applyjob['organization_address_1']) || !empty($applyjob['organization_address_1'])) :                                            ?>                                            <tr>                                                <th>Address:</th>                                                <td>                                                    <?php echo $applyjob['organization_address_1']."<br/>"; ?>                                                    <?php echo $applyjob['organization_address_2']."<br/>"; ?>                                                    <?php echo $applyjob['organization_address_3']."<br/>"; ?>                                                </td>                                            </tr>                                            <?php                                            endif;                                            ?>                                        </table>                                    </div>                                </div>                            </aside>                        </div>                        <input type="hidden" name="current_vacany_id" id="current_vacany_id" value="<?php echo $current_jobvacancy_id;?>" />                        <?php echo form_close(); ?>                    </div>                    <?php                    else :                    ?>                    <p> No Description available for vacancy </p>                    <?php                    endif;                    ?>                </div>            </div>        </section>        <?php if($user_data['user_type'] !='provider' ){ ?>        	        <section class="featured-jobs">            <div class="container">                <div class="row">                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">                        <div class="col-md-12 col-sm-12 col-xs-12">                            <div class="Heading-title-left black small-heading">                                <h3>Related Jobs</h3>                            </div>                        </div>                                              	                        <div class="owl-testimonial-2">                    	<?php foreach ($relatedjob_results as $relatedjobvalue): ?>	                    <div class="slide-featured-jobs">	                    	<div class="featured-image-box">	                            <div class="img-box">                                    <?php if(@getimagesize($relatedjobvalue['organization_logo']) && isset($relatedjobvalue['organization_logo'])){ ?>                                        <img src="<?php echo $relatedjobvalue['organization_logo'];?>" alt="Not Found" style="height: 119px"class="img-responsive center-block">                                    <?php } else { ?>                                        <img src="<?php echo base_url()."assets/images/institution.png"; ?>" class="img-responsive center-block" alt="Not Found">                                    <?php } ?>                                                                    </div>	                            <div class="content-area">	                                <div class="">	                                    <h4><?php echo $relatedjobvalue['vacancies_job_title']; ?></h4>	                                    <p><?php echo $relatedjobvalue['organization_name']; ?></p>	                                </div>	                                <div class="feature-post-meta-bottom"> <span><?php echo $relatedjobvalue['vacancies_start_salary']; ?><small>/ month</small></span>                                     	 <?php 						            		if($user_data['user_type'] =='provider' ){							        	?>						        				<a href="<?php echo base_url(); ?>seeker/applynow/<?php echo $relatedjobvalue['vacancies_id'];?>" class="apply pull-right"> View </a>							        	<?php 												}											else {										?>												<a href="<?php echo base_url(); ?>seeker/applynow/<?php echo $relatedjobvalue['vacancies_id'];?>" class="apply pull-right"> Apply Now</a>										<?php											}										?>                                     </div>	                                	                            </div>	                            <!--Only required rule to the whole div clickable work--> 	                            <!-- <a href='javascript:void(0)' onclick='window.location = "single-job.html"'>        							<span class='featured-jobs-grid-link'></span>    							</a> -->    							<!--end rule-->                            </div>	                    </div>	                    <?php endforeach; ?>	                 </div>	                  </div>                </div>            </div>        </section>        <div class="brand-logo-area clients-bg">            <div class="clients-list">                               <?php                 if(!empty($relatedjob_results)) :                foreach ($relatedjob_results as $relatedjobvalue):                 	if(@getimagesize($relatedjobvalue['organization_logo'])) {        		?>                  <div class="client-logo">                                  <a href=""><img src="<?php echo  $relatedjobvalue['organization_logo']; ?>" class="img-responsive" alt="Brand Image" title="<?php echo $relatedjobvalue['organization_name']; ?>" /></a>                </div>                 <?php }                 endforeach;                endif;                ?>                                       </div>        </div>  		 <?php } ?>               <div class="modal fade apply-job-modal" id="myModal">            <div class="modal-dialog" role="document">                <div class="modal-content">                    <div class="modal-body contact-form-container">                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>                        <div class="job-modal">                            <h2>Want To Apply For this Job?</h2>                        </div>                        <form method="post" id="job-form">                            <div class="row clearfix">                                <div class="column col-md-12 col-sm-12 col-xs-12">                                    <div class="form-group">                                        <input type="text" class="form-control" name="Name" value="" placeholder="Full Name" required>                                    </div>                                    <div class="form-group">                                        <input type="email" class="form-control" name="email" value="" placeholder="Email" required>                                    </div>                                </div>                                <div class="column col-md-12 col-sm-12 col-xs-12">                                	<div class="form-group">                                        <select class="select-resume form-control">                                            <option value="">&nbsp;</option>                                            <option value="0">Software Engineering</option>                                            <option value="2">Graphic Designing</option>                                            <option value="3">Front end Developer</option>                                            <option value="4">IT Specialist</option>                                        </select>                                    </div>                                </div>                                <div class="column col-md-12 col-sm-12 col-xs-12">                                    <div class="input-group image-preview form-group">                                        <input type="text" placeholder="Upload Resume" class="form-control image-preview-filename" disabled="disabled">                                        <span class="input-group-btn">                                        <button type="button" class="btn btn-default image-preview-clear" style="display:none;">                                            <span class="glyphicon glyphicon-remove"></span> Clear                                        </button>                                        <div class="btn btn-default image-preview-input">                                            <span class="glyphicon glyphicon-folder-open"></span>                                            <span class="image-preview-input-title">Browse</span>                                            <input type="file" accept="file_extension" name="input-file-preview" />                                        </div>                                        </span>                                    </div>                                </div>                                <div class="column col-md-12 col-sm-12 col-xs-12">                                    <div class="form-group">                                        <textarea name="message" rows="6" class="form-control" placeholder="Cover Letter" required></textarea>                                    </div>                                </div>                                <div class="col-md-12 col-xs-12">                                    <div class="text-center">                                        <button type="submit" name="submit" class="btn btn-default btn-block">Apply Now</button>                                    </div>                                </div>                            </div>                        </form>                    </div>                </div>            </div>        </div>       <?php include('include/footermenu.php'); ?>  <?php include('include/footer.php'); ?>