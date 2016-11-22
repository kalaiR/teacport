<?php include('include/header.php'); ?>   <?php include('include/menus.php'); 		?>        <section class="company-dashboard">            <div class="container">                <div class="row">                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">                        <div class="dashboard-header">                            <div class="col-md-6 col-sm-6 col-xs-12">                                <div class="dashboard-header-logo-box">                                    <div class="company-logo">                                        <img src="images/company/s1.png" alt="" class="img-responsive center-block "></a>                                    </div>                                    <h3>Confidential Agency Pvt. Ltd</h3>                                    <p>2nd Downtown street, hellon city, vatnaam</p>                                    <ul class="social-links list-inline">                                        <li> <a href="company-dashboard.html#"><i class="icon-facebook"></i></a></li>                                        <li> <a href="company-dashboard.html#"><i class="icon-twitter"></i></a></li>                                        <li> <a href="company-dashboard.html#"><i class="icon-googleplus"></i></a></li>                                        <li> <a href="company-dashboard.html#"><i class="icon-linkedin"></i></a></li>                                    </ul>                                </div>                            </div>                            <div class="col-md-3 col-sm-3 col-xs-12">                                <div class="rad-info-box">                                    <i class="icon icon-profile-male"></i>                                    <span class="title-dashboard">SMS Count</span>                                    <span class="value"><span>250</span></span>                                </div>                                <div class="rad-info-box">                                    <i class="icon icon-presentation"></i>                                    <span class="title-dashboard">Jobs Posted</span>                                    <span class="value"><span>2500</span></span>                                </div>                            </div>                            <div class="col-md-3 col-sm-3 col-xs-12">                                <div class="rad-info-box">                                    <i class="icon icon-documents"></i>                                    <span class="title-dashboard">New Resume</span>                                    <span class="value"><span>60</span></span>                                </div>                                <div class="rad-info-box rad-txt-success">                                    <i class="icon icon-briefcase"></i>                                    <span class="title-dashboard">Visitors Count</span>                                    <span class="value"><span>150</span></span>                                </div>                            </div>                        </div>                    </div>                </div>            </div>        </section>                <section class="dashboard-body">            <div class="container">                <div class="row">                	 <!-- Modal -->                	 <?php if($initial_data == 'show_popup') {?>					  <div class="modal fade" id="dashboard_popup_act" role="dialog">					    <div class="modal-dialog">					     <!-- Modal content-->					      <div class="modal-content">					        <div class="modal-header">					          <h4 class="modal-title">You are few steps away.. Kindly fill the deatils.</h4>					        </div>                            <form id="company_dashboard_form" method="post">                            <div class="container">                                    <span class="error_test"> Please fill all required(*) fields </span>                                    <span class="error_mobile"> Please Enter Valid mobile number </span>                            </div>					        <div class="modal-body">					          		<div class="form-group">	                                    <label>Name: <span class="alert">*</span></label>	                                    <input placeholder="" name="registrant_name" class="form-control" id="username" type="text" value="<?php echo $user_data['registrant_name']; ?>" disabled>	                                </div>	                                <div class="form-group">	                                    <label>Email: <span class="alert">*</span></label>	                                    <input placeholder="" name="registrant_email_id" class="form-control" id="email" type="text" value="<?php echo $user_data['registrant_email_id']; ?>" disabled>	                                </div>	                                <div class="form-group">	                                    <label>Mobile: <span class="alert">*</span></label>	                                    <input placeholder="" name="registrant_mobile_no" class="form-control" id="mobile" type="text">	                                </div>	                                <div class="form-group">	                                    <label>Password: <span class="alert">*</span></label>	                                    <input placeholder="" name="" class="form-control" id="password" type="password">	                                </div>	                                <div class="form-group">	                                    <label>Confirm Password: <span class="alert">*</span></label>	                                    <input placeholder="" name="" class="form-control" id="cfpassword" type="password">	                                </div>					        </div>					        <div class="modal-footer">					          <button type="submit" class="btn btn-default btn-block">Proceed</button>					        </div>                            </form>					      </div> <!--modal-content-->					    </div> <!--modal-dialog-->					  </div><!---.modal-->				   <?php } ?>				 <!--End Popup for Dashboard-->                	                    <div class="col-md-12 col-sm-12 col-xs-12">                        <div class="col-md-4 col-sm-4 col-xs-12">                            <div class="profile-nav">                                <div class="panel">                                    <ul class="nav nav-pills nav-stacked">                                        <li class="active">                                            <a href="<?php echo base_url();?>job_provider/dashboard"> <i class="fa fa-user"></i> Dashboard</a>                                        </li>                                        <li>                                            <a href="<?php echo base_url();?>job_provider/companydbd_resume"> <i class="fa fa-file-o"></i>Inbox </a>                                        </li>                                        <li>                                            <a href="<?php echo base_url();?>job_provider/companydbd_browsejobs"> <i class="fa  fa-list-ul"></i> Browse Candidate</a>                                        </li>                                        <li class="provider-jobs">                                            <a href="#"><i class="fa  fa-list-alt"></i> Jobs</a>                                            <ul>                                            	<li><a href="<?php echo base_url();?>job_provider/companydbd_postjobs"> <i class="fa  fa-list-alt"></i>New Jobs</a></li>                                            	<li><a href="<?php echo base_url();?>job_provider/companydbd_postedjobs"> <i class="fa  fa-list-alt"></i>Posted Jobs</a></li>                                            </ul>                                        </li>                                        <li>                                            <a href="<?php echo base_url();?>job_provider/companydbd_postadds"> <i class="fa  fa-bookmark-o"></i> Post Adds </a>                                        </li>                                        <li>                                            <a href="<?php echo base_url();?>job_provider/companydbd_subscription"> <i class="fa fa-money"></i> Subcribe Plan</a>                                        </li>                                        <li>                                            <a href="<?php echo base_url();?>job_provider/companydbd_feedback"> <i class="fa fa-commenting-o"></i> Feedback </a>                                        </li>                                        <li>                                            <a href="<?php echo base_url();?>job_provider/companydbd_changepwd"> <i class="fa fa-key" aria-hidden="true"></i> Change Password </a>                                        </li>                                    </ul>                                </div>                            </div>                        </div>                        <div class="col-md-8 col-sm-8 col-xs-12">                            <div class="job-short-detail">                                <div class="heading-inner">                                    <p class="title">Profile detail</p>                                </div>                                <!--Profile Progress bar-->                                <div id="provider-profilebar">                                	<h6>Profile Completeness</h5>	                                <div class="progress">	                                	<div class="progress-bar progress-bar-info progress-bar-striped active" style="width:25%;" role="progress-bar" aria-valuemin="0" aria-valuemax="100">	                                	  25%		                                	</div>	                                </div>                                </div><!--End Profile Progress bar-->                                <dl>                                    <dt>Industry:</dt>                                    <dd>CBSE School</dd>                                    <dt>Type of Business:</dt>                                    <dd> Single Proprietorship </dd>                                    <dt>Established In:</dt>                                    <dd> 15 July, 2010 </dd>                                    <dt>Phone:</dt>                                    <dd>+91 12345 67899 </dd>                                    <dt>Email:</dt>                                    <dd>martine-aug234@domain.com </dd>                                    <dt>No. of Employees:</dt>                                    <dd>55</dd>                                    <dt>Address:</dt>                                    <dd>234 Uptown new City Tower </dd>                                    <dt>City:</dt>                                    <dd>Chennai</dd>                                    <dt>State:</dt>                                    <dd>Tamil Nadu </dd>                                    <dt>Country:</dt>                                    <dd>India </dd>                                </dl>                            </div>                            <div class="heading-inner">                                <p class="title">Some Line About Our Company</p>                            </div>                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Lorem ipsum dolor sit amet. </p>                        </div> <!--end of right panel-->                                                                                      </div>                                   </div>            </div>                    </section><?php include('include/footermenu.php'); ?> <?php include('include/footer.php'); ?>  <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>  --> 