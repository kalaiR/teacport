<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Typography</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/style_responsive.css" rel="stylesheet" />
	<link href="css/style_default.css" rel="stylesheet" id="style_color" />

	<link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
	<link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
	<!-- BEGIN HEADER -->
    <div id="header" class="navbar navbar-inverse navbar-fixed-top">
        <!-- BEGIN TOP NAVIGATION BAR -->
        <div class="navbar-inner">
            <div class="container-fluid">
                <!-- BEGIN LOGO -->
                <a class="brand" href="index.php">
                    <img src="img/logo.png" alt="Admin Lab" />
                </a>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="arrow"></span>
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <div id="top_menu" class="nav notify-row">
                    <!-- BEGIN NOTIFICATION -->
                    <ul class="nav top-menu">
                        <!-- BEGIN SETTINGS -->
                        <li class="dropdown">
                            <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="ui_elements_typography.php#" data-original-title="Settings">
                                <i class="icon-cog"></i>
                            </a>
                        </li>
                        <!-- END SETTINGS -->
                        <!-- BEGIN INBOX DROPDOWN -->
                        <li class="dropdown" id="header_inbox_bar">
                            <a href="ui_elements_typography.php#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-envelope-alt"></i>
                                <span class="badge badge-important">5</span>
                            </a>
                            <ul class="dropdown-menu extended inbox">
                                <li>
                                    <p>You have 5 new messages</p>
                                </li>
                                <li>
                                    <a href="ui_elements_typography.php#">
                                        <span class="photo"><img src="img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Dulal Khan</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, this is an example messages please check
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_elements_typography.php#">
                                        <span class="photo"><img src="img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Rafiqul Islam</span>
									<span class="time">10 mins</span>
									</span>
									<span class="message">
									 Hi, Mosaddek Bhai how are you ?
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_elements_typography.php#">
                                        <span class="photo"><img src="img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Sumon Ahmed</span>
									<span class="time">3 hrs</span>
									</span>
									<span class="message">
									    This is awesome dashboard templates
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_elements_typography.php#">
                                        <span class="photo"><img src="img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Dulal Khan</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, this is an example messages please check
									</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_elements_typography.php#">See all messages</a>
                                </li>
                            </ul>
                        </li>
                        <!-- END INBOX DROPDOWN -->
                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                        <li class="dropdown" id="header_notification_bar">
                            <a href="ui_elements_typography.php#" class="dropdown-toggle" data-toggle="dropdown">

                                <i class="icon-bell-alt"></i>
                                <span class="badge badge-warning">7</span>
                            </a>
                            <ul class="dropdown-menu extended notification">
                                <li>
                                    <p>You have 7 new notifications</p>
                                </li>
                                <li>
                                    <a href="ui_elements_typography.php#">
                                        <span class="label label-important"><i class="icon-bolt"></i></span>
                                        Server #3 overloaded.
                                        <span class="small italic">34 mins</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_elements_typography.php#">
                                        <span class="label label-warning"><i class="icon-bell"></i></span>
                                        Server #10 not respoding.
                                        <span class="small italic">1 Hours</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_elements_typography.php#">
                                        <span class="label label-important"><i class="icon-bolt"></i></span>
                                        Database overloaded 24%.
                                        <span class="small italic">4 hrs</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_elements_typography.php#">
                                        <span class="label label-success"><i class="icon-plus"></i></span>
                                        New user registered.
                                        <span class="small italic">Just now</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_elements_typography.php#">
                                        <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                        Application error.
                                        <span class="small italic">10 mins</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui_elements_typography.php#">See all notifications</a>
                                </li>
                            </ul>
                        </li>
                        <!-- END NOTIFICATION DROPDOWN -->

                    </ul>
                </div>
                <!-- END  NOTIFICATION -->
                <div class="top-nav ">
                    <ul class="nav pull-right top-menu" >
                        <!-- BEGIN SUPPORT -->
                        <li class="dropdown mtop5">

                            <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="ui_elements_typography.php#" data-original-title="Chat">
                                <i class="icon-comments-alt"></i>
                            </a>
                        </li>
                        <li class="dropdown mtop5">
                            <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="ui_elements_typography.php#" data-original-title="Help">
                                <i class="icon-headphones"></i>
                            </a>
                        </li>
                        <!-- END SUPPORT -->
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <li class="dropdown">
                            <a href="ui_elements_typography.php#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="img/avatar1_small.jpg" alt="">
                                <span class="username">Mosaddek Hossain</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="ui_elements_typography.php#"><i class="icon-user"></i> My Profile</a></li>
                                <li><a href="ui_elements_typography.php#"><i class="icon-tasks"></i> My Tasks</a></li>
                                <li><a href="ui_elements_typography.php#"><i class="icon-calendar"></i> Calendar</a></li>
                                <li class="divider"></li>
                                <li><a href="login.php"><i class="icon-key"></i> Log Out</a></li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                    </ul>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
            </div>
        </div>
        <!-- END TOP NAVIGATION BAR -->
    </div>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	<div id="container" class="row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div id="sidebar" class="nav-collapse collapse">
			<div class="sidebar-toggler hidden-phone"></div>
			<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
			<div class="navbar-inverse">
				<form class="navbar-search visible-phone">
					<input type="text" class="search-query" placeholder="Search" />
				</form>
			</div>
			<!-- END RESPONSIVE QUICK SEARCH FORM -->
			<!-- BEGIN SIDEBAR MENU -->
            <ul class="sidebar-menu">
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <span class="icon-box"> <i class="icon-dashboard"></i></span> Dashboard
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="index.php">Dashboard 1</a></li>
                        <li><a class="" href="index.php">Dashboard 2</a></li>

                    </ul>
                </li>
                <li class="has-sub active">
                    <a href="javascript:;" class="">
                        <span class="icon-box"> <i class="icon-book"></i></span> UI Elements
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="ui_elements_general.php">General</a></li>
                        <li><a class="" href="ui_elements_buttons.php">Buttons</a></li>
                        <li><a class="" href="jquery_ui.php">jQuery UI Component</a></li>
                        <li><a class="" href="ui_elements_tabs_accordions.php">Tabs & Accordions</a></li>
                        <li class="active"><a class="" href="ui_elements_typography.php">Typography</a></li>
                        <li><a class="" href="tree_view.php">Tree View</a></li>
                        <li><a class="" href="nestable.php">Nestable List</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-cogs"></i></span> Components
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="calendar.php">Calendar</a></li>
                        <li><a class="" href="grids.php">Grids</a></li>
                        <li><a class="" href="charts.php">Visual Charts</a></li>
                        <li><a class="" href="messengers.php">Conversations</a></li>
                        <li><a class="" href="gallery.php"> Gallery</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-tasks"></i></span> Form Stuff
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="form_layout.php">Form Layouts</a></li>
                        <li><a class="" href="form_component.php">Form Components</a></li>
                        <li><a class="" href="form_wizard.php">Form Wizard</a></li>
                        <li><a class="" href="form_validation.php">Form Validation</a></li>
                        <li><a class="" href="dropzone.php">Dropzone File Upload </a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-th"></i></span> Data Tables
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="basic_table.php">Basic Table</a></li>
                        <li><a class="" href="managed_table.php">Managed Table</a></li>
                        <li><a class="" href="editable_table.php">Editable Table</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class=" icon-qrcode"></i></span> Portlets
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="general_portlet.php">General Portlets</a></li>
                        <li><a class="" href="draggable_portlet.php">Draggable Portlets</a></li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-fire"></i></span> Icons
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="font_awesome.php">Font Awesome</a></li>
                        <li><a class="" href="glyphicons.php">Glyphicons</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-map-marker"></i></span> Maps
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="maps_google.php"> Google Maps</a></li>
                        <li><a class="" href="maps_vector.php"> Vector Maps</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-file-alt"></i></span> Sample Pages
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="blank.php">Blank Page</a></li>
                        <li><a class="" href="sidebar_closed.php">Sidebar Closed Page</a></li>
                        <li><a class="" href="coming_soon.php">Coming Soon</a></li>
                        <li><a class="" href="blog.php">Blog</a></li>
                        <li><a class="" href="news.php">News</a></li>
                        <li><a class="" href="about_us.php">About Us</a></li>
                        <li><a class="" href="contact_us.php">Contact Us</a></li>
                        <li><a class="" href="email_templates.php">Email Templates</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;" class="">
                        <span class="icon-box"><i class="icon-glass"></i></span> Extra
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="lock.php">Lock Screen</a></li>
                        <li><a class="" href="profile.php">Profile</a></li>
                        <li><a class="" href="invoice.php">Invoice</a></li>
                        <li><a class="" href="pricing_tables.php">Pricing Tables</a></li>
                        <li><a class="" href="inbox.php">Inbox</a></li>
                        <li><a class="" href="search_result.php">Search Result</a></li>
                        <li><a class="" href="faq.php">FAQ</a></li>
                        <li><a class="" href="404.php">404 Error</a></li>
                        <li><a class="" href="500.php">500 Error</a></li>
                    </ul>
                </li>
                <li><a class="" href="login.php"><span class="icon-box"><i class="icon-user"></i></span> Login Page</a></li>
            </ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
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
							Typography
							<small>headings, texts, lists and more</small>
						</h3>
                        <ul class="breadcrumb">
                            <li>
                                <a href="ui_elements_typography.php#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                            </li>
                            <li>
                                <a href="ui_elements_typography.php#">UI Elements</a> <span class="divider">&nbsp;</span>
                            </li>
                            <li><a href="ui_elements_typography.php#">Typography</a><span class="divider-last">&nbsp;</span></li>
                        </ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div id="page">
					<div class="row-fluid">
						<div class="span8" id="right_column">
							<!-- BEGIN GENERAL PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class=" icon-trophy"></i>General</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>							
								</div>
								<div class="widget-body">
                                    <div class="row-fluid">
                                        <div class="span6">
                                            <h3>Headings</h3>
                                            <h1>h1. Heading 1</h1>
                                            <h2>h2. Heading 2</h2>
                                            <h3>h3. Heading 3</h3>
                                            <h4>h4. Heading 4</h4>
                                            <h5>h5. Heading 5</h5>
                                            <h6>h6. Heading 6</h6>
                                        </div>
                                        <div class="span6">
                                            <h3>Texts</h3>
                                            <p class="muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
                                            <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
                                            <p class="text-error">Donec ullamcorper nulla non metus auctor fringilla.</p>
                                            <p class="text-info">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.</p>
                                            <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                        </div>
                                    </div>


                                </div>
							</div>
							<!-- END GENERAL PORTLET-->

							<!-- BEGIN SAMPLE PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Sample Text</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <div class="row-fluid">
                                        <div class="span6">
                                            <h3>Sample text with lead body</h3>
                                            <p class="lead">
                                                Lead body. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla.
                                            </p>
                                        </div>
                                        <div class="span6">
                                            <h3>Sample text</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla.
                                            </p>
                                            <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui.</p>
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span6">
                                            <h3>Address</h3>
                                            <div class="well">
                                                <address>
                                                    <strong>Vector Lab, Inc.</strong><br />
                                                    Dreamland Ave, Suite 73<br />
                                                    Bangladesh, PC 1361<br />
                                                    <abbr title="Phone">P:</abbr> (123) 456-7891
                                                </address>
                                                <address>
                                                    <strong>Full Name</strong><br />
                                                    <a href="mailto:#">first.last@email.com</a>
                                                </address>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <h3>Some more text here</h3>
                                            <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END SAMPLE PORTLET-->

                            <!-- BEGIN BLOCKQUOTES PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Blockquotes</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>							
								</div>
								<div class="widget-body">
									<blockquote>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Duis mollis, est non commodo luctus, nisi erat porttitor ligula integer posuere erat a ante.</p>
									</blockquote>
									<blockquote>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
										<small>Someone famous <cite title="Source Title">Source Title</cite></small>
									</blockquote>
									<div class="clearfix">
										<blockquote class="pull-right">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
											<small>Someone famous <cite title="Source Title">Source Title</cite></small>
										</blockquote>
									</div>
								</div>
							</div>
							<!-- END BLOCKQUOTES PORTLET-->

                            <!-- BEGIN DESCRIPTION LISTS PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Description Lists</h4>
                                    <span class="tools">
                                    <a href="javascript:;" class="icon-chevron-down"></a>
                                    <a href="javascript:;" class="icon-remove"></a>
                                    </span>
                                </div>
                                <div class="widget-body">
                                    <dl>
                                        <dt>Description lists</dt>
                                        <dd>A description list is perfect for defining terms. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod.</dd>
                                        <dt>Euismod</dt>
                                        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                        <dt>Malesuada porta</dt>
                                        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                                        <dt>Mosaddek Hossain</dt>
                                        <dd>Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod.</dd>
                                    </dl>
                                </div>
                            </div>
                            <!-- END DESCRIPTION LISTS PORTLET-->
                            <!-- BEGIN HORIZONTAL DESCRIPTION LISTS PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Horizontal Description Lists</h4>
                                    <span class="tools">
                                    <a href="javascript:;" class="icon-chevron-down"></a>
                                    <a href="javascript:;" class="icon-remove"></a>
                                    </span>
                                </div>
                                <div class="widget-body">
                                    <dl class="dl-horizontal">
                                        <dt>Description lists</dt>
                                        <dd>A description list is perfect for defining terms.</dd>
                                        <dt>Euismod</dt>
                                        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                        <dt>Malesuada porta</dt>
                                        <dd>Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. </dd>
                                        <dt>Description lists</dt>
                                        <dd>A description list is perfect for defining terms. A description list is perfect for defining terms. A description list is perfect for defining terms. A description list is perfect for defining terms.</dd>
                                        <dt>Euismod</dt>
                                        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                        <dt>Malesuada porta</dt>
                                        <dd>Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. </dd>
                                    </dl>
                                </div>
                            </div>
                            <!-- END HORIZONTAL DESCRIPTION LISTS PORTLET-->
						</div>
						<div class="span4">
							<!-- BEGIN ORDERED LISTS PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Ordered Lists</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
                                    <a href="javascript:;" class="icon-remove"></a>
									</span>							
								</div>
								<div class="widget-body">
									<ol>
										<li>Lorem ipsum dolor sit amet</li>
										<li>Consectetur adipiscing elit</li>
										<li>Integer molestie lorem at massa</li>
										<li>Facilisis in pretium nisl aliquet</li>
										<li>Nulla volutpat aliquam velit</li>
                                        <li>Facilisis in pretium nisl aliquet</li>
                                        <li>Faucibus porta lacus fringilla vel</li>
										<li>Aenean sit amet erat nunc</li>
										<li>Eget porttitor lorem</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Consectetur adipiscing elit</li>
                                        <li>Integer molestie lorem at massa</li>
									</ol>
								</div>
							</div>
							<!-- END ORDERED LISTS PORTLET-->
                            <!-- BEGIN UNORDERED LISTS PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Unordered Lists</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
                                    <a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Consectetur adipiscing elit</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Facilisis in pretium nisl aliquet</li>
                                        <li>
                                            Nulla volutpat aliquam velit
                                            <ul>
                                                <li>Phasellus iaculis neque</li>
                                                <li>Purus sodales ultricies</li>
                                                <li>Vestibulum laoreet porttitor sem</li>
                                                <li>Ac tristique libero volutpat at</li>
                                            </ul>
                                        </li>
                                        <li>Faucibus porta lacus fringilla vel</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Eget porttitor lorem</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- END UNORDERED LISTS PORTLET-->
							<!-- BEGIN UNSTYLED LISTS PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Unstyled Lists</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
                                    <a href="javascript:;" class="icon-remove"></a>
									</span>							
								</div>
								<div class="widget-body">
									<ul class="unstyled">
										<li>Lorem ipsum dolor sit amet</li>
										<li>Consectetur adipiscing elit</li>
										<li>Integer molestie lorem at massa</li>
										<li>Facilisis in pretium nisl aliquet</li>
										<li>
											Nulla volutpat aliquam velit
											<ul>
												<li>Phasellus iaculis neque</li>
												<li>Purus sodales ultricies</li>
												<li>Vestibulum laoreet porttitor sem</li>
												<li>Ac tristique libero volutpat at</li>
											</ul>
										</li>
										<li>Faucibus porta lacus fringilla vel</li>
										<li>Aenean sit amet erat nunc</li>
										<li>Eget porttitor lorem</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Lorem ipsum dolor sit amet</li>
									</ul>
								</div>
							</div>
							<!-- END UNSTYLED LISTS PORTLET-->
                            <!-- BEGIN UNSTYLED LISTS PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Letter List </h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
                                    <a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <ul class="upper-alpha">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Consectetur adipiscing elit</li>
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Facilisis in pretium nisl aliquet</li>
                                        <li>
                                            Nulla volutpat aliquam velit
                                            <ul>
                                                <li>Phasellus iaculis neque</li>
                                                <li>Purus sodales ultricies</li>
                                                <li>Vestibulum laoreet porttitor sem</li>
                                                <li>Ac tristique libero volutpat at</li>
                                            </ul>
                                        </li>
                                        <li>Faucibus porta lacus fringilla vel</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Eget porttitor lorem</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- END UNSTYLED LISTS PORTLET-->
                            <!-- BEGIN UNSTYLED LISTS PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Roman List  </h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
                                    <a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <ul class="roman-list">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Consectetur adipiscing elit</li>
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Facilisis in pretium nisl aliquet</li>
                                        <li>
                                            Nulla volutpat aliquam velit
                                            <ul>
                                                <li>Phasellus iaculis neque</li>
                                                <li>Purus sodales ultricies</li>
                                                <li>Vestibulum laoreet porttitor sem</li>
                                                <li>Ac tristique libero volutpat at</li>
                                            </ul>
                                        </li>
                                        <li>Faucibus porta lacus fringilla vel</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Eget porttitor lorem</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- END UNSTYLED LISTS PORTLET-->
                            <!-- BEGIN ICONIN LISTS PORTLET-->
                            <div class="widget">
                                <div class="widget-title">
                                    <h4><i class="icon-reorder"></i>Iconic Lists</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
                                    <a href="javascript:;" class="icon-remove"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <ul class="unstyled icons">
                                        <li><i class="icon-ok"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="icon-fire"></i> Consectetur adipiscing elit</li>
                                        <li><i class="icon-bolt"></i> Integer molestie lorem at massa</li>
                                        <li><i class="icon-pencil"></i> Facilisis in pretium nisl aliquet</li>
                                        <li><i class="icon-book"></i>
                                            Nulla volutpat aliquam velit
                                            <ul class="icons">
                                                <li><i class="icon-leaf"></i> Phasellus iaculis neque</li>
                                                <li><i class="icon-link"></i> Purus sodales ultricies</li>
                                                <li><i class="icon-lock"></i> Vestibulum laoreet porttitor sem</li>
                                                <li><i class="icon-random"></i> Ac tristique libero volutpat at</li>
                                            </ul>
                                        </li>
                                        <li><i class="icon-pushpin"></i> Faucibus porta lacus fringilla vel</li>
                                        <li><i class="icon-plane"></i> Aenean sit amet erat nunc</li>
                                        <li><i class="icon-cogs"></i> Eget porttitor lorem</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- END ICONIC LISTS PORTLET-->

						</div>
					</div>

					<!--END:BODY-->
				</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div id="footer">
        2013 &copy; Admin Lab Dashboard.
		<div class="span pull-right">
			<span class="go-top"><i class="icon-arrow-up"></i></span>
		</div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS -->
	<script src="js/jquery-1.8.3.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/jquery.blockui.js"></script>
	<!-- ie8 fixes -->
	<!--[if lt IE 9]>
	<script src="js/excanvas.js"></script>
	<script src="js/respond.js"></script>
	<![endif]-->
	<script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
	<script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>
	<script src="js/scripts.js"></script>
	<script>
		jQuery(document).ready(function() {			
			// initiate layout and plugins
			App.init();
		});
	</script>
</body>
<!-- END BODY -->
</html>