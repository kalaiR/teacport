 <?php include('include/header.php'); ?> <?php include('include/menus.php'); ?><section class="job-breadcrumb">    <div class="container">        <div class="row">                        <div class="col-md-12 col-sm-12 co-xs-12 text-left">                <div class="bread">                    <ol class="breadcrumb">                        <li><a href="<?php echo base_url();?>">Home</a> </li>                        <li class="active">Pricing</li>                    </ol>                </div>            </div>        </div>    </div></section><!--Pricing--><section class="pricing-section-1 light-grey">    <div class="container">        <div class="row">            <div class="col-md-12 col-sm-12 col-xs-12">            	<div class="Heading-title black">                   <h3>Pricing</h3>                    <p>View our basic pricing plans below, to get subscription for School Membership!</p>                   <p><span class="alert">*</span>Service Tax 15% applicable on all below pricing</p>                </div>                <?php                 if(!empty($subcription_plan)) :                $a = 0;        		foreach ($subcription_plan as $plan) :                if( $a % 2 == 0) :                    $class = "even";                else :                    $class = "odd";                endif;        		?>                <div class="col-md-4 col-sm-6 col-xs-12">                	<div class="price_ui_box ">                        <div class="single-price <?php echo $class; ?>" id="featured-price">                            <div class="price-header text-center">                                <p class="plan-title"><strong><?php echo $plan['subscription_plan'];?></strong></p>                            </div>                            <div class="plan-price text-center">                                <h4><span class="price_dollar"><i class="fa fa-inr" aria-hidden="true"></i></span><?php echo $plan['subscription_price']; ?></h4>                            </div>                            <div class="price-days text-center"><strong>for <?php echo $plan['subscription_validity_days']; ?> days</strong></div>                                                           <div class="price-features text-center">                                <ul>									<li>Max No of vacancy Posts: <?php echo $plan['subscription_max_no_of_posts']; ?></li>									<li>Sms Counts: <?php echo $plan['subcription_sms_counts']; ?></li>									<li>Email-count: <?php echo $plan['subscription_email_counts']; ?></li>									<li>Resume Download: <?php echo $plan['subcription_resume_download_count']; ?></li>									<li>Max No of ads: <?php echo $plan['subscription_max_no_of_ads']; ?></li>																	</ul>                            </div>                            <div class="price-footer price_plan_footer"> <a href="<?php echo base_url(); ?>login/provider?reason=plan_selection&planid=<?php echo $plan['subscription_id']; ?>" class="btn">Select Plan</a> </div>                        </div>                    </div>                </div>                                <?php                 $a++;                endforeach;                else :                ?>                <div class="">                    <h3> No Subscription available now! </h3>                </div>                <?php                 endif;                ?>            </div>         </div>    </div></section>        <!--Features-->        <section class="">            <div class="container">                <div class="row">                    <div class="col-md-12 col-sm-12 col-xs-12">                    	<div class="Heading-title black">                           <h3>Features</h3>                           <p>Specially crafted features that benefits your Institution by registering with us</p>                        </div>                        <div class="all-jobs-list-box2">                                <div class="job-box job-box-2  ribbon-content">                                    <p><i class="fa fa-desktop" aria-hidden="true"></i>  Specially designed for private schools to recruit well qualified, Prospective teachers throughout the year.</p>                                    <div class="ribbon base"><span class="feature">  Carefully Crafted </span></div>                                </div>                                <div class="job-box job-box-2 ribbon-content">                                    <p><i class="fa fa-link" aria-hidden="true"></i> This is not a brokering system. It is a software platform to connect Job seekers with Employers directly. </p>                                    <div class="ribbon base"><span class="feature">No Brokering </span></div>                                </div>                                <div class="job-box job-box-2 ribbon-content">                                    <p><i class="fa fa-graduation-cap" aria-hidden="true"></i> All types of schools CBSE, Matric, Anglo Indian, State Board (English /Tamil medium) can register.</p>                                    <div class="ribbon base"><span class="feature">For All Schools</span></div>                                </div>                                <div class="job-box job-box-2 ribbon-content">                                    <p><i class="fa fa-group" aria-hidden="true"></i> Membership valid for one year and you can recruit unlimited. Membership can be renewed for subsequent years. </p>                                    <div class="ribbon base"><span class="feature">Unlimited</span></div>                                </div>                                <div class="job-box job-box-2 ribbon-content">                                    <p><i class="fa fa-phone" aria-hidden="true"></i>  You can contact the job seekers directly and also you can conduct phone interview! </p>                                    <div class="ribbon base"><span class="feature">Talk Directly </span></div>                                </div>                                <div class="job-box job-box-2 ribbon-content">                                    <p><i class="fa fa-hand-o-right" aria-hidden="true"></i> Enhanced profile view to select appropriate teachers and staff for your school.</p>                                    <div class="ribbon base"><span class="feature">Crisp Profile</span></div>                                </div>                                <div class="job-box job-box-2 ribbon-content">                                    <p><i class="fa fa-fighter-jet" aria-hidden="true"></i> No need to wait longer. Teachers and staff members can be recruited any time and immediately.</p>                                    <div class="ribbon base"><span class="feature">Immediate Recruitment</span></div>                                </div>                                <div class="job-box job-box-2 ribbon-content">                                    <p><i class="fa fa-bullhorn" aria-hidden="true"></i> Post your vacancy list and complete recruitment Ad in our web site at free of cost. </p>                                    <div class="ribbon base"><span class="feature">Free vacancy Listing</span></div>                                </div>                                <div class="job-box job-box-2 ribbon-content">                                    <p><i class="fa fa-mobile" aria-hidden="true"></i> Send interview notification directly to the candidates who fulfill your needs through email / SMS. </p>                                    <div class="ribbon base"><span class="feature">SMS &amp; E-mail Notifications</span></div>                                </div>                            </div>                    </div>                </div>            </div>        </section>                          <?php include('include/footermenu.php'); ?> <?php include('include/footer.php'); ?> <?php include('include/footercustom.php'); ?>