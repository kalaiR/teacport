<?php include('include/header.php'); ?>
                	 <?php if($initial_data == 'show_popup') {?>
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">You are few steps away.. Kindly fill the deatils.</h4>
					        </div>
					        <div class="modal-body">
					          		<div class="form-group">
	                                    <label>Name: <span class="alert">*</span></label>
	                                    <input placeholder="" name="registrant_name" class="form-control" id="username" type="text" value="<?php echo $user_data['registrant_name']; ?>" disabled>
	                                </div>
	                                <div class="form-group">
	                                    <label>Email: <span class="alert">*</span></label>
	                                    <input placeholder="" name="registrant_email_id" class="form-control" id="email" type="text" value="<?php echo $user_data['registrant_email_id']; ?>" disabled>
	                                </div>
	                                <div class="form-group">
	                                    <label>Mobile: <span class="alert">*</span></label>
	                                    <input placeholder="" name="registrant_mobile_no" class="form-control" id="mobile" type="text">
	                                </div>
	                                <div class="form-group">
	                                    <label>Password: <span class="alert">*</span></label>
	                                    <input placeholder="" name="" class="form-control" id="" type="password">
	                                </div>
	                                <div class="form-group">
	                                    <label>Confirm Password: <span class="alert">*</span></label>
	                                    <input placeholder="" name="" class="form-control" id="" type="password">
	                                </div>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Proceed</button>
					        </div>
					      </div> <!--modal-content-->
				   <?php } ?>
