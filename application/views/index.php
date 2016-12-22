<?php include('include/header.php'); ?><?php include('include/menus.php');?>			<!--Slider-->			<section class="slidershow-bg home-slidershow">				<div class="container">					<div class="row">						<ul class="cb-slideshow">							<li>								<span>Image 01</span>							</li>							<li>								<span>Image 02</span>							</li>							<li>								<span>Image 03</span>							</li>							<li>								<span>Image 04</span>							</li>						</ul>						<div id="search-icon" class="col-sm-offset-11 col-sm-1" style="display:none;" ><a><i class="fa fa-search"></i> Search..</a></div>                  		<div  class="col-md-12 col-sm-12 col-xs-12  nopadding">		                  <div class="set-srch-strip">		                  	<a class="search-close" ><i class="fa fa-close"> </i></a>		                   	<div id="home_search_bar" class="search-form-contaner" >		                      	<?php echo form_open("vacancies");?>									<div class="col-md-4 col-sm-4 col-xs-12 nopadding">										<div class="form-group">											<input class="form-control" id="hook_name" name="search_keyword" placeholder="Keyword" type="text" value="">										</div>									</div>									<div class="col-md-3 col-sm-3 col-xs-12 nopadding">										<div class="form-group">											<select name="search_min_amount" class="select-category form-control">												<option value="">Salary</option>												<option value="5000"> 5000 +</option>												<option value="10000"> 10000 + </option>												<option value="15000"> 15000 + </option>												<option value="20000"> 20000 + </option>												<option value="25000"> 25000 + </option>											</select>										</div>									</div>									<div class="col-md-3 col-sm-3 col-xs-12 nopadding">										<div class="form-group">											<select name="search_location" class="select-location form-control">												<option value="">Job location</option>												<?php												foreach ($alldistrict as $district) {													echo '<option value="'.$district['district_id'].'">'.$district['district_name'].'</option>';												}												?>											</select>										</div>									</div>									<div class="col-md-2 col-sm-2 col-xs-12 nopadding">										<div class="form-group form-action">										<button class="btn btn-default btn-search-submit">Search											<i class="fa fa-angle-right"></i></a>											</button>										</div>									</div>								 <?php echo form_close(); ?>		                  </div><!--#home-search-bar-->  		                 </div> <!--set-srch-strip-->                	</div><!--col-md-12-->            	 </div>         	</div>   	 </section>    <!--End of Slider-->       <!--Featured Jobs-->    <section class="featured-jobs">        <div class="container">            <div class="row">                <div class="col-md-12 col-sm-12 col-xs-12">                    <div class="col-md-12 col-sm-12 col-xs-12">                        <div class="Heading-title black">                            <h1>Featured Jobs</h1>                            <p>Wondering which jobs might best suit you? Browse our advice on career planning and careers open to you with your degree for ideas. You can also sign up to Teacherportal for vacancy alerts based on career areas that interest you.</p>                        </div>                    </div>                                        <div class="owl-testimonial-2">                    <?php foreach ($job_results as $jobvalue): ?>	                    <div class="slide-featured-jobs">	                    	<div class="featured-image-box">	                            <div class="img-box"><img src="<?php echo base_url(); ?>assets/images/company/4.png" class="img-responsive center-block" alt=""></div>	                            <div class="content-area">	                                <div class="">	                                    <h4><?php echo $jobvalue['vacancies_job_title']; ?></h4>	                                    <p><?php echo $jobvalue['organization_name']; ?></p>	                                </div>	                                <div class="feature-post-meta">	                                    <i class="fa fa-clock-o"> 	                                    <?php echo $jobvalue['vacancies_created_date']; ?></i>									</div>	                                <div class="feature-post-meta-bottom"><a href="<?php echo base_url(); ?>seeker/applynow/<?php echo $jobvalue['vacancies_id'];?>" class="apply pull-right"> Apply Now</a> </div>	                            </div>	                            <!--Only required rule to the whole div clickable work--> 	                            <a href='javascript:void(0)' onclick='window.location = "<?php echo base_url(); ?>seeker/applynow/<?php echo $jobvalue['vacancies_id'];?>"'>        							<span class='featured-jobs-grid-link'></span>    							</a>    							<!--end rule-->                            </div>                            	                    </div>	                    <?php endforeach; ?>	                </div>                    <div class="col-md-12 col-sm-12 col-xs-12">                        <div class="load-more-btn">                            <a class="btn btn-default" href="<?php echo base_url();?>"> View All <i class="fa fa-angle-right"></i> </a>                        </div>                    </div>                </div>            </div>        </div>   </section>   <!--End of featured jobs-->					<!--Counter-->		<section class="facts">			<div class="container">				<div class="row">					<div class="col-sm-4 col-md-4 col-xs-4">						<div class="fact-box">							<div class="single-facts-area">								<div class="facts-icon">									<i class="icon-megaphone"></i>								</div>								<span class="counter"><?php echo($totalvacancy); ?></span>								<h3>Jobs</h3>							</div>						</div>					</div>					<div class="col-sm-4 col-md-4 col-xs-4">						<div class="fact-box">							<div class="single-facts-area">								<div class="facts-icon">									<i class="icon-profile-male"></i>								</div>								<span class="counter"><?php echo($totalcandidate); ?></span>								<h3>Members</h3>							</div>						</div>					</div>					<div class="col-sm-4 col-md-4 col-xs-4">						<div class="fact-box">							<div class="single-facts-area">								<div class="facts-icon">									<i class="icon-toolbox"></i>								</div>								<span class="counter"><?php echo($totalorganization); ?></span>								<h3>Company</h3>							</div>						</div>					</div>				</div>			</div>		</section>		<!--End of Counter-->					<!--End of Premium adds-->	<?php include('include/footermenu.php'); ?>		<?php include('include/footer.php'); ?>