<?php include('include/header.php'); ?><?php include('include/menus.php'); ?>          <section class="job-breadcrumb">            <div class="container">                <div class="row">                    <div class="col-md-6 col-sm-7 co-xs-12 text-left">                        <h3>Edit profile</h3>                    </div>                    <div class="col-md-6 col-sm-5 co-xs-12 text-right">                        <div class="bread">                            <ol class="breadcrumb">                                <li><a href="user-resume.html#">Home</a> </li>                                <li class="active">edit profile</li>                            </ol>                        </div>                    </div>                </div>            </div>        </section>        <section class="dashboard-body">            <div class="container">                <div class="row">                    <div class="col-md-12 col-sm-12 col-xs-12 nopadding">                        <div class="col-md-4 col-sm-12 col-xs-12">                            <div class="profile-card">                                <div class="banner">                                    <img src="images/building.jpg" alt="" class="img-responsive">                                </div>                                <div class="user-image">                                    <img src="images/users/profile-avatar.jpg" class="img-responsive img-circle" alt="">                                </div>                                <div class="card-body">                                    <h3>Mrs. Emilly Copper</h3>                                    <span class="title">A web Designer</span>                                </div>                                <ul class="social-network social-circle onwhite">                                    <li><a href="user-resume.html#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>                                    <li><a href="user-resume.html#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>                                    <li><a href="user-resume.html#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>                                    <li><a href="user-resume.html#" class="icoLinkedin" title="Linkedin +"><i class="fa fa-linkedin"></i></a></li>                                </ul>                            </div>                            <!--include left panel menu-->                            <?php include('include/user_dashboard_sidemenu.php'); ?>                        </div>                        <div class="col-md-8 col-sm-12 col-xs-12">                            <div class="heading-inner first-heading">                                <p class="title">My Resume</p>                                <a href="javascript:void(0)"><span class="pull-right add-button btn-default" data-toggle="modal" data-target=".add-resume-modal"> Add New Resume</span></a>                            </div>                            <div class="resume-list">                            	<div class="table-responsive">                                    <table class="table  table-striped">                                        <thead class="thead-inverse">                                            <tr>                                                <th>Sr. #</th>                                                <th>Resume Title</th>                                                <th>Download</th>                                                <th>Remove</th>                                            </tr>                                        </thead>                                        <tbody>                                            <tr>                                                <th scope="row">1</th>                                                <td>                                                    <h5>Software Engineering</h5></td>                                                <td><a class="btn btn-primary" href="resume/sampleResume.pdf"> Download </a></td>                                                <td><a class="btn btn-danger" href="user-resume.html"> Delete </a></td>                                            </tr>                                            <tr>                                                <th scope="row">2</th>                                                <td>                                                    <h5>Graphic Designing</h5></td>                                                <td><a class="btn btn-primary" href="resume/sampleResume.pdf"> Download </a></td>                                                <td><a class="btn btn-danger" href="user-resume.html"> Delete </a></td>                                            </tr>                                            <tr>                                                <th scope="row">3</th>                                                <td>                                                    <h5>Front end Developer</h5></td>                                                <td><a class="btn btn-primary" href="resume/sampleResume.pdf"> Download </a></td>                                                <td><a class="btn btn-danger" href="user-resume.html"> Delete </a></td>                                            </tr>                                            <tr>                                                <th scope="row">4</th>                                                <td>                                                    <h5>IT Specialist</h5></td>                                                <td><a class="btn btn-primary" href="resume/sampleResume.pdf"> Download </a></td>                                                <td><a class="btn btn-danger" href="user-resume.html"> Delete </a></td>                                            </tr>                                        </tbody>                                    </table>                                </div>                            </div>                            <div class="col-md-12 col-sm-12 col-xs-12 nopadding">                                <div class="pagination-box clearfix">                                    <ul class="pagination">                                        <li>                                            <a href="user-resume.html#" aria-label="Previous"> <span aria-hidden="true">Previous</span> </a>                                        </li>                                        <li class="active"><a href="user-resume.html#">1</a></li>                                        <li><a href="user-resume.html#">2</a></li>                                        <li><a href="user-resume.html#">3</a></li>                                        <li>                                            <a href="user-resume.html#" aria-label="Next"> <span aria-hidden="true">Next</span> </a>                                        </li>                                    </ul>                                </div>                            </div>                        </div>                    </div>                </div>            </div>        </section>        <div class="brand-logo-area clients-bg">            <div class="clients-list light-blue">                <div class="client-logo">                    <a href="user-resume.html#"><img src="images/clients/client_1.png" class="img-responsive" alt="Brand Image" /></a>                </div>                <div class="client-logo">                    <a href="user-resume.html#"><img src="images/clients/client_2.png" class="img-responsive" alt="Brand Image" /></a>                </div>                <div class="client-logo">                    <a href="user-resume.html#"><img src="images/clients/client_3.png" class="img-responsive" alt="Brand Image" /></a>                </div>                <div class="client-logo">                    <a href="user-resume.html#"><img src="images/clients/client_4.png" class="img-responsive" alt="Brand Image" /></a>                </div>                <div class="client-logo">                    <a href="user-resume.html#"><img src="images/clients/client_1.png" class="img-responsive" alt="Brand Image" /></a>                </div>                <div class="client-logo">                    <a href="user-resume.html#"><img src="images/clients/client_2.png" class="img-responsive" alt="Brand Image" /></a>                </div>                <div class="client-logo">                    <a href="user-resume.html#"><img src="images/clients/client_3.png" class="img-responsive" alt="Brand Image" /></a>                </div>                <div class="client-logo">                    <a href="user-resume.html#"><img src="images/clients/client_4.png" class="img-responsive" alt="Brand Image" /></a>                </div>            </div>        </div>                 	        <!--End of Footer-->                <div class="modal add-resume-modal" tabindex="-1" role="dialog" aria-labelledby="">            <div class="modal-dialog modal-md" role="document">                <div class="modal-content">                    <div class="modal-header">                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        <h4 class="modal-title" id="myModalLabel">Add New Resume</h4>                    </div>                    <div class="modal-body">                        <div class="input-group image-preview form-group">                            <input type="text" class="form-control image-preview-filename" disabled="disabled">                            <span class="input-group-btn">                            <button type="button" class="btn btn-default image-preview-clear" style="display:none;">                                <span class="glyphicon glyphicon-remove"></span> Clear                            </button>                            <div class="btn btn-default image-preview-input">                                <span class="glyphicon glyphicon-folder-open"></span>                                <span class="image-preview-input-title">Browse</span>                                <input type="file" accept="file_extension" name="input-file-preview" />                            </div>                            </span>                        </div>                        <p>Only pdf and doc files are accepted</p>                    </div>                    <div class="modal-footer">                        <a href="user-resume.html" type="button" class="btn btn-default">Save Resume</a>                    </div>                </div>            </div>        </div><?php include('include/footermenu.php'); ?><?php include('include/footer.php'); ?> 