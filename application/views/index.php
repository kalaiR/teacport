<?php include('include/header.php'); ?><?php include('include/menus.php');?>			<!--Slider-->			<section class="slidershow-bg home-slidershow">				<div class="container">					<div class="row">						<ul class="cb-slideshow">							<li>								<span>Image 01</span>							</li>							<li>								<span>Image 02</span>							</li>							<li>								<span>Image 03</span>							</li>							<li>								<span>Image 04</span>							</li>							<li>								<span>Image 05</span>							</li>							<li>								<span>Image 06</span>							</li>						</ul>						<div id="search-icon" class="col-sm-offset-11 col-sm-1" style="display:none;" ><a><i class="fa fa-search"></i> Search..</a></div>                  		<div  class="col-md-12 col-sm-12 col-xs-12  nopadding">		                  <div class="set-srch-strip">		                  	<a class="search-close" ><i class="fa fa-close"> </i></a>		                   	<div id="home_search_bar" class="search-form-contaner" >		                      	<?php echo form_open("vacancies");?>									<div class="col-md-4 col-sm-4 col-xs-12 nopadding">										<div class="form-group">											<input class="form-control" id="hook_name" name="search_keyword" placeholder="Job Title" type="text" value="">										</div>									</div>									<div class="col-md-3 col-sm-3 col-xs-12 nopadding">										<div class="form-group">											<input class="form-control numeric_value" id="" name="search_min_amount" placeholder="Minimum Salary" maxlength="9" type="text" value="">											<!-- <select name="search_min_amount" class="select-category form-control">												<option value="">Salary</option>												<option value="5000"> 5000 +</option>												<option value="10000"> 10000 + </option>												<option value="15000"> 15000 + </option>												<option value="20000"> 20000 + </option>												<option value="25000"> 25000 + </option>											</select> -->										</div>									</div>									<div class="col-md-3 col-sm-3 col-xs-12 nopadding">										<div class="form-group">											<select name="search_location" class="select-location form-control">												<option value="">Job location</option>												<?php												if(!empty($alldistrict)) :												foreach ($alldistrict as $district) {													echo '<option value="'.$district['district_id'].'">'.$district['district_name'].'</option>';												}												endif;												?>											</select>										</div>									</div>									<div class="col-md-2 col-sm-2 col-xs-12 nopadding">										<div class="form-group form-action">										<button class="btn btn-default btn-search-submit">Search											<i class="fa fa-angle-right"></i></a>											</button>										</div>									</div>								 <?php echo form_close(); ?>		                  </div><!--#home-search-bar-->  		                 </div> <!--set-srch-strip-->                	</div><!--col-md-12-->            	 </div>         	</div>   	 </section>    <!--End of Slider-->        <!--Prmium adds & Latest Jobs-->    <section class="tr_latest_updates">        <div class="container">            <div class="row">            	<div class="col-md-12 col-sm-12 col-xs-12">            		<div class="Heading-title black">                        <h1>Latest Updates</h1>                    </div>            		<!--Premium adds-->                    <div class="col-md-8 col-sm-8 col-xs-12 slide_premium_adds">                    	  <div id="myCarousel" class="carousel slide" data-ride="carousel">						    <!-- Indicators -->						    <?php if(!empty($premiumads)){ ?>						    <ol class="carousel-indicators">						   	<?php						    	foreach($premiumads as $keys => $values){							 		if ($keys==0){							 		?>							 		 <li data-target="#myCarousel" data-slide-to="0" class="active"></li>							 		<?php							 		}									else{									?>									<li data-target="#myCarousel" data-slide-to="<?php echo $keys; ?>"></li>									<?php									}}							 ?>						    </ol>							<?php } ?>						    <!-- Wrapper for slides -->						    <div class="carousel-inner" role="listbox">							 <?php if(!empty($premiumads)){							 	foreach($premiumads as $key => $value){							 		if ($key==0){							 ?>									 <div class="item active">								        <img src="<?php echo base_url();?>uploads/jobprovider/premiumad/<?php echo $value['ads_image_path']?>" alt="Chania" width="460" height="345">								      </div>							 <?php							 		}									else{							?>									<div class="item">								        <img src="<?php echo base_url();?>uploads/jobprovider/premiumad/<?php echo $value['ads_image_path']?>" alt="Chania" width="460" height="345">								      </div>							<?php									}							 ?>							 							      							<?php }} else { ?>								<div class="item active">						        <img src="<?php echo base_url();?>assets/images/premiumads.png" alt="Chania" width="460" height="345">						      </div>							<?php } ?>						    </div>												    <!-- Left and right controls -->						    <?php if(!empty($premiumads)){ ?>						    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">						      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>						      <span class="sr-only">Previous</span>						    </a>						    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">						      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>						      <span class="sr-only">Next</span>						    </a>						     <?php } ?>						  </div>						 	                    </div>                    <!--Latest News-->	                    <div class="col-md-4 col-sm-4 col-xs-12">                    	<div id = "flash_updates">	       	 				<table class="news_flash" style=" border-width:0.5px" width="350" cellspacing="0" cellpadding="0" bordercolor="#29AAFE" border="1" align="center" height="300" >								<tbody>									<tr>										<td width="100" valign="top">											 <table width="" border="0" >									        	 <tbody>												  	<tr>														<td>															<img src="<?php echo base_url(); ?>assets/images/news-flash4.jpg" height="100px" width="350px" alt="flash-news">														</td>												  	</tr>													<tr>														<td>															<marquee class="current-jobs-box"  behavior="scroll" direction="down" scrollamount="5" scrolldelay="250" onmousedown="this.stop()" onmouseover="this.stop()" onmousemove="this.stop()" onmouseout="this.start()" vspace="20" height="155">																<span class="three">																	<ul class="jobs-link" >																	<?php																	if(!empty($latest_news)) :																	foreach ($latest_news as $news_val) :																	?>																		<li class="list-update"><a href="<?php echo $news_val['latest_ news_redirect_link']; ?>" target="new"><?php echo $news_val['latest_news_title']; ?></a></li>																	<?php																	endforeach;																	else :																	?>																		<li class="list-update"> No latest news available</li>																	<?php																	endif;																	?>																    </ul>			                                                     </span>		                                                     </marquee>		                                                 </td>		                                               </tr>		                                          </tbody>		                                       </table> 		                                  </td>		                               </tr>		                         </tbody>		                    </table>	        			</div>                     </div>	                </div>            </div>         </div>     </section>                                  <!--Featured Jobs-->    <section class="featured-jobs">        <div class="container">            <div class="row">                <div class="col-md-12 col-sm-12 col-xs-12">                    <div class="col-md-12 col-sm-12 col-xs-12">                        <div class="Heading-title black">                            <h1>Featured Jobs</h1>                            <p>Wondering which jobs might best suit you? Browse our advice on career planning and careers open to you with your degree for ideas. You can also sign up to Teacherportal for vacancy alerts based on career areas that interest you.</p>                        </div>                    </div>                    <?php                    // echo "<pre>";						// print_r($job_results);						// echo "</pre>";					?>                    <div class="owl-testimonial-2">                    <?php                     	if(!empty($this->session->userdata("login_status")) && $this->session->userdata("login_status") == TRUE){ 			            	$user_type = $this->session->userdata("login_session");						}						else{							$user_type = array('user_type'=>'guest');						}                    	foreach ($job_results as $jobvalue):							                      ?>	                    <div class="slide-featured-jobs" onclick='window.location = "<?php echo base_url(); ?>seeker/applynow/<?php echo $jobvalue['vacancies_id'];?>"'>	                    	<div class="featured-image-box">	                            <div class="img-box">	                            	<?php if(@getimagesize($jobvalue['organization_logo']) && isset($jobvalue['organization_logo'])){	                            		$image_filename =  explode('.', end(explode('/',$jobvalue['organization_logo'])));	                            	?>                                		<img src="<?php echo base_url().'uploads/jobprovider/'.$image_filename[0].'_thumb.'.$image_filename[1];?>" alt="Teacher recruit" style="height: 119px" class="img-responsive center-block">                            		<?php } else { ?>                            			<img src="<?php echo base_url()."assets/images/institution.png"; ?>" class="img-responsive center-block" alt="Not Found">                                	<?php } ?>	                            		                            </div>	                            	                            <div class="content-area">	                                <div class="">	                                    <h4><?php echo $jobvalue['vacancies_job_title']; ?></h4>	                                    <p><?php echo $jobvalue['organization_name']; ?></p>	                                </div>	                                <div class="feature-post-meta">	                                    <i class="fa fa-clock-o"> 	                                    <?php echo $jobvalue['vacancies_created_date']; ?></i>									</div>	                                	                           	                            <!--Only required rule to the whole div clickable work--> 	                             <?php 					            		if($user_type['user_type'] =='provider' ){					        	?>					        				<div class="feature-post-meta-bottom"><a class="apply pull-right">View</a> </div>					        	<?php 											}										else {								?>											<div class="feature-post-meta-bottom"><a class="apply pull-right"> Apply Now</a> </div>								<?php										}								?>								</div>	                            <a href='javascript:void(0)' >        							<span class='featured-jobs-grid-link'></span>    							</a>    							<!--end rule-->                            </div>                            	                    </div>	                    <?php endforeach; ?>	                </div>                    <div class="col-md-12 col-sm-12 col-xs-12">                        <div class="load-more-btn">                            <a class="btn btn-default" href="<?php echo base_url()."vacancies"; ?>"> View All <i class="fa fa-angle-right"></i> </a>                        </div>                    </div>                </div>            </div>        </div>   </section>   <!--End of featured jobs-->					<!--Counter-->		<section class="facts">			<div class="container">				<div class="row">					<div class="col-sm-4 col-md-4 col-xs-4">						<div class="fact-box">							<div class="single-facts-area">								<div class="facts-icon">									<i class="icon-megaphone"></i>								</div>								<span class="counter"><?php echo($totalvacancy); ?></span>								<h3>Jobs</h3>							</div>						</div>					</div>					<div class="col-sm-4 col-md-4 col-xs-4">						<div class="fact-box">							<div class="single-facts-area">								<div class="facts-icon">									<i class="icon-profile-male"></i>								</div>								<span class="counter"><?php echo($totalcandidate); ?></span>								<h3>Members</h3>							</div>						</div>					</div>					<div class="col-sm-4 col-md-4 col-xs-4">						<div class="fact-box">							<div class="single-facts-area">								<div class="facts-icon">									<i class="icon-toolbox"></i>								</div>								<span class="counter"><?php echo($totalorganization); ?></span>								<h3>Company</h3>							</div>						</div>					</div>				</div>			</div>		</section>		<!--End of Counter-->		<?php		if(!empty($allposting)) :		?>		<section class="categories">            <div class="container">                <div class="row">                    <div class="col-md-12 col-sm-12 col-xs-12">                        <div class="col-md-12 col-sm-12 col-xs-12">                            <div class="Heading-title black">                                <h1>Applicable posts</h1>                                <p>You can apply for the following posts at Schools through this website</p>                            </div>                        </div>                        <div class="col-md-12 col-sm-12 col-xs-12 nopadding">                         	<div class="owl-testimonial-3">                         		<?php                         		$posting_array = array_chunk($allposting, 3, true);                         		foreach ($posting_array as $pos_val) :                         		?>                         		<div class="col-md-12 col-sm-12 col-xs-12 nopadding">                         			<?php                         			foreach ($pos_val as $pos) :                         			?>	                                <div class="app_post">	                                    <h5><span class="fa-stack fa-lg">									    <i class="fa fa-circle-thin fa-stack-2x"></i>									    <i class="fa fa-paper-plane-o fa-stack-1x"></i>										</span><?php echo $pos['posting_name']; ?></h5>	                                </div>	                               <?php		                         	endforeach;		                         	?>	                         	</div>		                         	<?php	                         	endforeach;	                         	?>	                        </div>		                        </div>                    </div>                </div>            </div>        </section>		<?php		endif;		?>			<!--End of Premium adds-->	<?php include('include/footermenu.php'); ?>		<?php include('include/footer.php'); ?>	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/counterup.js"></script>	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl-carousel.js"></script>	<?php include('include/footercustom.php'); ?>	 <script type="application/javascript">	 $(document).ready(function() {	 	$('.counter').counterUp({	        delay: 10,	        time: 2000	    });	    $(".owl-testimonial-2").owlCarousel({	        autoPlay: true,	        slideSpeed: 2000,	        pagination: false,	        navigation: false,	        loop: true,	        items: 3,	        itemsDesktop: [1199, 3],	        itemsDesktopSmall: [980, 2],	        itemsTablet: [768, 2],	        itemsTabletSmall: false,	        itemsMobile: [479, 1]	    });	    $(".owl-testimonial-3").owlCarousel({	        autoPlay: true,	        slideSpeed: 2000,	        pagination: false,	        navigation: false,	        loop: true,	        items: 4,	        itemsDesktop: [1199, 3],	        itemsDesktopSmall: [980, 2],	        itemsTablet: [768, 2],	        itemsTabletSmall: false,	        itemsMobile: [479, 1]	    });	 });	 </script>