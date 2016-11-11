<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Pricing Tables</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style_responsive.css" rel="stylesheet" />
   <link href="css/style_default.css" rel="stylesheet" id="style_color" />

   <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
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
                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="pricing_tables.php#" data-original-title="Settings">
                               <i class="icon-cog"></i>
                           </a>
                       </li>
                       <!-- END SETTINGS -->
                       <!-- BEGIN INBOX DROPDOWN -->
                       <li class="dropdown" id="header_inbox_bar">
                           <a href="pricing_tables.php#" class="dropdown-toggle" data-toggle="dropdown">
                               <i class="icon-envelope-alt"></i>
                               <span class="badge badge-important">5</span>
                           </a>
                           <ul class="dropdown-menu extended inbox">
                               <li>
                                   <p>You have 5 new messages</p>
                               </li>
                               <li>
                                   <a href="pricing_tables.php#">
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
                                   <a href="pricing_tables.php#">
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
                                   <a href="pricing_tables.php#">
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
                                   <a href="pricing_tables.php#">
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
                                   <a href="pricing_tables.php#">See all messages</a>
                               </li>
                           </ul>
                       </li>
                       <!-- END INBOX DROPDOWN -->
                       <!-- BEGIN NOTIFICATION DROPDOWN -->
                       <li class="dropdown" id="header_notification_bar">
                           <a href="pricing_tables.php#" class="dropdown-toggle" data-toggle="dropdown">

                               <i class="icon-bell-alt"></i>
                               <span class="badge badge-warning">7</span>
                           </a>
                           <ul class="dropdown-menu extended notification">
                               <li>
                                   <p>You have 7 new notifications</p>
                               </li>
                               <li>
                                   <a href="pricing_tables.php#">
                                       <span class="label label-important"><i class="icon-bolt"></i></span>
                                       Server #3 overloaded.
                                       <span class="small italic">34 mins</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="pricing_tables.php#">
                                       <span class="label label-warning"><i class="icon-bell"></i></span>
                                       Server #10 not respoding.
                                       <span class="small italic">1 Hours</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="pricing_tables.php#">
                                       <span class="label label-important"><i class="icon-bolt"></i></span>
                                       Database overloaded 24%.
                                       <span class="small italic">4 hrs</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="pricing_tables.php#">
                                       <span class="label label-success"><i class="icon-plus"></i></span>
                                       New user registered.
                                       <span class="small italic">Just now</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="pricing_tables.php#">
                                       <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                       Application error.
                                       <span class="small italic">10 mins</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="pricing_tables.php#">See all notifications</a>
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

                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="pricing_tables.php#" data-original-title="Chat">
                               <i class="icon-comments-alt"></i>
                           </a>
                       </li>
                       <li class="dropdown mtop5">
                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="pricing_tables.php#" data-original-title="Help">
                               <i class="icon-headphones"></i>
                           </a>
                       </li>
                       <!-- END SUPPORT -->
                       <!-- BEGIN USER LOGIN DROPDOWN -->
                       <li class="dropdown">
                           <a href="pricing_tables.php#" class="dropdown-toggle" data-toggle="dropdown">
                               <img src="img/avatar1_small.jpg" alt="">
                               <span class="username">Mosaddek Hossain</span>
                               <b class="caret"></b>
                           </a>
                           <ul class="dropdown-menu">
                               <li><a href="pricing_tables.php#"><i class="icon-user"></i> My Profile</a></li>
                               <li><a href="pricing_tables.php#"><i class="icon-tasks"></i> My Tasks</a></li>
                               <li><a href="pricing_tables.php#"><i class="icon-calendar"></i> Calendar</a></li>
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
              <li class="has-sub">
                  <a href="javascript:;" class="">
                      <span class="icon-box"> <i class="icon-book"></i></span> UI Elements
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="ui_elements_general.php">General</a></li>
                      <li><a class="" href="ui_elements_buttons.php">Buttons</a></li>
                      <li><a class="" href="jquery_ui.php">jQuery UI Component</a></li>
                      <li><a class="" href="ui_elements_tabs_accordions.php">Tabs & Accordions</a></li>
                      <li><a class="" href="ui_elements_typography.php">Typography</a></li>
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
              <li class="has-sub active">
                  <a href="javascript:;" class="">
                      <span class="icon-box"><i class="icon-glass"></i></span> Extra
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="lock.php">Lock Screen</a></li>
                      <li><a class="" href="profile.php">Profile</a></li>
                      <li><a class="" href="invoice.php">Invoice</a></li>
                      <li class="active"><a class="" href="pricing_tables.php">Pricing Tables</a></li>
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
                     Pricing Tables
                     <small>pricing tables samples</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="pricing_tables.php#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <a href="pricing_tables.php#">Extra</a> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="pricing_tables.php#">Pricing Tables</a><span class="divider-last">&nbsp;</span></li>
                   </ul>
                  <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->          
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN INLINE NOTIFICATIONS widget-->
                  <div class="widget">
                     <div class="widget-title">
                        <h4><i class="icon-cogs"></i>Pricing Tables</h4>
                        <div class="tools">
                           <a href="javascript:;" class="collapse"></a>
                           <a href="pricing_tables.php#widget-config" data-toggle="modal" class="config"></a>
                           <a href="javascript:;" class="reload"></a>
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="widget-body">
                        <div class="row-fluid">
                           <div class="pricing-title">
                               <h2>30 days Free Trial on All Accounts</h2>
                               <h4>No risk. No hidden fees. Cancel at anytime. </h4>
                           </div>
                        </div>
                        <div class="row-fluid">
                           <div class="span3">
                              <div class="pricing-table">
                                  <div class="pricing-head">
                                      <h3> Micro </h3>
                                      <h4>
                                          <span class="note">$</span>20 <span>Per Month</span></h4>
                                  </div>
                                  <ul>
                                      <li><strong>Free</strong> setup</li>
                                      <li><strong>1</strong> Website</li>
                                      <li><strong>2</strong> Projects</li>
                                      <li><strong>1GB</strong> Storage</li>
                                      <li><strong>$0</strong> Google Adwords Credit</li>
                                  </ul>
                                  <div class="price-actions">
                                      <a class="btn" href="javascript:;">Purchase Now</a>
                                  </div>
                              </div>
                           </div>
                           <div class="spance10 visible-phone"></div>
                           <div class="span3">
                               <div class="pricing-table">
                                   <div class="pricing-head">
                                       <h3> Starter </h3>
                                       <h4>
                                           <span class="note">$</span>30 <span>Per Month</span></h4>
                                   </div>
                                   <ul>
                                       <li><strong>Free</strong> setup</li>
                                       <li><strong>5</strong> Website</li>
                                       <li><strong>10</strong> Projects</li>
                                       <li><strong>15GB</strong> Storage</li>
                                       <li><strong>$30</strong> Google Adwords Credit</li>
                                   </ul>
                                   <div class="price-actions">
                                       <a class="btn" href="javascript:;">Purchase Now</a>
                                   </div>
                               </div>
                           </div>
                           <div class="spance10 visible-phone"></div>
                           <div class="span3">
                               <div class="pricing-table green">
                                   <div class="pricing-head ">
                                       <h3> Business </h3>
                                       <h4>
                                           <span class="note">$</span>60 <span>Per Month</span></h4>
                                   </div>
                                   <ul>
                                       <li><strong>Free</strong> setup</li>
                                       <li><strong>10</strong> Website</li>
                                       <li><strong>20</strong> Projects</li>
                                       <li><strong>Unlimited</strong> Storage</li>
                                       <li><strong>$50</strong> Google Adwords Credit</li>
                                   </ul>
                                   <div class="price-actions">
                                       <a class="btn" href="javascript:;">Purchase Now</a>
                                   </div>
                               </div>
                           </div>
                           <div class="spance10 visible-phone"></div>
                           <div class="span3">
                               <div class="pricing-table">
                                   <div class="pricing-head">
                                       <h3> Enterprise </h3>
                                       <h4>
                                           <span class="note">$</span>120 <span>Per Month</span></h4>
                                   </div>
                                   <ul>
                                       <li><strong>Free</strong> setup</li>
                                       <li><strong>20</strong> Website</li>
                                       <li><strong>30</strong> Projects</li>
                                       <li><strong>Unlimited</strong> Storage</li>
                                       <li><strong>$100</strong> Google Adwords Credit</li>
                                   </ul>
                                   <div class="price-actions">
                                       <a class="btn" href="javascript:;">Purchase Now</a>
                                   </div>
                               </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- END INLINE NOTIFICATIONS widget-->
               </div>
            </div>
            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER-->       
      </div>
      <!-- BEGIN PAGE -->     
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
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="js/jquery-1.8.3.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script src="js/scripts.js"></script>
   <script>
       jQuery(document).ready(function() {
           // initiate layout and plugins
           App.init();
       });
   </script>
   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
