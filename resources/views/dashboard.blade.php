<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js sidebar-large"><!--<![endif]-->

<head>
    <!-- BEGIN META SECTION -->
    <meta charset="utf-8">
    <title>Pixit - Responsive Boostrap3 Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    <link href="assets/css/icons/icons.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/plugins.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <link href="#" rel="stylesheet" id="theme-color">
    <!-- END  MANDATORY STYLE -->
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link href="assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="assets/plugins/metrojs/metrojs.css" rel="stylesheet">
    <!-- END PAGE LEVEL STYLE -->
    <script src="assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body data-page="dashboard">
    <!-- BEGIN TOP MENU -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sidebar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="menu-medium" class="sidebar-toggle tooltips">
                    <i class="fa fa-outdent"></i>
                </a>
                <a class="navbar-brand" href="index.html"></a>
            </div>
            <div class="navbar-center">Dashboard</div>
            <div class="navbar-collapse collapse">
                <!-- BEGIN TOP NAVIGATION MENU -->
                <ul class="nav navbar-nav pull-right header-menu">
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    <li class="dropdown" id="notifications-header">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="glyph-icon flaticon-notifications"></i>
                            <span class="badge badge-danger badge-header">6</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header clearfix">
                                <p class="pull-left">Notifications</p>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list withScroll" data-height="220">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-star p-r-10 f-18 c-orange"></i>
                                            Steve have rated your photo
                                            <span class="dropdown-time">Just now</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-heart p-r-10 f-18 c-red"></i>
                                            John added you to his favs
                                            <span class="dropdown-time">15 mins</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-file-text p-r-10 f-18"></i>
                                            New document available
                                            <span class="dropdown-time">22 mins</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-picture-o p-r-10 f-18 c-blue"></i>
                                            New picture added
                                            <span class="dropdown-time">40 mins</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-bell p-r-10 f-18 c-orange"></i>
                                            Meeting in 1 hour
                                            <span class="dropdown-time">1 hour</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-bell p-r-10 f-18"></i>
                                            Server 5 overloaded
                                            <span class="dropdown-time">2 hours</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-comment p-r-10 f-18 c-gray"></i>
                                            Bill comment your post
                                            <span class="dropdown-time">3 hours</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-picture-o p-r-10 f-18 c-blue"></i>
                                            New picture added
                                            <span class="dropdown-time">2 days</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-footer clearfix">
                                <a href="#" class="pull-left">See all notifications</a>
                                <a href="#" class="pull-right">
                                    <i class="fa fa-cog"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END NOTIFICATION DROPDOWN -->
                    <!-- BEGIN MESSAGES DROPDOWN -->
                    <li class="dropdown" id="messages-header">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="glyph-icon flaticon-email"></i>
                            <span class="badge badge-primary badge-header">
                             8
                        </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header clearfix">
                                <p class="pull-left">
                                    Messages
                                </p>
                            </li>
                            <li class="dropdown-body">
                                <ul class="dropdown-menu-list withScroll" data-height="220">
                                    <li class="clearfix">
                                        <span class="pull-left p-r-5">
                                            <img src="assets/img/avatars/avatar3.png" alt="avatar 3">
                                        </span>
                                        <div class="clearfix">
                                            <div>
                                                <strong>Alexa Johnson</strong> 
                                                <small class="pull-right text-muted">
                                                    <span class="glyphicon glyphicon-time p-r-5"></span>12 mins ago
                                                </small>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <span class="pull-left p-r-5">
                                            <img src="assets/img/avatars/avatar4.png" alt="avatar 4">
                                        </span>
                                        <div class="clearfix">
                                            <div>
                                                <strong>John Smith</strong> 
                                                <small class="pull-right text-muted">
                                                    <span class="glyphicon glyphicon-time p-r-5"></span>47 mins ago
                                                </small>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <span class="pull-left p-r-5">
                                            <img src="assets/img/avatars/avatar5.png" alt="avatar 5">
                                        </span>
                                        <div class="clearfix">
                                            <div>
                                                <strong>Bobby Brown</strong> 
                                                <small class="pull-right text-muted">
                                                    <span class="glyphicon glyphicon-time p-r-5"></span>1 hour ago
                                                </small>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <span class="pull-left p-r-5">
                                            <img src="assets/img/avatars/avatar6.png" alt="avatar 6">
                                        </span>
                                        <div class="clearfix">
                                            <div>
                                                <strong>James Miller</strong> 
                                                <small class="pull-right text-muted">
                                                    <span class="glyphicon glyphicon-time p-r-5"></span>2 days ago
                                                </small>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-footer clearfix">
                                <a href="mailbox.html" class="pull-left">See all messages</a>
                                <a href="#" class="pull-right">
                                    <i class="fa fa-cog"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END MESSAGES DROPDOWN -->
                    <!-- BEGIN USER DROPDOWN -->
                    <li class="dropdown" id="user-header">
                        <a href="#" class="dropdown-toggle c-white" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img src="assets/img/avatars/avatar2.png" alt="user avatar" width="30" class="p-r-5">
                            <span class="username">Bob Nilson</span>
                            <i class="fa fa-angle-down p-r-10"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="profil.html">
                                    <i class="glyph-icon flaticon-account"></i> My Profile
                                </a>
                            </li>
                            <li>
                                <a href="calendar.html">
                                    <i class="glyph-icon flaticon-calendar"></i> My Calendar
                                </a>
                            </li>
                            <li>
                                <a href="profil_edit.html">
                                    <i class="glyph-icon flaticon-settings21"></i> Account Settings
                                </a>
                            </li>
                            <li class="dropdown-footer clearfix">
                                <a href="javascript:;" class="toggle_fullscreen" title="Fullscreen">
                                    <i class="glyph-icon flaticon-fullscreen3"></i>
                                </a>
                                <a href="lockscreen.html" title="Lock Screen">
                                    <i class="glyph-icon flaticon-padlock23"></i>
                                </a>
                                <a href="login.html" title="Logout">
                                    <i class="fa fa-power-off"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER DROPDOWN -->
                    <!-- BEGIN CHAT HEADER -->
                    <li id="chat-header">
                        <a href="#" class="c-white" id="chat-toggle">
                            <i class="glyph-icon flaticon-speech76 f-24"></i>
                            <span id="chat-notification" class="notification notification-danger hide" data-delay="2000"></span>
                        </a>
                        <div id="chat-popup" class="chat-popup hide" data-delay="2000">
                            <div class="arrow-up"></div>
                            <div class="chat-popup-inner bg-blue">
                                <div>
                                    <div class="clearfix w-600">
                                        <img src="assets/img/avatars/avatar3.png" alt="avatar 3" width="30" class="pull-left img-circle p-r-5">Alexa Johnson</div>
                                    <div class="message m-t-5">Hey you there?</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END CHAT HEADER -->
                </ul>
                <!-- END TOP NAVIGATION MENU -->
            </div>
        </div>
    </nav>
    <!-- END TOP MENU -->
    <!-- BEGIN WRAPPER -->
    <div id="wrapper">
        <!-- BEGIN MAIN SIDEBAR -->
        <nav id="sidebar">
            <div id="main-menu">
                <ul class="sidebar-nav">
                    <li class="current">
                        <a href="index.html"><i class="fa fa-dashboard"></i><span class="sidebar-text">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="glyph-icon flaticon-shopping80"></i><span class="sidebar-text">eCommerce</span>
                        <span class="fa arrow"></span><span class="label label-danger pull-right m-r-20 w-300">New</span></a>
                        <ul class="submenu collapse">
                            <li>
                                <a href="ecommerce_dashboard.html"><span class="sidebar-text">Dashboard<span class="label label-dark pull-right">Hot</span></span></a>
                            </li>
                            <li>
                                <a href="ecommerce_products.html"><span class="sidebar-text">Products</span></a>
                            </li>
                            <li>
                                <a href="ecommerce_product_view.html"><span class="sidebar-text">Product View</span></a>
                            </li>
                            <li>
                                <a href="ecommerce_orders.html"><span class="sidebar-text">Orders</span></a>
                            </li>
                            <li>
                                <a href="ecommerce_order_view.html"><span class="sidebar-text">Order View</span></a>
                            </li>
                            <li>
                                <a href="ecommerce_invoice.html"><span class="sidebar-text">Invoice</span></a>
                            </li>
                            <li>
                                <a href="ecommerce_pricing.html"><span class="sidebar-text">Pricing Tables</span></a>
                            </li>
                            <li>
                                <a href="shopping_cart.html"><span class="sidebar-text">Shopping Cart<span class="label label-danger pull-right">New</span></span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit"></i><span class="sidebar-text">Blogging</span><span class="fa arrow"></span></a>
                        <ul class="submenu collapse">
                            <li>
                                <a href="blog_dashboard.html"><span class="sidebar-text">Dashboard<span class="label label-dark pull-right">Hot</span></span></a>
                            </li>
                            <li>
                                <a href="posts.html"><span class="sidebar-text">Articles</span></a>
                            </li>
                            <li>
                                <a href="post_edit.html"><span class="sidebar-text">Article View</span></a>
                            </li>
                            <li>
                                <a href="events.html"><span class="sidebar-text">Events</span></a>
                            </li>
                            <li>
                                <a href="event_edit.html"><span class="sidebar-text">Event View</span></a>
                            </li>
                            <li>
                                <a href="blog-list.html"><span class="sidebar-text">Blog List</span></a>
                            </li>
                            <li>
                                <a href="blog-single.html"><span class="sidebar-text">Blog Single</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../frontend/index.html" target="_blank"><i class="glyph-icon flaticon-frontend"></i><span class="sidebar-text">Frontend</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="glyph-icon flaticon-star105"></i><span class="sidebar-text">Extra</span>
                        <span class="fa arrow"></span><span class="label label-primary pull-right m-r-20 w-300">Hot</span></a>
                        <ul class="submenu collapse">
                            <li>
                                <a href="widgets.html"><span class="sidebar-text">Widgets</span></a>
                            </li>
                            <li>
                                <a href="intro.html"><span class="sidebar-text">Intro</span></a>
                            </li>
                            <li>
                                <a href="coming_soon.html"><span class="sidebar-text">Coming Soon</span></a>
                            </li>
                            <li>
                                <a href="notes.html"><span class="sidebar-text">Notes</span></a>
                            </li>
                            <li>
                                <a href="calendar.html"><span class="sidebar-text">Calendar</span></a>
                            </li>
                            <li>
                                <a href="maps.html"><span class="sidebar-text">Google Maps</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-pencil"></i><span class="sidebar-text">Colors Options</span>
                            <span class="fa arrow"></span></a>
                            <ul class="submenu collapse">
                            <li>
                                <a href="#" data-style="dark" class="theme-color"><span class="sidebar-text">Dark Skin</span></a>
                            </li>
                            <li>
                                <a href="#" data-style="light" class="theme-color"><span class="sidebar-text">Light Skin</span></a>
                            </li>
                            <li>
                                <a href="#" data-style="cafe" class="theme-color"><span class="sidebar-text">Cafe Skin</span></a>
                            </li>
                            <li>
                                <a href="#" data-style="blue" class="theme-color"><span class="sidebar-text">Blue Skin</span></a>
                            </li>
                            <li>
                                <a href="#" data-style="red" class="theme-color"><span class="sidebar-text">Red Skin</span></a>
                            </li>
                            <li>
                                <a href="#" data-style="green" class="theme-color"><span class="sidebar-text">Green Skin</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyph-icon flaticon-email"></i><span class="sidebar-text">Email</span><span class="fa arrow"></span></a>
                         <ul class="submenu collapse">
                            <li>
                                <a href="mailbox.html"><span class="sidebar-text">Inbox</span></a>
                            </li>
                            <li>
                                <a href="email_compose.html"><span class="sidebar-text">Write a Message</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyph-icon flaticon-forms"></i><span class="sidebar-text">Forms</span><span class="fa arrow"></span></a>
                        <ul class="submenu collapse">
                            <li>
                                <a href="forms.html"><span class="sidebar-text">Form Elements</span></a>                            
                            </li>
                            <li>
                                <a href="form_validation.html"><span class="sidebar-text">Form Validation</span></a>
                            </li>
                            <li>
                                <a href="form_wizards.html"><span class="sidebar-text">Form Wizards</span></a>
                            </li>
                            <li>
                                <a href="sliders.html"><span class="sidebar-text">Sliders</span></a>
                            </li>
                            <li>
                                <a href="wysiwyg.html"><span class="sidebar-text">Editors</span></a>
                            </li>
                            <li>
                                <a href="file_upload.html"><span class="sidebar-text">File Upload</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyph-icon flaticon-ui-elements2"></i><span class="sidebar-text">UI Elements</span><span class="fa arrow"></span></a>
                        <ul class="submenu collapse">
                            <li>
                                <a href="components.html"><span class="sidebar-text">Components</span></a>
                            </li>
                            <li>
                                <a href="animations.html"><span class="sidebar-text">Animations CSS3</span></a>
                            </li>
                            <li> 
                                <a href="buttons.html"><span class="sidebar-text">Buttons</span></a>
                            </li>
                            <li> 
                                <a href="icons.html"><span class="sidebar-text">Icons</span></a>
                            </li>
                            <li>
                                <a href="typography.html"><span class="sidebar-text">Typography</span></a>
                            </li>
                            <li>
                                <a href="modals.html"><span class="sidebar-text">Modals</span></a>
                            </li>
                            <li>
                                <a href="notifications.html"><span class="sidebar-text">Notifications</span></a>
                            </li>
                            <li>
                                <a href="tabs_accordion.html"><span class="sidebar-text">Tabs &amp; Accordion</span></a>
                            </li>
                            <li>
                                <a href="nestable-list.html"><span class="sidebar-text">Nestable &amp; Sortable lists</span></a>
                            </li>
                             <li>
                                <a href="tree.html"><span class="sidebar-text">Tree View</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyph-icon flaticon-pages"></i><span class="sidebar-text">Pages</span><span class="fa arrow"></span>
                            <span class="label label-danger pull-right m-r-20 w-300">New</span>
                        </a>
                        <ul class="submenu collapse">
                            <li>
                                <a href="timeline.html"><span class="sidebar-text">Timeline</span></a>
                            </li>
                            <li>
                                <a href="forum.html"><span class="sidebar-text">Forum<span class="label label-dark pull-right">New</span></span></a>
                            </li>
                            <li>
                                <a href="members.html"><span class="sidebar-text">Members</span></a>
                            </li>
                            <li>
                                <a href="search_results.html"><span class="sidebar-text">Search Results<span class="label label-danger pull-right">New</span></span></a>
                            </li>
                            <li>
                                <a href="contact.html"><span class="sidebar-text">Contact<span class="label label-danger pull-right">New</span></span></a>
                            </li>
                            <li>
                                <a href="comments.html"><span class="sidebar-text">Comments</span></a>
                            </li>
                            <li>
                                <a href="faq.html"><span class="sidebar-text">FAQ</span></a>
                            </li>
                            <li>
                                <a href="404.html"><span class="sidebar-text">404 Error Page</span></a>
                            </li>
                            <li>
                                <a href="500.html"><span class="sidebar-text">500 Error Page</span></a>
                            </li>
                            <li>
                                <a href="blank_page.html"><span class="sidebar-text">Blank Page</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyph-icon flaticon-panels"></i><span class="sidebar-text">Panels</span><span class="fa arrow"></span></a>
                          <ul class="submenu collapse">
                            <li>
                                <a href="panels.html"><span class="sidebar-text">Custom Panels</span></a>
                            </li>
                            <li>
                                <a href="panels_draggable.html"><span class="sidebar-text">Draggable Panels</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table"></i><span class="sidebar-text">Tables</span><span class="fa arrow"></span></a>
                        <ul class="submenu collapse">
                            <li>
                                <a href="tables.html"><span class="sidebar-text">Style Tables</span></a>
                            </li>
                            <li>
                                <a href="tables_editable.html"><span class="sidebar-text">Editable Tables</span></a>
                            </li>
                            <li>
                                <a href="tables_dynamic.html"><span class="sidebar-text">Dynamic Tables</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyph-icon flaticon-account"></i><span class="sidebar-text">Account</span><span class="fa arrow"></span></a>
                          <ul class="submenu collapse">
                            <li>
                                <a href="profil.html"><span class="sidebar-text">User Profile</span></a>
                            </li>
                            <li>
                                <a href="profil_edit.html"><span class="sidebar-text">Profil Edit</span></a>
                            </li>
                            <li>
                                <a href="login.html"><span class="sidebar-text">Login</span></a>
                            </li>
                            <li>
                                <a href="signup.html"><span class="sidebar-text">Signup</span></a>
                            </li>
                            <li>
                                <a href="password_forgot.html"><span class="sidebar-text">Password recover</span></a>
                            </li>
                            <li>
                                <a href="lockscreen.html"><span class="sidebar-text">Lockscreen</span></a>
                            </li>
                            <li>
                                <a href="session_timeout.html"><span class="sidebar-text">Session Timeout</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyph-icon flaticon-gallery"></i><span class="sidebar-text">Images Manager</span><span class="fa arrow"></span></a>
                         <ul class="submenu collapse">
                            <li>
                                <a href="gallery.html"><span class="sidebar-text">Gallery</span></a>
                            </li>
                            <li>
                                <a href="medias.html"><span class="sidebar-text">Medias</span></a>
                            </li>
                            <li>
                                <a href="image_croping.html"><span class="sidebar-text">Image Croping</span></a>
                            </li>
                        </ul>    
                    </li>
                    <li class="m-b-245">
                        <a href="charts.html"><i class="glyph-icon flaticon-charts2"></i><span class="sidebar-text">Charts</span><span class="pull-right label label-primary">6</span></a>
                    </li>
                    
                </ul>
            </div>
            <div class="footer-widget">
                <div class="footer-gradient"></div>
                <div id="sidebar-charts">
                    <div class="sidebar-charts-inner">
                        <div class="sidebar-charts-left">
                            <div class="sidebar-chart-title">Orders</div>
                            <div class="sidebar-chart-number">1,256</div>
                        </div>
                        <div class="sidebar-charts-right" data-type="bar" data-color="theme">
                            <span class="dynamicbar1"></span>
                        </div>
                    </div>
                    <hr class="divider">
                    <div class="sidebar-charts-inner">
                        <div class="sidebar-charts-left">
                            <div class="sidebar-chart-title">Income</div>
                            <div class="sidebar-chart-number">$47,564</div>
                        </div>
                        <div class="sidebar-charts-right" data-type="bar" data-color="theme">
                            <span class="dynamicbar2"></span>
                        </div>
                    </div>
                    <hr class="divider">
                    <div class="sidebar-charts-inner">
                        <div class="sidebar-charts-left">
                            <div class="sidebar-chart-title">Visits</div>
                            <div class="sidebar-chart-number" id="number-visits">147,687</div>
                        </div>
                        <div class="sidebar-charts-right" data-type="bar" data-color="theme">
                            <span class="dynamicbar3"></span>
                        </div>
                    </div>
                </div>
                <div class="sidebar-footer clearfix">
                    <a class="pull-left" href="profil_edit.html" data-rel="tooltip" data-placement="top" data-original-title="Settings"><i class="glyph-icon flaticon-settings21"></i></a>
                    <a class="pull-left toggle_fullscreen" href="#" data-rel="tooltip" data-placement="top" data-original-title="Fullscreen"><i class="glyph-icon flaticon-fullscreen3"></i></a>
                    <a class="pull-left" href="lockscreen.html" data-rel="tooltip" data-placement="top" data-original-title="Lockscreen"><i class="glyph-icon flaticon-padlock23"></i></a>
                    <a class="pull-left" href="login.html" data-rel="tooltip" data-placement="top" data-original-title="Logout"><i class="fa fa-power-off"></i></a>
                </div> 
            </div>
        </nav>
        <!-- END MAIN SIDEBAR -->


        <!-- BEGIN MAIN CONTENT -->
        <div id="main-content" class="dashboard">
            <div class="row m-t-20">
                <div class="col-md-3 col-sm-12">
                    <div class="panel no-bd bd-3 panel-stat">
                        <div class="panel-body bg-blue p-15">
                            <div class="row m-b-10">
                                <div class="col-xs-3">
                                    <i class="glyph-icon flaticon-visitors"></i>
                                </div>
                                <div class="col-xs-9">
                                    <div class="live-tile" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="56">
                                        <div>
                                            <small class="stat-title">Visits today</small>
                                            <h1 class="m-0 w-300">25 610</h1>
                                        </div>
                                        <div>
                                            <small class="stat-title">Visits yesterday</small>
                                            <h1 class="m-0 w-300">22 420</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <small class="stat-title">New Visitors</small>
                                    <div class="live-tile" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="30">
                                        <div>
                                            <h3 class="m-0 w-300">37.5%</h3>
                                        </div>
                                        <div>
                                            <h3 class="m-0 w-300">34.2%</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <small class="stat-title">Bounce Rate</small>
                                    <div class="live-tile" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="30">
                                        <div>
                                            <h3 class="m-0 w-500">5.6%</h3>
                                        </div>
                                        <div>
                                            <h3 class="m-0 w-500">7.4%</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="panel no-bd bd-3 panel-stat">
                        <div class="panel-body bg-red p-15">
                            <div class="row m-b-6">
                                <div class="col-xs-3">
                                    <i class="glyph-icon flaticon-educational"></i>
                                </div>
                                <div class="col-xs-9">
                                    <small class="stat-title">PAGES VIEW</small>
                                    <h1 class="m-0 w-500">201k</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <small class="stat-title">Duration</small>
                                    <h3 class="m-0 w-500">18:25</h3>
                                </div>
                                <div class="col-xs-6">
                                    <small class="stat-title">Pages / visits</small>
                                    <h3 class="m-0 w-500">21</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="panel no-bd bd-3 panel-stat">
                        <div class="panel-body bg-green p-15">
                            <div class="row m-b-0">
                                <div class="col-xs-3">
                                    <i class="glyph-icon flaticon-orders"></i>
                                </div>
                                <div class="col-xs-9">
                                    <small class="stat-title">ORDERS THIS MONTH</small>
                                    <div class="live-tile" data-delay="4000" data-animation-easing="fade" data-height="47">
                                        <div>
                                            <h1 class="m-0 w-500 bg-green">148</h1>
                                        </div>
                                        <div>
                                            <h1 class="m-0 w-500 bg-green">+28%</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <small class="stat-title">Last month</small>
                                    <div class="live-tile" data-delay="4000" data-animation-easing="fade" data-height="30">
                                        <div class="bg-green">
                                            <h3 class="m-0 w-500">126</h3>
                                        </div>
                                        <div class="bg-green">
                                            <h3 class="m-0 w-500">$12,545</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <small class="stat-title">Last week</small>
                                    <div class="live-tile" data-delay="4000" data-animation-easing="fade" data-height="30">
                                        <div class="bg-green">
                                            <h3 class="m-0 w-500">41</h3>
                                        </div>
                                        <div class="bg-green">
                                            <h3 class="m-0 w-500">$4,237</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="panel no-bd bd-3 panel-stat">
                        <div class="panel-body bg-dark p-15">
                            <div class="row m-b-6">
                                <div class="col-xs-3">
                                    <i class="glyph-icon flaticon-incomes"></i>
                                </div>
                                <div class="col-xs-9">
                                    <small class="stat-title">INCOMES THIS MONTH</small>
                                    <h1 class="m-0 w-500">$<span class="animate-number" data-value="42567" data-animation-duration="1400">0</span></h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <small class="stat-title">Last month</small>
                                    <h3 class="m-0 w-500">$<span class="animate-number" data-value="38547" data-animation-duration="1400">0</span></h3>
                                </div>
                                <div class="col-xs-6">
                                    <small class="stat-title">Last week</small>
                                    <h3 class="m-0 w-500">$<span class="animate-number" data-value="8754" data-animation-duration="1400">0</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div id="graph-wrapper">
                                        <div class="graph-info p-r-10">
                                            <a href="javascript:void(0)" class="btn bg-green">Visitors</a>
                                            <a href="javascript:void(0)" class="btn bg-blue">Returning Visitors</a>
                                            <button id="bars" class="btn" disabled><span></span>
                                            </button>
                                            <button id="lines" class="btn active" disabled><span></span>
                                            </button>
                                        </div>
                                        <div class="h-300">
                                            <div class="h-300" id="graph-lines" style="width:100%"></div>
                                            <div class="h-300" id="graph-bars" style="width:100%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <h4 class="text-center c-gray">Bounce rate</h4>
                                            <div class="spark-chart-1"></div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 hidden-md hidden-sm hidden-xs">
                                            <h4 class="text-center c-gray">Unique visitors</h4>
                                            <div class="spark-chart-2"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-lg-offset-3 col-md-12">
                                            <h4 class="m-b-m50 m-t-30 text-center c-gray">Browsers</h4>
                                            <div id="donut-chart1" class="m-b-m30"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="panel no-bd bg-green">
                        <div class="panel-heading clearfix pos-rel">
                            <div class="pos-abs t-10 l-15 f-18"><i class="fa fa-list"></i>
                            </div>
                            <h2 class="panel-title width-100p text-center w-500 f-20 carrois">To Do List</h2>
                            <div class="pos-abs t-10 r-5 f-18 cursor-pointer">
                                <div class="glyph-icon flaticon-plus16 f-32"></div>
                            </div>
                        </div>
                        <div class="panel-body bg-green p-t-0 p-b-10">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row m-b-10">
                                        <input class="form-control" id="new-todo" placeholder="What needs to be done?" type="text"/>
                                    </div>
                                    <div class="row" id="task-manager">
                                        <div class="task-actions clearfix">
                                            <div class="pull-left">
                                                <div>
                                                    <input class="my_checkbox_all" type="checkbox">
                                                </div>
                                                <div class="p-l-40">Check All</div>
                                            </div>
                                            <div class="pull-right">
                                                <a href="#" class="create-task c-white p-r-10"><i class="fa fa-plus-circle"></i> Create Task</a>
                                                <a href="#" class="delete-task c-white p-r-10"><i class="fa fa-minus-circle"></i> Delete All Tasks</a>
                                            </div>
                                        </div>
                                        <ul id="sortable-todo">
                                            <li class="sortable col-md-12 m-b-10 bd-3 bg-opacity-20 fade in">
                                                <a href="#" class="pull-right c-white p-l-10" data-dismiss="alert"><i class="fa fa-times f-18"></i></a>
                                                <a href="#" class="pull-right c-white" data-dismiss="alert"><i class="fa fa-pencil f-18"></i></a>
                                                <div class="sortable-item">
                                                    <div class="pos-rel">
                                                        <input tabindex="13" type="checkbox" class="pull-left task-item">
                                                    </div>
                                                    <div class="p-l-40 pull-left">
                                                        Find beautiful templates
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="sortable col-md-12 m-b-10 bd-3 bg-opacity-20 fade in">
                                                <a href="#" class="pull-right c-white p-l-10" data-dismiss="alert"><i class="fa fa-times f-18"></i></a>
                                                <a href="#" class="pull-right c-white" data-dismiss="alert"><i class="fa fa-pencil f-18"></i></a>
                                                <div class="sortable-item">
                                                    <div class="pos-rel">
                                                        <input tabindex="13" type="checkbox" class="pull-left task-item">
                                                    </div>
                                                    <div class="p-l-40 pull-left">
                                                        Create new design
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="sortable col-md-12 m-b-10 bd-3 bg-opacity-20 fade in">
                                                <a href="#" class="pull-right c-white p-l-10" data-dismiss="alert"><i class="fa fa-times f-18"></i></a>
                                                <a href="#" class="pull-right c-white" data-dismiss="alert"><i class="fa fa-pencil f-18"></i></a>
                                                <div class="sortable-item">
                                                    <div class="pos-rel">
                                                        <input tabindex="13" type="checkbox" class="pull-left task-item">
                                                    </div>
                                                    <div class="p-l-40 pull-left">
                                                        Go to Shop
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="sortable col-md-12 m-b-10 bd-3 bg-opacity-20 fade in">
                                                <a href="#" class="pull-right c-white p-l-10" data-dismiss="alert"><i class="fa fa-times f-18"></i></a>
                                                <a href="#" class="pull-right c-white" data-dismiss="alert"><i class="fa fa-pencil f-18"></i></a>
                                                <div class="sortable-item">
                                                    <div class="pos-rel">
                                                        <input tabindex="13" type="checkbox" class="pull-left task-item">
                                                    </div>
                                                    <div class="p-l-40 pull-left">
                                                        Buy a new bike
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="sortable col-md-12 p-10 m-b-10 bd-3 bg-opacity-20 fade in">
                                                <a href="#" class="pull-right c-white p-l-10" data-dismiss="alert"><i class="fa fa-times f-18"></i></a>
                                                <a href="#" class="pull-right c-white" data-dismiss="alert"><i class="fa fa-pencil f-18"></i></a>
                                                <div class="sortable-item">
                                                    <div class="pos-rel">
                                                        <input tabindex="13" type="checkbox" class="pull-left">
                                                    </div>
                                                    <div class="p-l-40 pull-left">
                                                        Write a book
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <div id="todo-stats"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading clearfix pos-rel">
                            <div class="pos-abs t-10 l-15 f-18 c-gray"><i class="fa fa-search"></i>
                            </div>
                            <h2 class="panel-title width-100p c-blue text-center w-500 f-20 carrois">Contact</h2>
                            <div class="pos-abs t-10 r-5 f-18 c-blue cursor-pointer">
                                <div class="glyph-icon flaticon-plus16 f-32"></div>
                            </div>
                        </div>
                        <div class="panel-body messages">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="withScroll" data-height="320">
                                        <a href="#" class="message-item media">
                                            <div class="media">
                                                <img src="assets/img/avatars/avatar1.png" alt="avatar 1" width="35" class="pull-left">
                                                <div class="media-body">
                                                    <div class="pull-left">
                                                        <p class="c-dark m-0"><strong>John Snow</strong>
                                                        </p>
                                                        <p class="c-gray m-0">cameso@it.com</p>
                                                    </div>
                                                    <div class="pull-right f-18 p-t-10">
                                                        <i data-rel="tooltip" title="add to favs" data-placement="left" class="favs fa fa-star-o p-r-10"></i>
                                                        <i data-rel="tooltip" title="send email" data-placement="left" class="fa fa-envelope-o p-r-10"></i>
                                                        <i data-rel="tooltip" title="show phone" data-placement="left" class="fa fa-phone"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="message-item media">
                                            <div class="media">
                                                <img src="assets/img/avatars/avatar2.png" alt="avatar 2" width="35" class="pull-left">
                                                <div class="media-body">
                                                    <div class="pull-left">
                                                        <p class="c-dark m-0"><strong>Jerry Smith</strong>
                                                        </p>
                                                        <p class="c-gray m-0">bugomi@vigu.com</p>
                                                    </div>
                                                    <div class="pull-right f-18 p-t-10">
                                                        <i data-rel="tooltip" title="remove from favs" data-placement="left" class="favs fa fa-star p-r-10 c-orange"></i>
                                                        <i data-rel="tooltip" title="send email" data-placement="left" class="fa fa-envelope-o p-r-10"></i>
                                                        <i data-rel="tooltip" title="show phone" data-placement="left" class="fa fa-phone"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="message-item media">
                                            <div class="media">
                                                <img src="assets/img/avatars/avatar3.png" alt="avatar 3" width="35" class="pull-left">
                                                <div class="media-body">
                                                    <div class="pull-left">
                                                        <p class="c-dark m-0"><strong>John Snow</strong>
                                                        </p>
                                                        <p class="c-gray m-0">cameso@it.com</p>
                                                    </div>
                                                    <div class="pull-right f-18 p-t-10">
                                                        <i data-rel="tooltip" title="add to favs" data-placement="left" class="favs fa fa-star-o p-r-10"></i>
                                                        <i data-rel="tooltip" title="send email" data-placement="left" class="fa fa-envelope-o p-r-10"></i>
                                                        <i data-rel="tooltip" title="show address" data-placement="left" class="fa fa-home"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="message-item media">
                                            <div class="media">
                                                <img src="assets/img/avatars/avatar4.png" alt="avatar 4" width="35" class="pull-left">
                                                <div class="media-body">
                                                    <div class="pull-left">
                                                        <p class="c-dark m-0"><strong>Jerry Smith</strong>
                                                        </p>
                                                        <p class="c-gray m-0">bugomi@vigu.com</p>
                                                    </div>
                                                    <div class="pull-right f-18 p-t-10">
                                                        <i data-rel="tooltip" title="add to favs" data-placement="left" class="favs fa fa-star-o p-r-10"></i>
                                                        <i data-rel="tooltip" title="send email" data-placement="left" class="fa fa-envelope-o p-r-10"></i>
                                                        <i data-rel="tooltip" title="show phone" data-placement="left" class="fa fa-phone"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="message-item media">
                                            <div class="media">
                                                <img src="assets/img/avatars/avatar5.png" alt="avatar 5" width="35" class="pull-left">
                                                <div class="media-body">
                                                    <div class="pull-left">
                                                        <p class="c-dark m-0"><strong>John Snow</strong>
                                                        </p>
                                                        <p class="c-gray m-0">cameso@it.com</p>
                                                    </div>
                                                    <div class="pull-right f-18 p-t-10">
                                                        <i data-rel="tooltip" title="add to favs" data-placement="left" class="favs fa fa-star-o p-r-10"></i>
                                                        <i data-rel="tooltip" title="send email" data-placement="left" class="fa fa-envelope-o p-r-10"></i>
                                                        <i data-rel="tooltip" title="show address" data-placement="left" class="fa fa-home"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="message-item media">
                                            <div class="media">
                                                <img src="assets/img/avatars/avatar6.png" alt="avatar 6" width="35" class="pull-left">
                                                <div class="media-body">
                                                    <div class="pull-left">
                                                        <p class="c-dark m-0"><strong>Jerry Smith</strong>
                                                        </p>
                                                        <p class="c-gray m-0">bugomi@vigu.com</p>
                                                    </div>
                                                    <div class="pull-right f-18 p-t-10">
                                                        <i data-rel="tooltip" title="add to favs" data-placement="left" class="favs fa fa-star-o p-r-10"></i>
                                                        <i data-rel="tooltip" title="send email" data-placement="left" class="fa fa-envelope-o p-r-10"></i>
                                                        <i data-rel="tooltip" title="show phone" data-placement="left" class="fa fa-phone"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-stat bg-purple-gradient">
                        <div class="panel-heading text-center p-10 p-b-0">
                            <div class="pos-abs t-10 l-15 f-18 c-white"><i class="fa fa-dollar"></i>
                            </div>
                            <h2 class="panel-title c-white">Revenue</h2>
                            <div class="pos-abs t-5 r-5 f-18 c-white cursor-pointer">
                                <div class="glyph-icon flaticon-plus16 f-32"></div>
                            </div>
                        </div>
                        <div class="panel-body p-0 bg-transparent">
                            <div id="chart_revenue" style="height: 340px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 m-b-20">
                    <div class="panel panel-default">
                        <div class="panel-heading clearfix pos-rel">
                            <div class="pos-abs top-12 l-15 f-18 c-gray"><i class="fa fa-comments-o"></i>
                            </div>
                            <h2 class="panel-title width-100p c-red text-center w-500 f-20 carrois">Email</h2>
                            <div class="pos-abs t-10 r-5 f-18 c-red cursor-pointer">
                                <div class="glyph-icon flaticon-plus16 f-32"></div>
                            </div>
                        </div>
                        <div class="panel-body messages">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="withScroll" data-height="480">
                                        <a href="#" class="message-item media">
                                            <div class="media">
                                                <img src="assets/img/avatars/avatar13_big.png" alt="avatar 13" width="50" class="pull-left">
                                                <div class="media-body">
                                                    <small class="pull-right">23 Sept</small>
                                                    <h5 class="c-dark"><strong>John Snow</strong></h5>
                                                    <h4 class="c-dark">Reset your account password</h4>
                                                </div>
                                            </div>
                                            <p class="f-14 c-gray">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                        </a>
                                        <a href="#" class="message-item media">
                                            <div class="media">
                                                <img src="assets/img/avatars/avatar12_big.png" alt="avatar 12" width="50" class="pull-left">
                                                <div class="media-body">
                                                    <small class="pull-right">23 Sept</small>
                                                    <h5 class="c-dark"><strong>Jerry Smith</strong></h5>
                                                    <h4 class="c-dark">Check Dropbox</h4>
                                                </div>
                                            </div>
                                            <p class="f-14 c-gray">Hello Steve, I have added new files in your Dropbox in order to show you how to...</p>
                                        </a>
                                        <a href="#" class="message-item media">
                                            <div class="media">
                                                <img src="assets/img/avatars/avatar11_big.png" alt="avatar 11" width="50" class="pull-left">
                                                <div class="media-body">
                                                    <small class="pull-right">23 Sept</small>
                                                    <h5 class="c-dark"><strong>John Snow</strong></h5>
                                                    <h4 class="c-dark">Reset your account password</h4>
                                                </div>
                                            </div>
                                            <p class="f-14 c-gray">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                        </a>
                                        <a href="#" class="message-item media">
                                            <div class="media">
                                                <img src="assets/img/avatars/avatar10_big.png" alt="avatar 10" width="50" class="pull-left">
                                                <div class="media-body">
                                                    <small class="pull-right">23 Sept</small>
                                                    <h5 class="c-dark"><strong>Jerry Smith</strong></h5>
                                                    <h4 class="c-dark">Check Dropbox</h4>
                                                </div>
                                            </div>
                                            <p class="f-14 c-gray">Hello Steve, I have added new files in your Dropbox in order to show you how to...</p>
                                        </a>
                                        <a href="#" class="message-item media">
                                            <div class="media">
                                                <img src="assets/img/avatars/avatar9_big.png" alt="avatar 9" width="50" class="pull-left">
                                                <div class="media-body">
                                                    <small class="pull-right">23 Sept</small>
                                                    <h5 class="c-dark"><strong>John Snow</strong></h5>
                                                    <h4 class="c-dark">Reset your account password</h4>
                                                </div>
                                            </div>
                                            <p class="f-14 c-gray">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                        </a>
                                        <a href="#" class="message-item media">
                                            <div class="media">
                                                <img src="assets/img/avatars/avatar8_big.png" alt="avatar 8" width="50" class="pull-left">
                                                <div class="media-body">
                                                    <small class="pull-right">23 Sept</small>
                                                    <h5 class="c-dark"><strong>Jerry Smith</strong></h5>
                                                    <h4 class="c-dark">Check Dropbox</h4>
                                                </div>
                                            </div>
                                            <p class="f-14 c-gray">Hello Steve, I have added new files in your Dropbox in order to show you how to...</p>
                                        </a>
                                        <a href="#" class="message-item media">
                                            <div class="media">
                                                <img src="assets/img/avatars/avatar7_big.png" alt="avatar 7" width="50" class="pull-left">
                                                <div class="media-body">
                                                    <small class="pull-right">23 Sept</small>
                                                    <h5 class="c-dark"><strong>John Snow</strong></h5>
                                                    <h4 class="c-dark">Reset your account password</h4>
                                                </div>
                                            </div>
                                            <p class="f-14 c-gray">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 m-b-20">
                    <div class="modal fade" id="event-modal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title"><strong>Manage</strong> my events</h4>
                                </div>
                                <div class="modal-body">
                                    <p></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success save-event">Create event</button>
                                    <button type="button" class="btn btn-danger delete-event" data-dismiss="modal">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="external-events" class="bg-white row m-0">
                        <div class="col-md-4 p-0">
                            <div class="widget bg-gray-l">
                                <div class="widget-body p-b-0">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <h2 class="panel-title width-100p c-blue w-500 f-20 carrois" id="calender-current-day">Events Manager</h2>
                                            <div>
                                                <br>
                                                <br>
                                                <br>
                                                <div class="external-event bg-green" data-class="bg-green" style="position: relative;">
                                                    <i class="fa fa-move"></i>Sport
                                                </div>
                                                <div class="external-event bg-purple" data-class="bg-purple" style="position: relative;">
                                                    <i class="fa fa-move"></i>Meeting
                                                </div>
                                                <div class="external-event bg-red" data-class="bg-red" style="position: relative;">
                                                    <i class="fa fa-move"></i>Work
                                                </div>
                                                <div class="external-event bg-blue" data-class="bg-blue" style="position: relative;">
                                                    <i class="fa fa-move"></i>Children
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-md-offset-1 p-0 no-bd">
                            <div class="widget bg-white">
                                <div class="widget-body p-b-0">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div id="calendar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default map-panel">
                        <form method="post" id="geocoding_form">
                            <input type="text" class="form-control" id="address" name="address" placeholder="Search an address">
                        </form>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="map" id="geocoding-map" style="height:395px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="city-form" placeholder="Tape a name of a city (eg: New York, Chicago...)">
                    <div class="panel no-bd bd-3 panel-weather" id="weather">
                        <div class="panel-body weather-bg bg-blue">
                            <div class="row weather-body" id="weather-bg">
                                <div class="col-md-12 p-40">
                                    <div class="clearfix">
                                        <div class="pull-left weather-left">
                                            <div class="today-img text-center"></div>
                                            <h1 class="text-center today-temp c-white w-500">&nbsp;</h1>
                                        </div>
                                        <div class="pull-right weather-place">
                                            <div class="clearfix">
                                                <h1 class="weather-city">&nbsp;</h1>
                                            </div>
                                            <div class="weather-region"></div>
                                            <h3 class="weather-currently">&nbsp;</h3>
                                        </div>
                                    </div>
                                    <div class="h-100"></div>
                                    <div class="weather-footer">
                                        <div class="col-md-3 col-sm-3 col-xs-3 weather-footer-block">
                                            <div class="1-days-day"></div>
                                            <div class="1-days-image"></div>
                                            <div class="1-days-temp"></div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 weather-footer-block">
                                            <div class="2-days-day"></div>
                                            <div class="2-days-image"></div>
                                            <div class="2-days-temp"></div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 weather-footer-block">
                                            <div class="3-days-day"></div>
                                            <div class="3-days-image"></div>
                                            <div class="3-days-temp"></div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 weather-footer-block">
                                            <div class="4-days-day"></div>
                                            <div class="4-days-image"></div>
                                            <div class="4-days-temp"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->

    </div>
    <!-- END WRAPPER -->
    <!-- BEGIN CHAT MENU -->
    <nav id="menu-right">
        <ul>
            <li class="mm-label label-big">ONLINE</li>
            <li class="img no-arrow have-message">
                <span class="inside-chat">
                    <i class="online"></i>
                    <img src="assets/img/avatars/avatar3.png" alt="avatar 3"/>
                    <span class="chat-name">Alexa Johnson</span>
                    <span class="pull-right badge badge-danger hide">3</span>
                    <span>Los Angeles</span>
                </span>
                <ul class="chat-messages">
                    <li class="img">
                        <span>
                            <span class="chat-detail">
                                <img src="assets/img/avatars/avatar3.png" alt="avatar 3"/>
                                <span class="chat-bubble"><span class="bubble-inner">Hi you!</span></span>
                            </span>
                        </span>
                    </li>
                    <li class="img">
                        <span>
                            <span class="chat-detail">
                                <img src="assets/img/avatars/avatar3.png" alt="avatar 3"/>
                                <span class="chat-bubble"><span class="bubble-inner">You there?</span></span>
                            </span>
                        </span>
                    </li>
                    <li class="img">
                        <span>
                            <span class="chat-detail">
                                <img src="assets/img/avatars/avatar3.png" alt="avatar 3"/>
                                <span class="chat-bubble">
                                    <span class="bubble-inner">Let me know when you come back</span>
                                </span>
                            </span>
                        </span>
                    </li>
                    <li>
                        <span class="chat-input">
                            <input type="text" class="form-control send-message" placeholder="Type your message" />
                        </span>
                    </li>
                </ul>
            </li>
            <li class="img no-arrow">
                <span class="inside-chat">
                    <i class="online"></i>
                    <img src="assets/img/avatars/avatar2.png" alt="avatar 2"/>
                    <span class="chat-name">Bobby Brown</span>
                    <span>New York</span>
                </span>
                <ul class="chat-messages">
                    <li>
                        <span class="chat-input">
                            <input type="text" class="form-control send-message" placeholder="Type your message" />
                        </span>
                    </li>
                </ul>
            </li>
            <li class="img no-arrow">
                <span class="inside-chat">
                    <i class="busy"></i>
                    <img src="assets/img/avatars/avatar13.png" alt="avatar 13"/>
                    <span class="chat-name">Fred Smith</span>
                    <span>Atlanta</span>
                </span>
                <ul class="chat-messages">
                    <li>
                        <span class="chat-input">
                            <input type="text" class="form-control send-message" placeholder="Type your message" />
                        </span>
                    </li>
                </ul>
            </li>
            <li class="img no-arrow">
                <span class="inside-chat">
                    <i class="away"></i>
                    <img src="assets/img/avatars/avatar4.png" alt="avatar 4"/>
                    <span class="chat-name">James Miller</span>
                    <span>Seattle</span>
                </span>
                <ul class="chat-messages">
                    <li>
                        <span class="chat-input">
                            <input type="text" class="form-control send-message" placeholder="Type your message" />
                        </span>
                    </li>
                </ul>
            </li>
            <li class="img no-arrow">
                <span class="inside-chat">
                    <i class="online"></i>
                    <img src="assets/img/avatars/avatar5.png" alt="avatar 5"/>
                    <span class="chat-name">Jefferson Jackson</span>
                    <span>Los Angeles</span>
                </span>
                <ul class="chat-messages">
                    <li>
                        <span class="chat-input">
                            <input type="text" class="form-control send-message" placeholder="Type your message" />
                        </span>
                    </li>
                </ul>
            </li>
            <li class="mm-label label-big m-t-30">OFFLINE</li>

            <li class="img no-arrow">
                <span class="inside-chat">
                    <i class="offline"></i>
                    <img src="assets/img/avatars/avatar6.png" alt="avatar 6"/>
                    <span class="chat-name">Jordan</span>
                    <span>Savannah</span>
                </span>
                <ul class="chat-messages">
                   <li>
                        <span class="chat-input">
                            <input type="text" class="form-control send-message" placeholder="Type your message" />
                        </span>
                    </li>
                </ul>
            </li>
            <li class="img no-arrow">
                <span class="inside-chat">
                    <i class="offline"></i>
                    <img src="assets/img/avatars/avatar7.png" alt="avatar 7"/>
                    <span class="chat-name">Kim Addams</span>
                    <span>Birmingham</span>
                </span>
                <ul class="chat-messages">
                    <li>
                        <span class="chat-input">
                            <input type="text" class="form-control send-message" placeholder="Type your message" />
                        </span>
                    </li>
                </ul>
            </li>
            <li class="img no-arrow">
                <span class="inside-chat">
                    <i class="offline"></i>
                    <img src="assets/img/avatars/avatar8.png" alt="avatar 8"/>
                    <span class="chat-name">Meagan Miller</span>
                    <span>San Francisco</span>
                </span>
                <ul class="chat-messages">
                    <li>
                        <span class="chat-input">
                            <input type="text" class="form-control send-message" placeholder="Type your message" />
                        </span>
                    </li>
                </ul>
            </li>
            <li class="img no-arrow">
                <span class="inside-chat">
                        <i class="offline"></i>
                        <img src="assets/img/avatars/avatar9.png" alt="avatar 9"/>
                        <span class="chat-name">Melissa Johnson</span>
                        <span>Austin</span>
                    </span>
                <ul class="chat-messages">
                    <li>
                        <span class="chat-input">
                            <input type="text" class="form-control send-message" placeholder="Type your message" />
                        </span>
                    </li>
                </ul>
            </li>
            <li class="img no-arrow">
                <span class="inside-chat">
                    <i class="offline"></i>
                    <img src="assets/img/avatars/avatar12.png" alt="avatar 12"/>
                    <span class="chat-name">Nicole Smith</span>
                    <span>San Diego</span>
                </span>
                <ul class="chat-messages">
                    <li>
                        <span class="chat-input">
                            <input type="text" class="form-control send-message" placeholder="Type your message" />
                        </span>
                    </li>
                </ul>
            </li>
            <li class="img no-arrow">
                <span class="inside-chat">
                    <i class="offline"></i>
                    <img src="assets/img/avatars/avatar11.png" alt="avatar 11"/>
                    <span class="chat-name">Samantha Harris</span>
                    <span>Salt Lake City</span>
                </span>
                <ul class="chat-messages">
                    <li>
                        <span class="chat-input">
                            <input type="text" class="form-control send-message" placeholder="Type your message" />
                        </span>
                    </li>
                </ul>
            </li>
            <li class="img no-arrow">
                <span class="inside-chat">
                    <i class="offline"></i>
                    <img src="assets/img/avatars/avatar10.png" alt="avatar 10"/>
                    <span class="chat-name">Scott Thomson</span>
                    <span>Los Angeles</span>
                </span>
                <ul class="chat-messages">
                    <li>
                        <span class="chat-input">
                            <input type="text" class="form-control send-message" placeholder="Type your message" />
                        </span>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- END CHAT MENU -->
    <!-- BEGIN MANDATORY SCRIPTS -->
    <script src="assets/plugins/mandatoryJs.min.js"></script>
    <!-- END MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/metrojs/metrojs.min.js"></script>
    <script src='assets/plugins/fullcalendar/moment.min.js'></script>
    <script src='assets/plugins/fullcalendar/fullcalendar.min.js'></script>
    <script src="assets/plugins/simple-weather/jquery.simpleWeather.min.js"></script>
    <script src="assets/plugins/google-maps/markerclusterer.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="assets/plugins/google-maps/gmaps.js"></script>
    <script src="assets/plugins/charts-flot/jquery.flot.js"></script>
    <script src="assets/plugins/charts-flot/jquery.flot.animator.min.js"></script>
    <script src="assets/plugins/charts-flot/jquery.flot.resize.js"></script>
    <script src="assets/plugins/charts-flot/jquery.flot.time.min.js"></script>
    <script src="assets/plugins/charts-morris/raphael.min.js"></script>
    <script src="assets/plugins/charts-morris/morris.min.js"></script>
    <script src="assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <script src="assets/js/calendar.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <!-- END  PAGE LEVEL SCRIPTS -->
    <script src="assets/js/application.js"></script>
</body>

</html>