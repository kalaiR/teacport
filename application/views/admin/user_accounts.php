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
                   <!-- BEGIN THEME CUSTOMIZER-->
                   <div id="theme-change" class="hidden-phone">
                       <i class="icon-cogs"></i>
                        <span class="settings">
                            <span class="text">Theme:</span>
                            <span class="colors">
                                <span class="color-default" data-style="default"></span>
                                <span class="color-gray" data-style="gray"></span>
                                <span class="color-purple" data-style="purple"></span>
                                <span class="color-navy-blue" data-style="navy-blue"></span>
                            </span>
                        </span>
                   </div>
                   <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->     
                  <h3 class="page-title">
                     Editable Table
                     <small>Editable Table Sample</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="<?php echo base_url(); ?>admin/dashboard"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <a href="<?php echo base_url(); ?>admin/user_accounts">Admin Users</a> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="<?php echo base_url(); ?>admin/user_accounts">User Accounts</a><span class="divider-last">&nbsp;</span></li>
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
                            <h4><i class="icon-reorder"></i>User Accounts</h4>
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
                                <form method="post" action="adminindex/users_accounts" class="admin_module_form" id="users_accounts_form">
                                <table class="table table-striped table-hover table-bordered admin_table" id="sample_editable_1">
                                    <thead>
                                    <tr class="ajaxTitle">
                                        <th>User Name</th>
                                        <th>Password</th>
                                        <th>Email</th>
                                        <th>User Group</th>
                                        <th>Status</th>
                                        <th>Created Date</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="parents_tr user_accts_table" id="column1">
                                        <td class="admin_user_name">Admin1</td>
                                        <td class="admin_user_password">aa112</td>
                                        <td class="admin_user_email">admin@gmail.com</td>
                                        <td class="admin_user_group">Super Admin</td>
                                        <td class="admin_user_status">Active</td>
                                        <td class="created_date">01-01-2000</td>
                                        <td class="edit_section">
                                        	<a class="ajaxEdit" id="column1" href="javascript:;">Edit</a>
                                        </td>
                                        <td><a class="ajaxDelete" id="column1" href="#myModal1" data-toggle="modal">Delete</a></td>
                                    </tr>
                                    <tr class="parents_tr user_accts_table" id="column2">
                                        <td class="admin_user_name">Admin2</td>
                                        <td class="admin_user_password">aa112</td>
                                        <td class="admin_user_email">admin@gmail.com</td>
                                        <td class="admin_user_group">Moderate Admin</td>
                                        <td class="admin_user_status">Active</td>
                                        <td class="created_date">01-01-2000</td>
                                        <td class="edit_section">
                                        	<a class="ajaxEdit" id="column2" href="javascript:;">Edit</a>
                                        </td>
                                        <td><a class="ajaxDelete" id="column2" href="#myModal1" data-toggle="modal">Delete</a></td>
                                    </tr>
                                    <tr class="parents_tr user_accts_table" id="column3">
                                        <td class="admin_user_name">Admin3</td>
                                        <td class="admin_user_password">aa112</td>
                                        <td class="admin_user_email">admin@gmail.com</td>
                                        <td class="admin_user_group">Moderate Admin</td>
                                        <td class="admin_user_status">Active</td>
                                        <td class="created_date">01-01-2000</td>
                                        <td class="edit_section">
                                        	<a class="ajaxEdit" id="column3" href="javascript:;">Edit</a>
                                        </td>
                                        <td><a class="ajaxDelete" id="column3" href="#myModal1" data-toggle="modal">Delete</a></td>
                                    </tr>
                                    </tbody>
                                </table>
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
    var inputType = new Array("text","text","text","select","select"); // Set type of input which are you have used like text, select,textarea.
    var columns = new Array("admin_user_name","admin_user_password","admin_user_email","admin_user_group","admin_user_status"); // Set name of input types
    var placeholder = new Array("Enter Language Name",""); // Set placeholder of input types
    var table = "admin_table"; // Set classname of table    
    var admin_user_group_option = new Array("Super Admin","Modurate Admin"); 
    var admin_user_group_value = new Array("1","0"); 
    var admin_user_status_option = new Array("Active","Inactive"); 
    var admin_user_status_value = new Array("1","0");
  </script>
<?php include "templates/footer_grid.php" ?>