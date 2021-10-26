<!doctype html>
<html lang="en">

<head>
<title>MetShop Pets -Selamat Datang di MetShop Pet's</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="icon" href="logo.png" type="image/logo">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/vendor/sweetalert/sweetalert.css"/>

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/inbox.css">
<link rel="stylesheet" href="assets/css/color_skins.css">
</head>
<body class="theme-orange">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="../assets/images/kucing1.gif" width="150" height="125" alt="Neko"></div>
        <p>Sedang Memuat...</p>        
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
                    <input value="" class="form-control" placeholder="Cari Disini..." type="text">
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
                                                <span class="name">Doni S. <small class="float-right">23 Juni</small></span>
                                                <span class="message">pesanan anda sudah saya terima!</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar1.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Cs Whiskas <small class="float-right">25 Juni</small></span>
                                                <span class="message">Mohon Maaf Bapak Kami dari pihak Whiskas ingin memberikan sponsorship..</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Sonia Vita Sari <small class="float-right">27 Juni</small></span>
                                                <span class="message">Ada Banya Pembelihan hewan yang sudah dibayar di Acc oleh Bapak/Ibu...</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media mb-0">
                                            <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Cs Bolt M.A. <small class="float-right">30 Juni</small></span>
                                                <span class="message">KamI Menawarkan Produk Kami kepada Toko MetShopPet's yaitu Bolt</span>
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
                                            <h4 class="title text-success">7 masukkan Baru <small class="float-right text-muted">Today</small></h4>
                                            <small>Untuk Website nya sangat Bagus</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="feeds-left"><i class="fa fa-user"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title">Pengguna Baru<small class="float-right text-muted">10:45</small></h4>
                                            <small>Team Sportive dan inovatif</small>
                                        </div>
                                    </a>
                                </li>
                         <li>
                                    <a href="javascript:void(0);">
                                        <div class="feeds-left"><i class="fa fa-question-circle text-warning"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title text-warning">Peringatan Server <small class="float-right text-muted">10:50</small></h4>
                                            <small>Database Tidak Sesuai</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="feeds-left"><i class="fa fa-check text-danger"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title text-danger">Isu Terselesaikan <small class="float-right text-muted">11:05</small></h4>
                                            <small>Kami Telah Memperbaiki Bug Di Bagian Shop</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="feeds-left"><i class="fa fa-shopping-basket"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title">7 Pesanan baru <small class="float-right text-muted">11:35</small></h4>
                                            <small>Kamu Menerima Order dari Tina.</small>
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
            <a href="index.php"><img src="logo.png" alt="HexaBit Logo" class="img-fluid logo"><span>MetShop Pet's</span></a>
            <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
        </div>
        <div class="sidebar-scroll">
            <div class="user-account">
                <div class="user_div">
                    <img src="../assets/images/admin.jpg" class="user-photo" alt="User Profile Picture">
                </div>
                <div class="dropdown">
                    <span>Selamat Datang,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Mimin</strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account">
                        <li><a href="page-profile.php"><i class="icon-user"></i>Profil Saya</a></li>
                        <li><a href="app-inbox.php"><i class="icon-envelope-open"></i>Pesan</a></li>
                        <li><a href="javascript:void(0);"><i class="icon-settings"></i>Pengaturan</a></li>
                        <li class="divider"></li>
                        <li><a href="page-login.php"><i class="icon-power"></i>Keluar</a></li>
                    </ul>
                </div>
            </div>  
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    <li><a href="index.php"><i class="icon-home"></i><span>Beranda</span></a></li>
                    <li class="active"><a href="app-inbox.php"><i class="icon-envelope"></i><span>Kotak Surat</span></a></li>
                    <li><a href="app-chat.php"><i class="icon-bubbles"></i><span>Pesan</span></a></li>
                    <li>
                        <a href="#Tables" class="has-arrow"><i class="icon-tag"></i><span>Traksaksi</span></a>
                        <ul>
                            <li><a href="table-basic.php">Pembelian</a></li>
                            <li><a href="table-normal.php">Perjodohan</a></li>
                        </ul>
                    </li>
                    </li>
                    <li><a href="app-taskboard.php"><i class="icon-list"></i><span>Papan tugas</span></a></li>                    
                    <li><a href="app-calendar.php"><i class="icon-calendar"></i><span>Kalender</span></a></li>
                    <li><a href="app-contact.php"><i class="icon-book-open"></i><span>Kontak</span></a></li>              
                    <li>
                        <a href="#Authentication" class="has-arrow"><i class="icon-lock"></i><span>Auntentifikasi</span></a>
                        <ul>                                    
                            <li><a href="page-login.php">Masuk</a></li>
                            <li><a href="page-register.php">Daftar</a></li>
                            <li><a href="page-lockscreen.php">Kunci Layar</a></li>
                            <li><a href="page-forgot-password.php">Lupa Kata Sandi</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#Maps" class="has-arrow"><i class="icon-map"></i><span>Peta</span></a>
                        <ul>
                            <li><a href="map-google.php">Peta Google</a></li>                         
                        </ul>                          
                        </ul>
                    </li>
                </ul>
            </nav>     
        </div>
    </div>

    <div id="main-content">        
        <div class="mail-inbox">
            <div class="mobile-left">
                <a href="javascript:void(0);" class="btn btn-primary toggle-email-nav"><i class="fa fa-bars"></i></a>
            </div>
            <div class="mail-left">
                <div class="mail-compose m-b-20">
                    <a href="app-compose.php" class="btn btn-danger btn-block"> + Tulis</a>
                </div>
                <div class="mail-side">
                    <ul class="nav">
                        <li class="active"><a href="javascript:void(0);"><i class="icon-envelope"></i>Kotak Surat<span class="badge badge-primary float-right">6</span></a></li>
                        <li><a href="javascript:void(0);"><i class="icon-cursor"></i>Terkirim</a></li>
                        <li><a href="javascript:void(0);"><i class="icon-envelope-open"></i>Draf<span class="badge badge-info float-right">3</span></a></li>
                        <li><a href="javascript:void(0);"><i class="icon-action-redo"></i>Teruskan</a></li>
                        <li><a href="javascript:void(0);"><i class="icon-star"></i>Berbintang<span class="badge badge-warning float-right">6</span></a></li>
                        <li><a href="javascript:void(0);"><i class="icon-trash"></i>Kotak Sampah<span class="badge badge-danger float-right">9</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="mail-right check-all-parent">
                <div class="header d-flex align-center">
                    <h2>Pesan Masuk</h2>
                    <form class="ml-auto">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari Disini.." aria-label="Search Mail" aria-describedby="search-mail">
                            <div class="input-group-append">
                                <span class="input-group-text" id="search-mail"><i class="icon-magnifier"></i></span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="mail-action clearfix">
                    <div class="pull-left">
                        <div class="fancy-checkbox d-inline-block">
                            <label>
                                <input class="check-all" type="checkbox" name="checkbox">
                                <span></span>
                            </label>
                        </div>
                        <div class="btn-group">
                            <a href="javascript:void(0);" class="btn btn-default btn-sm hidden-sm">Segarkan</a>
                            <a href="javascript:void(0);" class="btn btn-default btn-sm hidden-sm">Arsip</a>
                            <a href="javascript:void(0);" class="btn btn-default btn-sm">Sampah</a>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Selengkapnya</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);">Tandai Sudah Yang Dibaca</a>
                                <a class="dropdown-item" href="javascript:void(0);">Tandai Belum Yang DiBaca</a>
                                <a class="dropdown-item" href="javascript:void(0);">Spam</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0);">Hapus</a>
                            </div>
                        </div>
                    </div>
                    <div class="pull-right ml-auto">
                        <div class="pagination-email d-flex">
                            <p>1-50/295</p>
                            <div class="btn-group m-l-20">
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-angle-left"></i></button>
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mail-list">
                    <ul class="list-unstyled">
                        <li class="clearfix">
                            <div class="mail-detail-left">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                    <span></span>
                                </label>
                                <a href="javascript:void(0);" class="mail-star active"><i class="fa fa-star"></i></a>
                            </div>
                            <div class="mail-detail-right">
                                <h6 class="sub"><a href="app-inbox-detail.php" class="mail-detail-expand">Doni S.</a><span class="badge badge-danger">Pemasok</span></h6></h6>
                                <p class="dep">Barang yang anda Pesan Sudah sampai kegudang Toko MetShopPet's Anda...</p>
                                <span class="time">23 Juni</span>
                            </div>
                            <div class="hover-action">
                                <button class="btn btn-warning btn-sm mr-1" title="Delete" type="button"><i class="fa fa-archive"></i></button>
                                <button class="btn btn-danger btn-sm js-sweetalert" title="Delete" type="button" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="mail-detail-left">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                    <span></span>
                                </label>
                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                            </div>
                            <div class="mail-detail-right">
                                <h6 class="sub"><a href="app-inbox-detail.php" class="mail-detail-expand">CS Whiskas</a><span class="badge badge-default mb-0">Sponsorship</span></h6>
                                <p class="dep">Mohon Maaf Bapak Kami dari pihak Whiskas ingin memberikan sponsorship untuk toko MetShopPet's.</p>
                                <span class="time"><i class="fa fa-paperclip"></i> 25 Juni</span>
                            </div>
                            <div class="hover-action">
                                <button class="btn btn-warning btn-sm mr-1" title="Delete" type="button"><i class="fa fa-archive"></i></button>
                                <button class="btn btn-danger btn-sm js-sweetalert" title="Delete" type="button" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </li>
                        <li class="clearfix unread">
                            <div class="mail-detail-left">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                    <span></span>
                                </label>
                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                            </div>
                            <div class="mail-detail-right">
                                <h6 class="sub"><a href="app-inbox-detail.php" class="mail-detail-expand">Sonia Vita sari</a><span class="badge badge-success">Pekerja Di Bagian Penjualan Hewan</span></h6>
                                <p class="dep">Ada Banya Pembelihan hewan yang sudah dibayar di Acc oleh Bapak/Ibu Admin silahkan di...</p>
                                <span class="time">27 Juni</span>
                            </div>
                            <div class="hover-action">
                                <button class="btn btn-warning btn-sm mr-1" title="Delete" type="button"><i class="fa fa-archive"></i></button>
                                <button class="btn btn-danger btn-sm js-sweetalert" title="Delete" type="button" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="mail-detail-left">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                    <span></span>
                                </label>
                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                            </div>
                            <div class="mail-detail-right">
                                <h6 class="sub"><a href="app-inbox-detail.php" class="mail-detail-expand">CS Bolt M.A.</a><span class="badge badge-default mb-0">Sponsorship</span></h6>
                                <p class="dep">KamI Menawarkan Produk Kami kepada Toko MetShopPet's yaitu Bolt makanan Anjing yang Banyak.... </p>
                                <span class="time">30 Juni</span>
                            </div>
                            <div class="hover-action">
                                <button class="btn btn-warning btn-sm mr-1" title="Delete" type="button"><i class="fa fa-archive"></i></button>
                                <button class="btn btn-danger btn-sm js-sweetalert" title="Delete" type="button" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="mail-detail-left">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                    <span></span>
                                </label>
                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                            </div>
                            <div class="mail-detail-right">
                                <h6 class="sub"><a href="app-inbox-detail.php" class="mail-detail-expand">Frank Camly</a><span class="badge badge-danger">Pemasok</span></h6>
                                <p class="dep"><span class="m-r-10">[WrapTheme]</span>Lorem Ipsum is simply dumm dummy text of the printing and typesetting industry.</p>
                                <span class="time"><i class="fa fa-paperclip"></i> 31 Juni</span>
                            </div>
                            <div class="hover-action">
                                <button class="btn btn-warning btn-sm mr-1" title="Delete" type="button"><i class="fa fa-archive"></i></button>
                                <button class="btn btn-danger btn-sm js-sweetalert" title="Delete" type="button" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="mail-detail-left">
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                    <span></span>
                                </label>
                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star-o"></i></a>
                            </div>
                            <div class="mail-detail-right">
                                <h6 class="sub"><a href="app-inbox-detail.php" class="mail-detail-expand">Rochelle Barton</a><span class="badge badge-success">Pekerja Di Bagian Perjodohan Hewan</span></h6>
                                <p class="dep">Untuk Bapak/Ibu Admin Apakah Hewan yang mau dijodohkan ini Harus dibersihkan/dimandikan terlibih dahulu.</p>
                                <span class="time">14 Juli</span>
                            </div>
                            <div class="hover-action">
                                <button class="btn btn-warning btn-sm mr-1" title="Delete" type="button"><i class="fa fa-archive"></i></button>
                                <button class="btn btn-danger btn-sm js-sweetalert" title="Delete" type="button" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="../assets/vendor/sweetalert/sweetalert.min.js"></script><!-- SweetAlert Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/ui/dialogs.js"></script>
<script>
    $('.toggle-email-nav').on('click', function() {
		$('.mail-left').toggleClass('open');
	});
</script>
</body>
</html>