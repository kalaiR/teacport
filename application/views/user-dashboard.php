<?php include('include/header.php');    include('include/menus.php');     // echo "<pre>"; print_r($initial_data); echo "</pre>";  // echo "<pre>"; print_r($user_data); echo "</pre>";?><section class="dashboard parallex">    <div class="container-fluid">        <div class="row">            <div class="col-md-12 col-sm-12 col-xs-12 nopadding">                <div class="dashboard-header">                    <div class="col-md-5 col-sm-5 col-xs-12">                        <!-- <div class="user-avatar ">                            <img src="images/users/12.jpg" alt="" class="img-responsive center-block "></a>                            <h3><?php                             // echo $user_data['candidate_name'];?></h3>                        </div> -->                    </div>                    <div class="col-md-3 col-sm-3 col-xs-12">                        <div class="rad-info-box rad-txt-success">                            <i class="icon icon-presentation"></i>                            <span class="title-dashboard"> Profile Completeness </span>                            <span class="value"><span> <?php echo $sidebar_values['candidate_profile_completeness']; ?> %</span></span>                        </div>                    </div>                    <div class="col-md-3 col-sm-3 col-xs-12">                        <div class="rad-info-box rad-txt-success">                            <i class="icon icon-aperture"></i>                            <span class="title-dashboard">Jobs Applied</span>                            <span class="value">                                 <span>                                     <?php                                     if(!empty($job_applied_count)) :                                        echo $job_applied_count;                                    else :                                        echo "0";                                    endif;                                    ?>                                </span>                            </span>                        </div>                    </div>                </div>            </div>        </div>    </div></section><section class="dashboard-body">    <div class="container">        <div class="row">          	<!--START Popup for Dashboard-->           	<!-- Modal -->            <?php             if(!empty($initial_data) && $initial_data == 'show_popup') :            ?>	        <div class="modal fade" id="dashboard_popup_act" role="dialog">			    <div class="modal-dialog">				    <!-- Modal content-->				    <div class="modal-content">				        <div class="modal-header">				            <h4 class="modal-title">You are few steps away, please update the details.</h4>				        </div>                          <?php echo form_open('seeker/dashboard','class="seeker_popup_form"'); ?>                            <?php                             if(isset($error)) :                                if($error == 2) {                                    echo "<p class='val_status val_success db'> <i class='fa fa-check' aria-hidden='true'></i> $status </p>";                                }                                else {                                    echo "<p class='val_status val_error db'> <i class='fa fa-times' aria-hidden='true'></i> $status </p>";                                }                            else :                                echo "<p class='val_status'>  </p>";                            endif;                            ?>                                   <div class="modal-body profile-edit">                                <?php                                if($popup_type == 'social') :                                ?>				          	    <div class="form-group">	                                <label>Email <sup class="alert">*</sup></label>                                    <?php echo form_error('seeker_email'); ?>                                    <?php                                    if(!empty($user_data['candidate_email'])) :                                    ?>                                        <input placeholder="Email" name="seeker_email" class="form-control transform_lowercase" id="" type="text" value="<?php echo $user_data['candidate_email']; ?>" readonly>                                    <?php                                    else :                                    ?>                                        <input placeholder="Email" name="seeker_email" class="form-control transform_lowercase form_inputs email_value" type="text" value="<?php echo set_value('seeker_email'); ?>">                                    <?php                                    endif;                                    ?>                               </div>                                <div class="form-group">                                    <label>Mobile <sup class="alert">*</sup></label>                                    <?php echo form_error('seeker_mobile'); ?>                                    <?php                                    if(!empty($user_data['candidate_mobile_no'])) :                                    ?>                                        <input placeholder="Mobile" name="seeker_mobile" class="form-control numeric_value" id="" type="text" value="<?php echo $user_data['candidate_mobile_no']; ?>" readonly>                                    <?php                                    else :                                    ?>                                        <input placeholder="Mobile" name="seeker_mobile" class="form-control numeric_value form_inputs" maxlength="10" type="text" data-minlength="10" data-name="Mobile" value="<?php echo set_value('seeker_mobile'); ?>">                                    <?php                                    endif;                                    ?>                                </div>                                <div class="form-group">                                    <label>Password <sup class="alert">*</sup></label>                                    <?php echo form_error('seeker_password'); ?>                                    <input placeholder="Password" id="new_pass" data-minlength="8" data-name="New Password" name="seeker_password" maxlength="20" class="form-control form_inputs" value="<?php echo set_value('seeker_password'); ?>" type="password">                                </div>                                <div class="form-group">                                    <label>Confirm Password <sup class="alert">*</sup></label>                                    <?php echo form_error('seeker_confirmpass'); ?>                                    <input placeholder="Confirm Password" id="confirm_pass" data-minlength="8" data-name="Confirm Password" maxlength="20" name="seeker_confirmpass" class="form-control form_inputs" value="<?php echo set_value('seeker_confirmpass'); ?>" type="password">                                </div>                                 <div class="form-group">                                    <label>Institution Type <sup class="alert">*</sup></label>                                    <?php echo form_error('seeker_institution'); ?>                                    <select name="seeker_institution" class="select-institution form-control form_inputs" >                                        <option value=""> Select Institution </option>                                        <?php                                        if(!empty($institution_values)) :                                        foreach ($institution_values as $ins_val) :                                        if(set_value('seeker_institution') == $ins_val['institution_type_id'] ) :                                         echo "<option value='".$ins_val['institution_type_id']."' selected> ".$ins_val['institution_type_name']." </option>";                                        else :                                         echo "<option value='".$ins_val['institution_type_id']."'> ".$ins_val['institution_type_name']." </option>";                                        endif;                                        endforeach;                                        endif;                                        ?>                                    </select>                                 </div>                                <input type="hidden" value="<?php echo $popup_type; ?>" name="popup_type" />                                <?php                                endif;                                ?>                                <div class="form-group">	                                <label> Father Name <sup class="alert">*</sup></label>                                    <?php echo form_error('seeker_father'); ?>                                    <input placeholder="Father's Name" data-minlength="3" maxlength="50" data-name="Father's Name" name="seeker_father" class="form-control form_inputs alpha_value" id="" type="text" value="<?php echo set_value('seeker_father'); ?>" >	                            </div>                                <div class="form-group datepicker_section">                                    <label> Date Of Birth <sup class="alert">*</sup></label>                                    <?php echo form_error('seeker_dob'); ?>                                    <input placeholder="Date Of Birth" name="seeker_dob" class="form-control date_of_birth form_inputs" id="" type="text" value="<?php echo set_value('seeker_dob'); ?>" >                                </div>                                <div class="form-group">                                    <label> Address - 1 </label>                                    <?php echo form_error('seeker_address1'); ?>                                    <input placeholder="Address" name="seeker_address1" data-minlength="3" data-name="Address" maxlength="150" class="form-control form_inputs not-required" id="" type="text" value="<?php echo set_value('seeker_address1'); ?>" >                                </div>                                <div class="form-group">                                    <label> Address - 2 </label>                                    <?php echo form_error('seeker_address2'); ?>                                    <input placeholder="Address" data-minlength="3" data-name="Address" maxlength="150"  name="seeker_address2" class="form-control form_inputs not-required" id="" type="text" value="<?php echo set_value('seeker_address2'); ?>" >                                </div>                                <div class="form-group state_section">                                    <label>State<sup class="alert">*</sup></label>                                    <?php echo form_error('seeker_district'); ?>                                    <select name="seeker_state" class="select-location form-control form_inputs state_select" >                                        <option value=""> Select State </option>                                        <?php                                        if(!empty($state_values)) :                                        foreach ($state_values as $sta_val) :                                        if(set_value('seeker_state') == $sta_val['state_id'] ) {                                         echo "<option value='".$sta_val['state_id']."' selected> ".$sta_val['state_name']." </option>";                                        }                                        else {                                         echo "<option value='".$sta_val['state_id']."'> ".$sta_val['state_name']." </option>";                                        }                                        endforeach;                                        endif;                                        ?>                                    </select>                                 </div>                                <div class="form-group district_section">                                    <label> District Name <sup class="alert">*</sup></label>                                    <?php echo form_error('seeker_district'); ?>                                    <select name="seeker_district" class="select-location form-control form_inputs" >                                        <option value=""> Select District </option>                                        <?php                                        if(!empty($district_values)) :                                        foreach ($district_values as $dis_val) :                                        if(set_value('seeker_district') == $dis_val['district_id'] ) {                                         echo "<option value='".$dis_val['district_id']."' selected> ".$dis_val['district_name']." </option>";                                        }                                        else if(set_value('seeker_state') == $dis_val['district_state_id'] ) {                                         echo "<option value='".$dis_val['district_id']."'> ".$dis_val['district_name']." </option>";                                        }                                        endforeach;                                        endif;                                        ?>                                    </select>                                 </div>                                 <input type="hidden" name="candidate_id" value="<?php echo $user_data['candidate_id'];?>">                                      				            </div>                            <div class="modal-footer user_dashboard_popup_act">                                <button type="submit" class="btn btn-default btn-block">Proceed</button>                            </div>                        <?php echo form_close(); ?>					</div>				</div>			</div>            <?php             endif;            ?>			<!--END Popup for Dashboard-->            <div class="col-md-12 col-sm-12 col-xs-12">                <div class="col-md-4 col-sm-4 col-xs-12">                    <!--include left panel menu-->                    <?php include('include/user_dashboard_sidemenu.php'); ?>                </div>                <div class="col-md-8 col-sm-8 col-xs-12">                    <div class="job-short-detail">                        <div class="heading-inner">                            <p class="title">Profile detail</p>                        </div>                        <!--Profile Progress-->                        <div id="seeker-profilebar">                          	<h6>Profile Completeness</h5>	                        <div class="progress">	                          	<div class="progress-bar progress-bar-info progress-bar-striped active" style="width:<?php echo (isset($user_data['candidate_profile_completeness'])?$user_data['candidate_profile_completeness']:'1'); ?>%;" role="progress-bar" aria-valuemin="0" aria-valuemax="100">                                    <?php echo $user_data['candidate_profile_completeness']; ?>%	                           	</div>	                        </div>                        </div>                        <dl>                            <?php                             if(!empty($user_data['candidate_name'])) :                            ?>                            <dt>First Name</dt>                            <dd> <?php echo $user_data['candidate_name']; ?> </dd>                            <?php                            endif;                            ?>                            <?php                             if(!empty($user_data['candidate_father_name'])) :                            ?>                            <dt>Father Name</dt>                            <dd> <?php echo $user_data['candidate_father_name']; ?> </dd>                            <?php                            endif;                            ?>                            <?php                             if(!empty($user_data['candidate_date_of_birth'])) :                            ?>                            <dt>Date Of Birth</dt>                            <dd> <?php echo $user_data['candidate_date_of_birth']; ?> </dd>                            <?php                            endif;                            ?>                            <?php                             if(!empty($user_data['candidate_mobile_no'])) :                            ?>                            <dt>Phone</dt>                            <dd> <?php echo $user_data['candidate_mobile_no']; ?> </dd>                            <?php                            endif;                            ?>                            <?php                             if(!empty($user_data['candidate_email'])) :                            ?>                            <dt>Email</dt>                            <dd> <?php echo $user_data['candidate_email']; ?> </dd>                            <?php                            endif;                            ?>                            <?php                             if(!empty($user_data['candidate_institution_type']) && !empty($institution_values)) :                            $key = array_search($user_data['candidate_institution_type'], array_column($institution_values, 'institution_type_id'));                            ?>                            <dt>Institution</dt>                            <dd> <?php if(isset($institution_values[$key]['institution_type_name'])) echo $institution_values[$key]['institution_type_name']; ?> </dd>                            <?php                            endif;                            ?>                            <?php                             if(!empty($user_data['candidate_address_1'])) :                            ?>                            <dt>Address - 1</dt>                            <dd> <?php echo $user_data['candidate_address_1']; ?> </dd>                            <?php                            endif;                            ?>                            <?php                             if(!empty($user_data['candidate_address_2'])) :                            ?>                            <dt>Address - 2</dt>                            <dd> <?php echo $user_data['candidate_address_2']; ?> </dd>                            <?php                            endif;                            ?>                            <?php                             if(!empty($user_data['district_name'])) :                            ?>                            <dt>District</dt>                            <dd> <?php echo $user_data['district_name']; ?> </dd>                            <?php                            endif;                            ?>                            <?php                             if(!empty($user_data['state_name'])) :                            ?>                            <dt>State</dt>                            <dd> <?php echo $user_data['state_name']; ?> </dd>                            <?php                            endif;                            ?>                            <?php                            if(!empty($user_data['candidate_nationality'])) :                            foreach (unserialize(NATIONALITY) as $key => $val):                            if( $key == $user_data['candidate_nationality']) {                             ?>                                <dt>Country</dt>                                <dd> <?php echo $val; ?></dd>                            <?php                            }                            endforeach;                             endif;                            ?>                         </dl>                    </div>                    <!-- <div class="heading-inner">                        <p class="title">Some Line About Me</p>                    </div>                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Lorem ipsum dolor sit amet. </p> -->                </div>            </div>        </div>    </div></section><?phpif(!empty($provider_values)) :?><div class="brand-logo-area clients-bg">    <div class="clients-list">        <?php        foreach ($provider_values as $val) :        if(!empty($val['organization_logo'])) :            $thumb_image = explode('.', end(explode('/',$val['organization_logo'])));            $thumb = $thumb_image[0]."_thumb.".$thumb_image[1];        ?>        <div class="client-logo">            <a href="<?php echo base_url()."user-followed-companies/".$val['organization_id']; ?>"><img src="<?php echo base_url().PROVIDER_UPLOAD.$thumb; ?>" class="img-responsive" alt="Organization Logo" title="<?php echo $val['organization_name']; ?>" /></a>        </div>        <?php        endif;        endforeach;        ?>    </div></div><?phpendif;?><?php include('include/footermenu.php'); ?><?php include('include/footer.php'); ?><!--datepicker--><script type="text/javascript" src="<?php echo base_url(); ?>assets/js/zebra_datepicker.js"></script> <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl-carousel.js"></script><?php include('include/footercustom.php'); ?><script type="application/javascript">    $(document).ready(function() { 	    $(".clients-list").owlCarousel({            autoPlay: true,            slideSpeed: 2000,            pagination: false,            navigation: false,            loop: true,            items: 6,            itemsDesktop: [1199, 4],            itemsDesktopSmall: [980, 3],            itemsTablet: [768, 4],            itemsTabletSmall: false,            itemsMobile: [479, 2],        });    });    $('.date_of_birth').Zebra_DatePicker({        format : 'd-m-Y',        view: 'years'    });</script>