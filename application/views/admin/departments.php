<?php
if(!empty($this->session->userdata("login_status"))): 
?>
<?php if(!$this->input->is_ajax_request()) { ?>
<?php include "templates/header.php" ?>
  <!-- BEGIN CONTAINER -->
  <div id="container" class="row-fluid">
      <!-- BEGIN PAGE -->
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->     
                  <h3 class="page-title">
                     Teachers Recruit
                     <small>Master Data</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="<?php echo base_url(); ?>admin/dashboard"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <a href="#">Master Data</a> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="<?php echo base_url(); ?>admin/departments">Department</a><span class="divider-last">&nbsp;</span></li>
                   </ul>
                  <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->

            <!-- BEGIN ADVANCED TABLE widget-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN EXAMPLE TABLE widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Department</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <div class="portlet-body">
                                <div class="clearfix">
                                    <div class="btn-group">
                                        <button id="sample_editable_1_new" class="btn green add_new">
                                            Add New <i class="icon-plus"></i>
                                        </button>
                                    </div>
                                    <div class="btn-group pull-right">
                                        <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="editable_table.html#">Print</a></li>
                                            <li><a href="editable_table.html#">Save as PDF</a></li>
                                            <li><a href="editable_table.html#">Export to Excel</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="space15"></div>
                                <form method="post" action="adminindex/departments" class="admin_module_form" id="departments_form">
                                  <?php } ?>
                                  <?php
                                  if(!empty($status)) :
                                    echo "<p class='db_status update_success_md'> $status </p>";
                                  endif;
                                  ?> 
                                  <p class='val_error error_msg_md'> <p>
                                  <table class="table table-striped table-hover table-bordered admin_table" id="sample_editable_1">
                                    <thead>
                                      <tr class="ajaxTitle">
                                          <th>Department</th>
                                          <th>Qualification</th>
                                          <th>Status</th>
                                          <th>Created Date</th>
                                          <th>Edit</th>
                                          <th>Delete</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                      if(!empty($departments_values)) :
                                      foreach ($departments_values as $dep_key => $dep_val) :
                                      ?>
                                      <tr class="parents_tr" id="column<?php echo $dep_key; ?>">
                                        <td class="departments_name"> 
                                          <?php echo $dep_val['departments_name']; ?>
                                        </td>
                                        <td class="department_educational_qualification_id"> 
                                        <?php
                                        foreach ($dep_val['educational_qualification_id'] as $edu_key => $edu_val) :
                                        ?>
                                          <span data-id="<?php echo $edu_key; ?>"> 
                                            <?php echo $edu_val; ?>
                                          </span>
                                          <br>
                                        <?php
                                        endforeach;
                                        ?>
                                        </td>
                                        <td class="departments_status"> 
                                          <?php 
                                          if ($dep_val['departments_status'] == 1) 
                                            echo "Active";
                                          else
                                            echo "Inactive";
                                          ?>
                                        </td>
                                        <td class="created_date">
                                          <?php echo $dep_val['departments_created_date']; ?>
                                        </td>          
                                        <td class="edit_section">
                                          <a class="ajaxEdit" id="column<?php echo $dep_key; ?>" href="javascript:;" data-id="<?php echo $dep_key; ?>">
                                            Edit
                                          </a>
                                        </td>
                                        <td>
                                          <a class="ajaxDelete" href="#myModal1" data-toggle="modal" data-id="<?php echo $dep_key; ?>">Delete</a>
                                        </td>
                                      </tr>
                                      <?php
                                      endforeach;
                                      endif;
                                      ?>
                                    </tbody>
                                  </table>
                                  <?php if(!$this->input->is_ajax_request()) { ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE widget-->
                </div>
                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body delete_message_style">
								<input type="hidden" name="delete" id="vId" value=""/>
								<button type="button" class="close popup_tx" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<center class="popup_tx">
									<h5>Are you sure you want to delete this item? </h5>
								</center>
							</div>
							<div id="delete_btn" class="modal-footer footer_model_button" >
								<a name="action" class="btn btn-danger popup_btn yes_btn_act" id="popup_btn1" value="Delete">Yes</a>    
								<button type="button" class="btn btn-info popup_btn" id="popup_btn" data-dismiss="modal">No</button>
							</div>
				   		 </div><!--/row-->
				    </div>
    			</div>
            </div>

            <!-- END ADVANCED TABLE widget-->

            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->
   <script>
    // Define default values
    var inputType = new Array("text","multiselect","select"); // Set type of input which are you have used like text, select,textarea.
    var columns = new Array("departments_name","department_educational_qualification_id","departments_status"); // Set name of input types
    var placeholder = new Array("Enter Department Name","Please select qualification",""); // Set placeholder of input types
    var table = "admin_table"; // Set classname of table
    var department_educational_qualification_id_option = new Array();
    var department_educational_qualification_id_value = new Array();
    <?php
    if(!empty($qualification_list)) :
    foreach ($qualification_list as $qua_val) :
    ?>
      department_educational_qualification_id_option.push("<?php echo $qua_val['educational_qualification']; ?>");
      department_educational_qualification_id_value.push("<?php echo $qua_val['educational_qualification_id']; ?>");
    <?php
    endforeach;
    endif;
    ?>
    var departments_status_option = new Array("Please select status","Active","Inactive"); 
    var departments_status_value = new Array("","1","0"); 
  </script>
<?php include "templates/footer_grid.php" ?>
<?php } ?>
<?php
else :
redirect(base_url().'admin');
endif;
?>