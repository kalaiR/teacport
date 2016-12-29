 <?php include('include/header.php'); ?> <?php include('include/menus.php'); ?>        <section class="job-breadcrumb">            <div class="container">                <div class="row">                    <div class="col-md-6 col-sm-7 co-xs-12 text-left">                        <h3>Contact Us</h3>                    </div>                    <div class="col-md-6 col-sm-5 co-xs-12 text-right">                        <div class="bread">                            <ol class="breadcrumb">                                <li><a href="<?php echo base_url();?>">Home</a> </li>                                <li class="active">Contact Us</li>                            </ol>                        </div>                    </div>                </div>            </div>        </section>        <section class="contact-us ">            <div class="container">                <div class="row">                    <div class="col-md-12 col-sm-12 col-xs-12">                        <div class="row">                        	<?php if($this->session->userdata('login_status') === FALSE){ ?>                        		 <div>                                	<p class="success_server_msg"><?php if(isset($contact_server_msg)) echo $contact_server_msg; ?></p>                                </div>                            <div class="col-md-8 col-sm-12 col-xs-12">                                <div class="Heading-title-left black small-heading">                                    <h3>Get In Touch With us</h3>                                </div>                                                               <?php echo form_open('','id="contactForm"'); ?>                               		                                    <div class="col-sm-12">                                      <p class="error_test">Please fill all fields</p>                                	</div>                                	<div class="col-md-6 col-sm-12">                                        <div class="form-group">                                		<?php echo form_error('contact_us_name'); ?>                                		</div>                                    </div>                                    <div class="col-md-6 col-sm-12">                                        <div class="form-group">                                		<?php echo form_error('contact_us_email'); ?>                                		</div>                                    </div>                                    <div class="col-md-6 col-sm-12">                                        <div class="form-group">                                            <label>Name <span class="required">*</span></label>                                            <input id="name" placeholder="" class="form-control" type="text" name="contact_us_name">                                        </div>                                    </div>                                    <div class="col-md-6 col-sm-12">                                        <div class="form-group">                                            <label>Email <span>*</span></label>                                            <input id="email" placeholder="" class="form-control" type="text" name="contact_us_email">                                        </div>                                    </div>                                    <div class="col-md-6 col-sm-12">                                        <div class="form-group">                                		<?php echo form_error('contact_us_mobile'); ?>                                		</div>                                    </div>                                    <div class="col-md-6 col-sm-12">                                        <div class="form-group">                                		<?php echo form_error('contact_us_subject'); ?>                                		</div>                                    </div>                                    <div class="col-md-6 col-sm-12">                                        <div class="form-group">                                            <label>Phone <span class="required">*</span></label>                                            <input id="mobile" placeholder="" class="form-control" type="text" name="contact_us_mobile">                                        </div>                                    </div>                                    <div class="col-md-6 col-sm-12">                                        <div class="form-group">                                            <label>Subject <span class="required">*</span></label>                                            <input id="subject" placeholder="" class="form-control" type="text" name="contact_us_subject">                                        </div>                                    </div>                                    <div class="col-md-6 col-sm-12">                                        <div class="form-group">                                		<?php echo form_error('contact_us_message'); ?>                                		</div>                                    </div>                                    <div class="col-md-12 col-sm-12">                                        <div class="form-group">                                            <label>Message <span class="required">*</span></label>                                            <textarea id="message" cols="6" rows="8" placeholder="" class="form-control" name="contact_us_message"></textarea>                                        </div>                                    </div>                                    <div class="col-md-12 col-sm-12">                                        <button type="submit" class="btn btn-default"> Send Message <i class="fa fa-angle-right"></i></button>                                    </div>                                <?php echo form_close(); ?>                            </div>                            <?php } else { ?>                            	<div class="col-md-8 col-sm-12 col-xs-12">	                                <div class="Heading-title-left black small-heading">	                                    <h3 class="info">Kindly use your dashboard feedback form for sending us your feedback!</h3>	                                </div>	                            </div>                            <?php } ?>                            <div class="col-md-4 col-sm-12 col-xs-12">                                <div class="Heading-title-left black small-heading">                                    <h3>Contact Detail</h3>                                </div>                                <div class="contact_block-2">                                    <div class="content-block-box">                                        <div class="icon-box">                                            <i class="icon-map-pin"></i>                                        </div>                                        <div class="detail-box">                                            <p>NO.82/2, Thiruvalluvar Road,</p>                                            <p>Uthukottai Town &amp; Tk,</p>                                            <p>Thiruvallur Dt - 602026</p>                                        </div>                                    </div>                                </div>                                <div class="contact_block-2">                                    <div class="content-block-box">                                        <div class="icon-box">                                            <i class=" icon-phone"></i>                                        </div>                                        <div class="detail-box">                                             <p><b class="pull-left">Enquires</b><span class="pull-right">+91 95850 12949</span></p>                                             <p><b class="pull-left">Help Line</b><a href="tel:+99 333 1234567" class="pull-right">040 000 000</a></p>                                            <!-- <p><b class="pull-left">Fax</b><a href="tel:+99 333 1234567" class="pull-right">+93 798 7412589</a></p> -->                                         </div>                                    </div>                                </div>                                <div class="contact_block-2">                                    <div class="content-block-box">                                        <div class="icon-box">                                            <i class="icon-document"></i>                                        </div>                                        <div class="detail-box">                                            <p><a href="mailto:@teachersrecruit.com">info@teachersrecruit.com</a></p>                                             <p><a href="mailto:@teachersrecruit.com">support@teachersrecruit.com</a></p>                                            <!-- <p><a href="mailto:resume@user.com">info@scriptsbundle.com</a></p>  -->                                        </div>                                    </div>                                </div>                                <ul class="social-network social-circle onwhite">                                    <li><a href="http://www.facebook.com" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>                                    <li><a href="http://www.twitter.com" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>                                    <li><a href="https://plus.google.com/" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>                                    <li><a href="http://www.linkedin.com" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>                                </ul>                            </div>                        </div>                    </div>                </div>            </div>        </section>        <!--Google map-->        <div id="map-contact"></div>        <?php include('include/footermenu.php'); ?>         <?php include('include/footer.php'); ?>           <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLLvqcTSXKbvjj1UDU5phR2u3rpiTfvUw"></script>            <script type="application/javascript">                function initialize() {                    var mapOptions = {                        zoom: 17,                        scrollwheel: false,                        center: new google.maps.LatLng(13.332937, 79.892598)                    };                    var map = new google.maps.Map(document.getElementById('map-contact'), mapOptions);                    var contentString = '<div>' +                        '<h1 class="map_data"><b>RecruitTeachers</b></h1>' +                        '<h2 class="map_data">#NO.82/2,Thiruvalluvar Road, Uthukottai Town & Tk,Thiruvallur Dt-602026</h2>' +                        '<h3 class="map_data">info@recruitteachers.com</h3>' +                        '<h4 class="map_data">+91 95850 12949</h4>' +                        '</div>';                    var marker = new google.maps.Marker({                        position: map.getCenter(),                        animation: google.maps.Animation.BOUNCE,                        icon: '<?php echo base_url(); ?>assets/images/map-marker.png',                        map: map,                        title: 'TeachersRecruit'                    });                    var infowindow = new google.maps.InfoWindow({                        content: contentString                    });                    google.maps.event.addListener(marker, 'click', function() {                        infowindow.open(map, marker);                    });                }                google.maps.event.addDomListener(window, 'load', initialize);            </script>