<?php include('include/header.php'); ?><?php include('include/menus.php'); //echo "<pre>"; print_r($applyjob); echo "</pre>";//It will returns home as output?>         <section class="job-breadcrumb">            <div class="container">                <div class="row">                                       <div class="col-md-12 col-sm-12 co-xs-12 text-left">                        <div class="bread">                            <ol class="breadcrumb">                                <li><a href="<?php echo base_url();?>">Home</a> </li>                                <li class="active">Posted Job Details</li>                            </ol>                        </div>                    </div>                </div>            </div>        </section>        <section class="single-job-section">            <div class="container">                <div class="row">                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">                        <div class="col-md-8 col-sm-8 col-xs-12">                            <div class="single-job-page">                                <div class="job-short-detail">                                    <div class="heading-inner">                                        <p class="title">Job Details</p>                                    </div>                                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">                                        <dl>                                        	<dt>Job ID:</dt>                                            <dd><?php echo $applyjob['vacancies_id'];?></dd>                                            <?php if(!empty($applyjob['vacancies_job_title'])){ ?>                                            <dt>Job title:</dt>                                            <dd><?php echo ucfirst($applyjob['vacancies_job_title']);?></dd>                                            <?php } ?>                                            <?php if(!empty($applyjob['vacancies_course_type'])){ ?>                                            <dt>Course type:</dt>                                            <dd><?php echo ucfirst($applyjob['vacancies_course_type']);?></dd>                                            <?php } ?>                                            <?php if(!empty($applyjob['subject_name'])){ ?>                                            <dt>Subject:</dt>                                            <dd><?php echo ucfirst($applyjob['subject_name']);?></dd>                                            <?php } ?>                                            <?php if(!empty($applyjob['class_level'])){ ?>                                            <dt>Class level:</dt>                                            <dd><?php echo ucfirst($applyjob['class_level']);?></dd>                                            <?php } ?>                                            <?php											 $mediums = '';											 foreach ($medium as $moi) {												 $mediums .= $moi['language_name'].', ';											 }											 $trimed_mediums = trim($mediums, ", ");											 $qualifications = '';											 foreach ($qualification as $quali) {												 $qualifications .= $quali['educational_qualification'].', ';											 }											 $trimmed_qualifications = trim($qualifications, ", ");											?>                                            <?php if(!empty($qualifications)){ ?>                                            <dt>Qualification:</dt>                                            <dd><?php echo $qualifications;?></dd>                                            <?php } ?>                                            <?php if(!empty($mediums)){ ?>                                            <dt>Medium:</dt>                                            <dd><?php echo $mediums;?></dd>                                            <?php } ?>                                            <?php if(!empty($applyjob['university_board_name'])){ ?>                                            <dt>University/board:</dt>                                            <dd><?php echo ucfirst($applyjob['university_board_name']);?></dd>                                            <?php } ?>                                            <?php if(!empty($applyjob['vacancies_available'])){ ?>                                            <dt>No. of Vacancies:</dt>                                            <dd><?php echo $applyjob['vacancies_available'];?></dd>											<?php } ?>                                             <?php if(!empty($applyjob['vacancy_type'])){ ?>                                            <dt>Employment Type:</dt>                                            <dd><?php echo ($applyjob['vacancy_type'] == "full" ? "Full Time" : ($applyjob['vacancy_type'] == "part" ? "Part Time" : "Not Mention")); ?></dd>                                            <?php } ?>                                            <?php if(!empty($applyjob['vacancies_experience'])){ ?>                                            <dt>Job Experience:</dt>                                            <dd><?php echo $applyjob['vacancies_experience'];?></dd>                                            <?php } ?>                                            <?php if(!empty($applyjob['vacancies_interview_start_date'])){ ?>                                            <dt>Interview Start Date:</dt>                                            <dd><?php echo $applyjob['vacancies_interview_start_date'];?></dd>											<?php } ?>                                            <?php if(!empty($applyjob['vacancies_end_date'])){ ?>                                            <dt>Interview End Date:</dt>                                            <dd><?php echo $applyjob['vacancies_end_date'];?></dd>                                            <?php } ?>                                            <?php if(!empty($applyjob['vacancies_accommodation_info'])){ ?>                                            <dt>Accommodation:</dt>                                            <dd><?php echo $applyjob['vacancies_accommodation_info'];?></dd>											<?php } ?>											<?php if(!empty($applyjob['vacancies_created_date'])){ ?>                                            <dt>Job Posted On:</dt>                                            <dd><?php echo $applyjob['vacancies_created_date'];?></dd>											<?php } ?>											<?php if(!empty($applyjob['vacancies_start_salary']) && !empty($applyjob['vacancies_end_salary'])){ ?>                                            <dt>Job Salary Range(s):</dt>                                            <dd><?php echo $applyjob['vacancies_start_salary'];?> - <?php echo $applyjob['vacancies_end_salary'];?></dd>                                            <?php } ?>                                        </dl>                                    </div>                                </div>                                <div class="heading-inner">                                    <p class="title">Job Description</p>                                </div>                                <div class="job-desc job-detail-boxes">                                    <p>                                        <?php echo $applyjob['vacancies_instruction'];?>                                    </p>                                </div>                            </div>                        </div>                        <div class="col-md-4 col-sm-4 col-xs-12">                            <aside>                                <div class="company-detail">                                    <div class="company-img">                                    	<div class="img-holder">	                                        <?php		                                    if(!empty($applyjob['organization_logo'])) :		                                        $thumb_image = explode('.', end(explode('/',$applyjob['organization_logo'])));		                                        $thumb = $thumb_image[0]."_thumb.".$thumb_image[1];		                                    ?>		                                    <img src="<?php echo base_url().PROVIDER_UPLOAD.$thumb; ?>" class="img-responsive" alt="">		                                    <?php		                                    else :		                                    ?>		                                    <img src="<?php echo base_url()."assets/images/institution.png"; ?>" class="img-responsive" alt="Not Found">		                                    <?php		                                    endif;		                                    ?>                                        </div>	                                    </div>                                    <div class="company-contact-detail">                                        <table>                                            <tr>                                                <th>Name:</th>                                                <td> <?php echo $applyjob['organization_name'];?></td>                                            </tr>                                            <tr>                                                <th>Email:</th>                                                <td> <?php echo $applyjob['registrant_email_id'];?></td>                                            </tr>                                            <tr>                                                <th>Phone:</th>                                                <td> <?php echo $applyjob['registrant_mobile_no'];?></td>                                            </tr>                                            <tr>                                                <th>Address:</th>                                                <td>                                                    <?php echo $applyjob['organization_address_1'];?>,                                                    <?php echo $applyjob['organization_address_2'];?>,                                                    <?php echo $applyjob['organization_address_3'];?>.                                                </td>                                            </tr>                                        </table>                                    </div>                                </div>                            </aside>                            <!-- <div class="single-job-map">                                <div id="map-contact"></div>                            </div> -->                        </div>                    </div>                </div>            </div>        </section>  <?php include('include/footermenu.php'); ?>  <?php include('include/footer.php'); ?>  <?php include('include/footercustom.php'); ?>