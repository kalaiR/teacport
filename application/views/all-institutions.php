<?php include('include/header.php'); ?><?php include('include/menus.php'); ?>         <section class="job-breadcrumb">            <div class="container">                <div class="row">                    <div class="col-md-6 col-sm-7 co-xs-12 text-left">                        <h3>All Institutions</h3>                    </div>                    <div class="col-md-6 col-sm-5 co-xs-12 text-right">                        <div class="bread">                            <ol class="breadcrumb">                                <li><a href="index.html#">Home</a> </li>                                <li class="active">All Institutions</li>                            </ol>                        </div>                    </div>                </div>            </div>        </section>        <section class="categories">            <div class="container">                <div class="row">                    <div class="col-md-12 col-sm-12 col-xs-12">                        <div class="col-md-12 col-sm-12 col-xs-12">                            <div class="Heading-title black">                                <h1>All Institutions</h1>                               <p>Please find the list of all institutuions who were registered with us.</p>                            </div>                        </div>                                                <div class="col-md-12 col-sm-12 col-xs-12 nopadding">                                               <div id="cats-masonry">                            <?php foreach ($allinstitutions_results as $institutionvalue): ?>                                <div class="col-md-4 col-sm-6 col-xs-12">                                        <div class="company-list-box">                                            <span class="company-list-img">                                	<img src="<?php echo $institutionvalue['organization_logo']; ?>" class="img-responsive" alt="">                                </span>                                            <div class="company-list-box-detail">                                                <h5><?php echo $institutionvalue['organization_name']; ?> </h5>                                                <p><?php echo $institutionvalue['organization_address_1']; ?></p>                                            </div>                                        </div>                                </div>                                   <?php endforeach; ?>                                           <div class="col-md-12 col-sm-12 col-xs-12">                                    <div class="load-more-btn">                                        <button class="btn-default"> Load More <i class="fa fa-refresh"></i> </button>                                    </div>                                </div>                            </div>                        </div>                    </div>                </div>            </div>        </section>        <?php include('include/footermenu.php'); ?>        <?php include('include/footer.php'); ?>