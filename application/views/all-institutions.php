<?php include('include/header.php'); ?><?php include('include/menus.php'); ?>         <section class="job-breadcrumb">            <div class="container">                <div class="row">                    <div class="col-md-12 col-sm-12 co-xs-12 text-left">                        <div class="bread">                            <ol class="breadcrumb">                                <li><a href="<?php echo base_url(); ?>">Home</a> </li>                                <li class="active">All Institutions</li>                            </ol>                        </div>                    </div>                </div>            </div>        </section>        <section id="institution_grids" class="categories">            <div class="container">                <div class="row">                    <div class="col-md-12 col-sm-12 col-xs-12">                        <div class="col-md-12 col-sm-12 col-xs-12">                            <div class="Heading-title black">                                <h1>All Institutions</h1>                               <p>Please find the list of all institutuions who were registered with us.</p>                            </div>                        </div>                                                <!--institution-grid-->                        <div class="col-md-12 col-sm-12 col-xs-12 nopadding">                            <div class="company-list">                            <?php                                 foreach ($allinstitutions_results as $institutionvalue):                                    if($institutionvalue['organization_profile_completeness'] >=90){                             ?>                                <div class="company-box">                                    <div class="col-md-2 col-sm-2 col-xs-12 nopadding">                                        <a href="user-followed-companies">                                            <div class="company-list-img"><img src="<?php echo $institutionvalue['organization_logo']; ?>" alt="" class="img-responsive"></div>                                        </a>                                    </div>                                    <div class="col-md-6 col-sm-6 col-xs-12 nopadding">                                        <div class="company-list-name">                                            <a href="user-followed-companies"><h5><?php echo $institutionvalue['organization_name']; ?></h5> </a>                                            <p><?php echo $institutionvalue['organization_address_1']; ?></p>                                        </div>                                    </div>                                    <div class="col-md-2 col-sm-2 col-xs-6 nopadding">                                        <span class="pull-left">New Jobs <span class="badge">(10)</span></span>                                    </div>                                    <div class="col-md-2 col-sm-2 col-xs-6 nopadding">                                        <span class="pull-left">Total Jobs (449)</span>                                    </div>                                </div>                                <?php } endforeach; ?>                            </div>                        </div><!--end institution-grid-->                        <!--pagination-->                        <div class="col-md-12 col-sm-12 col-xs-12 nopadding">                            <div class="pagination-box clearfix">                                <ul class="pagination">                                    <li>                                        <a href="user-followed-companies" aria-label="Previous"> <span aria-hidden="true">Previous</span> </a>                                    </li>                                    <li class="active"><a href="user-followed-companies.php#">1</a></li>                                    <li><a href="user-followed-companies">2</a></li>                                    <li><a href="user-followed-companies">3</a></li>                                    <li>                                        <a href="user-followed-companies" aria-label="Next"> <span aria-hidden="true">Next</span> </a>                                    </li>                                </ul>                            </div>                        </div>                        <!--pagination-->                    </div>                </div>            </div>        </section>        <?php include('include/footermenu.php'); ?>        <?php include('include/footer.php'); ?>        <?php include('include/footercustom.php'); ?>