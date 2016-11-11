<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Tree View Page</title>
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

   <link rel="stylesheet" type="text/css" href="assets/bootstrap-tree/bootstrap-tree/css/bootstrap-tree.css" />

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
                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="tree_view.php#" data-original-title="Settings">
                               <i class="icon-cog"></i>
                           </a>
                       </li>
                       <!-- END SETTINGS -->
                       <!-- BEGIN INBOX DROPDOWN -->
                       <li class="dropdown" id="header_inbox_bar">
                           <a href="tree_view.php#" class="dropdown-toggle" data-toggle="dropdown">
                               <i class="icon-envelope-alt"></i>
                               <span class="badge badge-important">5</span>
                           </a>
                           <ul class="dropdown-menu extended inbox">
                               <li>
                                   <p>You have 5 new messages</p>
                               </li>
                               <li>
                                   <a href="tree_view.php#">
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
                                   <a href="tree_view.php#">
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
                                   <a href="tree_view.php#">
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
                                   <a href="tree_view.php#">
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
                                   <a href="tree_view.php#">See all messages</a>
                               </li>
                           </ul>
                       </li>
                       <!-- END INBOX DROPDOWN -->
                       <!-- BEGIN NOTIFICATION DROPDOWN -->
                       <li class="dropdown" id="header_notification_bar">
                           <a href="tree_view.php#" class="dropdown-toggle" data-toggle="dropdown">

                               <i class="icon-bell-alt"></i>
                               <span class="badge badge-warning">7</span>
                           </a>
                           <ul class="dropdown-menu extended notification">
                               <li>
                                   <p>You have 7 new notifications</p>
                               </li>
                               <li>
                                   <a href="tree_view.php#">
                                       <span class="label label-important"><i class="icon-bolt"></i></span>
                                       Server #3 overloaded.
                                       <span class="small italic">34 mins</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="tree_view.php#">
                                       <span class="label label-warning"><i class="icon-bell"></i></span>
                                       Server #10 not respoding.
                                       <span class="small italic">1 Hours</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="tree_view.php#">
                                       <span class="label label-important"><i class="icon-bolt"></i></span>
                                       Database overloaded 24%.
                                       <span class="small italic">4 hrs</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="tree_view.php#">
                                       <span class="label label-success"><i class="icon-plus"></i></span>
                                       New user registered.
                                       <span class="small italic">Just now</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="tree_view.php#">
                                       <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                       Application error.
                                       <span class="small italic">10 mins</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="tree_view.php#">See all notifications</a>
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

                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="tree_view.php#" data-original-title="Chat">
                               <i class="icon-comments-alt"></i>
                           </a>
                       </li>
                       <li class="dropdown mtop5">
                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="tree_view.php#" data-original-title="Help">
                               <i class="icon-headphones"></i>
                           </a>
                       </li>
                       <!-- END SUPPORT -->
                       <!-- BEGIN USER LOGIN DROPDOWN -->
                       <li class="dropdown">
                           <a href="tree_view.php#" class="dropdown-toggle" data-toggle="dropdown">
                               <img src="img/avatar1_small.jpg" alt="">
                               <span class="username">Mosaddek Hossain</span>
                               <b class="caret"></b>
                           </a>
                           <ul class="dropdown-menu">
                               <li><a href="tree_view.php#"><i class="icon-user"></i> My Profile</a></li>
                               <li><a href="tree_view.php#"><i class="icon-tasks"></i> My Tasks</a></li>
                               <li><a href="tree_view.php#"><i class="icon-calendar"></i> Calendar</a></li>
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
                      <li><a class="" href="ui_elements_typography.php">Typography</a></li>
                      <li class="active"><a class="" href="tree_view.php">Tree View</a></li>
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
                       Tree View
                       <small>tree view sample</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="tree_view.php#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <a href="tree_view.php#">UI Elements</a> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="tree_view.php#">Tree View Page</a><span class="divider-last">&nbsp;</span></li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span6">
                  <div class="widget">
                        <div class="widget-title">
                           <h4><i class=" icon-indent-left"></i>Inline Tree</h4>
                           <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                           </span>
                        </div>
                        <div class="widget-body">
                            <div class="actions">
                                <a class="btn btn-small" id="tree_1_collapse" href="javascript:;"> Collapse All</a>
                                <a class="btn btn-small" id="tree_1_expand" href="javascript:;"> Expand All</a>
                            </div>
                            <div class="space10"></div>
                            <ul id="tree_1" class="tree">
                                <li>
                                    <a data-value="Bootstrap_Tree" data-toggle="branch" class="tree-toggle" data-role="branch" href="tree_view.php#">
                                        Bootstrap Tree
                                    </a>
                                    <ul class="branch in">
                                        <li>
                                            <a id="nut1" data-value="Bootstrap_Tree" data-toggle="branch" class="tree-toggle" href="tree_view.php#">
                                                Documents
                                            </a>
                                            <ul class="branch in">
                                                <li>
                                                    <a id="nut2" data-value="Bootstrap_Tree" data-toggle="branch" class="tree-toggle closed" href="tree_view.php#">
                                                        Finance
                                                    </a>
                                                    <ul class="branch">
                                                        <li><a data-role="leaf" href="tree_view.php#"><i class="icon-book"></i> Sale Revenue</a></li>
                                                        <li><a data-role="leaf" href="tree_view.php#"><i class="icon-fire"></i> Promotions</a></li>
                                                        <li><a data-role="leaf" href="tree_view.php#"><i class="icon-edit"></i> IPO</a></li>
                                                    </ul>
                                                </li>
                                                <li><a data-role="leaf" href="tree_view.php#"><i class="icon-magic"></i> ICT</a></li>
                                                <li><a data-role="leaf" href="tree_view.php#"><i class="icon-user"></i> Human Resources</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a id="nut3" data-value="Bootstrap_Tree" data-toggle="branch" class="tree-toggle closed" href="tree_view.php#">
                                                Examples
                                            </a>
                                            <ul class="branch">
                                                <li><a data-role="leaf" href="tree_view.php#"><i class="icon-cloud"></i> Internal</a></li>
                                                <li><a data-role="leaf" href="tree_view.php#"><i class="icon-user-md"></i> Client Base</a></li>
                                                <li><a data-role="leaf" href="tree_view.php#"><i class="icon-retweet"></i> Product Base</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a id="nut4" data-value="Bootstrap_Tree" data-toggle="branch" class="tree-toggle" href="tree_view.php#">
                                                Tasks
                                            </a>
                                            <ul class="branch in">
                                                <li><a data-role="leaf" href="tree_view.php#"><i class="icon-suitcase"></i> Internal Projects</a></li>
                                                <li><a data-role="leaf" href="tree_view.php#"><i class="icon-cloud-download"></i> Outsourcing</a></li>
                                                <li><a data-role="leaf" href="tree_view.php#"><i class="icon-sitemap"></i> Bug Tracking</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a id="nut6" data-value="Bootstrap_Tree" data-toggle="branch" class="tree-toggle closed" href="tree_view.php#">
                                                Customers
                                            </a>
                                            <ul class="branch">
                                                <li><a data-role="leaf" href="tree_view.php#"><i class="icon-tags"></i> Finance</a></li>
                                                <li><a data-role="leaf" href="tree_view.php#"><i class="icon-magic"></i> ICT</a></li>
                                                <li><a data-role="leaf" href="tree_view.php#"><i class="icon-user"></i> Human Resources</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a id="nut8" data-value="Bootstrap_Tree" data-toggle="branch" class="tree-toggle closed" href="tree_view.php#">
                                                Reports
                                            </a>
                                            <ul class="branch">
                                                <li><a data-role="leaf" href="tree_view.php#"><i class="icon-tags"></i> Finance</a></li>
                                                <li><a data-role="leaf" href="tree_view.php#"><i class="icon-magic"></i> ICT</a></li>
                                                <li><a data-role="leaf" href="tree_view.php#"><i class="icon-user"></i> Human Resources</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a data-role="leaf" target="_blank" href="http://themeforest.net/item/admin-lab-responsive-admin-dashboard-template/full_screen_preview/4701827">
                                                <i class="icon-share"></i> External Link
                                            </a>
                                        </li>
                                        <li>
                                            <a data-role="leaf" target="_blank" href="http://themeforest.net/item/admin-lab-responsive-admin-dashboard-template/full_screen_preview/4701827">
                                                <i class="icon-share"></i> Another External Link
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                  </div>
               </div>
                <div class="span6">
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class=" icon-indent-left"></i>Data Sources</h4>
                           <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                           </span>
                        </div>
                        <div class="widget-body">
                            <div class="actions">
                                <a class="btn btn-small" id="tree_2_collapse" href="javascript:;"> Collapse All</a>
                                <a class="btn btn-small" id="tree_2_expand" href="javascript:;"> Expand All</a>
                            </div>
                            <div class="space10"></div>
                            <ul id="tree_2" class="tree">
                                <li>
                                    <a data-value="Bootstrap_Tree" data-toggle="branch" class="tree-toggle" data-role="branch" href="tree_view.php#">Bootstrap Tree
                                    </a>
                                    <ul class="branch in">
                                        <li><a id="nut" data-role="leaf" href="tree_view.php#"><i class=" icon-book"></i> Documents</a></li>
                                        <li><a data-role="leaf" href="tree_view.php#"><i class=" icon-bullhorn"></i> Projects</a></li>
                                        <li><a data-role="leaf" href="tree_view.php#"><i class="icon-tasks"></i> Tasks</a></li>
                                        <li>
                                            <a data-role="leaf"  href="tree_view.php#">
                                                <i class="icon-share"></i> External Link
                                            </a>
                                        </li>
                                        <li>
                                            <a data-role="leaf"  href="tree_view.php#">
                                                <i class="icon-share"></i> Another External Link
                                            </a>
                                        </li>
                                        <li>
                                            <a data-value="XML_Example" data-toggle="branch" class="tree-toggle closed" data-role="branch" href="assets/bootstrap-tree/xmlexample.xml">Load data from XML document via Ajax
                                            </a>
                                            <ul class="branch">
                                                <li><a role="branch" class="tree-toggle closed folder" data-toggle="branch" data-value="number_8" data-itemid="root/number_8" href="tree_view.php#">this branch</a>
                                                    <ul class="branch">
                                                        <li><a role="leaf" data-value="2" data-itemid="root/number_8/wow" href="tree_view.php#"><i class="icon-shopping-cart"></i> Purchase admin lab Today</a></li>
                                                    </ul>
                                                </li>
                                                <li><a role="branch" class="tree-toggle folder" data-toggle="branch" data-value="number_9" data-itemid="root/number_9" href="tree_view.php#">Check this Out!</a>
                                                    <ul class="branch in">
                                                        <li><a role="leaf" data-value="But admin lab Today" data-itemid="root/number_9/admin lab" href="tree_view.php#"><i class="icon-shopping-cart"></i> Purchase admin lab Today</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a data-value="HTML_Example" data-toggle="branch" class="tree-toggle closed" data-role="branch" href="assets/bootstrap-tree/htmlexample.php">Load data from HTML page via Ajax
                                            </a><ul class="branch"><li><a target="_blank" href="tree_view.php#">Some Link</a></li>
                                            <li><a target="_blank" href="tree_view.php#">Another Link</a></li>
                                            <li>
                                                <a data-value="GitHub_Repos" data-toggle="branch" class="tree-toggle closed" role="branch" href="tree_view.php#">Some Structure</a>
                                                <ul class="branch">
                                                    <li><a href="tree_view.php#">Events</a></li>
                                                    <li><a href="tree_view.php#">Users</a></li>
                                                    <li><a href="tree_view.php#">Feedbacks</a></li>
                                                    <li><a href="tree_view.php#">Reports</a></li>
                                                    <li><a href="tree_view.php#">Sales</a></li>
                                                    <li><a href="tree_view.php#">Revenue</a></li>
                                                </ul>
                                            </li></ul>
                                        </li>

                                        <li><a data-value="JSON_Example" data-toggle="branch" class="tree-toggle closed" data-role="branch" href="assets/bootstrap-tree/jsonexample.json">Load data from JSON via Ajax</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
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

   <script src="assets/bootstrap-tree/bootstrap-tree/js/bootstrap-tree.js"></script>

   <script src="js/scripts.js"></script>
   <script src="js/ui-tree.js"></script>

   <script>
      jQuery(document).ready(function() {       
         // initiate layout and plugins
         App.init();
         UITree.init();
      });
   </script>
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>