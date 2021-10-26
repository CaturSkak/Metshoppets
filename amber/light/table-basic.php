<!doctype html>
<html lang="en">

<head>
<title>:: HexaBit :: Table Basic</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="HexaBit Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, www.thememakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">
</head>
<body class="theme-orange">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="../assets/images/icon-light.svg" width="48" height="48" alt="HexaBit"></div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">

            <div class="navbar-left">
                <div class="navbar-btn">
                    <a href="index.php"><img src="../assets/images/icon-light.svg" alt="HexaBit Logo" class="img-fluid logo"></a>
                    <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                </div>
                <a href="javascript:void(0);" class="icon-menu btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>
                <ul class="nav navbar-nav">
                    <li class="dropdown dropdown-animated scale-right">
                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i class="icon-grid"></i></a>
                        <ul class="dropdown-menu menu-icon app_menu">
                            <li>
                                <a class="#">
                                    <i class="icon-envelope"></i>
                                    <span>Inbox</span>
                                </a>
                            </li>
                            <li>
                                <a class="#">
                                    <i class="icon-bubbles"></i>
                                    <span>Chat</span>
                                </a>
                            </li>
                            <li>
                                <a class="#">
                                    <i class="icon-list"></i>
                                    <span>Task</span>
                                </a>
                            </li>
                            <li>
                                <a class="#">
                                    <i class="icon-globe"></i>
                                    <span>Blog</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="app-calendar.php" class="icon-menu d-none d-sm-block d-md-none d-lg-block"><i class="icon-calendar"></i></a></li>
                    <li><a href="app-chat.php" class="icon-menu d-none d-sm-block"><i class="icon-bubbles"></i></a></li>                    
                </ul>
            </div>
            
            <div class="navbar-right">
                <form id="navbar-search" class="navbar-form search-form">
                    <input value="" class="form-control" placeholder="Search here..." type="text">
                    <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                </form>                

                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown dropdown-animated scale-left">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="icon-envelope"></i>
                                <span class="notification-dot"></span>
                            </a>
                            <ul class="dropdown-menu right_chat email">
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">James Wert <small class="float-right">Just now</small></span>
                                                <span class="message">Lorem ipsum Veniam aliquip culpa laboris minim tempor</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar1.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Folisise Chosielie <small class="float-right">12min ago</small></span>
                                                <span class="message">There are many variations of Lorem Ipsum available, but the majority</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Ava Alexander <small class="float-right">38min ago</small></span>
                                                <span class="message">Many desktop publishing packages and web page editors</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media mb-0">
                                            <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Debra Stewart <small class="float-right">2hr ago</small></span>
                                                <span class="message">Contrary to popular belief, Lorem Ipsum is not simply random text</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-animated scale-left">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="icon-bell"></i>
                                <span class="notification-dot"></span>
                            </a>
                            <ul class="dropdown-menu feeds_widget">
                                <li class="header">You have 5 new Notifications</li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="feeds-left"><i class="fa fa-thumbs-o-up text-success"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title text-success">7 New Feedback <small class="float-right text-muted">Today</small></h4>
                                            <small>It will give a smart finishing to your site</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="feeds-left"><i class="fa fa-user"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title">New User <small class="float-right text-muted">10:45</small></h4>
                                            <small>I feel great! Thanks team</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="feeds-left"><i class="fa fa-question-circle text-warning"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title text-warning">Server Warning <small class="float-right text-muted">10:50</small></h4>
                                            <small>Your connection is not private</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="feeds-left"><i class="fa fa-check text-danger"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title text-danger">Issue Fixed <small class="float-right text-muted">11:05</small></h4>
                                            <small>WE have fix all Design bug with Responsive</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="feeds-left"><i class="fa fa-shopping-basket"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title">7 New Orders <small class="float-right text-muted">11:35</small></h4>
                                            <small>You received a new oder from Tina.</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="right_toggle icon-menu" title="Right Menu"><i class="icon-settings"></i></a></li>
                        <li><a href="page-login.php" class="icon-menu"><i class="icon-power"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div id="rightbar" class="rightbar">
        <ul class="nav nav-tabs-new">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting">Settings</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat">Chat</a></li>            
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="setting">
                <div class="slim_scroll">
                    <div class="card">
                        <h6>Choose Theme</h6>
                        <ul class="choose-skin list-unstyled mb-0">
                            <li data-theme="purple"><div class="purple"></div></li>
                            <li data-theme="green"><div class="green"></div></li>
                            <li data-theme="orange" class="active"><div class="orange"></div></li>
                            <li data-theme="blue"><div class="blue"></div></li>
                            <li data-theme="blush"><div class="blush"></div></li>
                            <li data-theme="cyan"><div class="cyan"></div></li>
                        </ul>
                    </div>
                    <div class="card">
                        <h6>General Settings</h6>
                        <ul class="setting-list list-unstyled mb-0">
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <span>Report Panel Usag</span>
                                </label>
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" checked>
                                    <span>Email Redirect</span>
                                </label>
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" checked>
                                    <span>Notifications</span>
                                </label>                      
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <span>Auto Updates</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="card">
                        <h6>Account Settings</h6>
                        <ul class="setting-list list-unstyled mb-0">
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <span>Offline</span>
                                </label>
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" checked>
                                    <span>Location Permission</span>
                                </label>
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" checked>
                                    <span>Notifications</span>
                                </label>                      
                            </li>
                        </ul>
                    </div>                    
                </div>                
            </div>       
            <div class="tab-pane right_chat" id="chat">
                <div class="slim_scroll">
                    <form>
                        <div class="input-group m-b-20">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-magnifier"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                    <div class="card">
                        <h6>Recent</h6>                        
                        <ul class="right_chat list-unstyled mb-0">
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Ava Alexander <small class="float-right">Just now</small></span>
                                            <span class="message">Lorem ipsum Veniam aliquip culpa laboris minim tempor</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>                            
                            </li>
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Debra Stewart <small class="float-right">38min ago</small></span>
                                            <span class="message">Many desktop publishing packages and web page editors</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>                            
                            </li>
                            <li class="offline">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Susie Willis <small class="float-right">2hr ago</small></span>
                                            <span class="message">Contrary to belief, Lorem Ipsum is not simply random text</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>                            
                            </li>
                            <li class="offline">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar1.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Folisise Chosielie <small class="float-right">2hr ago</small></span>
                                            <span class="message">There are many of passages of available, but the majority</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>                            
                            </li>
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar3.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Marshall Nichols <small class="float-right">1day ago</small></span>
                                            <span class="message">It is a long fact that a reader will be distracted</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>                            
                            </li>                        
                        </ul>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

    <div id="left-sidebar" class="sidebar">
        <div class="navbar-brand">
            <a href="index.php"><img src="../assets/images/icon-dark.svg" alt="HexaBit Logo" class="img-fluid logo"><span>HexaBit</span></a>
            <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
        </div>
        <div class="sidebar-scroll">
            <div class="user-account">
                <div class="user_div">
                    <img src="../assets/images/user.png" class="user-photo" alt="User Profile Picture">
                </div>
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Christy Wert</strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account">
                        <li><a href="page-profile.php"><i class="icon-user"></i>My Profile</a></li>
                        <li><a href="app-inbox.php"><i class="icon-envelope-open"></i>Messages</a></li>
                        <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="page-login.php"><i class="icon-power"></i>Logout</a></li>
                    </ul>
                </div>
            </div>  
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    <li><a href="index.php"><i class="icon-home"></i><span>Dashboard</span></a></li>
                    <li><a href="app-inbox.php"><i class="icon-envelope"></i><span>Inbox</span></a></li>
                    <li><a href="app-chat.php"><i class="icon-bubbles"></i><span>Chat</span></a></li>
                    <li>
                        <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i><span>UI Elements</span></a>
                        <ul>
                            <li><a href="ui-card.php">Card Layout</a></li>
                            <li><a href="ui-helper-class.php">Helper Classes</a></li>
                            <li><a href="ui-bootstrap.php">Bootstrap UI</a></li>
                            <li><a href="ui-typography.php">Typography</a></li>
                            <li><a href="ui-tabs.php">Tabs</a></li>
                            <li><a href="ui-buttons.php">Buttons</a></li>                            
                            <li><a href="ui-icons.php">Icons</a></li>
                            <li><a href="ui-notifications.php">Notifications</a></li>
                            <li><a href="ui-colors.php">Colors</a></li>
                            <li><a href="ui-dialogs.php">Dialogs</a></li>                                    
                            <li><a href="ui-list-group.php">List Group</a></li>
                            <li><a href="ui-media-object.php">Media Object</a></li>
                            <li><a href="ui-modals.php">Modals</a></li>
                            <li><a href="ui-nestable.php">Nestable</a></li>
                            <li><a href="ui-progressbars.php">Progress Bars</a></li>
                            <li><a href="ui-range-sliders.php">Range Sliders</a></li>
                            <li><a href="ui-treeview.php">Treeview</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#forms" class="has-arrow"><i class="icon-pencil"></i><span>Forms</span></a>
                        <ul>
                            <li><a href="forms-basic.php">Basic Elements</a></li>
                            <li><a href="forms-advanced.php">Advanced Elements</a></li>
                            <li><a href="forms-validation.php">Form Validation</a></li>
                            <li><a href="forms-wizard.php">Form Wizard</a></li>
                            <li><a href="forms-dragdropupload.php">Drag &amp; Drop Upload</a></li>
                            <li><a href="forms-cropping.php">Image Cropping</a></li>
                            <li><a href="forms-summernote.php">Summernote</a></li>
                            <li><a href="forms-editors.php">CKEditor</a></li>
                            <li><a href="forms-markdown.php">Markdown</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#Tables" class="has-arrow"><i class="icon-tag"></i><span>Tables</span></a>
                        <ul>
                            <li class="active"><a href="table-basic.php">Tables Example</a></li>
                            <li><a href="table-normal.php">Normal Tables</a></li>
                            <li><a href="table-jquery-datatable.php">Jquery Datatables</a></li>
                            <li><a href="table-editable.php">Editable Tables</a></li>
                            <li><a href="table-color.php">Tables Color</a></li>
                            <li><a href="table-filter.php">Table Filter</a></li>
                            <li><a href="table-dragger.php">Table dragger</a></li>
                        </ul>
                    </li>
                    <li><a href="app-taskboard.php"><i class="icon-list"></i><span>Taskboard</span></a></li>                    
                    <li><a href="app-calendar.php"><i class="icon-calendar"></i><span>Calendar</span></a></li>
                    <li><a href="app-contact.php"><i class="icon-book-open"></i><span>Contact</span></a></li>
                    <li>
                        <a href="#Blog" class="has-arrow"><i class="icon-globe"></i><span>Blog</span></a>
                        <ul>
                            <li><a href="blog-dashboard.php">Dashboard</a></li>
                            <li><a href="blog-post.php">New Post</a></li>
                            <li><a href="blog-list.php">Blog List</a></li>
                            <li><a href="blog-details.php">Blog Detail</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#charts" class="has-arrow"><i class="icon-bar-chart"></i><span>Charts</span></a>
                        <ul>
                            <li><a href="chart-morris.php">Morris</a></li>
                            <li><a href="chart-flot.php">Flot</a></li>
                            <li><a href="chart-chartjs.php">ChartJS</a></li>
                            <li><a href="chart-c3.php">C3 Charts</a></li>
                            <li><a href="chart-jquery-knob.php">Jquery Knob</a></li>                            
                            <li><a href="chart-sparkline.php">Sparkline Chart</a></li>
                            <li><a href="chart-peity.php">Peity</a></li>                            
                            <li><a href="chart-gauges.php">Gauges</a></li>
                            <li><a href="chart-e.php">E Chart</a></li>
                        </ul>
                    </li>                    
                    <li>
                        <a href="#Widgets" class="has-arrow"><i class="icon-puzzle"></i><span>Widgets</span></a>
                        <ul>                                    
                            <li><a href="widgets-statistics.php">Statistics</a></li>
                            <li><a href="widgets-data.php">Data</a></li>
                            <li><a href="widgets-chart.php">Chart</a></li>
                            <li><a href="widgets-weather.php">Weather</a></li>
                            <li><a href="widgets-social.php">Social</a></li>
                            <li><a href="widgets-blog.php">Blog</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#Authentication" class="has-arrow"><i class="icon-lock"></i><span>Authentication</span></a>
                        <ul>                                    
                            <li><a href="page-login.php">Login</a></li>
                            <li><a href="page-register.php">Register</a></li>
                            <li><a href="page-lockscreen.php">Lockscreen</a></li>
                            <li><a href="page-forgot-password.php">Forgot Password</a></li>
                            <li><a href="page-404.php">Page 404</a></li>
                            <li><a href="page-403.php">Page 403</a></li>
                            <li><a href="page-500.php">Page 500</a></li>
                            <li><a href="page-503.php">Page 503</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#Pages" class="has-arrow"><i class="icon-docs"></i><span>Pages</span></a>
                        <ul>
                            <li><a href="page-blank.php">Blank Page</a></li>
                            <li><a href="page-search-results.php">Search Results</a></li>
                            <li><a href="page-profile.php">Profile </a></li>
                            <li><a href="page-invoices.php">Invoices </a></li>
                            <li><a href="page-gallery.php">Image Gallery</a></li>
                            <li><a href="page-gallery2.php">Image Gallery </a></li>
                            <li><a href="page-timeline.php">Timeline</a></li>
                            <li><a href="page-timeline-h.php">Horizontal Timeline</a></li>
                            <li><a href="page-pricing.php">Pricing</a></li>                            
                            <li><a href="page-maintenance.php">Maintenance</a></li>
                            <li><a href="page-testimonials.php">Testimonials</a></li>
                            <li><a href="page-faq.php">FAQ</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#Maps" class="has-arrow"><i class="icon-map"></i><span>Maps</span></a>
                        <ul>
                            <li><a href="map-google.php">Google Map</a></li>
                            <li><a href="map-jvectormap.php">jVector Map</a></li>
                            <li><a href="map-yandex.php">Yandex Map</a></li>                            
                        </ul>
                    </li>
                </ul>
            </nav>     
        </div>
    </div>

    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Table Example</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Table</li>
                        <li class="breadcrumb-item active">Table Example</li>
                    </ul>
                    <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create New</a>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Basic Example 1</h2>
                            <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table m-b-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Patients</th>
                                            <th>Adress</th>
                                            <th>START Date</th>
                                            <th>END Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><span>John</span></td>
                                            <td><span class="text-info">70 Bowman St. South Windsor, CT 06074</span></td>
                                            <td>Sept 13, 2017</td>
                                            <td>Sept 16, 2017</td>
                                            <td><span class="badge badge-success">Admit</span></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><span>Jack Bird</span></td>
                                            <td><span class="text-info">123 6th St. Melbourne, FL 32904</span></td>
                                            <td>Sept 13, 2017</td>
                                            <td>Sept 22, 2017</td>
                                            <td><span class="badge badge-default">Discharge</span></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><span>Dean Otto</span></td>
                                            <td><span class="text-info">123 6th St. Melbourne, FL 32904</span></td>
                                            <td>Sept 13, 2017</td>
                                            <td>Sept 23, 2017</td>
                                            <td><span class="badge badge-success">Admit</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><span>Jack Bird</span></td>
                                            <td><span class="text-info">4 Shirley Ave. West Chicago, IL 60185</span></td>
                                            <td>Sept 17, 2017</td>
                                            <td>Sept 16, 2017</td>
                                            <td><span class="badge badge-default">Discharge</span></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><span>Hughe L.</span></td>
                                            <td><span class="text-info">4 Shirley Ave. West Chicago, IL 60185</span></td>
                                            <td>Sept 18, 2017</td>
                                            <td>Sept 18, 2017</td>
                                            <td><span class="badge badge-success">Admit</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Basic Example 2</h2>
                            <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive check-all-parent">
                                <table class="table table-hover m-b-0 c_list">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label class="fancy-checkbox">
                                                    <input class="check-all" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </th>
                                            <th>Name</th>                                    
                                            <th>Phone</th>                                    
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                        <tr>
                                            <td style="width: 50px;">
                                                <label class="fancy-checkbox">
                                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <img src="../assets/images/xs/avatar1.jpg" class="rounded-circle avatar" alt="">
                                                <p class="c_name">John Smith <span class="badge badge-default m-l-10 hidden-sm-down">Family</span></p>
                                            </td>
                                            <td>
                                                <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-2583</span>
                                            </td>                                   
                                            <td>
                                                <address><i class="zmdi zmdi-pin"></i>123 6th St. Melbourne, FL 32904</address>
                                            </td>
                                            <td>                                            
                                                <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="fancy-checkbox">
                                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <img src="../assets/images/xs/avatar3.jpg" class="rounded-circle avatar" alt="">
                                                <p class="c_name">Claire Peters <span class="badge badge-info m-l-10 hidden-sm-down">Google</span></p>
                                            </td>
                                            <td>
                                                <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-5689</span>
                                            </td>                                    
                                            <td>
                                                <address><i class="zmdi zmdi-pin"></i>44 Shirley Ave. West Chicago, IL 60185</address>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="fancy-checkbox">
                                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <img src="../assets/images/xs/avatar9.jpg" class="rounded-circle avatar" alt="">
                                                <p class="c_name">Frank Camly</p>
                                            </td>
                                            <td>
                                                <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-9999</span>
                                            </td>
                                            <td>
                                                <address><i class="zmdi zmdi-pin"></i>123 6th St. Melbourne, FL 32904</address>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="fancy-checkbox">
                                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <img src="../assets/images/xs/avatar10.jpg" class="rounded-circle avatar" alt="">
                                                <p class="c_name">Cory Carter<span class="badge badge-default m-l-10 hidden-sm-down">Family</span></p>
                                            </td>
                                            <td>
                                                <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-1212</span>
                                            </td>
                                            <td>
                                                <address><i class="zmdi zmdi-pin"></i>70 Bowman St. South Windsor, CT 06074</address>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                                <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Basic Example 3</h2>
                            <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                    <thead>
                                        <tr>
                                            <th>Media</th>
                                            <th>Name</th>
                                            <th>Spent</th>
                                            <th>Change</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <i class="fa fa-facebook fa-2x"></i>
                                            </td>
                                            <td>
                                                <h6 class="margin-0">Facebook Ads</h6>
                                                <span>1.2k Likes, 418 Shares</span>
                                            </td>
                                            <td>
                                                <h6 class="m-b-0">$ 402</h6>
                                                <span class="text-muted">Spent</span>
                                            </td>
                                            <td class="text-right">
                                                <div class="text-success">
                                                    23 <i class="fa fa-long-arrow-up"></i>
                                                </div>
                                                <div class="text-muted">up</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-twitter fa-2x"></i>
                                            </td>
                                            <td>
                                                <h6 class="margin-0">Twitter Ads</h6>
                                                <span>1k Likes, 128 Shares</span>
                                            </td>
                                            <td>
                                                <h6 class="m-b-0">$ 489</h6>
                                                <span class="text-muted">Spent</span>
                                            </td>
                                            <td class="text-right">
                                                <div class="text-danger">                                                    
                                                    -9 <i class="fa fa-long-arrow-down"></i>
                                                </div>
                                                <div class="text-muted">down</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-instagram fa-2x"></i>
                                            </td>
                                            <td>
                                                <h6 class="margin-0">Instagram Post</h6>
                                                <span>1k Follows, 228 Likes</span>
                                            </td>
                                            <td>
                                                <h6 class="mb-0">$ 718 </h6>
                                                <span class="text-muted">Spent</span>
                                            </td>
                                            <td class="text-right">
                                                <div class=" text-success">
                                                    16 <i class="fa  fa-long-arrow-up"></i>
                                                </div>
                                                <div class="text-muted">up</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-linkedin fa-2x"></i>
                                            </td>
                                            <td>
                                                <h6 class="margin-0">LinkedIn Post</h6>
                                                <span>1k Follows, 228 Likes</span>
                                            </td>
                                            <td>
                                                <h6 class="mb-0">$ 768</h6>
                                                <span class="text-muted">Spent</span>
                                            </td>
                                            <td class="text-right">
                                                <div class=" text-success">
                                                    27 <i class="fa  fa-long-arrow-up"></i>
                                                </div>
                                                <div class="text-muted">up</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-google-plus-circle fa-2x"></i>
                                            </td>
                                            <td>
                                                <h6 class="margin-0">Google +</h6>
                                                <span>1k Follows, 228 Likes</span>
                                            </td>
                                            <td>
                                                <h6 class="mb-0">$ 1768</h6>
                                                <span class="text-muted">Spent</span>
                                            </td>
                                            <td class="text-right">
                                                <div class=" text-success">
                                                    27 <i class="fa fa-long-arrow-up"></i>
                                                </div>
                                                <div class="text-muted">up</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Basic Example 4</h2>
                            <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body social_media_table">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Media</th>
                                            <th>Name</th>
                                            <th>Like</th>
                                            <th>Comments</th>
                                            <th>Share</th>
                                            <th>Members</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="social_icon linkedin"><i class="fa fa-linkedin"></i></span>
                                            </td>
                                            <td><span class="list-name">Linked In</span>
                                                <span class="text-muted">Florida, United States</span>
                                            </td>
                                            <td>19K</td>
                                            <td>14K</td>
                                            <td>10K</td>
                                            <td>
                                                <span class="badge badge-success">2341</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="social_icon twitter-table"><i class="fa fa-twitter"></i></span>
                                            </td>
                                            <td><span class="list-name">Twitter</span>
                                                <span class="text-muted">Arkansas, United States</span>
                                            </td>
                                            <td>7K</td>
                                            <td>11K</td>
                                            <td>21K</td>
                                            <td>
                                                <span class="badge badge-success">952</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="social_icon facebook"><i class="fa fa-facebook"></i></span>
                                            </td>
                                            <td><span class="list-name">Facebook</span>
                                                <span class="text-muted">Illunois, United States</span>
                                            </td>
                                            <td>15K</td>
                                            <td>18K</td>
                                            <td>8K</td>
                                            <td>
                                                <span class="badge badge-success">6127</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="social_icon google"><i class="fa fa-google-plus"></i></span>
                                            </td>
                                            <td><span class="list-name">Google Plus</span>
                                                <span class="text-muted">Arizona, United States</span>
                                            </td>
                                            <td>15K</td>
                                            <td>18K</td>
                                            <td>154</td>
                                            <td>
                                                <span class="badge badge-success">325</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><span class="social_icon youtube"><i class="fa fa-youtube-play"></i></span>
                                            </td>
                                            <td><span class="list-name">YouTube</span>
                                                <span class="text-muted">Alaska, United States</span>
                                            </td>
                                            <td>15K</td>
                                            <td>18K</td>
                                            <td>200</td>
                                            <td>
                                                <span class="badge badge-success">160</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Basic Example 5</h2>
                            <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table m-b-0 table-hover">
                                    <thead>
                                        <tr>                                    
                                            <th>Application</th>
                                            <th>Team</th>
                                            <th>Change</th>
                                            <th>Sales</th>                                    
                                            <th>Price</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6>Bootstrap 4x admin v1</h6>
                                                <span>WrapTheme To By Again</span>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1.5" data-line-Color="#00c5dc"
                                                data-fill-Color="transparent">3,5,1,6,5,4,8,3</div>
                                            </td>
                                            <td>11,200</td>
                                            <td>$83</td>
                                            <td><strong>$22,520</strong></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>Agular 5 admin</h6>
                                                <span>WrapTheme To By Again</span>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>                                                    
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1.5" data-line-Color="#f4516c"
                                                data-fill-Color="transparent">4,6,3,2,5,6,5,4</div>
                                            </td>
                                            <td>11,200</td>
                                            <td>$66</td>
                                            <td><strong>$13,205</strong></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>Agular 6 dashboard</h6>
                                                <span>WrapTheme To By Again</span>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="../assets/images/xs/avatar4.jpg" alt="Avatar"></li>                                                
                                                    <li><img src="../assets/images/xs/avatar6.jpg" alt="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1.5" data-line-Color="#31db3d"
                                                data-fill-Color="transparent">7,3,2,1,5,4,6,8</div>
                                            </td>
                                            <td>12,080</td>
                                            <td>$93</td>
                                            <td><strong>$17,700</strong></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6>Agular 6 dashboard</h6>
                                                <span>Wraptheme To By Again</span>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar9.jpg" alt="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1.5" data-line-Color="#2d342e"
                                                data-fill-Color="transparent">3,1,2,5,4,6,2,3</div>
                                            </td>
                                            <td>18,200</td>
                                            <td>$178</td>
                                            <td><strong>$17,700</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Basic Example 6</h2>
                            <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                    <tbody>
                                        <tr>
                                            <th><i class="fa fa-circle text-success"></i></th>
                                            <td>Twitter</td>
                                            <td><span>862 Records</span></td>
                                            <td>35% <i class="fa fa-caret-up "></i></td>
                                            <td><span class="sparkbar">5,8,6,3,5,9,2</span></td>
                                        </tr>
                                        <tr>
                                            <th><i class="fa fa-circle text-info"></i></th>
                                            <td>Facebook</td>
                                            <td><span>451 Records</span></td>
                                            <td>15% <i class="fa fa-caret-up "></i></td>
                                            <td><span class="sparkbar">8,2,1,5,-2,6,-4</span></td>
                                        </tr>
                                        <tr>
                                            <th><i class="fa fa-circle text-warning"></i></th>
                                            <td>Mailchimp</td>
                                            <td><span>502 Records</span></td>
                                            <td>20% <i class="fa fa-caret-down"></i></td>
                                            <td><span class="sparkbar">2,3,3,-2,-8,4,8</span></td>
                                        </tr>
                                        <tr>
                                            <th><i class="fa fa-circle text-danger"></i></th>
                                            <td>Google</td>
                                            <td><span>502 Records</span></td>
                                            <td>20% <i class="fa fa-caret-up "></i></td>
                                            <td><span class="sparkbar">5,5,5,6,3,2,1</span></td>
                                        </tr>
                                        <tr>
                                            <th><i class="fa fa-circle "></i></th>
                                            <td>Other</td>
                                            <td><span>237 Records</span></td>
                                            <td>10% <i class="fa fa-caret-down"></i></td>
                                            <td><span class="sparkbar">5,8,6,3,5,9,2</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Basic Example 7</h2>
                            <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body social_media_table">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                    <tbody>
                                        <tr>
                                            <td>Twitter</td>
                                            <td><span>862 Records</span></td>
                                            <td><i class="icon-bubble text-info"><span class="m-l-5">241</span></i></td>
                                            <td><i class="icon-like text-success"><span class="m-l-5">595</span></i></td>
                                            <td style="width: 150px;">
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><span class="sr-only">40% Complete</span></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Facebook</td>
                                            <td><span>451 Records</span></td>
                                            <td><i class="icon-bubble text-info"><span class="m-l-5">540</span></i></td>
                                            <td><i class="icon-like text-success"><span class="m-l-5">1K</span></i></td>
                                            <td><div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"><span class="sr-only">15% Complete</span></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>LinkedIn</td>
                                            <td><span>502 Records</span></td>
                                            <td><i class="icon-bubble text-info"><span class="m-l-5">102</span></i></td>
                                            <td><i class="icon-like text-success"><span class="m-l-5">201</span></i></td>
                                            <td><div class="progress progress-xs">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span class="sr-only">100% Complete</span></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Google</td>
                                            <td><span>502 Records</span></td>
                                            <td><i class="icon-bubble text-info"><span class="m-l-5">21</span></i></td>
                                            <td><i class="icon-like text-success"><span class="m-l-5">28</span></i></td>
                                            <td><div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"><span class="sr-only">85% Complete</span></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Other</td>
                                            <td><span>237 Records</span></td>
                                            <td><i class="icon-bubble text-info"><span class="m-l-5">9</span></i></td>
                                            <td><i class="icon-like text-success"><span class="m-l-5">15</span></i></td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><span class="sr-only">40% Complete</span></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Basic Example 8</h2>
                            <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table center-aligned-table">
                                    <thead>
                                    <tr>
                                        <th>Order No</th>
                                        <th>Product Name</th>
                                        <th>Purchased On</th>
                                        <th>Shipping Status</th>
                                        <th>Payment Method</th>
                                        <th>Payment Status</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Q01</td>
                                        <td>Iphone 7</td>
                                        <td>12 Jan 2018</td>
                                        <td>Dispatched</td>
                                        <td>Credit card</td>
                                        <td><label class="badge">Approved</label></td>
                                        <td><a href="javascript:void(0);" class="btn btn-success btn-sm">View Order</a></td>
                                        <td><button class="btn btn-danger btn-sm"><i class="icon-trash"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>Q02</td>
                                        <td>Galaxy S8</td>
                                        <td>18 Jan 2018</td>
                                        <td>Dispatched</td>
                                        <td>Internet banking</td>
                                        <td><label class="badge">Pending</label></td>
                                        <td><a href="javascript:void(0);" class="btn btn-success btn-sm">View Order</a></td>
                                        <td><button class="btn btn-danger btn-sm"><i class="icon-trash"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>Q03</td>
                                        <td>Amazon Echo</td>
                                        <td>22 Feb 2018</td>
                                        <td>Dispatched</td>
                                        <td>Credit card</td>
                                        <td><label class="badge">Approved</label></td>
                                        <td><a href="javascript:void(0);" class="btn btn-success btn-sm">View Order</a></td>
                                        <td><button class="btn btn-danger btn-sm"><i class="icon-trash"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>Q04</td>
                                        <td>Google Pixel</td>
                                        <td>22 Feb 2018</td>
                                        <td>Dispatched</td>
                                        <td>Cash on delivery</td>
                                        <td><label class="badge">Rejected</label></td>
                                        <td><a href="javascript:void(0);" class="btn btn-success btn-sm">View Order</a></td>
                                        <td><button class="btn btn-danger btn-sm"><i class="icon-trash"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>Q05</td>
                                        <td>Mac Mini</td>
                                        <td>8 March 2018</td>
                                        <td>Dispatched</td>
                                        <td>Debit card</td>
                                        <td><label class="badge">Approved</label></td>
                                        <td><a href="javascript:void(0);" class="btn btn-success btn-sm">View Order</a></td>
                                        <td><button class="btn btn-danger btn-sm"><i class="icon-trash"></i></button></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
</div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script>
    $('.sparkbar').sparkline('php', { type: 'bar' });
</script>
</body>
</html>