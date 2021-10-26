<!doctype html>
<html lang="en">

<head>
<title>:: HexaBit :: Profile</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="HexaBit Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, www.thememakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="../assets/vendor/summernote/dist/summernote.css"/>

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/blog.css">
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
                    <li>
                        <a href="#Tables" class="has-arrow"><i class="icon-tag"></i><span>Tables</span></a>
                        <ul>
                            <li><a href="table-basic.php">Tables Example</a></li>
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
                    <li class="active">
                        <a href="#Pages" class="has-arrow"><i class="icon-docs"></i><span>Pages</span></a>
                        <ul>
                            <li><a href="page-blank.php">Blank Page</a></li>
                            <li><a href="page-search-results.php">Search Results</a></li>
                            <li class="active"><a href="page-profile.php">Profile </a></li>
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
                    <h2>User Profile</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active">User Profile</li>
                    </ul>
                    <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create New</a>
                </div>
            </div>
        </div>    
        <div class="container-fluid">           

            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card profile-header">
                        <div class="body text-center">
                            <div class="profile-image mb-3"><img src="../assets/images/user.png" class="rounded-circle" alt=""></div>
                            <div>
                                <h4 class="mb-0"><strong>Christy</strong> Wert</h4>
                                <span>San Francisco</span>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-primary">Follow</button>
                                <button class="btn btn-outline-secondary">Message</button>
                            </div>                            
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <h2>Info</h2>
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
                            <small class="text-muted">Address: </small>
                            <p>795 Folsom Ave, Suite 600 San Francisco, 94107</p>
                            <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1923731.7533500232!2d-120.39098936853455!3d37.63767091877441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522391841133" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <hr>
                            <small class="text-muted">Email address: </small>
                            <p>michael@gmail.com</p>                            
                            <hr>
                            <small class="text-muted">Mobile: </small>
                            <p>+ 202-555-2828</p>
                            <hr>
                            <small class="text-muted">Birth Date: </small>
                            <p class="m-b-0">October 22th, 1990</p>
                            <hr>
                            <small class="text-muted">Social: </small>
                            <p><i class="fa fa-twitter m-r-5"></i> twitter.com/example</p>
                            <p><i class="fa fa-facebook  m-r-5"></i> facebook.com/example</p>
                            <p><i class="fa fa-github m-r-5"></i> github.com/example</p>
                            <p><i class="fa fa-instagram m-r-5"></i> instagram.com/example</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="header bline">
                            <h2>Who to follow</h2>
                        </div>
                        <div class="body">
                            <ul class="right_chat list-unstyled mb-0">
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Chris Fox</span>
                                                <span class="message">Designer, Blogger</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Joge Lucky</span>
                                                <span class="message">Java Developer</span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Isabella</span>
                                                <span class="message">CEO, Wraptheme</span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar1.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Folisise Chosielie</span>
                                                <span class="message">Art director, Movie Cut</span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar3.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Alexander</span>
                                                <span class="message">Writter, Mag Editor</span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>                        
                            </ul>
                        </div>
                    </div>
                    
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="body">
                            <ul class="nav nav-tabs-new">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Overview">Overview</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Settings">Settings</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content padding-0">
                        <div class="tab-pane blog-page active" id="Overview">
                            <div class="row clearfix text-center">
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="body">
                                            <input type="text" class="knob" value="22" data-width="70" data-height="70" data-thickness="0.1" data-fgColor="#49c5b6">
                                            <h6 class="mb-0 mt-3">Events</h6>
                                            <spapn>12 of this month</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="body">
                                            <input type="text" class="knob" value="78" data-width="70" data-height="70" data-thickness="0.1" data-fgColor="#2196f3">
                                            <h6 class="mb-0 mt-3">Birthday</h6>
                                            <span>4 of this month</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="body">
                                            <input type="text" class="knob" value="66" data-width="70" data-height="70" data-thickness="0.1" data-fgColor="#f44336">
                                            <h6 class="mb-0 mt-3">Conferences</h6>
                                            <span>8 of this month</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="body">
                                            <input type="text" class="knob" value="50" data-width="70" data-height="70" data-thickness="0.1" data-fgColor="#4caf50">
                                            <h6 class="mb-0 mt-3">Seminars</h6>
                                            <span>2 of this month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="card">
                                <div class="body">
                                    <div class="row profile_state">
                                        <div class="col-lg-3 col-md-6">
                                            <i class="fa fa-camera"></i>
                                            <h5 class="m-b-0 number count-to" data-from="0" data-to="2365" data-speed="1000" data-fresh-interval="700">2365</h5>
                                            <small>Shots View</small>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <i class="fa fa-thumbs-o-up"></i>
                                            <h5 class="m-b-0 number count-to" data-from="0" data-to="1203" data-speed="1000" data-fresh-interval="700">1203</h5>
                                            <small>Likes</small>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <i class="fa fa-comments-o"></i>
                                            <h5 class="m-b-0 number count-to" data-from="0" data-to="324" data-speed="1000" data-fresh-interval="700">324</h5>
                                            <small>Comments</small>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <i class="fa fa-user"></i>
                                            <h5 class="m-b-0 number count-to" data-from="0" data-to="1980" data-speed="1000" data-fresh-interval="700">1980</h5>
                                            <small>Profile Views</small>
                                        </div>
                                    </div>                            
                                </div>
                            </div>
                            <div class="card">
                                <div class="body">
                                    <div class="summernote">
                                        <h3 class="m-b-0">hi,</h3>
                                        <h4 class="m-t-0">we are Summernote</h4>
                                        <p></p>
                                    </div>
                                    <button class="btn btn-primary">Post</button>
                                </div>
                            </div>
                            <div class="card single_post2">
                                <img class="img-fluid" src="../assets/images/blog/blog-page-1.jpg" alt="img">
                                <div class="body">                    
                                    <div class="content">
                                        <div class="actions_sidebar">
                                            <a href="javascript:void(0)"><i class="icon-share"></i></a>
                                            <a href="javascript:void(0)"><i class="icon-heart"></i> <span>5</span></a>
                                            <a href="javascript:void(0)"><i class="icon-bubble"></i> <span>8</span></a>
                                        </div>
                                        <h4 class="title">All photographs are accurate</h4>
                                        <p class="date">
                                            <small>July 27, 2018</small>
                                        </p>
                                        <p class="text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                                        <a class="btn btn-primary" href="javascript:void(0)">READ MORE</a>
                                    </div>
                                </div>                                
                            </div>
                            <div class="card single_post2">
                                <img class="img-fluid" src="../assets/images/blog/blog-page-2.jpg" alt="img">
                                <div class="body">                    
                                    <div class="content">
                                        <div class="actions_sidebar">
                                            <a href="javascript:void(0)"><i class="icon-share"></i></a>
                                            <a href="javascript:void(0)"><i class="icon-heart"></i> <span>5</span></a>
                                            <a href="javascript:void(0)"><i class="icon-bubble"></i> <span>8</span></a>
                                        </div>
                                        <h4 class="title">All photographs are accurate</h4>
                                        <p class="date">
                                            <small>Aug 15, 2018</small>
                                        </p>
                                        <p class="text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                                        <a class="btn btn-primary" href="javascript:void(0)">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="Settings">

                            <div class="card">
                                <div class="header bline">
                                    <h2>Basic Information</h2>
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
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">                                                
                                                <input type="text" class="form-control" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">                                                
                                                <input type="text" class="form-control" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <div>
                                                    <label class="fancy-radio">
                                                        <input name="gender2" value="male" type="radio" checked>
                                                        <span><i></i>Male</span>
                                                    </label>
                                                    <label class="fancy-radio">
                                                        <input name="gender2" value="female" type="radio">
                                                        <span><i></i>Female</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="icon-calendar"></i></span>
                                                    </div>
                                                    <input data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Birthdate">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="http://">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">                                                
                                                <textarea rows="4" type="text" class="form-control" placeholder="Address"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="City">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="State/Province">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option value="">-- Select Country --</option>
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AX">Åland Islands</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                    <option value="AS">American Samoa</option>
                                                    <option value="AD">Andorra</option>
                                                    <option value="AO">Angola</option>
                                                    <option value="AI">Anguilla</option>
                                                    <option value="AQ">Antarctica</option>
                                                    <option value="AG">Antigua and Barbuda</option>
                                                    <option value="AR">Argentina</option>
                                                    <option value="AM">Armenia</option>
                                                    <option value="AW">Aruba</option>
                                                    <option value="AU">Australia</option>
                                                    <option value="AT">Austria</option>
                                                    <option value="AZ">Azerbaijan</option>
                                                    <option value="BS">Bahamas</option>
                                                    <option value="BH">Bahrain</option>
                                                    <option value="BD">Bangladesh</option>
                                                    <option value="BB">Barbados</option>
                                                    <option value="BY">Belarus</option>
                                                    <option value="BE">Belgium</option>
                                                    <option value="BZ">Belize</option>
                                                    <option value="BJ">Benin</option>
                                                    <option value="BM">Bermuda</option>
                                                    <option value="BT">Bhutan</option>
                                                    <option value="BO">Bolivia, Plurinational State of</option>
                                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                    <option value="BA">Bosnia and Herzegovina</option>
                                                    <option value="BW">Botswana</option>
                                                    <option value="BV">Bouvet Island</option>
                                                    <option value="BR">Brazil</option>
                                                    <option value="IO">British Indian Ocean Territory</option>
                                                    <option value="BN">Brunei Darussalam</option>
                                                    <option value="BG">Bulgaria</option>
                                                    <option value="BF">Burkina Faso</option>
                                                    <option value="BI">Burundi</option>
                                                    <option value="KH">Cambodia</option>
                                                    <option value="CM">Cameroon</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="CV">Cape Verde</option>
                                                    <option value="KY">Cayman Islands</option>
                                                    <option value="CF">Central African Republic</option>
                                                    <option value="TD">Chad</option>
                                                    <option value="CL">Chile</option>
                                                    <option value="CN">China</option>
                                                    <option value="CX">Christmas Island</option>
                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                    <option value="CO">Colombia</option>
                                                    <option value="KM">Comoros</option>
                                                    <option value="CG">Congo</option>
                                                    <option value="CD">Congo, the Democratic Republic of the</option>
                                                    <option value="CK">Cook Islands</option>
                                                    <option value="CR">Costa Rica</option>
                                                    <option value="CI">Côte d'Ivoire</option>
                                                    <option value="HR">Croatia</option>
                                                    <option value="CU">Cuba</option>
                                                    <option value="CW">Curaçao</option>
                                                    <option value="CY">Cyprus</option>
                                                    <option value="CZ">Czech Republic</option>
                                                    <option value="DK">Denmark</option>
                                                    <option value="DJ">Djibouti</option>
                                                    <option value="DM">Dominica</option>
                                                    <option value="DO">Dominican Republic</option>
                                                    <option value="EC">Ecuador</option>
                                                    <option value="EG">Egypt</option>
                                                    <option value="SV">El Salvador</option>
                                                    <option value="GQ">Equatorial Guinea</option>
                                                    <option value="ER">Eritrea</option>
                                                    <option value="EE">Estonia</option>
                                                    <option value="ET">Ethiopia</option>
                                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                                    <option value="FO">Faroe Islands</option>
                                                    <option value="FJ">Fiji</option>
                                                    <option value="FI">Finland</option>
                                                    <option value="FR">France</option>
                                                    <option value="GF">French Guiana</option>
                                                    <option value="PF">French Polynesia</option>
                                                    <option value="TF">French Southern Territories</option>
                                                    <option value="GA">Gabon</option>
                                                    <option value="GM">Gambia</option>
                                                    <option value="GE">Georgia</option>
                                                    <option value="DE">Germany</option>
                                                    <option value="GH">Ghana</option>
                                                    <option value="GI">Gibraltar</option>
                                                    <option value="GR">Greece</option>
                                                    <option value="GL">Greenland</option>
                                                    <option value="GD">Grenada</option>
                                                    <option value="GP">Guadeloupe</option>
                                                    <option value="GU">Guam</option>
                                                    <option value="GT">Guatemala</option>
                                                    <option value="GG">Guernsey</option>
                                                    <option value="GN">Guinea</option>
                                                    <option value="GW">Guinea-Bissau</option>
                                                    <option value="GY">Guyana</option>
                                                    <option value="HT">Haiti</option>
                                                    <option value="HM">Heard Island and McDonald Islands</option>
                                                    <option value="VA">Holy See (Vatican City State)</option>
                                                    <option value="HN">Honduras</option>
                                                    <option value="HK">Hong Kong</option>
                                                    <option value="HU">Hungary</option>
                                                    <option value="IS">Iceland</option>
                                                    <option value="IN">India</option>
                                                    <option value="ID">Indonesia</option>
                                                    <option value="IR">Iran, Islamic Republic of</option>
                                                    <option value="IQ">Iraq</option>
                                                    <option value="IE">Ireland</option>
                                                    <option value="IM">Isle of Man</option>
                                                    <option value="IL">Israel</option>
                                                    <option value="IT">Italy</option>
                                                    <option value="JM">Jamaica</option>
                                                    <option value="JP">Japan</option>
                                                    <option value="JE">Jersey</option>
                                                    <option value="JO">Jordan</option>
                                                    <option value="KZ">Kazakhstan</option>
                                                    <option value="KE">Kenya</option>
                                                    <option value="KI">Kiribati</option>
                                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                                    <option value="KR">Korea, Republic of</option>
                                                    <option value="KW">Kuwait</option>
                                                    <option value="KG">Kyrgyzstan</option>
                                                    <option value="LA">Lao People's Democratic Republic</option>
                                                    <option value="LV">Latvia</option>
                                                    <option value="LB">Lebanon</option>
                                                    <option value="LS">Lesotho</option>
                                                    <option value="LR">Liberia</option>
                                                    <option value="LY">Libya</option>
                                                    <option value="LI">Liechtenstein</option>
                                                    <option value="LT">Lithuania</option>
                                                    <option value="LU">Luxembourg</option>
                                                    <option value="MO">Macao</option>
                                                    <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                    <option value="MG">Madagascar</option>
                                                    <option value="MW">Malawi</option>
                                                    <option value="MY">Malaysia</option>
                                                    <option value="MV">Maldives</option>
                                                    <option value="ML">Mali</option>
                                                    <option value="MT">Malta</option>
                                                    <option value="MH">Marshall Islands</option>
                                                    <option value="MQ">Martinique</option>
                                                    <option value="MR">Mauritania</option>
                                                    <option value="MU">Mauritius</option>
                                                    <option value="YT">Mayotte</option>
                                                    <option value="MX">Mexico</option>
                                                    <option value="FM">Micronesia, Federated States of</option>
                                                    <option value="MD">Moldova, Republic of</option>
                                                    <option value="MC">Monaco</option>
                                                    <option value="MN">Mongolia</option>
                                                    <option value="ME">Montenegro</option>
                                                    <option value="MS">Montserrat</option>
                                                    <option value="MA">Morocco</option>
                                                    <option value="MZ">Mozambique</option>
                                                    <option value="MM">Myanmar</option>
                                                    <option value="NA">Namibia</option>
                                                    <option value="NR">Nauru</option>
                                                    <option value="NP">Nepal</option>
                                                    <option value="NL">Netherlands</option>
                                                    <option value="NC">New Caledonia</option>
                                                    <option value="NZ">New Zealand</option>
                                                    <option value="NI">Nicaragua</option>
                                                    <option value="NE">Niger</option>
                                                    <option value="NG">Nigeria</option>
                                                    <option value="NU">Niue</option>
                                                    <option value="NF">Norfolk Island</option>
                                                    <option value="MP">Northern Mariana Islands</option>
                                                    <option value="NO">Norway</option>
                                                    <option value="OM">Oman</option>
                                                    <option value="PK">Pakistan</option>
                                                    <option value="PW">Palau</option>
                                                    <option value="PS">Palestinian Territory, Occupied</option>
                                                    <option value="PA">Panama</option>
                                                    <option value="PG">Papua New Guinea</option>
                                                    <option value="PY">Paraguay</option>
                                                    <option value="PE">Peru</option>
                                                    <option value="PH">Philippines</option>
                                                    <option value="PN">Pitcairn</option>
                                                    <option value="PL">Poland</option>
                                                    <option value="PT">Portugal</option>
                                                    <option value="PR">Puerto Rico</option>
                                                    <option value="QA">Qatar</option>
                                                    <option value="RE">Réunion</option>
                                                    <option value="RO">Romania</option>
                                                    <option value="RU">Russian Federation</option>
                                                    <option value="RW">Rwanda</option>
                                                    <option value="BL">Saint Barthélemy</option>
                                                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                    <option value="LC">Saint Lucia</option>
                                                    <option value="MF">Saint Martin (French part)</option>
                                                    <option value="PM">Saint Pierre and Miquelon</option>
                                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                                    <option value="WS">Samoa</option>
                                                    <option value="SM">San Marino</option>
                                                    <option value="ST">Sao Tome and Principe</option>
                                                    <option value="SA">Saudi Arabia</option>
                                                    <option value="SN">Senegal</option>
                                                    <option value="RS">Serbia</option>
                                                    <option value="SC">Seychelles</option>
                                                    <option value="SL">Sierra Leone</option>
                                                    <option value="SG">Singapore</option>
                                                    <option value="SX">Sint Maarten (Dutch part)</option>
                                                    <option value="SK">Slovakia</option>
                                                    <option value="SI">Slovenia</option>
                                                    <option value="SB">Solomon Islands</option>
                                                    <option value="SO">Somalia</option>
                                                    <option value="ZA">South Africa</option>
                                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                    <option value="SS">South Sudan</option>
                                                    <option value="ES">Spain</option>
                                                    <option value="LK">Sri Lanka</option>
                                                    <option value="SD">Sudan</option>
                                                    <option value="SR">Suriname</option>
                                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                                    <option value="SZ">Swaziland</option>
                                                    <option value="SE">Sweden</option>
                                                    <option value="CH">Switzerland</option>
                                                    <option value="SY">Syrian Arab Republic</option>
                                                    <option value="TW">Taiwan, Province of China</option>
                                                    <option value="TJ">Tajikistan</option>
                                                    <option value="TZ">Tanzania, United Republic of</option>
                                                    <option value="TH">Thailand</option>
                                                    <option value="TL">Timor-Leste</option>
                                                    <option value="TG">Togo</option>
                                                    <option value="TK">Tokelau</option>
                                                    <option value="TO">Tonga</option>
                                                    <option value="TT">Trinidad and Tobago</option>
                                                    <option value="TN">Tunisia</option>
                                                    <option value="TR">Turkey</option>
                                                    <option value="TM">Turkmenistan</option>
                                                    <option value="TC">Turks and Caicos Islands</option>
                                                    <option value="TV">Tuvalu</option>
                                                    <option value="UG">Uganda</option>
                                                    <option value="UA">Ukraine</option>
                                                    <option value="AE">United Arab Emirates</option>
                                                    <option value="GB">United Kingdom</option>
                                                    <option value="US">United States</option>
                                                    <option value="UM">United States Minor Outlying Islands</option>
                                                    <option value="UY">Uruguay</option>
                                                    <option value="UZ">Uzbekistan</option>
                                                    <option value="VU">Vanuatu</option>
                                                    <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                    <option value="VN">Viet Nam</option>
                                                    <option value="VG">Virgin Islands, British</option>
                                                    <option value="VI">Virgin Islands, U.S.</option>
                                                    <option value="WF">Wallis and Futuna</option>
                                                    <option value="EH">Western Sahara</option>
                                                    <option value="YE">Yemen</option>
                                                    <option value="ZM">Zambia</option>
                                                    <option value="ZW">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary">Update</button> &nbsp;&nbsp;
                                    <button type="button" class="btn btn-default">Cancel</button>
                                </div>
                            </div>

                            <div class="card">
                                <div class="header bline">
                                    <h2>Account Data</h2>
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
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12">                                            
                                            <div class="form-group">                                                
                                                <input type="text" class="form-control" value="alizeethomas" disabled placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control" value="alizee.info@yourdomain.com" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Phone Number">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <h6>Change Password</h6>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Current Password">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="New Password">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Confirm New Password">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary">Update</button> &nbsp;&nbsp;
                                    <button type="button" class="btn btn-default">Cancel</button>
                                </div>
                            </div>

                            <div class="card">
                                <div class="header bline">
                                    <h2>General Information</h2>
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
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12">                                           
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>--Select Language</option>
                                                    <option value="en_US" lang="en">English (United States)</option>
                                                    <option value="ar" lang="ar">العربية</option>
                                                    <option value="ary" lang="ar">العربية المغربية</option>
                                                    <option value="az" lang="az">Azərbaycan dili</option>
                                                    <option value="azb" lang="az">گؤنئی آذربایجان</option>
                                                    <option value="bel" lang="be">Беларуская мова</option>
                                                    <option value="bg_BG" lang="bg">Български</option>
                                                    <option value="bn_BD" lang="bn">বাংলা</option>
                                                    <option value="bs_BA" lang="bs">Bosanski</option>
                                                    <option value="ca" lang="ca">Català</option>
                                                    <option value="ceb" lang="ceb">Cebuano</option>
                                                    <option value="cs_CZ" lang="cs">Čeština‎</option>
                                                    <option value="cy" lang="cy">Cymraeg</option>
                                                    <option value="da_DK" lang="da">Dansk</option>
                                                    <option value="de_CH_informal" lang="de">Deutsch (Schweiz, Du)</option>
                                                    <option value="de_CH" lang="de">Deutsch (Schweiz)</option>
                                                    <option value="de_DE" lang="de">Deutsch</option>
                                                    <option value="de_DE_formal" lang="de">Deutsch (Sie)</option>
                                                    <option value="el" lang="el">Ελληνικά</option>
                                                    <option value="en_GB" lang="en">English (UK)</option>
                                                    <option value="en_AU" lang="en">English (Australia)</option>
                                                    <option value="en_ZA" lang="en">English (South Africa)</option>
                                                    <option value="en_NZ" lang="en">English (New Zealand)</option>
                                                    <option value="en_CA" lang="en">English (Canada)</option>
                                                    <option value="eo" lang="eo">Esperanto</option>
                                                    <option value="es_CL" lang="es">Español de Chile</option>
                                                    <option value="es_MX" lang="es">Español de México</option>
                                                    <option value="es_GT" lang="es">Español de Guatemala</option>
                                                    <option value="es_AR" lang="es">Español de Argentina</option>
                                                    <option value="es_ES" lang="es">Español</option>
                                                    <option value="es_PE" lang="es">Español de Perú</option>
                                                    <option value="es_CO" lang="es">Español de Colombia</option>
                                                    <option value="es_VE" lang="es">Español de Venezuela</option>
                                                    <option value="et" lang="et">Eesti</option>
                                                    <option value="eu" lang="eu">Euskara</option>
                                                    <option value="fa_IR" lang="fa">فارسی</option>
                                                    <option value="fi" lang="fi">Suomi</option>
                                                    <option value="fr_FR" lang="fr">Français</option>
                                                    <option value="fr_CA" lang="fr">Français du Canada</option>
                                                    <option value="fr_BE" lang="fr">Français de Belgique</option>
                                                    <option value="gd" lang="gd">Gàidhlig</option>
                                                    <option value="gl_ES" lang="gl">Galego</option>
                                                    <option value="haz" lang="haz">هزاره گی</option>
                                                    <option value="he_IL" lang="he">עִבְרִית</option>
                                                    <option value="hi_IN" lang="hi">हिन्दी</option>
                                                    <option value="hr" lang="hr">Hrvatski</option>
                                                    <option value="hu_HU" lang="hu">Magyar</option>
                                                    <option value="hy" lang="hy">Հայերեն</option>
                                                    <option value="id_ID" lang="id">Bahasa Indonesia</option>
                                                    <option value="is_IS" lang="is">Íslenska</option>
                                                    <option value="it_IT" lang="it">Italiano</option>
                                                    <option value="ja" lang="ja">日本語</option>
                                                    <option value="ka_GE" lang="ka">ქართული</option>
                                                    <option value="ko_KR" lang="ko">한국어</option>
                                                    <option value="lt_LT" lang="lt">Lietuvių kalba</option>
                                                    <option value="mk_MK" lang="mk">Македонски јазик</option>
                                                    <option value="mr" lang="mr">मराठी</option>
                                                    <option value="ms_MY" lang="ms">Bahasa Melayu</option>
                                                    <option value="my_MM" lang="my">ဗမာစာ</option>
                                                    <option value="nb_NO" lang="nb">Norsk bokmål</option>
                                                    <option value="nl_NL" lang="nl">Nederlands</option>
                                                    <option value="nl_NL_formal" lang="nl">Nederlands (Formeel)</option>
                                                    <option value="nn_NO" lang="nn">Norsk nynorsk</option>
                                                    <option value="oci" lang="oc">Occitan</option>
                                                    <option value="pl_PL" lang="pl">Polski</option>
                                                    <option value="ps" lang="ps">پښتو</option>
                                                    <option value="pt_BR" lang="pt">Português do Brasil</option>
                                                    <option value="pt_PT" lang="pt">Português</option>
                                                    <option value="ro_RO" lang="ro">Română</option>
                                                    <option value="ru_RU" lang="ru">Русский</option>
                                                    <option value="sk_SK" lang="sk">Slovenčina</option>
                                                    <option value="sl_SI" lang="sl">Slovenščina</option>
                                                    <option value="sq" lang="sq">Shqip</option>
                                                    <option value="sr_RS" lang="sr">Српски језик</option>
                                                    <option value="sv_SE" lang="sv">Svenska</option>
                                                    <option value="th" lang="th">ไทย</option>
                                                    <option value="tl" lang="tl">Tagalog</option>
                                                    <option value="tr_TR" lang="tr">Türkçe</option>
                                                    <option value="ug_CN" lang="ug">Uyƣurqə</option>
                                                    <option value="uk" lang="uk">Українська</option>
                                                    <option value="vi" lang="vi">Tiếng Việt</option>
                                                    <option value="zh_CN" lang="zh">简体中文</option>
                                                    <option value="zh_TW" lang="zh">繁體中文</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>--TimeZone--</option>
                                                    <optgroup label="Africa">
                                                        <option value="Africa/Abidjan">Abidjan</option>
                                                        <option value="Africa/Accra">Accra</option>
                                                        <option value="Africa/Addis_Ababa">Addis Ababa</option>
                                                        <option value="Africa/Algiers">Algiers</option>
                                                        <option value="Africa/Asmara">Asmara</option>
                                                        <option value="Africa/Bamako">Bamako</option>
                                                        <option value="Africa/Bangui">Bangui</option>
                                                        <option value="Africa/Banjul">Banjul</option>
                                                        <option value="Africa/Bissau">Bissau</option>
                                                        <option value="Africa/Blantyre">Blantyre</option>
                                                        <option value="Africa/Brazzaville">Brazzaville</option>
                                                        <option value="Africa/Bujumbura">Bujumbura</option>
                                                        <option value="Africa/Cairo">Cairo</option>
                                                        <option value="Africa/Casablanca">Casablanca</option>
                                                        <option value="Africa/Ceuta">Ceuta</option>
                                                        <option value="Africa/Conakry">Conakry</option>
                                                        <option value="Africa/Dakar">Dakar</option>
                                                        <option value="Africa/Dar_es_Salaam">Dar es Salaam</option>
                                                        <option value="Africa/Djibouti">Djibouti</option>
                                                        <option value="Africa/Douala">Douala</option>
                                                        <option value="Africa/El_Aaiun">El Aaiun</option>
                                                        <option value="Africa/Freetown">Freetown</option>
                                                        <option value="Africa/Gaborone">Gaborone</option>
                                                        <option value="Africa/Harare">Harare</option>
                                                        <option value="Africa/Johannesburg">Johannesburg</option>
                                                        <option value="Africa/Juba">Juba</option>
                                                        <option value="Africa/Kampala">Kampala</option>
                                                        <option value="Africa/Khartoum">Khartoum</option>
                                                        <option value="Africa/Kigali">Kigali</option>
                                                        <option value="Africa/Kinshasa">Kinshasa</option>
                                                        <option value="Africa/Lagos">Lagos</option>
                                                        <option value="Africa/Libreville">Libreville</option>
                                                        <option value="Africa/Lome">Lome</option>
                                                        <option value="Africa/Luanda">Luanda</option>
                                                        <option value="Africa/Lubumbashi">Lubumbashi</option>
                                                        <option value="Africa/Lusaka">Lusaka</option>
                                                        <option value="Africa/Malabo">Malabo</option>
                                                        <option value="Africa/Maputo">Maputo</option>
                                                        <option value="Africa/Maseru">Maseru</option>
                                                        <option value="Africa/Mbabane">Mbabane</option>
                                                        <option value="Africa/Mogadishu">Mogadishu</option>
                                                        <option value="Africa/Monrovia">Monrovia</option>
                                                        <option value="Africa/Nairobi">Nairobi</option>
                                                        <option value="Africa/Ndjamena">Ndjamena</option>
                                                        <option value="Africa/Niamey">Niamey</option>
                                                        <option value="Africa/Nouakchott">Nouakchott</option>
                                                        <option value="Africa/Ouagadougou">Ouagadougou</option>
                                                        <option value="Africa/Porto-Novo">Porto-Novo</option>
                                                        <option value="Africa/Sao_Tome">Sao Tome</option>
                                                        <option value="Africa/Tripoli">Tripoli</option>
                                                        <option value="Africa/Tunis">Tunis</option>
                                                        <option value="Africa/Windhoek">Windhoek</option>
                                                    </optgroup>
                                                    <optgroup label="America">
                                                        <option value="America/Adak">Adak</option>
                                                        <option value="America/Anchorage">Anchorage</option>
                                                        <option value="America/Anguilla">Anguilla</option>
                                                        <option value="America/Antigua">Antigua</option>
                                                        <option value="America/Araguaina">Araguaina</option>
                                                        <option value="America/Argentina/Buenos_Aires">Argentina - Buenos Aires</option>
                                                        <option value="America/Argentina/Catamarca">Argentina - Catamarca</option>
                                                        <option value="America/Argentina/Cordoba">Argentina - Cordoba</option>
                                                        <option value="America/Argentina/Jujuy">Argentina - Jujuy</option>
                                                        <option value="America/Argentina/La_Rioja">Argentina - La Rioja</option>
                                                        <option value="America/Argentina/Mendoza">Argentina - Mendoza</option>
                                                        <option value="America/Argentina/Rio_Gallegos">Argentina - Rio Gallegos</option>
                                                        <option value="America/Argentina/Salta">Argentina - Salta</option>
                                                        <option value="America/Argentina/San_Juan">Argentina - San Juan</option>
                                                        <option value="America/Argentina/San_Luis">Argentina - San Luis</option>
                                                        <option value="America/Argentina/Tucuman">Argentina - Tucuman</option>
                                                        <option value="America/Argentina/Ushuaia">Argentina - Ushuaia</option>
                                                        <option value="America/Aruba">Aruba</option>
                                                        <option value="America/Asuncion">Asuncion</option>
                                                        <option value="America/Atikokan">Atikokan</option>
                                                        <option value="America/Bahia">Bahia</option>
                                                        <option value="America/Bahia_Banderas">Bahia Banderas</option>
                                                        <option value="America/Barbados">Barbados</option>
                                                        <option value="America/Belem">Belem</option>
                                                        <option value="America/Belize">Belize</option>
                                                        <option value="America/Blanc-Sablon">Blanc-Sablon</option>
                                                        <option value="America/Boa_Vista">Boa Vista</option>
                                                        <option value="America/Bogota">Bogota</option>
                                                        <option value="America/Boise">Boise</option>
                                                        <option value="America/Cambridge_Bay">Cambridge Bay</option>
                                                        <option value="America/Campo_Grande">Campo Grande</option>
                                                        <option value="America/Cancun">Cancun</option>
                                                        <option value="America/Caracas">Caracas</option>
                                                        <option value="America/Cayenne">Cayenne</option>
                                                        <option value="America/Cayman">Cayman</option>
                                                        <option value="America/Chicago">Chicago</option>
                                                        <option value="America/Chihuahua">Chihuahua</option>
                                                        <option value="America/Costa_Rica">Costa Rica</option>
                                                        <option value="America/Creston">Creston</option>
                                                        <option value="America/Cuiaba">Cuiaba</option>
                                                        <option value="America/Curacao">Curacao</option>
                                                        <option value="America/Danmarkshavn">Danmarkshavn</option>
                                                        <option value="America/Dawson">Dawson</option>
                                                        <option value="America/Dawson_Creek">Dawson Creek</option>
                                                        <option value="America/Denver">Denver</option>
                                                        <option value="America/Detroit">Detroit</option>
                                                        <option value="America/Dominica">Dominica</option>
                                                        <option value="America/Edmonton">Edmonton</option>
                                                        <option value="America/Eirunepe">Eirunepe</option>
                                                        <option value="America/El_Salvador">El Salvador</option>
                                                        <option value="America/Fortaleza">Fortaleza</option>
                                                        <option value="America/Glace_Bay">Glace Bay</option>
                                                        <option value="America/Godthab">Godthab</option>
                                                        <option value="America/Goose_Bay">Goose Bay</option>
                                                        <option value="America/Grand_Turk">Grand Turk</option>
                                                        <option value="America/Grenada">Grenada</option>
                                                        <option value="America/Guadeloupe">Guadeloupe</option>
                                                        <option value="America/Guatemala">Guatemala</option>
                                                        <option value="America/Guayaquil">Guayaquil</option>
                                                        <option value="America/Guyana">Guyana</option>
                                                        <option value="America/Halifax">Halifax</option>
                                                        <option value="America/Havana">Havana</option>
                                                        <option value="America/Hermosillo">Hermosillo</option>
                                                        <option value="America/Indiana/Indianapolis">Indiana - Indianapolis</option>
                                                        <option value="America/Indiana/Knox">Indiana - Knox</option>
                                                        <option value="America/Indiana/Marengo">Indiana - Marengo</option>
                                                        <option value="America/Indiana/Petersburg">Indiana - Petersburg</option>
                                                        <option value="America/Indiana/Tell_City">Indiana - Tell City</option>
                                                        <option value="America/Indiana/Vevay">Indiana - Vevay</option>
                                                        <option value="America/Indiana/Vincennes">Indiana - Vincennes</option>
                                                        <option value="America/Indiana/Winamac">Indiana - Winamac</option>
                                                        <option value="America/Inuvik">Inuvik</option>
                                                        <option value="America/Iqaluit">Iqaluit</option>
                                                        <option value="America/Jamaica">Jamaica</option>
                                                        <option value="America/Juneau">Juneau</option>
                                                        <option value="America/Kentucky/Louisville">Kentucky - Louisville</option>
                                                        <option value="America/Kentucky/Monticello">Kentucky - Monticello</option>
                                                        <option value="America/Kralendijk">Kralendijk</option>
                                                        <option value="America/La_Paz">La Paz</option>
                                                        <option value="America/Lima">Lima</option>
                                                        <option value="America/Los_Angeles">Los Angeles</option>
                                                        <option value="America/Lower_Princes">Lower Princes</option>
                                                        <option value="America/Maceio">Maceio</option>
                                                        <option value="America/Managua">Managua</option>
                                                        <option value="America/Manaus">Manaus</option>
                                                        <option value="America/Marigot">Marigot</option>
                                                        <option value="America/Martinique">Martinique</option>
                                                        <option value="America/Matamoros">Matamoros</option>
                                                        <option value="America/Mazatlan">Mazatlan</option>
                                                        <option value="America/Menominee">Menominee</option>
                                                        <option value="America/Merida">Merida</option>
                                                        <option value="America/Metlakatla">Metlakatla</option>
                                                        <option value="America/Mexico_City">Mexico City</option>
                                                        <option value="America/Miquelon">Miquelon</option>
                                                        <option value="America/Moncton">Moncton</option>
                                                        <option value="America/Monterrey">Monterrey</option>
                                                        <option value="America/Montevideo">Montevideo</option>
                                                        <option value="America/Montserrat">Montserrat</option>
                                                        <option value="America/Nassau">Nassau</option>
                                                        <option value="America/New_York">New York</option>
                                                        <option value="America/Nipigon">Nipigon</option>
                                                        <option value="America/Nome">Nome</option>
                                                        <option value="America/Noronha">Noronha</option>
                                                        <option value="America/North_Dakota/Beulah">North Dakota - Beulah</option>
                                                        <option value="America/North_Dakota/Center">North Dakota - Center</option>
                                                        <option value="America/North_Dakota/New_Salem">North Dakota - New Salem</option>
                                                        <option value="America/Ojinaga">Ojinaga</option>
                                                        <option value="America/Panama">Panama</option>
                                                        <option value="America/Pangnirtung">Pangnirtung</option>
                                                        <option value="America/Paramaribo">Paramaribo</option>
                                                        <option value="America/Phoenix">Phoenix</option>
                                                        <option value="America/Port-au-Prince">Port-au-Prince</option>
                                                        <option value="America/Port_of_Spain">Port of Spain</option>
                                                        <option value="America/Porto_Velho">Porto Velho</option>
                                                        <option value="America/Puerto_Rico">Puerto Rico</option>
                                                        <option value="America/Rainy_River">Rainy River</option>
                                                        <option value="America/Rankin_Inlet">Rankin Inlet</option>
                                                        <option value="America/Recife">Recife</option>
                                                        <option value="America/Regina">Regina</option>
                                                        <option value="America/Resolute">Resolute</option>
                                                        <option value="America/Rio_Branco">Rio Branco</option>
                                                        <option value="America/Santa_Isabel">Santa Isabel</option>
                                                        <option value="America/Santarem">Santarem</option>
                                                        <option value="America/Santiago">Santiago</option>
                                                        <option value="America/Santo_Domingo">Santo Domingo</option>
                                                        <option value="America/Sao_Paulo">Sao Paulo</option>
                                                        <option value="America/Scoresbysund">Scoresbysund</option>
                                                        <option value="America/Sitka">Sitka</option>
                                                        <option value="America/St_Barthelemy">St Barthelemy</option>
                                                        <option value="America/St_Johns">St Johns</option>
                                                        <option value="America/St_Kitts">St Kitts</option>
                                                        <option value="America/St_Lucia">St Lucia</option>
                                                        <option value="America/St_Thomas">St Thomas</option>
                                                        <option value="America/St_Vincent">St Vincent</option>
                                                        <option value="America/Swift_Current">Swift Current</option>
                                                        <option value="America/Tegucigalpa">Tegucigalpa</option>
                                                        <option value="America/Thule">Thule</option>
                                                        <option value="America/Thunder_Bay">Thunder Bay</option>
                                                        <option value="America/Tijuana">Tijuana</option>
                                                        <option value="America/Toronto">Toronto</option>
                                                        <option value="America/Tortola">Tortola</option>
                                                        <option value="America/Vancouver">Vancouver</option>
                                                        <option value="America/Whitehorse">Whitehorse</option>
                                                        <option value="America/Winnipeg">Winnipeg</option>
                                                        <option value="America/Yakutat">Yakutat</option>
                                                        <option value="America/Yellowknife">Yellowknife</option>
                                                    </optgroup>
                                                    <optgroup label="Antarctica">
                                                        <option value="Antarctica/Casey">Casey</option>
                                                        <option value="Antarctica/Davis">Davis</option>
                                                        <option value="Antarctica/DumontDUrville">DumontDUrville</option>
                                                        <option value="Antarctica/Macquarie">Macquarie</option>
                                                        <option value="Antarctica/Mawson">Mawson</option>
                                                        <option value="Antarctica/McMurdo">McMurdo</option>
                                                        <option value="Antarctica/Palmer">Palmer</option>
                                                        <option value="Antarctica/Rothera">Rothera</option>
                                                        <option value="Antarctica/Syowa">Syowa</option>
                                                        <option value="Antarctica/Troll">Troll</option>
                                                        <option value="Antarctica/Vostok">Vostok</option>
                                                    </optgroup>
                                                    <optgroup label="Arctic">
                                                        <option value="Arctic/Longyearbyen">Longyearbyen</option>
                                                    </optgroup>
                                                    <optgroup label="Asia">
                                                        <option value="Asia/Aden">Aden</option>
                                                        <option value="Asia/Almaty">Almaty</option>
                                                        <option value="Asia/Amman">Amman</option>
                                                        <option value="Asia/Anadyr">Anadyr</option>
                                                        <option value="Asia/Aqtau">Aqtau</option>
                                                        <option value="Asia/Aqtobe">Aqtobe</option>
                                                        <option value="Asia/Ashgabat">Ashgabat</option>
                                                        <option value="Asia/Baghdad">Baghdad</option>
                                                        <option value="Asia/Bahrain">Bahrain</option>
                                                        <option value="Asia/Baku">Baku</option>
                                                        <option value="Asia/Bangkok">Bangkok</option>
                                                        <option value="Asia/Beirut">Beirut</option>
                                                        <option value="Asia/Bishkek">Bishkek</option>
                                                        <option value="Asia/Brunei">Brunei</option>
                                                        <option value="Asia/Chita">Chita</option>
                                                        <option value="Asia/Choibalsan">Choibalsan</option>
                                                        <option value="Asia/Colombo">Colombo</option>
                                                        <option value="Asia/Damascus">Damascus</option>
                                                        <option value="Asia/Dhaka">Dhaka</option>
                                                        <option value="Asia/Dili">Dili</option>
                                                        <option value="Asia/Dubai">Dubai</option>
                                                        <option value="Asia/Dushanbe">Dushanbe</option>
                                                        <option value="Asia/Gaza">Gaza</option>
                                                        <option value="Asia/Hebron">Hebron</option>
                                                        <option value="Asia/Ho_Chi_Minh">Ho Chi Minh</option>
                                                        <option value="Asia/Hong_Kong">Hong Kong</option>
                                                        <option value="Asia/Hovd">Hovd</option>
                                                        <option value="Asia/Irkutsk">Irkutsk</option>
                                                        <option value="Asia/Jakarta">Jakarta</option>
                                                        <option value="Asia/Jayapura">Jayapura</option>
                                                        <option value="Asia/Jerusalem">Jerusalem</option>
                                                        <option value="Asia/Kabul">Kabul</option>
                                                        <option value="Asia/Kamchatka">Kamchatka</option>
                                                        <option value="Asia/Karachi">Karachi</option>
                                                        <option value="Asia/Kathmandu">Kathmandu</option>
                                                        <option value="Asia/Khandyga">Khandyga</option>
                                                        <option value="Asia/Kolkata">Kolkata</option>
                                                        <option value="Asia/Krasnoyarsk">Krasnoyarsk</option>
                                                        <option value="Asia/Kuala_Lumpur">Kuala Lumpur</option>
                                                        <option value="Asia/Kuching">Kuching</option>
                                                        <option value="Asia/Kuwait">Kuwait</option>
                                                        <option value="Asia/Macau">Macau</option>
                                                        <option value="Asia/Magadan">Magadan</option>
                                                        <option value="Asia/Makassar">Makassar</option>
                                                        <option value="Asia/Manila">Manila</option>
                                                        <option value="Asia/Muscat">Muscat</option>
                                                        <option value="Asia/Nicosia">Nicosia</option>
                                                        <option value="Asia/Novokuznetsk">Novokuznetsk</option>
                                                        <option value="Asia/Novosibirsk">Novosibirsk</option>
                                                        <option value="Asia/Omsk">Omsk</option>
                                                        <option value="Asia/Oral">Oral</option>
                                                        <option value="Asia/Phnom_Penh">Phnom Penh</option>
                                                        <option value="Asia/Pontianak">Pontianak</option>
                                                        <option value="Asia/Pyongyang">Pyongyang</option>
                                                        <option value="Asia/Qatar">Qatar</option>
                                                        <option value="Asia/Qyzylorda">Qyzylorda</option>
                                                        <option value="Asia/Rangoon">Rangoon</option>
                                                        <option value="Asia/Riyadh">Riyadh</option>
                                                        <option value="Asia/Sakhalin">Sakhalin</option>
                                                        <option value="Asia/Samarkand">Samarkand</option>
                                                        <option value="Asia/Seoul">Seoul</option>
                                                        <option value="Asia/Shanghai">Shanghai</option>
                                                        <option value="Asia/Singapore">Singapore</option>
                                                        <option value="Asia/Srednekolymsk">Srednekolymsk</option>
                                                        <option value="Asia/Taipei">Taipei</option>
                                                        <option value="Asia/Tashkent">Tashkent</option>
                                                        <option value="Asia/Tbilisi">Tbilisi</option>
                                                        <option value="Asia/Tehran">Tehran</option>
                                                        <option value="Asia/Thimphu">Thimphu</option>
                                                        <option value="Asia/Tokyo">Tokyo</option>
                                                        <option value="Asia/Ulaanbaatar">Ulaanbaatar</option>
                                                        <option value="Asia/Urumqi">Urumqi</option>
                                                        <option value="Asia/Ust-Nera">Ust-Nera</option>
                                                        <option value="Asia/Vientiane">Vientiane</option>
                                                        <option value="Asia/Vladivostok">Vladivostok</option>
                                                        <option value="Asia/Yakutsk">Yakutsk</option>
                                                        <option value="Asia/Yekaterinburg">Yekaterinburg</option>
                                                        <option value="Asia/Yerevan">Yerevan</option>
                                                    </optgroup>
                                                    <optgroup label="Atlantic">
                                                        <option value="Atlantic/Azores">Azores</option>
                                                        <option value="Atlantic/Bermuda">Bermuda</option>
                                                        <option value="Atlantic/Canary">Canary</option>
                                                        <option value="Atlantic/Cape_Verde">Cape Verde</option>
                                                        <option value="Atlantic/Faroe">Faroe</option>
                                                        <option value="Atlantic/Madeira">Madeira</option>
                                                        <option value="Atlantic/Reykjavik">Reykjavik</option>
                                                        <option value="Atlantic/South_Georgia">South Georgia</option>
                                                        <option value="Atlantic/Stanley">Stanley</option>
                                                        <option value="Atlantic/St_Helena">St Helena</option>
                                                    </optgroup>
                                                    <optgroup label="Australia">
                                                        <option value="Australia/Adelaide">Adelaide</option>
                                                        <option value="Australia/Brisbane">Brisbane</option>
                                                        <option value="Australia/Broken_Hill">Broken Hill</option>
                                                        <option value="Australia/Currie">Currie</option>
                                                        <option value="Australia/Darwin">Darwin</option>
                                                        <option value="Australia/Eucla">Eucla</option>
                                                        <option value="Australia/Hobart">Hobart</option>
                                                        <option value="Australia/Lindeman">Lindeman</option>
                                                        <option value="Australia/Lord_Howe">Lord Howe</option>
                                                        <option value="Australia/Melbourne">Melbourne</option>
                                                        <option value="Australia/Perth">Perth</option>
                                                        <option value="Australia/Sydney">Sydney</option>
                                                    </optgroup>
                                                    <optgroup label="Europe">
                                                        <option value="Europe/Amsterdam">Amsterdam</option>
                                                        <option value="Europe/Andorra">Andorra</option>
                                                        <option value="Europe/Athens">Athens</option>
                                                        <option value="Europe/Belgrade">Belgrade</option>
                                                        <option value="Europe/Berlin">Berlin</option>
                                                        <option value="Europe/Bratislava">Bratislava</option>
                                                        <option value="Europe/Brussels">Brussels</option>
                                                        <option value="Europe/Bucharest">Bucharest</option>
                                                        <option value="Europe/Budapest">Budapest</option>
                                                        <option value="Europe/Busingen">Busingen</option>
                                                        <option value="Europe/Chisinau">Chisinau</option>
                                                        <option value="Europe/Copenhagen">Copenhagen</option>
                                                        <option value="Europe/Dublin">Dublin</option>
                                                        <option value="Europe/Gibraltar">Gibraltar</option>
                                                        <option value="Europe/Guernsey">Guernsey</option>
                                                        <option value="Europe/Helsinki">Helsinki</option>
                                                        <option value="Europe/Isle_of_Man">Isle of Man</option>
                                                        <option value="Europe/Istanbul">Istanbul</option>
                                                        <option value="Europe/Jersey">Jersey</option>
                                                        <option value="Europe/Kaliningrad">Kaliningrad</option>
                                                        <option value="Europe/Kiev">Kiev</option>
                                                        <option value="Europe/Lisbon">Lisbon</option>
                                                        <option value="Europe/Ljubljana">Ljubljana</option>
                                                        <option value="Europe/London">London</option>
                                                        <option value="Europe/Luxembourg">Luxembourg</option>
                                                        <option value="Europe/Madrid">Madrid</option>
                                                        <option value="Europe/Malta">Malta</option>
                                                        <option value="Europe/Mariehamn">Mariehamn</option>
                                                        <option value="Europe/Minsk">Minsk</option>
                                                        <option value="Europe/Monaco">Monaco</option>
                                                        <option value="Europe/Moscow">Moscow</option>
                                                        <option value="Europe/Oslo">Oslo</option>
                                                        <option value="Europe/Paris">Paris</option>
                                                        <option value="Europe/Podgorica">Podgorica</option>
                                                        <option value="Europe/Prague">Prague</option>
                                                        <option value="Europe/Riga">Riga</option>
                                                        <option value="Europe/Rome">Rome</option>
                                                        <option value="Europe/Samara">Samara</option>
                                                        <option value="Europe/San_Marino">San Marino</option>
                                                        <option value="Europe/Sarajevo">Sarajevo</option>
                                                        <option value="Europe/Simferopol">Simferopol</option>
                                                        <option value="Europe/Skopje">Skopje</option>
                                                        <option value="Europe/Sofia">Sofia</option>
                                                        <option value="Europe/Stockholm">Stockholm</option>
                                                        <option value="Europe/Tallinn">Tallinn</option>
                                                        <option value="Europe/Tirane">Tirane</option>
                                                        <option value="Europe/Uzhgorod">Uzhgorod</option>
                                                        <option value="Europe/Vaduz">Vaduz</option>
                                                        <option value="Europe/Vatican">Vatican</option>
                                                        <option value="Europe/Vienna">Vienna</option>
                                                        <option value="Europe/Vilnius">Vilnius</option>
                                                        <option value="Europe/Volgograd">Volgograd</option>
                                                        <option value="Europe/Warsaw">Warsaw</option>
                                                        <option value="Europe/Zagreb">Zagreb</option>
                                                        <option value="Europe/Zaporozhye">Zaporozhye</option>
                                                        <option value="Europe/Zurich">Zurich</option>
                                                    </optgroup>
                                                    <optgroup label="Indian">
                                                        <option value="Indian/Antananarivo">Antananarivo</option>
                                                        <option value="Indian/Chagos">Chagos</option>
                                                        <option value="Indian/Christmas">Christmas</option>
                                                        <option value="Indian/Cocos">Cocos</option>
                                                        <option value="Indian/Comoro">Comoro</option>
                                                        <option value="Indian/Kerguelen">Kerguelen</option>
                                                        <option value="Indian/Mahe">Mahe</option>
                                                        <option value="Indian/Maldives">Maldives</option>
                                                        <option value="Indian/Mauritius">Mauritius</option>
                                                        <option value="Indian/Mayotte">Mayotte</option>
                                                        <option value="Indian/Reunion">Reunion</option>
                                                    </optgroup>
                                                    <optgroup label="Pacific">
                                                        <option value="Pacific/Apia">Apia</option>
                                                        <option value="Pacific/Auckland">Auckland</option>
                                                        <option value="Pacific/Chatham">Chatham</option>
                                                        <option value="Pacific/Chuuk">Chuuk</option>
                                                        <option value="Pacific/Easter">Easter</option>
                                                        <option value="Pacific/Efate">Efate</option>
                                                        <option value="Pacific/Enderbury">Enderbury</option>
                                                        <option value="Pacific/Fakaofo">Fakaofo</option>
                                                        <option value="Pacific/Fiji">Fiji</option>
                                                        <option value="Pacific/Funafuti">Funafuti</option>
                                                        <option value="Pacific/Galapagos">Galapagos</option>
                                                        <option value="Pacific/Gambier">Gambier</option>
                                                        <option value="Pacific/Guadalcanal">Guadalcanal</option>
                                                        <option value="Pacific/Guam">Guam</option>
                                                        <option value="Pacific/Honolulu">Honolulu</option>
                                                        <option value="Pacific/Johnston">Johnston</option>
                                                        <option value="Pacific/Kiritimati">Kiritimati</option>
                                                        <option value="Pacific/Kosrae">Kosrae</option>
                                                        <option value="Pacific/Kwajalein">Kwajalein</option>
                                                        <option value="Pacific/Majuro">Majuro</option>
                                                        <option value="Pacific/Marquesas">Marquesas</option>
                                                        <option value="Pacific/Midway">Midway</option>
                                                        <option value="Pacific/Nauru">Nauru</option>
                                                        <option value="Pacific/Niue">Niue</option>
                                                        <option value="Pacific/Norfolk">Norfolk</option>
                                                        <option value="Pacific/Noumea">Noumea</option>
                                                        <option value="Pacific/Pago_Pago">Pago Pago</option>
                                                        <option value="Pacific/Palau">Palau</option>
                                                        <option value="Pacific/Pitcairn">Pitcairn</option>
                                                        <option value="Pacific/Pohnpei">Pohnpei</option>
                                                        <option value="Pacific/Port_Moresby">Port Moresby</option>
                                                        <option value="Pacific/Rarotonga">Rarotonga</option>
                                                        <option value="Pacific/Saipan">Saipan</option>
                                                        <option value="Pacific/Tahiti">Tahiti</option>
                                                        <option value="Pacific/Tarawa">Tarawa</option>
                                                        <option value="Pacific/Tongatapu">Tongatapu</option>
                                                        <option value="Pacific/Wake">Wake</option>
                                                        <option value="Pacific/Wallis">Wallis</option>
                                                    </optgroup>
                                                    <optgroup label="UTC">
                                                        <option value="UTC">UTC</option>
                                                    </optgroup>
                                                    <optgroup label="Manual Offsets">
                                                        <option value="UTC-12">UTC-12</option>
                                                        <option value="UTC-11.5">UTC-11:30</option>
                                                        <option value="UTC-11">UTC-11</option>
                                                        <option value="UTC-10.5">UTC-10:30</option>
                                                        <option value="UTC-10">UTC-10</option>
                                                        <option value="UTC-9.5">UTC-9:30</option>
                                                        <option value="UTC-9">UTC-9</option>
                                                        <option value="UTC-8.5">UTC-8:30</option>
                                                        <option value="UTC-8">UTC-8</option>
                                                        <option value="UTC-7.5">UTC-7:30</option>
                                                        <option value="UTC-7">UTC-7</option>
                                                        <option value="UTC-6.5">UTC-6:30</option>
                                                        <option value="UTC-6">UTC-6</option>
                                                        <option value="UTC-5.5">UTC-5:30</option>
                                                        <option selected="selected" value="UTC-5">UTC-5</option>
                                                        <option value="UTC-4.5">UTC-4:30</option>
                                                        <option value="UTC-4">UTC-4</option>
                                                        <option value="UTC-3.5">UTC-3:30</option>
                                                        <option value="UTC-3">UTC-3</option>
                                                        <option value="UTC-2.5">UTC-2:30</option>
                                                        <option value="UTC-2">UTC-2</option>
                                                        <option value="UTC-1.5">UTC-1:30</option>
                                                        <option value="UTC-1">UTC-1</option>
                                                        <option value="UTC-0.5">UTC-0:30</option>
                                                        <option value="UTC+0">UTC+0</option>
                                                        <option value="UTC+0.5">UTC+0:30</option>
                                                        <option value="UTC+1">UTC+1</option>
                                                        <option value="UTC+1.5">UTC+1:30</option>
                                                        <option value="UTC+2">UTC+2</option>
                                                        <option value="UTC+2.5">UTC+2:30</option>
                                                        <option value="UTC+3">UTC+3</option>
                                                        <option value="UTC+3.5">UTC+3:30</option>
                                                        <option value="UTC+4">UTC+4</option>
                                                        <option value="UTC+4.5">UTC+4:30</option>
                                                        <option value="UTC+5">UTC+5</option>
                                                        <option value="UTC+5.5">UTC+5:30</option>
                                                        <option value="UTC+5.75">UTC+5:45</option>
                                                        <option value="UTC+6">UTC+6</option>
                                                        <option value="UTC+6.5">UTC+6:30</option>
                                                        <option value="UTC+7">UTC+7</option>
                                                        <option value="UTC+7.5">UTC+7:30</option>
                                                        <option value="UTC+8">UTC+8</option>
                                                        <option value="UTC+8.5">UTC+8:30</option>
                                                        <option value="UTC+8.75">UTC+8:45</option>
                                                        <option value="UTC+9">UTC+9</option>
                                                        <option value="UTC+9.5">UTC+9:30</option>
                                                        <option value="UTC+10">UTC+10</option>
                                                        <option value="UTC+10.5">UTC+10:30</option>
                                                        <option value="UTC+11">UTC+11</option>
                                                        <option value="UTC+11.5">UTC+11:30</option>
                                                        <option value="UTC+12">UTC+12</option>
                                                        <option value="UTC+12.75">UTC+12:45</option>
                                                        <option value="UTC+13">UTC+13</option>
                                                        <option value="UTC+13.75">UTC+13:45</option>
                                                        <option value="UTC+14">UTC+14</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Date Format</label>
                                                <div class="fancy-radio">
                                                    <label><input name="dateFormat" value="" type="radio"><span><i></i>May 18, 2018</span></label>&nbsp;&nbsp;
                                                    <label><input name="dateFormat" value="" type="radio"><span><i></i>2018, May, 18</span></label>&nbsp;&nbsp;
                                                    <label><input name="dateFormat" value="" type="radio" checked><span><i></i>2018-03-10</span></label>&nbsp;&nbsp;
                                                    <label><input name="dateFormat" value="" type="radio"><span><i></i>02/09/2018</span></label>&nbsp;&nbsp;
                                                    <label><input name="dateFormat" value="" type="radio"><span><i></i>10/05/2018</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <h6>Email from HexaBit</h6>
                                            <p>I'd like to receive the following emails:</p>
                                            <ul class="list-unstyled list-email-received">
                                                <li>
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox" checked><span>Weekly account summary</span></label>
                                                </li>
                                                <li>
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox"><span>Campaign reports</span></label>
                                                </li>
                                                <li>
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox" checked><span>Promotional news such as offers or discounts</span></label>
                                                </li>
                                                <li>
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox" checked><span>Tips for campaign setup, growth and client success stories</span></label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary">Update</button> &nbsp;&nbsp;
                                    <button type="button" class="btn btn-default">Cancel</button>
                                </div>
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

<script src="assets/bundles/knob.bundle.js"></script><!-- Jquery Knob-->
<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="../assets/vendor/summernote/dist/summernote.js"></script>

<script>
    $(function () {
        $('.knob').knob({
            draw: function () {           
            }
        });
    });    
</script>
</body>
</html>