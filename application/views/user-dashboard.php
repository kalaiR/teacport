<?php include('include/header.php');    include('include/menus.php');     // echo "<pre>"; print_r($initial_data); echo "</pre>";  // echo "<pre>"; print_r($user_data); echo "</pre>";  ?>        <section class="dashboard parallex">            <div class="container-fluid">                <div class="row">                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">                        <div class="dashboard-header">                            <div class="col-md-5 col-sm-5 col-xs-12">                                <div class="user-avatar ">                                    <img src="images/users/12.jpg" alt="" class="img-responsive center-block "></a>                                    <h3><?php echo $user_data['candidate_name'];?></h3>                                </div>                            </div>                            <div class="col-md-3 col-sm-3 col-xs-12">                                <div class="rad-info-box rad-txt-success">                                    <i class="icon icon-presentation"></i>                                    <span class="title-dashboard">Followings</span>                                    <span class="value"><span>250K</span></span>                                </div>                            </div>                            <div class="col-md-3 col-sm-3 col-xs-12">                                <div class="rad-info-box rad-txt-success">                                    <i class="icon icon-aperture"></i>                                    <span class="title-dashboard">Jobs Applied</span>                                    <span class="value"><span>200</span></span>                                </div>                            </div>                        </div>                    </div>                </div>            </div>        </section>        <section class="dashboard-body">            <div class="container">                <div class="row">                	<!--START Popup for Dashboard-->                	<!-- Modal -->                    <?php                     if($initial_data == 'show_popup') {?>					  <div class="modal fade" id="dashboard_popup_act" role="dialog">					    <div class="modal-dialog">					     <!-- Modal content-->					      <div class="modal-content">					        <div class="modal-header">					            <h4 class="modal-title">You are few steps away.. Kindly fill the deatils.</h4>					        </div>                                                        <?php echo form_open('seeker/initialdata'); ?>					        <div class="modal-body profile-edit">					        						          		<div class="form-group">	                                    <label>Name :<sup class="alert">*</sup></label>	                                    <input placeholder="" name="registrant_name" class="form-control" id="username" type="text" value="<?php echo $user_data['candidate_name'];?>" disabled>	                                </div>	                                <div class="form-group">	                                    <label>Email :<sup class="alert">*</sup></label>                                      	                                    <input placeholder="" name="registrant_email_id" class="form-control" id="email" type="text" value="<?php echo $user_data['candidate_email']; ?>" disabled>	                                </div>	                                <div class="form-group">	                                    <label>Mobile :<sup class="alert">*</sup></label>                                        <?php echo form_error('registrant_mobile_no'); ?>	                                    <input placeholder="" name="registrant_mobile_no" class="form-control" id="mobile" type="text">	                                </div>	                                <div class="form-group">	                                    <label>Password :<sup class="alert">*</sup></label>                                        <?php echo form_error('seekerpassword'); ?>	                                    <input placeholder="" name="seekerpassword" class="form-control" id="" type="password">	                                </div>	                                <div class="form-group">	                                    <label>Confirm Password :<sup class="alert">*</sup></label>                                        <?php echo form_error('seekerconfirmpassword'); ?>	                                    <input placeholder="" name="seekerconfirmpassword" class="form-control" id="" type="password">	                                </div>	                                   <input type="hidden" name="candidate_id" value="<?php echo $user_data['candidate_id'];?>">                                                              					        </div>                            <div class="modal-footer">                                <button type="submit" class="btn btn-default btn-block">Proceed</button>                            </div>                            <?php echo form_close(); ?>					      </div>					     </div>					  </div>                      <?php } ?>					  <!--END Popup for Dashboard-->                	<div class="col-md-12 col-sm-12 col-xs-12">                        <div class="col-md-4 col-sm-4 col-xs-12">                            <!--include left panel menu-->                            <?php include('include/user_dashboard_sidemenu.php'); ?>                        </div>                        <div class="col-md-8 col-sm-8 col-xs-12">                            <div class="job-short-detail">                                <div class="heading-inner">                                    <p class="title">Profile detail</p>                                </div>                                <!--Profile Progress-->                                <div id="seeker-profilebar">                                	<h6>Profile Completeness</h5>	                                <div class="progress">	                                	<div class="progress-bar progress-bar-info progress-bar-striped active" style="width:<?php echo (isset($user_data['candidate_profile_completeness'])?$user_data['candidate_profile_completeness']:'1'); ?>%;" role="progress-bar" aria-valuemin="0" aria-valuemax="100">                                        <?php echo $user_data['candidate_profile_completeness']; ?>%	                                	</div>	                                </div>                                </div>                                <dl>                                    <dt>First Name:</dt>                                    <dd><?php echo $user_data['candidate_name'];?></dd>                                    <dt>Father Name:</dt>                                    <dd>YYY</dd>                                    <dt>Date Of Birth:</dt>                                    <dd> 15 Feb,1987 </dd>                                    <dt>Phone:</dt>                                    <dd>+99 333 1234567 </dd>                                    <dt>Email:</dt>                                    <dd><?php echo $user_data['candidate_email'];?></dd>                                    <dt>Last Education:</dt>                                    <dd>Phd in Information Technology</dd>                                    <dt>Address:</dt>                                    <dd>234 Uptown new City Tower </dd>                                    <dt>City:</dt>                                    <dd>Chennai</dd>                                    <dt>State:</dt>                                    <dd>Tamil Nadu </dd>                                    <dt>Country:</dt>                                    <dd>India</dd>                                </dl>                            </div>                            <!-- <div class="heading-inner">                                <p class="title">Some Line About Me</p>                            </div>                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Lorem ipsum dolor sit amet. </p> -->                        </div>                    </div>                </div>            </div>        </section>        <div class="brand-logo-area clients-bg">            <div class="clients-list light-blue">                <div class="client-logo">                    <a href="user-dashboard.html#"><img src="images/clients/client_1.png" class="img-responsive" alt="Brand Image" /></a>                </div>                <div class="client-logo">                    <a href="user-dashboard.html#"><img src="images/clients/client_2.png" class="img-responsive" alt="Brand Image" /></a>                </div>                <div class="client-logo">                    <a href="user-dashboard.html#"><img src="images/clients/client_3.png" class="img-responsive" alt="Brand Image" /></a>                </div>                <div class="client-logo">                    <a href="user-dashboard.html#"><img src="images/clients/client_4.png" class="img-responsive" alt="Brand Image" /></a>                </div>                <div class="client-logo">                    <a href="user-dashboard.html#"><img src="images/clients/client_1.png" class="img-responsive" alt="Brand Image" /></a>                </div>                <div class="client-logo">                    <a href="user-dashboard.html#"><img src="images/clients/client_2.png" class="img-responsive" alt="Brand Image" /></a>                </div>                <div class="client-logo">                    <a href="user-dashboard.html#"><img src="images/clients/client_3.png" class="img-responsive" alt="Brand Image" /></a>                </div>                <div class="client-logo">                    <a href="user-dashboard.html#"><img src="images/clients/client_4.png" class="img-responsive" alt="Brand Image" /></a>                </div>            </div>        </div>        <?php include('include/footermenu.php'); ?>  <?php include('include/footer.php'); ?>