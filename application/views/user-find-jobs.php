<?php include('include/header.php');include('include/menus.php'); // echo "<pre>"; print_r($findjob); echo "</pre>";?><div class="page category-page">            <div class="clearfix"></div>        <!--End Header-->                <section class="job-breadcrumb">            <div class="container">                <div class="row">                    <div class="col-md-12 col-sm-12 co-xs-12 text-left">                       <div class="bread">                            <ol class="breadcrumb">                                <li><a href="<?php echo base_url(); ?>">Home</a> </li>                                <li><a href="<?php echo base_url(); ?>seeker/dashboard">Dashboard</a> </li>                                <li class="active">Find Jobs</li>                            </ol>                        </div>                    </div>                </div>            </div>        </section>        <section class="dashboard-body">            <div class="container">                <div class="row">                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">                        <div class="col-md-4 col-sm-12 col-xs-12">                            <?php include('include/user_dashboard_sidemenu.php'); ?>                                                    </div>                        <div id="candidate-browse-jobs" class="col-md-8 col-sm-12 col-xs-12">                            <div class="heading-inner first-heading">                                <p class="title">Search Related Jobs</p>                            </div>                            <?php                            if(!empty($search_inputs['max_amount']) || !empty($search_inputs['posting']) || !empty($search_inputs['experience']) || !empty($search_inputs['qualification'])) {                                $nor_search = "dn";                                $adv_search = '';                            }                            else {                                $nor_search = '';                                $adv_search = "dn";                            }                            ?>                            <!-- Normal Search-->                            <div class="breadcrumb-search <?php echo $nor_search; ?>" id="candidate_nos_act">                                <div class="search-form-contaner seeker_search_section">                                    <?php echo form_open('seeker/findjob'); ?>                                      <div class="col-md-3 col-sm-3 col-xs-12 nopadding">                                            <div class="form-group">                                                                               <input class="form-control" name="search_keyword" placeholder="Organization Name or Job Title" type="text" value="<?php if(!empty($search_inputs['keyword'])) echo $search_inputs['keyword']; ?>">                                            </div>                                        </div>                                        <div class="col-md-3 col-sm-3 col-xs-12 nopadding">                                            <div class="form-group select-salary">                                                <input class="form-control numeric_value" name="search_min_amount" placeholder="Minimum Salary" maxlength="9" type="text" value="<?php if(!empty($search_inputs['min_amount'])) echo $search_inputs['min_amount']; ?>">                                            </div>                                        </div>                                        <div class="col-md-3 col-sm-3 col-xs-12 nopadding">                                            <div class="form-group">                                                <select name="search_location" class="select-location form-control">                                                    <option value="">&nbsp;</option>                                                    <?php                                                    if(!empty($alldistricts)) :                                                    foreach ($alldistricts as $district) {                                                        if(!empty($search_inputs['location']) && $search_inputs['location'] == $district['district_id']) {                                                            echo '<option value="'.$district['district_id'].'" selected>'.$district['district_name'].'</option>';                                                        }                                                        else {                                                            echo '<option value="'.$district['district_id'].'">'.$district['district_name'].'</option>';                                                        }                                                                               }                                                    endif;                                                    ?>                                                </select>                                             </div>                                        </div>                                        <div class="col-md-3 col-sm-3 col-xs-12 nopadding">                                            <div class="form-group form-action">                                                <button type="submit" class="btn btn-default">Search <i class="fa fa-angle-right"></i> </button>                                            </div>                                        </div>                                        <div id="advanced_srch_act" class="col-sm-12 nopadding">                                            <a class="pull-left advanced_search"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Advanced Search </a>                                        </div>                                          <div class="clearfix"> </div>                                    <?php echo form_close(); ?>                                </div>                           </div>                             <!--End of Normal Search-->                            <!--Advanced Search-->                            <div class="breadcrumb-search <?php echo $adv_search; ?>" id="candidate_ads_act">                                <div class="search-form-contaner seeker_search_section">                                    <?php echo form_open('seeker/findjob','class="form-inline"'); ?>                                        <div class="margin-column col-md-6 col-sm-2 col-xs-12 nopadding">                                            <div class="form-group">                                                <input class="form-control" name="search_keyword" placeholder="Organization Name or Job Title" type="text" value="<?php if(!empty($search_inputs['keyword'])) echo $search_inputs['keyword']; ?>">                                                   </div>                                        </div>                                        <div class="margin-column col-md-3 col-sm-2 col-xs-12 nopadding">                                            <div class="form-group">                                                <input class="form-control numeric_value" name="search_min_amount" placeholder="Minimum Salary" maxlength="9" type="text" value="<?php if(!empty($search_inputs['min_amount'])) echo $search_inputs['min_amount']; ?>">                                                   </div>                                        </div>                                        <div class="margin-column col-md-3 col-sm-2 col-xs-12 nopadding">                                            <div class="form-group">                                                <input class="form-control numeric_value" name="search_max_amount" placeholder="Maximum Salary" maxlength="9" type="text" value="<?php if(!empty($search_inputs['max_amount'])) echo $search_inputs['max_amount']; ?>">                                                </div>                                        </div>                                        <div class="margin-column col-md-3 col-sm-2 col-xs-12 nopadding">                                            <div class="form-group">                                                <select name="search_location" class="select-location form-control">                                                    <option value="">&nbsp;</option>                                                    <?php                                                    if(!empty($alldistricts)) :                                                    foreach ($alldistricts as $district) {                                                        if(!empty($search_inputs['location']) && $search_inputs['location'] == $district['district_id']) {                                                            echo '<option value="'.$district['district_id'].'" selected>'.$district['district_name'].'</option>';                                                        }                                                        else {                                                            echo '<option value="'.$district['district_id'].'">'.$district['district_name'].'</option>';                                                        }                                                                               }                                                    endif;                                                    ?>                                                </select>                                               </div>                                        </div>                                        <div class="margin-column col-md-3 col-sm-2 col-xs-12 nopadding">                                            <div class="form-group">                                                <select name="search_posting" class="select-category form-control">                                                    <option value="">&nbsp;</option>                                                    <?php                                                    if(!empty($applicable_postings)) :                                                    foreach ($applicable_postings as $post_val) {                                                        if(!empty($search_inputs['posting']) && $search_inputs['posting'] == $post_val['posting_id']) {                                                            echo '<option value="'.$post_val['posting_id'].'" selected>'.$post_val['posting_name'].'</option>';                                                        }                                                        else {                                                            echo '<option value="'.$post_val['posting_id'].'">'.$post_val['posting_name'].'</option>';                                                        }                                                                               }                                                    endif;                                                    ?>                                                </select>                                               </div>                                        </div>                                        <div class="margin-column col-md-3 col-sm-2 col-xs-12 nopadding">                                            <div class="form-group">                                                <select name="search_qualification" class="select-qualification form-control">                                                    <option value="">&nbsp;</option>                                                    <?php                                                    if(!empty($qualifications)) :                                                    foreach ($qualifications as $qua_val) {                                                        if(!empty($search_inputs['qualification']) && $search_inputs['qualification'] == $qua_val['educational_qualification_id'])                                                         {                                                            echo '<option value="'.$qua_val['educational_qualification_id'].'" selected>'.$qua_val['educational_qualification'].'</option>';                                                        }                                                        else {                                                            echo '<option value="'.$qua_val['educational_qualification_id'].'">'.$qua_val['educational_qualification'].'</option>';                                                        }                                                                               }                                                    endif;                                                    ?>                                                </select>                                               </div>                                        </div>                                        <div class="col-md-3 col-sm-3 col-xs-12 nopadding">                                            <div class="form-group">                                                <select class="form-control select-type" name="candidate_work_type">                                                    <option value="">Select Type</option>                                                    <option value="full" <?php echo (isset($search_inputs['candidate_work_type']) && $search_inputs['candidate_work_type']=="full" ? "selected" : ""); ?>>Full Time</option>                                                    <option value="part" <?php echo (isset($search_inputs['candidate_work_type']) && $search_inputs['candidate_work_type']=="part" ? "selected" : ""); ?>>Part Time</option>                                                </select>                                                 </div>                                        </div>                                        <div class="margin-column col-md-3 col-sm-2 col-xs-12 nopadding">                                            <div class="form-group">                                                <select name="search_exp" class="select-experience form-control">                                                    <option value="">Select</option>                                                    <option value="1" <?php if($search_inputs['experience']!='' && $search_inputs['experience'] == '0') echo "selected"; ?>>Fresher</option>                                                    <option value="1" <?php if(!empty($search_inputs['experience']) && $search_inputs['experience'] == '1') echo "selected"; ?>>1 + Year</option>                                                    <option value="2" <?php if(!empty($search_inputs['experience']) && $search_inputs['experience'] == '2') echo "selected"; ?>>2 + Year</option>                                                    <option value="3" <?php if(!empty($search_inputs['experience']) && $search_inputs['experience'] == '3') echo "selected"; ?>>3 + Year</option>                                                    <option value="4" <?php if(!empty($search_inputs['experience']) && $search_inputs['experience'] == '4') echo "selected"; ?>>4 + Year</option>                                                    <option value="">&nbsp;</option>                                                    <option value="5" <?php if(!empty($search_inputs['experience']) && $search_inputs['experience'] == '5') echo "selected"; ?>>5 + Year</option>                                                    <option value="6" <?php if(!empty($search_inputs['experience']) && $search_inputs['experience'] == '6') echo "selected"; ?>>6 + Year</option>                                                    <option value="7" <?php if(!empty($search_inputs['experience']) && $search_inputs['experience'] == '7') echo "selected"; ?>>7 + Year</option>                                                    <option value="8" <?php if(!empty($search_inputs['experience']) && $search_inputs['experience'] == '8') echo "selected"; ?>>8 + Year</option>                                                    <option value="9" <?php if(!empty($search_inputs['experience']) && $search_inputs['experience'] == '9') echo "selected"; ?>>9 + Year</option>                                                    <option value="10" <?php if(!empty($search_inputs['experience']) && $search_inputs['experience'] == '10') echo "selected"; ?>>10 + Year</option>                                                    <option value="11" <?php if(!empty($search_inputs['experience']) && $search_inputs['experience'] == '11') echo "selected"; ?>> Above 10 + year</option>                                                </select>                                                </div>                                        </div>                                                                                                              <div class="clearfix"> </div>                                       <div id="normal_srch_act" class="col-md-3 col-sm-3 col-xs-12 nopadding pull-left">                                        <a  class="advanced_search" type="button"> Normal Search <i class="fa fa-hand-o-left" aria-hidden="true"></i></a>                                    </div>                                     <div class="margin-column col-md-3 col-sm-3 col-xs-12 nopadding pull-right">                                            <button type="submit" class="btn btn-default">Search <i class="fa fa-angle-right"></i> </button>                                    </div>                                    <div class="clearfix"> </div>                                       <?php echo form_close(); ?>                                     </div>                            </div>                             <!--End of Advanced Search-->                            <!-- Search Results -->                            <div id="dashboard-jobs-grid" class="all-jobs-list-box2">                                <?php                                 if(!empty($search_results)) :                                foreach ($search_results as $sear_key => $sear_val) :                                ?>                                <div class="job-box job-box-2">                                    <div class="col-md-2 col-sm-2 col-xs-12 hidden-xs hidden-sm">                                        <div class="comp-logo">                                            <?php                                            if(!empty($sear_val['organization_logo'])) :                                                $thumb_image = explode('.', end(explode('/',$sear_val['organization_logo'])));                                                $thumb = $thumb_image[0]."_thumb.".$thumb_image[1];                                            ?>                                            <img src="<?php echo base_url().PROVIDER_UPLOAD.$thumb; ?>" class="img-responsive" alt="Not Found">                                             <?php                                            else :                                            ?>                                            <img src="<?php echo base_url()."assets/images/institution.png"; ?>" class="img-responsive" alt="Not Found">                                            <?php                                            endif;                                            ?>                                        </div>                                    </div>                                    <div class="col-md-10 col-sm-10 col-xs-12">                                        <div class="job-title-box">                                            <div class="job-title"><?php echo $sear_val['vacancies_job_title']; ?></div>                                            <span class="comp-name">                                                <?php echo $sear_val['vacancies_available']; ?>                                            </span>                                            <a class="job-type jt-full-time-color">                                                <?php                                                if($sear_val['vacancies_available'] == 0) :                                                    echo "Vacancies Unavailable";                                                else :                                                    echo "Vacancies Available";                                                endif;                                                ?>                                            </a>                                        </div>                                        <div class="feature-post-meta-bottom">                                            <p>                                                <?php echo substr($sear_val['vacancies_instruction'], 0, 100); ?>...                                             </p>                                        </div>                                         <div class="feature-post-meta-bottom">                                        	<?php                                            if($sidebar_values['candidate_profile_completeness'] >= 90 ) :                                                if(!empty($applied_value) && in_array($sear_val['vacancies_id'], explode(',',$applied_value))) {                                            ?>                                                      <a class="apply-restrict apply pull-right" title="Alreay applied">                                                         Applied                                                    </a>                                                <?php                                                }                                                else {                                                ?>                                                <a href="<?php echo base_url(); ?>seeker/applynow/<?php echo $sear_val['vacancies_id'];?>" target="_blank" class="apply pull-right">                                                     Apply Now                                                </a>                                                <?php                                                }                                                else :                                                ?>                                                <a title="To fill all details in edit profile" class="apply-restrict apply pull-right">                                                     Apply Now                                                </a>                                            <?php                                            endif;                                            ?>                                        </div>	                                                                           </div>                                    <div class="job-salary">                                        <span class="dollar_sign"><i class="fa fa-inr" aria-hidden="true"></i></span>                                        <?php echo $sear_val['vacancies_start_salary']. " - " . $sear_val['vacancies_end_salary']; ?>                                        <p class="org_name_search"> <?php echo $sear_val['organization_name']; ?> </p>                                        <p> <i class="fa fa-clock-o"></i> <?php echo ($sear_val['vacancy_type'] == "full" ? "Full Time" : ($sear_val['vacancy_type'] == "part" ? "Part Time" : "Not Mention")); ?> </p>                                    </div>                                     <!--  <a href="javascript:void(0)" onclick='window.location = "<?php echo base_url();?>seeker/applynow"'>                                                <span class="dashboard-jobs-grid-link"> </span>                                            </a> -->                                </div>                                         <?php                                 endforeach;                                if(!empty($links)) :                                    echo "<div class='col-md-12 col-sm-12 col-xs-12 nopadding'><div class='pagination-box clearfix'>" .$links . "</div></div>";                                endif;                                else :                                    echo "<p>Vacancy not available.</p>";                                endif;                                ?>                            </div>                        </div>                    </div>                </div>            </div>        </section>        <?php        if(!empty($provider_values)) :        ?>        <div class="brand-logo-area clients-bg">            <div class="clients-list">                <?php                foreach ($provider_values as $val) :                if(!empty($val['organization_logo'])) :                    $thumb_image = explode('.', end(explode('/',$val['organization_logo'])));                    $thumb = $thumb_image[0]."_thumb.".$thumb_image[1];                ?>                <div class="client-logo">                    <a href="<?php echo base_url()."user-followed-companies/".$val['organization_id']; ?>"><img src="<?php echo base_url().PROVIDER_UPLOAD.$thumb; ?>" class="img-responsive" alt="Organization Logo" title="<?php echo $val['organization_name']; ?>" /></a>                </div>                <?php                endif;                endforeach;                ?>            </div>        </div>        <?php        endif;        ?>   </div>     <?php include('include/footermenu.php'); ?><?php include('include/footer.php'); ?> <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl-carousel.js"></script><?php include('include/footercustom.php'); ?> <script type="application/javascript"> $(document).ready(function() { 	$(".clients-list").owlCarousel({        autoPlay: true,        slideSpeed: 2000,        pagination: false,        navigation: false,        loop: true,        items: 6,        itemsDesktop: [1199, 4],        itemsDesktopSmall: [980, 3],        itemsTablet: [768, 4],        itemsTabletSmall: false,        itemsMobile: [479, 2],    }); }); </script>